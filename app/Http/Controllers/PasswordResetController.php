<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Notifications\PasswordResetRequest;
use App\PasswordReset;
use App\User;

class PasswordResetController extends Controller
{
    public function forgot(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
        ]);

         if($validator->fails()){
            return response()->json($validator->messages(), 200);
        }

        $user = User::where('email', $request->email)->first();


        if(!$user) {
        	return response()->json([
        		'message' => 'The email provided does not correspond to any existing account.'
        	]);
        }

        $passwordReset = PasswordReset::updateOrCreate(
            ['email' => $user->email],
            [
                'email' => $user->email,
                'token' => str_random(60)
             ]
        );

        if ($user && $passwordReset){
            $user->notify(
                new PasswordResetRequest($passwordReset->token)
            );
        return response()->json([
            'message' => 'We have e-mailed your password reset link!'
        ]);
	    }



 
    }


}
