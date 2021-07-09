<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="src/img/favicon.png">
    <title>One Pin</title>
    <link rel="stylesheet" href="src/css/plugins.css">
    <link rel="stylesheet" href="src/css/theme/yellow.css">
    <link rel="stylesheet" href="src/css/font/thicccboi.css">
</head>
<body>
<div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
        <nav class="navbar center-nav transparent navbar-expand-lg navbar-light">
            <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand w-100"><a href="{{route('site.home')}}"><img src="src/img/logo-dark.png" srcset="src/img/logo-dark@2x.png 2x" alt="" /></a></div>
                <div class="navbar-collapse offcanvas-nav">
                    <div class="offcanvas-header d-lg-none d-xl-none">
                        <a href="{{route('site.home')}}"><img src="src/img/logo-light.png" srcset="src/img/logo-light@2x.png 2x" alt="" /></a>
                        <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{route('site.home')}}">{{__('header.menu.home')}}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('site.how')}}">{{__('header.menu.how')}}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('site.faq')}}">{{__('header.menu.faq')}}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('site.contact')}}">{{__('header.menu.contact')}}</a></li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-collapse -->
                <div class="navbar-other w-100 d-flex ms-auto">
                    <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
                        <li class="nav-item dropdown language-select text-uppercase">
                            <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">En</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item" href="{{route('change.language','en')}}">En</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="{{route('change.language','de')}}">De</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="{{route('change.language','es')}}">Es</a></li>
                            </ul>
                        </li>
                        <li class="nav-item d-lg-none">
                            <div class="navbar-hamburger"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- /.navbar -->

    </header>
    <!-- /header -->
    @yield('content')
</div>
<!-- /.content-wrapper -->
<footer class="bg-navy text-inverse">
    <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
        <div class="d-lg-flex flex-row align-items-lg-center">
            <h3 class="display-4 mb-6 mb-lg-0 pe-lg-20 pe-xl-22 pe-xxl-25 text-white">Join our community by using our services and grow your business.</h3>
            <a href="#" class="btn btn-primary rounded-pill mb-0 text-nowrap">Try It For Free</a>
        </div>
        <!--/div -->
        <hr class="mt-11 mb-12" />
        <div class="row gy-6 gy-lg-0">
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <img class="mb-4" src="src/img/logo-light.png" srcset="src/img/logo-light@2x.png 2x" alt="" />
                    <p class="mb-4">© 2021 onep.in <br class="d-none d-lg-block" />All rights reserved.</p>
                    <nav class="nav social social-white">
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-dribbble"></i></a>
                        <a href="#"><i class="uil uil-instagram"></i></a>
                        <a href="#"><i class="uil uil-youtube"></i></a>
                    </nav>
                    <!-- /.social -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Get in Touch</h4>
                    <a href="mailto:#">info@onep.in</a>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Learn More</h4>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->

        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</footer>
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<script src="src/js/plugins.js"></script>
<script src="src/js/scripts.js"></script>
</body>
</html>
