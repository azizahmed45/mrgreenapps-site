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


    <div class="main-content">
        <!--=================================
        Error -->
        <div class="error-box">

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="error text-center">
                            <img src="{{ asset('images/error-404.png') }}" class="img-fluid" alt="image"><br>
                            <h2 class="mt-4 ">Sorry the page not found</h2>
                            <a href="{{ route('home') }}" class="button mt-5 mr-2">Go to Home Page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=================================
        Error -->
    </div>
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

