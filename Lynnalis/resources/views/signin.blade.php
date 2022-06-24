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
        <div class="container" id="bg-img">
            <div class="content">
                <header> Login Ms.Boss Lady </header>
                <form action="#">
                    <div class="field">
                        <span class="bi bi-user"></span>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
                            <label for="quantity">Username</label>
                        </div>
                    </div>
                    <div class="password">
                        <span class="bi bi-shield-lock-fill"></span>
                        <input type="password" class="form-control" id="pass-key" name="pwd" placeholder="Enter Password">
                        <span class="show">SHOW</span>
                    </div>
                    <div class="forget-password">
                        <a href="#"> Forgot Password? Yikes. </a>
                    </div>
                    <div class="field">
                        <input type="submit" value="LOGIN">
                    </div>
                </form>
            </div>
        </div>

        <!-- <div class="container">
            @yield('content')
        </div> -->

        
    </body>
</html>
