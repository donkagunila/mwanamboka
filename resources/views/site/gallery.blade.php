@extends('layouts.app')

@section('title', 'Gallery | MHL')

@section('content')


    <!-- WELCOME
    ================================================== -->
    <section class="py-8 py-md-14 border-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            
            <!-- Headin -->
            <h1 class="display-2 mt-5">
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