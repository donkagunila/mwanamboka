 <nav class="navbar navbar-expand-lg navbar-light navbar-primary fixed-top bg-primary">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="{{ route('index')}}">
          <img src="{{ asset('assets/img/logo/logo.png')}}" class="navbar-brand-img" alt="...">
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fe fe-x"></i>
          </button>

          <!-- Navigation -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle {{ Request::is('/') ? 'active' : ''}}" href="{{ route('index')}}">
                Home
              </a>
            </li>

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle {{ Request::is('about-us*') ? 'active' : ''}}" href="{{ route('about')}}">
                About Us
              </a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle {{ Request::is('services*') ? 'active' : ''}}" href="#" id="navbarDocumentation" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Our Services
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDocumentation">

                <!-- Item -->
                <a class="d-flex align-items-center text-decoration-none" href="{{ route('service')}}">
                
                  
                  <!-- Content -->
                  <div class="ml-4">

                    <!-- Heading -->
                    <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                      International Freight
                    </h6>

                    <!-- Text -->
                    <p class="font-size-sm text-gray-700 mb-0">
                      Transport outside Tanzania
                    </p>

                  </div>

                </a> <!-- / .row -->

                <!-- Divider -->
                <hr>
            
                <!-- Item -->
                <a class="d-flex align-items-center text-decoration-none" href="{{ route('service')}}">
                
                 
              
                  <!-- Content -->
                  <div class="ml-4">
                
                    <!-- Heading -->
                    <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                      Ware housing
                    </h6>

                    <!-- Text -->
                    <p class="font-size-sm text-gray-700 mb-0">
                      Store safe
                    </p>

                  </div>

                </a> <!-- / .row -->

                <!-- Divider -->
                <hr>
            
                <!-- Item -->
                <a class="d-flex align-items-center text-decoration-none" href="{{ route('service')}}">
                
                 
              
                  <!-- Content -->
                  <div class="ml-4">
                
                    <!-- Heading -->
                    <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                      Transport and Haulige
                    </h6>

                    <!-- Text -->
                    <p class="font-size-sm text-gray-700 mb-0">
                      Move with ease
                    </p>

                  </div>
                
                

                </a> <!-- / .row -->

              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle {{ Request::is('gallery*') ? 'active' : ''}}" href="{{ route('gallery')}}">
                Gallery
              </a>
            </li>

            <li>
              <a href="">
                Request A quote
              </a>
            </li>


            
          </ul>


        </div>
  
      </div>
    </nav>
