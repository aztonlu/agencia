<!DOCTYPE html>
<html lang="fr">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
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
    <title>@yield('title', 'Terandes') | Agencia de viajes en Perú</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" href="{{url('')}}/css/min/bootstrap.min.css" media="all" >
    <link rel="stylesheet" href="{{url('')}}/css/min/jqueryui.min.css" media="all" >
    <link rel="stylesheet" href="{{url('')}}/vendor/animate-css/animate.css" media="all" >
    <link rel="stylesheet" href="{{url('')}}/font/iconfont/iconstyle.css" media="all" >
    <link rel="stylesheet" href="{{url('')}}/font/font-awesome/css/font-awesome.css" media="all" >
    <link rel="stylesheet" href="{{url('')}}/css/main.css" media="all">

    <!-- media-queries -->
        <link rel="stylesheet" href="css/media-queries.css">
        <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-clockpicker.min.css">

    <script type="text/javascript" src="{{url('')}}/vendor/js-cookie/src/js.cookie.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAm8H5cagqD0U8TmL34mrOqg2FPlK-DOsc&callback=initMap"
  type="text/javascript"></script> 
  
  
  <style>
    .floatFacebook{
    position:fixed;
    width:40px;
    height:40px;
    bottom:160px;
    left:5px;
    background-color:#3b5998;
    color:#FFF;
    border-radius:50px;
    text-align:center;
    box-shadow: 2px 2px 3px #999;
}
.floatTwitter{
    position:fixed;
    width:40px;
    height:40px;
    bottom:110px;
    left:5px;
    background-color:#4AB3F4;
    color:#FFF;
    border-radius:50px;
    text-align:center;
    box-shadow: 2px 2px 3px #999;
}
.floatGoogle{
    position:fixed;
    width:40px;
    height:40px;
    bottom:60px;
    left:5px;
    background-color:#db4437;
    color:#FFF;
    border-radius:50px;
    text-align:center;
    box-shadow: 2px 2px 3px #999;
}
.my-float{
    margin-top:13px; 
}
  </style>
</head>
<body>
<div class="pre-loader">
    <div class="loading-img"></div>
</div>

<header class="nav-menu fixed-top">
@yield('translate')

@include('website.partials.es.nav')

</header>

@include('website.partials.es.slider')
@yield('content')
<!--@include('website.partials.footer')-->

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
    <script>
      google.maps.event.addDomListener(window, 'load', initialize);
      function initialize() {
        //Declarar coordenas de los mapas Cusco - Lima
        var latLng = new google.maps.LatLng(-13.5313136, -71.9525267);
        var latLng1 = new google.maps.LatLng(-12.125797, -77.0282776);

        //Declarar elemento declarado en la vista
        var map = new google.maps.Map(document.getElementById('google-map'), {
          zoom: 15,
          center: latLng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var map1 = new google.maps.Map(document.getElementById('google-map1'), {
          zoom: 15,
          center: latLng1,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        //Indicar que información ira al hacer click en el marker

        var contentString = '<div id="content">'+'Cusco'+'</div>';
            var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        var contentString1 = '<div id="content">'+'Lima'+'</div>';
            var infowindow1 = new google.maps.InfoWindow({
            content: contentString1
        });

        //declaramos nuestros markers
        var marker = new google.maps.Marker({
          position: latLng,
          title: 'title',
          map: map,
          draggable: false
        });
        var marker1 = new google.maps.Marker({
          position: latLng1,
          title: 'title',
          map: map1,
          draggable: false
        });


        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
        marker1.addListener('click', function() {
          infowindow1.open(map1, marker1);
        });
        
      }
      
    </script>

    <script>
            $(document).ready(function(){
                var date_input=$('input[name="date"]'); //our date input has the name "date"
                var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                date_input.datepicker({
                    format: 'dd/mm/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                });
                var heights = $(".well").map(function() {
                    return $(this).height();
                }).get(),
             
                maxHeight = Math.max.apply(null, heights);
             
                $(".well").height(maxHeight);
            })
        </script>
        <script type="text/javascript">


        $('.clockpicker').clockpicker()
            .find('input').change(function(){
                console.log(this.value);
            });
        var input = $('#single-input').clockpicker({
            placement: 'bottom',
            align: 'left',
            autoclose: true,
            'default': 'now'
        });

        $('.clockpicker-with-callbacks').clockpicker({
                donetext: 'Done',
                init: function() { 
                    console.log("colorpicker initiated");
                },
                beforeShow: function() {
                    console.log("before show");
                },
                afterShow: function() {
                    console.log("after show");
                },
                beforeHide: function() {
                    console.log("before hide");
                },
                afterHide: function() {
                    console.log("after hide");
                },
                beforeHourSelect: function() {
                    console.log("before hour selected");
                },
                afterHourSelect: function() {
                    console.log("after hour selected");
                },
                beforeDone: function() {
                    console.log("before done");
                },
                afterDone: function() {
                    console.log("after done");
                }
            })
            .find('input').change(function(){
                console.log(this.value);
            });

        // Manually toggle to the minutes view
        $('#check-minutes').click(function(e){
            // Have to stop propagation here
            e.stopPropagation();
            input.clockpicker('show')
                    .clockpicker('toggleView', 'minutes');
        });
        if (/mobile/i.test(navigator.userAgent)) {
            $('input').prop('readOnly', true);
        }
        </script>
    
<script type="text/javascript" src="{{url('')}}/js/min/map.min.js"></script>
<script type="text/javascript" src="{{url('')}}/js/min/tripdetailpage.min.js"></script>


<script src='https://www.google.com/recaptcha/api.js'></script>

<script type="text/javascript" src="{{url('')}}/js/min/home.min.js"></script>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<script>
    $(".carousel").carousel({
      interval: 5000,
      pause : true
    });
</script>
</body>
</html>
