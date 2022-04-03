<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vizion -Al/ML-Digital Marketing Responsive HTML5 Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}"/>
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('css/typography.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<body>
<!-- loading -->
<div id="loading">
    <div id="loading-center">
        <img src="{{ asset('images/loader.gif') }}" alt="loder">
    </div>
</div>
<!-- loading End -->
<!-- Header-->
<header>
    <!-- <div class="container-fluid sub-header">
      <div class="row">
        <div class="col-auto mr-auto">
          <div class="number-info">
            <ul>
                <li class="email-header"><a href="mailto:support@vizion.com"><i class="fas fa-envelope"></i>support@vizion.com</a></li>
                <li class="phone-header"><a href="tel:+0123456789"><i class="fas fa-phone"></i>+0123456789</a></li>
            </ul>
          </div>
        </div>
        <div class="col-auto sub-main">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="login.html">Login</a></li>
              <li class="breadcrumb-item" aria-current="page"><a href="register.html">Register</a></li>
            </ol>
            <div class="request-btn"><a href="#">Request a Demo</a></div>
          </nav>
        </div>
      </div>
    </div> -->
    <div class="container-fluid main-header">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('images/logo.png') }}" class="img-fluid logo" alt="img">
                        <img src="{{ asset('images/logo.png') }}" class="img-fluid logo-white" alt="img">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('services') }}">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pages
                                </a>
                                <div class="dropdown-menu drop-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                    <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                                    <a class="dropdown-item" href="{{ route('blog-details') }}">Blog Details</a>
                                    <a class="dropdown-item" href="{{ route('pricing') }}">Pricing</a>
                                    <a class="dropdown-item" href="{{ route('coming-soon') }}">Coming Soon</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="sub-main">
                      <ul class="shop_list">
                          <li class="cart-btn list-inline-item">
                              <div class="cart_count">
                                  <a class="parents mini-cart-count" href="javascript:void(0)">
                                      <i class="fa fa-shopping-cart"></i>
                                      <div id="mini-cart-count">
                                          0
                                      </div>
                                  </a>
                              </div>
                          </li>
                        <li class="cart-btn list-inline-item">
                          <div class="cart_count">
                              <a class="parents mini-cart-count" href="javascript:void(0)">
                                  <i class="fa fa-heart" ></i>
                                  <div id="mini-cart-count">
                                          0
                                  </div>
                            </div>
                        </li>
                      </ul>
                  </div> -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header-->

    @yield('content')

<!-- Footer start-->
<footer id="contact" class="main-bg ">
    <div class="container">
        <div class="row">
            <div class="col-auto mr-auto">
                <div class="footer-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('images/logo-white.png') }}" alt="img"></a>
                </div>
            </div>
            <div class="col-auto right-footer">
                <ul class="nav footer-menu">
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="pt-5">
        <div class="pt-3">
            <div class="row justify-content-between">
                <div class="col-auto mr-auto">
                    <h6 class="text-white iq-font-18"><span> &copy; Mr Green Apps </span></h6>
                </div>
                <div class="col-auto">
                    <div class="social-icone">
                        <ul>
                            <li class="d-inline"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="d-inline"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="d-inline"><a href="#"><i class="fab fa-google"></i></a></li>
                            <li class="d-inline"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"><span>Scroll Up</span> <i class="ion-ios-arrow-thin-up"></i></a>
    </div>
    <!-- back-to-top End -->
    <!--=================================
       Cookies -->
    <div id="cookie_div" class="align-items-center"> We use cookies to give you tailored experiences on our website.
        <a class="button grey text-right ml-3" href="#" role="button" id="cookie">Accept </a>
    </div>
    <!--=================================
       Cookies -->
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first -->
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<!-- popper -->
<script src="{{ asset('js/popper.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Owl Carousel -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- main -->
<script src="{{ asset('js/main.js') }}"></script>
<!--custom -->
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
