<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116062933-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-116062933-1');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


    <link rel="shortcut icon" href="/diabudy/images/favicon.png">
    {{--<title>POLO | The Multi-Purpose HTML5 Template</title>--}}

    @include('diabudy.layouts._meta')
    <!-- Bootstrap Core CSS -->
    <link href="/diabudy/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/diabudy/vendor/fontawesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="/diabudy/vendor/animateit/animate.min.css" rel="stylesheet">

    <!-- Vendor css -->
    <link href="/diabudy/vendor/owlcarousel/owl.carousel.css" rel="stylesheet">
    <link href="/diabudy/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Template base -->
    <link href="/diabudy/css/theme-base.css" rel="stylesheet">

    <!-- Template elements -->
    <link href="/diabudy/css/theme-elements.css" rel="stylesheet">


    <!-- Responsive classes -->
    <link href="/diabudy/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- Template color -->
    <link href="/diabudy/css/color-variations/red.css" rel="stylesheet" type="text/css" media="screen" title="blue">

    <!-- LOAD GOOGLE FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,800,700,600%7CRaleway:100,300,600,700,800" rel="stylesheet" type="text/css" />

    <!-- CSS CUSTOM STYLE -->
    <link rel="stylesheet" type="text/css" href="/diabudy/css/custom.css" media="screen" />

    <!--VENDOR SCRIPT-->
    <script src="/diabudy/vendor/jquery/jquery-1.11.2.min.js"></script>
    <script src="/diabudy/vendor/plugins-compressed.js"></script>

    @yield('style')
</head>

<body class="wide">


<!-- WRAPPER -->
<div class="wrapper">

    <!-- HEADER -->
        @include('diabudy.layouts._header')
    <!-- END: HEADER -->


    {{--<!-- PAGE TITLE -->
    <section id="page-title" class="page-title-parallax page-title-center text-dark" style="background-image:<script src="/diabudy/js/parallax/page-title-parallax.jpg);">
        <div class="container">
            <div class="page-title col-md-8">
                <h1>Portfolio</h1>
                <span>Portfolio Classic No Title - three columns version</span>
            </div>
        </div>
    </section>--}}
    <!-- END: PAGE TITLE -->
    @yield('page-title')

    <!-- SECTION -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="post-content col-md-9">
                    @yield('content')
                </div>
                <div class="sidebar sidebar-modern col-md-3">
                    @yield('sidebar')

                    <div class="widget clearfix widget-tags">
                        <h4 class="widget-title">Tags</h4>
                        <div class="tags">
                            @foreach($tags as $tag)
                                <a href="">{{$tag->title}}</a>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER -->
        @include('diabudy.layouts._footer')
    <!-- END: FOOTER -->

</div>
<!-- END: WRAPPER -->

<!-- GO TOP BUTTON -->
<a class="gototop gototop-button" href="#"><i class="fa fa-chevron-up"></i></a>

<!-- Theme Base, Components and Settings -->
<script src="/diabudy/js/theme-functions.js"></script>
<script src="/diabudy/vendor/notify/bootstrap-notify.min.js"></script>

<!-- Custom js file -->
<script src="/diabudy/js/custom.js"></script>
@yield('script')
<script>
    $(document).ready(function () {
        $("#logout-button").click(function (e) {
            $("#logout-form").submit();
            e.stopPropagation();
            e.preventDefault();


        });
    });
</script>
</body>
</html>
