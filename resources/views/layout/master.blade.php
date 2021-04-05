<!DOCTYPE html>
<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>@yield('title')</title>

    <meta name="description" content="Safe Haven" />
    <meta name="keywords" content="Bitcoin | Etherium | Litecoin | Investment | Cryptocurrency" />
    <meta name="author" content="Dcode Arena">

    <!-- Favicon -->
    <link rel="icon" href="assets/img/core-img/favicon.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6069c9b0f7ce18270936f285/1f2ejnnak';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</head>

<body class="light-version">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="loader-load"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <nav class="navbar navbar-expand-lg navbar-white fixed-top" id="banner">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="#"><span><img src="assets/img/core-img/logo1.png" alt="logo"></span></a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/who-we-are') }}">Who we are</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/features') }}">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/resources') }}">Resources</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact-us') }}">Contact</a>
                    </li>
                    <li class="lh-55px"><a href="#" class="btn login-btn ml-50">Login!</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ##### Header Area End ##### -->
    @yield('content')
    <div class="footer-bg">
        <footer class="footer-area bg-img">

            <div class="footer-content-area spec">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                            <div class="footer-copywrite-info">
                                <!-- Copywrite -->
                                <div class="copywrite_text fadeInUp fot" data-wow-delay="0.2s">
                                    <h1 class="text-white">Get Started Now</h1>
                                    <button class="btn btn-lg py-2 btn-sm" style="background-color: #f48538;color: #fff;">Login Now</button>
                                </div><br>
                                <div class="fot">
                                    <p class="text-white">Stay in the loop with our latest product updates and news.</p>
                                    <form class="form-inline">
                                        <input class="form-control mr-sm-2 formbod" placeholder="Enter your email.." aria-label="Search">
                                        <button class="btn btn-lg py-2 btt" type="submit">Get Updated</button>
                                    </form>
                                </div><br>
                                <!-- Social Icon -->
                                <div class="footer-social-info fadeInUp fot" data-wow-delay="0.4s">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                </div>

            </div>
        </footer>


    </div>

    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="assets/js/plugins.js"></script>
    <!-- script js -->
    <script src="assets/js/script.js"></script>
    <script>
        $('#recipeCarousel').carousel({
            interval: 10000
        })

        $('.carousel .carousel-item').each(function() {
            var minPerSlide = 3;
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i = 0; i < minPerSlide; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }

                next.children(':first-child').clone().appendTo($(this));
            }
        });
    </script>

</body>

</html>