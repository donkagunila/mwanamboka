<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Events\Registration;
use App\Notifications\SignupActivate;
use Illuminate\Support\Str;


class AuthController extends Controller
{

    // Register the user by api
    public function register(Request $request)
    {
        // validate user data
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'alphanum', 'unique:users'],
            'email'    => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6']
        ]);

        if($validator->fails()){
            return response()->json($validator->messages(), 200);
        }

        // create user
        $user = User::create([
             'username' => $request->username,
             'email'    => $request->email,
             'password' => $request->password,
             'activation_token' => str::random(60),
         ]);


        // $token = auth()->login($user);

        // Send Email to user.
        // Mail::to($user->email)->queue(new WelcomeEmail($user));
        // event(new Registration($user));

        $user->notify(new SignupActivate($user));

        // return $this->respondWithToken($token);
        return response()->json(['message' => 'Successfully Registered, email sent']);
    }


    // login user by api
    public function login(Request $request)
    {
        // validate user data
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6']
        ]);

        if($validator->fails()){
            return response()->json($validator->messages(), 200);
        }

        $credentials = request(['email', 'password']);
        $credentials['active'] = 1;
        $credentials['deleted_at'] = null;

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }


    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }




    public function confirmAccount($token)
    {
         $user = User::where('activation_token', $token)->first();

        if (!$user) {
            return response()->json([
                    'message' => 'This activation token is invalid.'
                ], 404);
        }

        $user->active = true;
        $user->activation_token = '';
        $user->save();

        return view('auth.confirmed');
    }

    public function forgot(Request $request)
    {
         // validate user data
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
        ]);

         if($validator->fails()){
            return response()->json($validator->messages(), 200);
        }

    }



    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'bearer',
        ]);
    }
}