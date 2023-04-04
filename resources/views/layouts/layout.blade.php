
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova:ital@1&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar fixed-top align-items-center py-2 ">
        <section class="container ">
          <img  width="120"  src="{{ asset('logo.png') }}" alt="Logo" />

            <ul class="list-unstyled d-flex justify-content-evenly align-items-center w-50 mb-0">
              <li>
                <a   href ="{{ url('/') }}">HOME</a>
              </li>
              <li>
                <a  href="{{ url('products/display') }}"> SHOP </a>
              </li>

              <li>
                <a  href="{{ url('about') }}">ABOUT</a>
              </li>

              <li>
                <a  href="{{ url('contact') }}">CONTACT</a>
              </li>
            </ul>


          <form class="form-inline d-flex justify-content-evenly md-form form-sm mt-0 align-items-center">
          <i class="fas fa-search  " aria-hidden="true"></i>
          <input class="form-control form-control-sm ml-5 w-75" type="text" placeholder="Search"
            aria-label="Search"/>
          </form>

          <div class="icons d-flex justify-content-evenly align-items-center   mb-0" >
                    <div class="profileIcon text-center  ">
                       <a  href="{{ url('login') }}"> <i class="fa-solid fa-user"></i></a>


                    </div>
                    {{--  <div class="saveIcon text-center  ">

                        <a  href="contact"> <i class="fa-sharp fa-solid fa-bookmark"></i></a>
                    </div>  --}}
                    <div class="bagIcon text-center  ">
                        <a  href="{{ url('display/cart') }}"><i class="fa-solid fa-cart-shopping"></i>
                        </a>

                    </div>

                </div>

               @if(!Auth::user())
                <ul class="list-unstyled d-flex justify-content-between  mb-0">
                  <li>
                    <a  href="{{ url('login') }}"></a>
                  </li>
                  {{--  <li>
                    <a  href="register">Register</a>
                  </li>  --}}
                  </ul>

                @else
                <ul class="list-unstyled d-flex justify-content-between  mb-0">
                    {{--  <a  href="contact"> <i class="fa-solid fa-user"></i></a>  --}}
              <div class=" d-flex justify-content-between">
                    {{--  <li class="nav-item">
                        <a class="nav-link active" href="">Welcome <span class="text-danger"> {{ Auth::user()->name }}</span></a>
                    </li>  --}}
                    <li>
                    <a  href="logout"> Logout <i class="fas fa-sign-out-alt"></i></a>
                    </li>
                </div>
                </ul>
                @endif
        </section>
      </nav>






      @yield('content')






      <!-- Footer -->

        <footer class="text-center text-lg-start  text-muted">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
              <!-- Left -->
              <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
              </div>
              <!-- Left -->

              <!-- Right -->
              <div>
                <a href="" class="me-4 text-reset">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                  <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                  <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                  <i class="fab fa-github"></i>
                </a>
              </div>
              <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
              <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    {{--  <h6 class="text-uppercase fw-bold mb-4">
                      <i class="fas fa-gem me-3"></i>Company name
                    </h6>  --}}
                    <img  width="150"  src="{{ asset('logo.png') }}" alt="Logo" />

                    <p>
                        We, Mirror, understand the ever-changing mind of a woman and thus aim at providing a satisfactory and fully clothed closet that suits the unique styles of each woman.
                    </p>
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                      Products
                    </h6>
                    <p>
                      <a href="#!" class="text-reset">Tops</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">Dresses</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">Jeans</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">Skirts</a>
                    </p>
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                      Useful links
                    </h6>
                    <p>
                      <a href="#!" class="text-reset">Pricing</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">Settings</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">Orders</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">Help</a>
                    </p>
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p><i class="fas fa-home me-3"></i> Cairo, Egypt</p>
                    <p>
                      <i class="fas fa-envelope me-3"></i>
                      info@mirror.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 20 115 672 5875</p>
                    <p><i class="fas fa-print me-3"></i> + 20 115 672 5875</p>
                  </div>
                  <!-- Grid column -->
                </div>
                <!-- Grid row -->
              </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
              © 2023 Copyright:
              <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Mirror.com</a>
            </div>
            <!-- Copyright -->
          </footer>

      <!-- Footer -->
      <script src="{{ asset('js/main.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
