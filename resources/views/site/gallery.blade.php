@extends('layouts.app')

@section('title', 'Gallery | MHL')

@section('content')


    <!-- WELCOME
    ================================================== -->
    <section class="py-8 py-md-11 border-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Headin -->
            <h1 class="display-2">
              Our Gallery
            </h1>

            <!-- Text -->
            <p class="lead text-muted mb-7 mb-md-9">
              Our focus is always on finding the best people to work with. Our bar is high, but you look ready to take on the challenge.
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">
            
            <!-- Image -->
            <div class="form-row">
              <div class="col-4">
                
                <img src="assets/img/photos/photo-10.jpg" class="img-fluid rounded shadow-lg" alt="...">

              </div>
              <div class="col-3">

                <img src="assets/img/covers/cover-2.jpg" class="img-fluid rounded shadow-lg mb-4" alt="...">

                <img src="assets/img/photos/photo-10.jpg" class="img-fluid rounded shadow-lg mt-1" alt="...">

              </div>
              <div class="col-5">

                <div class="form-row mb-4">
                  <div class="col-5">
                    
                    <img src="assets/img/photos/photo-11.jpg" class="img-fluid rounded shadow-lg" alt="...">

                  </div>
                  <div class="col-7">
                    
                    <img src="assets/img/photos/photo-12.jpg" class="img-fluid rounded shadow-lg" alt="...">

                  </div>
                </div> <!-- / .row -->

                <img src="assets/img/photos/photo-9.jpg" class="img-fluid rounded shadow-lg mt-1" alt="...">

              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

 


@endsection