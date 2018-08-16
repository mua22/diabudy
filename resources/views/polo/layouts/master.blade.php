<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119561598-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-119561598-1');
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo"> <!-- Document title -->
    @include('polo.layouts.partials._meta')
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" />
    <link href="/css/app.css" rel="stylesheet">    
    <link href="/polo/css/plugins.css" rel="stylesheet">
    <link href="/polo/css/style.css" rel="stylesheet">
    <link href="/polo/css/responsive.css" rel="stylesheet">
    <link href="/polo/css/color-variations/orange.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/custom.css" rel="stylesheet">
    <!-- local BootsTrap wasnot working so i added this  -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--  -->
    
    @yield('style')
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-6813325630235078",
            enable_page_level_ads: true
        });
    </script>

</head>

<body class="@if(!config('polo.show_loader')) no-page-loader @endif">

<!-- Wrapper -->
<div id="wrapper" style="animation-duration: 500ms; opacity: 1;">
    @include('polo.layouts.partials._topbar')
    <!-- Header -->
    <header id="header" class="header-dark">
        <div id="header-wrap">
            <div class="container"> <!--Logo-->
                <div id="logo">
                    <a href="/" class="logo" data-dark-logo="/polo/images/diabudy/logo-dark.png"> <img src="/polo/images/diabudy/logo.png" alt="Diabudy Logo"> </a>
                </div>
                <!--End: Logo-->

                <!--Top Search Form-->
                <div id="top-search">
                    <form action="search-results-page.html" method="get">
                        <input type="text" name="q" class="form-control" value="" placeholder="Start typing & press  &quot;Enter&quot;">
                    </form>
                </div>
                <!--end: Top Search Form-->

                <!--Header Extras-->
                <div class="header-extras">
                    <ul>
                        <li>
                            <!--top search-->
                            <a id="top-search-trigger" href="#" class="toggle-item">
                                <i class="fa fa-search"></i>
                                <i class="fa fa-close"></i>
                            </a>
                            <!--end: top search-->
                        </li>

                    </ul>
                </div>
                <!--end: Header Extras-->
                <!--Navigation Resposnive Trigger-->
                <div id="mainMenu-trigger">
                    <button class="lines-button x"> <span class="lines"></span> </button>
                </div>
                <!--end: Navigation Resposnive Trigger-->

                <!--Navigation-->
                @include('polo.layouts.partials._mainMenu')
                <!--END: NAVIGATION-->
            </div>
        </div>
    </header>
    @if(Auth::check())
        @include('polo.layouts.partials._loggedInMenu')
        @endif
    <!-- end: Header -->

    <!-- Content -->
    <section id="page-content" class="sidebar-right">
        <div class="container">
            @yield('content')
        </div>
    </section>
    <!-- end: Content -->
    <!-- Footer -->
    @include('polo.layouts.partials._footer')
    <!-- end: Footer -->

</div>
<!-- end: Wrapper -->
@yield('modals')
<!-- Go to top button -->
<a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>

<!--Plugins-->
<script src="/polo/js/jquery.js"></script>
<script src="/polo/js/plugins.js"></script>

<!--Template functions-->
<script src="/polo/js/functions.js"></script>
<script src="/polo/js/custom.js"></script>
@yield('script')
</body>

</html>
