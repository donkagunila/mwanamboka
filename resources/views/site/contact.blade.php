@extends('layouts.app')

@section('title', 'Contact Us | MHL')

@section('content')

    <!-- WELCOME
    ================================================== -->
    <section class="py-10 py-md-14 overlay overlay-black overlay-60 bg-cover" style="background-image: url(assets/img/covers/cover-5.jpg);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Heading -->
            <h1 class="display-2 font-weight-bold text-white">
              We’re Here to Help.
            </h1>

            <!-- Text -->
            <p class="lead text-white-75 mb-0">
             We always want to hear from you! Let us know anything you have, be it an opinion, question or idea, we will get back to you.
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SHAPE
    ================================================== -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x svg-shim text-light">
        <svg viewBox="0 0 1440 24" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0 24H1440V0C722.5 52 0 0 0 0V24Z" fill="currentColor"/>
        </svg>

      </div>
    </div>

    <!-- INFO
    ================================================== -->
    <section class="py-7 py-md-9 border-bottom border-gray-300" id="info">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            
            <!-- Button -->
            <a href="#info" class="btn btn-white btn-rounded-circle shadow mt-n11 mt-md-n13" data-smooth-scroll>
              <i class="fe fe-arrow-down"></i>
            </a>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12 col-md-4 text-center border-right border-gray-300">
            
            <!-- Heading -->
            <h6 class="text-uppercase text-gray-700 mb-1">
              Find us
            </h6>

            <!-- Link -->
            <div class="mb-5 mb-md-0">
              <a href="#!" class="h4 text-primary">
                Shekilango RD
              </a>
            </div>

          </div>
          <div class="col-12 col-md-4 text-center border-right border-gray-300">
            
            <!-- Heading -->
            <h6 class="text-uppercase text-gray-700 mb-1">
              Call anytime
            </h6>

            <!-- Link -->
            <div class="mb-5 mb-md-0">
              <a href="tel:+24422270026" class="h4">
                +(255) 22 270026
              </a>
            </div>

          </div>
          <div class="col-12 col-md-4 text-center">
            
            <!-- Heading -->
            <h6 class="text-uppercase text-gray-700 mb-1">
              Email us
            </h6>

            <!-- Link -->
            <a href="mailto:info@mwanamboka.com" class="h4">
              info@mwanamboka.com
            </a>

          </div>
        </div> <!-- / .row -->
      </div>
    </section>

    <section class="pt-8 pt-md-11 pb-8 pb-md-14">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Heading -->
            <h2 class="font-weight-bold">
              Let us hear from you directly!
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-7 mb-md-9">
              We always want to hear from you! Let us know anything you have, be it an opinion, question or idea, we will get back to you.
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row justify-content-center">
          <div class="col-12 col-md-12 col-lg-10">
            
            <!-- Form -->
            <form>
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="form-group mb-5">
                    
                    <!-- Label -->
                    <label for="contactName">
                      Full name
                    </label>

                    <!-- Input -->
                    <input type="text" class="form-control" id="contactName" placeholder="Full name">

                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group mb-5">
                    
                    <!-- Label -->
                    <label for="contactEmail">
                      Email
                    </label>

                    <!-- Input -->
                    <input type="email" class="form-control" id="contactEmail" placeholder="hello@domain.com">

                  </div>
                </div>
              </div> <!-- / .row -->
              <div class="row">
                <div class="col-12">
                  <div class="form-group mb-7 mb-md-9">
                    
                    <!-- Label -->
                    <label for="contactMessage">
                      What can we help you with?
                    </label>

                    <!-- Input -->
                    <textarea class="form-control" id="contactMessage" rows="5" placeholder="Tell us what we can help you with!"></textarea>

                  </div>
                </div>
              </div> <!-- / .row -->
              <div class="row justify-content-center">
                <div class="col-auto">
                  
                  <!-- Submit -->
                  <button type="submit" class="btn btn-primary lift">
                    Send message
                  </button>

                </div>
              </div> <!-- / .row -->
            </form>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>




<div class="position-relative">
  <div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
    <svg viewBox="0 0 1440 24" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
    <path d="M0 24H1440V0C722.5 52 0 0 0 0V24Z" fill="currentColor"/>
    </svg>

  </div>
</div>

@endsection