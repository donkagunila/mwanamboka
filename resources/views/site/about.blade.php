@extends('layouts.app')

@section('title', 'About Us | MHL')

@section('styles')
   <script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />
@endsection

@section('content')

  <!-- WELCOME
    ================================================== -->
    <section class="py-8 py-md-13 border-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Headin -->
            <h1 class="display-2">
              About Us
            </h1>

            <!-- Text -->
            <p class="lead text-muted mb-7 mb-md-9">
              Get to know us, who we are ..
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">
            
           <p class="text-muted mb-2 mb-md-4">
             Mwanamboka hauliers Ltd is a transport and haulage company based out of Dar es Salaam, Tanzania. ​ With over 30 years of continuous consistency and presence in the East African region, Mwanamboka Hauliers Ltd has maintained its competitive edge through the reputation of its principal owner and founder Mr Salum Saad Ally, a 36 year industry entrepreneur.
           </p>

           <p class="text-muted mb-7 mb-md-9">
             First established in 1982, Mwanamboka Hauliers Ltd has grown to become a family business with a team of highly dedicated professionals overseeing a fleet of highly maintained trucks, reliable drivers, efficient operations and timely deliveries. With our head offices in Dar es Salaam, as well as representative offices in Rwanda and Democratic Republic of Congo (DRC), it ensures that we are easily accessible across the region. In conjunction with transportation of cargo to mainly land-locked countries, Mwanamboka Hauliers Ltd also handles the clearing of goods at the port of Dar es Salaam.
           </p>

           <p>
             
           </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>




     <!-- WELCOME
    ================================================== -->
    <section class="py-8 py-md-11 border-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Headin -->
            <h1 class="display-2">
              Our Team, the transits
            </h1>

            <!-- Text -->
            <p class="lead text-muted mb-7 mb-md-9">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores natus aliquid maxime soluta corporis pariatur provident,
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">
            
            <!-- Image -->
            <div class="form-row">
              <div class="col-4">
                
                <img src="assets/img/avatars/vennny.jpg" class="img-fluid rounded shadow-lg" alt="...">

              </div>
              <div class="col-3">

                <img src="assets/img/avatars/venny.jpg" class="img-fluid rounded shadow-lg mb-4" alt="...">

                <img src="assets/img/avatars/ven.jpeg" class="img-fluid rounded shadow-lg mt-1" alt="...">

              </div>
              <div class="col-5">

                <div class="form-row mb-4">
                  <div class="col-5">
                    
                    <img src="assets/img/avatars/vennny.jpg" class="img-fluid rounded shadow-lg" alt="...">

                  </div>
                  <div class="col-7">
                    
                    <img src="assets/img/avatars/ven.jpeg" class="img-fluid rounded shadow-lg" alt="...">

                  </div>
                </div> <!-- / .row -->

                <img src="assets/img/avatars/vennny.jpg" class="img-fluid rounded shadow-lg mt-1" alt="...">

              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- LOCATION
    ================================================== -->
    <section class="pt-8 pt-md-0 border-bottom bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">

            <!-- Map (mobile) -->
            <div class="embed-responsive embed-responsive-1by1 d-md-none">
              <div class="embed-responsive-item" data-toggle="map" data-center='[-118.244615, 34.052979]' data-zoom="12"></div>
            </div>
            
            <!-- Map -->
            <div class="position-relative h-100 vw-50 float-right d-none d-md-block">

              <!-- Map -->
              <div class="h-100 w-100" id="map" data-toggle="map" data-center='[-118.244615, 34.052979]' data-zoom="12"></div>
              
              <!-- Shape -->
              <div class="shape shape-right shape-fluid-y svg-shim text-light">
                <svg viewBox="0 0 50 772" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path d="M0 0H50V772L0 0Z" fill="currentColor"/>
                </svg>

              </div>

            </div>

          </div>
          <div class="col-12 col-md-6 col-lg-5 offset-lg-1 py-8 py-md-11 py-lg-12">
            
            <!-- Heading -->
            <h2>
              Located in Dar Es Salaam.<br>
              <span class="text-primary">Enjoy <span data-toggle="typed" data-strings='["Fast services", "Reliable Transit", "Storage warehouse"]'></span>.</span>
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-gray-700 mb-6">
              We picked our office location to maximize our team's accessibility to sites! we get to where ever you are in no time
            </p>

            <!-- Stats -->
            <div class="d-flex">
              <div class="pr-5">
                <h3 class="text-primary mb-0">
                  <span data-toggle="countup" data-from="0" data-to="100" data-aos data-aos-id="countup:in">0</span>%
                </h3>
                <p class="text-gray-700 mb-0">
                  Weekdays
                </p>
              </div>
              <div class="border-left border-gray-300"></div>
              <div class="px-5">
                <h3 class="text-primary mb-0">
                  <span data-toggle="countup" data-from="0" data-to="85" data-aos data-aos-id="countup:in">0</span>%
                </h3>
                <p class="text-gray-700 mb-0">
                  Weekends
                </p>
              </div>
              
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>


@endsection

@section('scripts')

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/flickity/dist/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/libs/flickity-fade/flickity-fade.js') }}"></script>
    <script src="{{ asset('assets/libs/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('assets/libs/smooth-scroll/dist/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jarallax/dist/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jarallax/dist/jarallax-video.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jarallax/dist/jarallax-element.min.js') }}"></script>
    <script src="{{ asset('assets/libs/typed.js/lib/typed.min.js') }}"></script>
    <script src="{{ asset('assets/libs/countup.js/dist/countUp.min.js') }}"></script>
    <script src="{{ asset('assets/libs/highlightjs/highlight.pack.min.js') }}"></script>
    <script src="{{ asset('assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.js') }}"></script>

    <!-- Map -->
    {{-- <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script> --}}

    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>

    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiZG9ua2FndW5pbGEiLCJhIjoiY2sycGl0czBhMDRlMTNpcWI4em45cThhZyJ9.97Vlu03zI5vG-1YgQ_0SdQ';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/light-v10',
            center: [39.2083,-6.7695712],
            zoom: 9,
            pitch: 45,
            bearing: -17.6,
            antialias: true
        });

        // map.addControl(new mapboxgl.NavigationControl());
    </script>
  

@endsection