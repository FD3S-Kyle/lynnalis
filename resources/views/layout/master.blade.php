<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lynnali's Hair Care</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{URL::asset('/css/webstyle.css')}}">
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-md navbar-light sticky-top">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="/img/profile/logo_black.jpeg" id="navbar-brand"></a>
                <button class="navbar-toggler mr-auto custom-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"> 
                            <a class="nav-link" href="/">HOME</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="/products">PRODUCTS</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="#">CART</a>
                        </li>
                        <li class="nav-item active"> 
                            <a class="nav-link" href="/aboutus">ABOUT US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>

        </br>
        </br>
        <!-- Footer -->
        <footer>
            <div class="container-fluid padding">
                <div class="row text-center">
                    <div class="col-md-4">
                        <h4>Socials</h4>
                        <div class="socials"">
                            <a href="#"><i class="bi bi-instagram"></i></a>    <a href="#"><i class="bi bi-facebook"></i></a>    <a href="#"><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4>Delivery Dates</h4>
                        <p>Saturday</p>
                        <p>9am - 5pm</p>
                        <p>Sunday</p>
                        <p>1pm - 5pm</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Location</h4>
                        <p>We are currently located at</p>
                        <p>Lot 5, Newbury Park, St.George</p>
                    </div>
                    <br/>
                    <div class="col-12">
                        <h6>&copy;2022 Lynnali's Hair Care.  All Rights Reserved.</h6>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
