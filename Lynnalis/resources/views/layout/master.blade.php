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
        <!-- Home Image -->
        <div class="row">
            <div class="col-12 text-center" id="lynnalisLogo">
                <h1 id="logoHeadliner">Lynnali's Hair Care</h1>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-sm sticky-top">
            <div class="container-fluid">
                <button class="navbar-toggler mr-auto custom-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarResponsive">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"> 
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="/products">Products</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="#">Cart</a>
                        </li>
                        <li class="nav-item active"> 
                            <a class="nav-link" href="/aboutus">About Us</a>
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
                        <div id="footerLocation">
                            <iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2707.902396336342!2d-59.553450609584985!3d13.146348988662773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c43f34d8cbba4ef%3A0xc74488d5aa670e5a!2sLYNNALI&#39;S%20HAIRCARE!5e0!3m2!1sen!2s!4v1655343531673!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-12">
                        <h6>&copy;2022 Lynnali's Hair Care.  All Rights Reserved.</h6>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
