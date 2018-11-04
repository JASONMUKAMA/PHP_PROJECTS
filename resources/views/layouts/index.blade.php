<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
      {{setting('site.title')}}
    </title>

    <meta name="keywords" content="">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.10.4/dist/instantsearch.min.css">
<script src="https://cdn.jsdelivr.net/npm/instantsearch.js@2.10.4"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.10.4/dist/instantsearch-theme-algolia.min.css">



    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- theme stylesheet -->
    <link href="{{asset('css/style.violet.css')}}" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

    <script src="{{asset('js/respond.min.js')}}"></script>

    <link rel="shortcut icon" href="{{setting('site.logo')}}">



</head>

<body>

<!-- *** TOPBAR ***
_________________________________________________________ -->
<div id="top">

    @include('partials.topnav')
</div>

<!-- *** TOP BAR END *** -->

<!-- *** NAVBAR ***
_________________________________________________________ -->
@include('partials.nav')
<!-- /#navbar -->

<!-- *** NAVBAR END *** -->



<div id="all">

    <!-- /#content -->

    @yield('content')

    <!-- *** FOOTER ***
_________________________________________________________ -->
    <!-- /#footer -->
@include('partials.footer')
    <!-- *** FOOTER END *** -->




    <!-- *** COPYRIGHT ***
_________________________________________________________ -->
    <div id="copyright">
        <div class="container">
            <div class="col-md-12">
                <p class="text-center text-capitalize">© {{date('Y')}} JJ Hardware</p>

            </div>

        </div>
    </div>
    <!-- *** COPYRIGHT END *** -->



</div>
<!-- /#all -->




<!-- *** SCRIPTS TO INCLUDE ***
________________________________________________________ -->
<script type="text/javascript">function add_chatinline(){var hccid=32983280;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
    add_chatinline(); </script>

{{--<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'aecfc43a-d835-4b09-b704-a2c91e849aff', f: true }); done = true; } }; })();</script>--}}
<script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.cookie.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/modernizr.js')}}"></script>
<script src="{{asset('js/bootstrap-hover-dropdown.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/front.js')}}"></script>


</body>

</html>