<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Logis Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('front')}}/assets/img/favicon.png" rel="icon">
  <link href="{{asset('front')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('front')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('front')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('front')}}/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="{{asset('front')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('front')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{asset('front')}}/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('front')}}/assets/css/main.css" rel="stylesheet">

  <style>
    ::-webkit-scrollbar {
      width: 5px;
      height: 5px;
      border-radius: 50px !important
    }

    ::-webkit-scrollbar-track {
      background: #ffffff
    }

    ::-webkit-scrollbar-thumb {
      background: #0e1d34
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #555
    }
    body {
            font-family: 'open sans';
            overflow-x: hidden;
        }

        img {
            max-width: 100%;
        }

        .preview {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        @media screen and (max-width: 996px) {
            .preview {
                margin-bottom: 20px;
            }
        }

        .preview-pic {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .preview-thumbnail.nav-tabs {
            border: none;
            margin-top: 15px;
        }

        .preview-thumbnail.nav-tabs li {
            width: 18%;
            margin-right: 2.5%;
        }

        .preview-thumbnail.nav-tabs li img {
            max-width: 100%;
            display: block;
        }

        .preview-thumbnail.nav-tabs li a {
            padding: 0;
            margin: 0;
        }

        .preview-thumbnail.nav-tabs li:last-of-type {
            margin-right: 0;
        }

        .tab-content {
            overflow: hidden;
        }

        .tab-content img {
            width: 100%;
            -webkit-animation-name: opacity;
            animation-name: opacity;
            -webkit-animation-duration: .3s;
            animation-duration: .3s;
        }

        .card {
            margin-top: 50px;
            background: #eee;
            padding: 3em;
            line-height: 1.5em;
        }

        @media screen and (min-width: 997px) {
            .wrapper {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
        }

        .details {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .colors {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .product-title,
        .price,
        .sizes,
        .colors {
            text-transform: UPPERCASE;
            font-weight: bold;
        }

        .checked,
        .price span {
            color: #ff9f1a;
        }

        .product-title,
        .rating,
        .product-description,
        .price,
        .vote,
        .sizes {
            margin-bottom: 15px;
        }

        .product-title {
            margin-top: 0;
        }

        .size {
            margin-right: 10px;
        }

        .size:first-of-type {
            margin-left: 40px;
        }

        .color {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            height: 2em;
            width: 2em;
            border-radius: 2px;
        }

        .color:first-of-type {
            margin-left: 20px;
        }

        .add-to-cart,
        .like {
            background: #ff9f1a;
            padding: 1.2em 1.5em;
            border: none;
            text-transform: UPPERCASE;
            font-weight: bold;
            color: #fff;
            -webkit-transition: background .3s ease;
            transition: background .3s ease;
        }

        

        

        .orange {
            background: #ff9f1a;
        }

        .green {
            background: #85ad00;
        }

        .blue {
            background: #0076ad;
        }
  </style>

  <!-- =======================================================
  * Template Name: Logis - v1.2.1
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{asset('front')}}/assets/img/logo.png" alt=""> -->
        <h1>Logis</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{url('/')}}" class="active">Home</a></li>
          <li><a href="{{url('about')}}">About</a></li>
          <!-- <li><a href="{{url('services')}}">Services</a></li> -->
          <li><a href="{{url('products')}}">Products</a></li>
          @php
           $categories = App\Models\Category::all();
          @endphp
          <li class="dropdown"><a href="#"><span>Categories</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
            @foreach($categories as $category)
              <li><a name="category" method ="get" href="{{url('category',$category->name)}}">{{$category->name}}</a></li>
              @endforeach
            </ul>
          </li>
          
          

          <!-- <li><a class="get-a-quote" href="get-a-quote.html">Log in</a></li> -->
          <!-- <li><a class="get-a-quote" href="get-a-quote.html">Register</a></li> -->
          @if(Route::has('login'))
          @auth
          <li><a href="{{url('contacts')}}">Contact</a></li>
          <li><a href="{{url('cart')}}">Your Cart</a></li>
          <li><a href="{{url('order')}}">Orders</a></li>
          @if(Auth::user()->type === 'superadmin')
          <li><a href="{{url('control')}}">Control</a></li>
          <li class="nav-item">
          <li class="dropdown">
          <a  class="get-a-quote" href="#"><span>{{auth()->user()->name}}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <a class="" href="{{route('profile.edit')}}"> {{ __('Profile') }}</a>
              </li>
            </ul>
          </li>
            <!-- <a class="get-a-quote" href="route('profile.edit')">{{auth()->user()->name}}</a> -->
            
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a class="get-a-quote" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
            </form>
          </li>
          </li>
          @elseif(Auth::user()->type === 'admin')
          <li><a href="{{url('control')}}">Control</a></li>
          <li class="nav-item">
          <li class="dropdown">
          <a  class="get-a-quote" href="#"><span>{{auth()->user()->name}}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <a class="" href="{{route('profile.edit')}}"> {{ __('Profile') }}</a>
              </li>
            </ul>
          </li>
            <!-- <a class="get-a-quote" href="route('profile.edit')">{{auth()->user()->name}}</a> -->
            
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a class="get-a-quote" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
            </form>
          </li>
          </li>
          @else
          <li class="nav-item">
          <li class="dropdown">
          <a  class="get-a-quote" href="#"><span>{{auth()->user()->name}}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <a class="" href="{{route('profile.edit')}}"> {{ __('Profile') }}</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a class="get-a-quote" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
            </form>
          </li>
          </li>
            @endif
            @else
          <li class="nav-item">
            <li><a class="get-a-quote" href="{{ url('/' . ($page = 'login')) }}">Log in</a></li>
            <li><a class="get-a-quote" href="{{ url('/' . ($page = 'register')) }}">Register</a></li>
          </li>

          @endif
          @endif
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!-- End Hero Section -->


  @yield('content')


  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Logis</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('front')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('front')}}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{asset('front')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('front')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('front')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{asset('front')}}/assets/vendor/php-email-form/validate.js"></script>
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.2/js/umd/util.js"></script> -->

  <!-- Template Main JS File -->
  <script src="{{asset('front')}}/assets/js/main.js"></script>

</body>

</html>