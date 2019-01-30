<!DOCTYPE html>
<html lang="fr">
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109429497-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109429497-1');
</script>
    
    
    
    
    
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title', 'Terandes') | Peru Reisebüro</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link rel="icon" type="image/png" href="{{url('')}}/img/favicon.png" />
    <link rel="stylesheet" href="{{url('')}}/css/min/bootstrap.min.css" media="all" >
    <link rel="stylesheet" href="{{url('')}}/css/min/jqueryui.min.css" media="all" >
    <link rel="stylesheet" href="{{url('')}}/vendor/animate-css/animate.css" media="all" >
    <link rel="stylesheet" href="{{url('')}}/font/iconfont/iconstyle.css" media="all" >
    <link rel="stylesheet" href="{{url('')}}/font/font-awesome/css/font-awesome.css" media="all" >
    <link rel="stylesheet" href="{{url('')}}/css/main.css" media="all">
    <script type="text/javascript" src="{{url('')}}/vendor/js-cookie/src/js.cookie.js"></script>

</head>
<body>
<div class="pre-loader">
    <div class="loading-img"></div>
</div>

<header class="nav-menu fixed-top">
@yield('translate')

@include('website.partials.de.nav')

</header>

@yield('content')
@include('website.partials.de.footer')

<script type="text/javascript" src="{{url('')}}/vendor/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="{{url('')}}/vendor/jqueryui/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="{{url('')}}/vendor/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="{{url('')}}/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="{{url('')}}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="{{url('')}}/vendor/waypoints/lib/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="{{url('')}}/vendor/owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{url('')}}/vendor/retina.min.js"></script>
<script type="text/javascript" src="{{url('')}}/js/min/responsivetable.min.js"></script>
<script type="text/javascript" src="{{url('')}}/js/min/countnumbers.min.js"></script>
<script type="text/javascript" src="{{url('')}}/js/min/main.min.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACoL8LBLMNqyEWTHO2GWmxCdudtYsapVc">
</script>
<script type="text/javascript" src="{{url('')}}/js/min/map.min.js"></script>
<script type="text/javascript" src="{{url('')}}/js/min/tripdetailpage.min.js"></script>
<script type="text/javascript" src="{{url('')}}/js/min/home.min.js"></script>
<script type="text/javascript" src="{{url('')}}/js/min/priceslider.min.js"></script>

</body>
</html>
