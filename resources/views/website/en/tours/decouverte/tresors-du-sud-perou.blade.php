@extends('website.partials.en.maintre')
@section('title', 'Trésors du sud Pérou')
@section('keywords', 'machu picchu, agence voyage, voyage de noce, circuit perou, voyage perou, voyage au perou, perou, nomade aventure, le perou, lac titicaca, tour operateur, Agence de voyages au Pérou')
@section('description', 'From the coast to Machu Picchu, this trip combines the main sites of Peru. You will start on the coast with the Ballestas Islands and the Huacachina oasis as well as Nasca and its mysterious lines. You will then continue your journey visiting the beautiful city of Arequipa and the Colca Canyon before heading for Lake Titicaca. Your trip will end with the must-see Cusco region and its Inca sites including the most famous place, the majestic citadel Machu Picchu.')

@section('translate')

    <!--<div class="top-header">
        <div class="wrap-top">
            <div class="info-top pull-left">
                <small class="top-element"><strong><a href="#">Info: terandes@terandes.com</a></strong></small>
                <small class="top-element"><a href="#">Appelez-nous maintenant: 00 51 84 247277</a></small>
            </div>
           <div class="language-top pull-right">
                <small class="top-element-language">Langue:</small>
                <a class="route-language" href="{{url('')}}/fr/tours/decouverte"><img class="img-lng" src="{{url('')}}/img/lng/fr.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/en/tours/decouverte"><img class="img-lng" src="{{url('')}}/img/lng/en.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/es/tours/decouverte"><img class="img-lng" src="{{url('')}}/img/lng/es.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/de/tours/decouverte"><img class="img-lng" src="{{url('')}}/img/lng/de.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/it/tours/decouverte"><img class="img-lng" src="{{url('')}}/img/lng/it.png" alt="Idioma"></a>
            </div>
        </div>
    </div>-->

@endsection

@section('content')


<div class="trip-detail">
    <div class="container">
        <div class="col-xs-12">
                    @include('flash::message')
                </div>
        <div class="col-md-9 tab-wrap">
            @foreach($tours as $tour)
            <h2>{{ $tour->title}}</h2>

            <div id="shop-detail">

                <!-- Shop item / START -->
                <div class="shop-item">

                    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 450px">
                    	<ol class="carousel-indicators">
					      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					       @foreach($images as $gallery)
                            <li data-target="#myCarousel" data-slide-to="0"></li>
                            @endforeach
					      
					    </ol>
					    <div class="carousel-inner">
					      <div class="item active">
					        <img src="{{url('')}}/{{ $tour->coverpage }}"  style="width:100%; height: 450px;">
					      </div>
					      
					      @foreach($images as $gallery)
						      <div class="item">
						        <img src="{{url('')}}/{{ $gallery->routeImage }}" style="width:100%; height: 450px;">
						      </div>
						      
					    	@endforeach
					      
					    </div>
					    <!-- Left and right controls -->
					    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
					      <span class="glyphicon glyphicon-chevron-left"></span>
					      <span class="sr-only">Previous</span>
					    </a>
					    <a class="right carousel-control" href="#myCarousel" data-slide="next">
					      <span class="glyphicon glyphicon-chevron-right"></span>
					      <span class="sr-only">Next</span>
					    </a>
                    </div>


                </div><!-- Shop item / END -->

            </div>

            <div class="description">
                <h3>In a few words...</h3>
                <br>
                <p>{{ $tour->summary}}</p>
                
            </div>
            @endforeach
            <ul class="nav nav-tabs" data-toggle="tabs">
                <li class="active"><a href="#itenary">Route</a></li>
                <li class=""><a href="#overview">Organization</a></li>
            </ul>
             <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_default_style" style="bottom:0px; right:0px;">
                <a class="a2a_button_facebook"></a>
                <a class="a2a_button_twitter"></a>
                <a class="a2a_button_google_plus"></a>
                <a class="a2a_button_pinterest"></a>
            </div>
            <div class="tab-content paper-effect">
                <div class="tab-pane active" id="itenary">
                    @foreach($galleries as $gallery)
                    <div class="row day-description-content">
                        <div class="col-sm-4">
                            <img src="{{url('')}}/{{ $gallery->routeImage}}" class="img-day" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h4 class="text-success">{{ $gallery->name }}</h4>
                            <p>{{ $gallery->description }}</p>

                            

                        </div>
                    </div>
                    @endforeach
                    

                    <h4>END OF OUR SERVICES</h4>

                </div>

                <div class="tab-pane" id="overview">
                    <div class="row">
                        @foreach($organizations as $orga)
                        <div class="col-sm-12">
                            <h5>{{ $orga->name}}</h5>
                            <p>{{ $orga->description }}</p>
                            <br>
                        </div>
                        @endforeach
                    </div>
                </div>

                

            </div>
        </div>

        <div class="col-md-3 tab-wrap tab-wrap-aside" style="margin-top: 0;">
            <div class="section-title-aside left">
                <h3>Reservations</h3>
            </div>
            <div class="resume">
                <small>From:</small><span class="pd price-cat"><i class="icon-money"></i> USD {{ $tours[0]->price}}</span>
            </div>
            <div class="resume">
                <small>Days:</small><span class="pd days"><i class="icon-sun"></i>{{ $tours[0]->days}} D / <i class="icon-moon"></i>{{ $tours[0]->days - 1}} N</span>
            </div>
            <div class="content-buy">
                <div class="content-categories">
                    <div class="categories"><i class="icon-mountain"></i> <strong>Altitude:</strong></div><div class="categorie-detail"> 4500 msnm</div>
                    <div class="categories"><i class="icon-shoe"></i> <strong>Level:</strong></div><div class="categorie-detail"> {{ $tours[0]->difficulty }}</div>
                    <div class="categories"><i class="icon-backpack"></i> <strong>Category:</strong></div><div class="categorie-detail"> {{ $tours[0]->category }}</div>
                    
                </div>
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">BOOK</button><button class="btn btn-info" data-toggle="modal" data-target="#favoritesModal"><span class="icon-chat"></span>More information</button>
            </div>

            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxJnaq8H2Ib6E0bBT1sTnSnGZ5tqONxFI&callback=initMap"></script>
            <script>

                function initMap() {
                    var styleArray = [
                        {
                            "featureType": "administrative.country",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#70a37e"
                                },
                                {
                                    "saturation": "0"
                                },
                                {
                                    "lightness": "0"
                                },
                                {
                                    "gamma": "0.9"
                                },
                                {
                                    "weight": "1.15"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#FFBB00"
                                },
                                {
                                    "saturation": 43.400000000000006
                                },
                                {
                                    "lightness": 37.599999999999994
                                },
                                {
                                    "gamma": 1
                                }
                            ]
                        },
                        
                        {
                            "featureType": "road.arterial",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#FF0300"
                                },
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": 51.19999999999999
                                },
                                {
                                    "gamma": 1
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#FF0300"
                                },
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": 52
                                },
                                {
                                    "gamma": 1
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#0078FF"
                                },
                                {
                                    "saturation": -13.200000000000003
                                },
                                {
                                    "lightness": 2.4000000000000057
                                },
                                {
                                    "gamma": 1
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#58a2d8"
                                }
                            ]
                        }
                    ];

                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 4,
                        center: {lat: -16.894652, lng: -70.8394439},
                        styles: styleArray,
                        scrollwheel:  false,
                        mapTypeControl: false
                    });

                    setMarkers(map);
                }

                // Data for the markers consisting of a name, a LatLng and a zIndex for the
                // order in which these markers should display on top of each other.
               

                function setMarkers(map) {
                    // Adds markers to the map.
                    var image = {
                        url: '{{url('')}}/img/ubc.png',
                        // This marker is 20 pixels wide by 32 pixels high.
                        size: new google.maps.Size(20, 25),
                        // The origin for this image is (0, 0).
                        origin: new google.maps.Point(0, 0),
                        // The anchor for this image is the base of the flagpole at (0, 32).
                        anchor: new google.maps.Point(10, 25)
                    };

                    var shape = {
                        coords: [1, 1, 1, 20, 18, 20, 18, 1],
                        type: 'poly'
                    };
                    var arreglo = <?php echo json_encode($etapesforMap); ?>; 
                   

                    for (var i = 0; i < arreglo.length; i++) {
                        var beach = arreglo[i];
                        var value = parseFloat(beach["latitude"]);
                        var value1 = parseFloat(beach["longitude"]);
                        var title = beach["name"];

                        var marker = new google.maps.Marker({
                            position: {lat: value, lng: value1},
                            map: map,
                            icon: image,
                            shape: shape,
                            title: title
                        });
                    }
                }

            </script>

            <div id="map" style="height: 200px"></div>

            
        </div>
    </div>
</div>




<div class="modal fade modal-book-now" id="myBuy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Reserve now</h4>
            </div>
            <div class="modal-body">

                <div class="preview-wrap">
                    <div class="preview-img" style="background-image: url('{{url('')}}/img/pay-img.jpg')"></div>

                    <div class="form-wrap">
                        <h4 class="text-center">Choose the payment method:</h4>
                        <div style="width: 49%; display: inline-block; padding: 1em;">
                            <img src="{{url('')}}/img/safetypay.png" alt="" style="width: 100%;">
                        </div>
                        <div style="width: 49%; display: inline-block; padding: 1em;">
                            <img src="{{url('')}}/img/transferwise.png" alt="" style="width: 100%;">
                        </div>

                        <div style="width: 49%; display: inline-block; padding: 1em;">
                            <img src="{{url('')}}/img/paypal.png" alt="" style="width: 100%;">
                        </div>
                        <div style="width: 49%; display: inline-block; padding: 1em;">
                            <img src="{{url('')}}/img/vma.png" alt="" style="width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-book-now" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Reserve now</h4>
            </div>
            <div class="modal-body">

                <div class="preview-wrap">
                    <form action="{{ url('') }}/storeReservation" method="POST">   
                        {{ csrf_field() }}
                        <div class="form-wrap-two">  
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter your name" value="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="e-mail" value="">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" placeholder="Phone" value="">
                            </div>
                            <div class="form-group">
                                <label>Skype</label>
                                <input type="text" class="form-control" name="skype" placeholder="ID Skype" value="">
                            </div>
                            <div class="form-group">
                                <label>Nationality</label>
                                <input type="text" class="form-control" name="nationality" placeholder="Country" value="">
                            </div>
                            <div class="form-group">
                                <label>Duration</label>
                                <div class="row">
                                    <div class="col-sm-6"><input type="text" name="checkin" class="form-control datepicker" placeholder="From"></div>
                                    <div class="col-sm-6"><input type="text" name="checkout" class="form-control datepicker" placeholder="to"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Number of people</label>
                                <div class="row">
                                    <div class="col-sm-6"><input type="number" name="adults" class="form-control" placeholder="Personnes" value="1"></div>
                                    <div class="col-sm-6"><input type="number" name="Children" class="form-control" placeholder="D'enfants" value="0"></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-wrap-two">

                                <div class="form-group">
                                    <label>Type of trip</label>
                                    <select class="form-control" name="type">
                                        <option value="Vacance">Holiday</option>
                                        <option value="Voyage de noces">Honeymoon</option>
                                        <option value="Voyage team building">Team building trip</option>
                                        <option value="Autre">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Type d'hébergement</label>
                                    <select class="form-control" name="hostel">
                                        <option value="Maison Habitante">Maison Habitante</option>
                                        <option value="Standard (2**/B&B)">Standard (2**/B&B)</option>
                                        <option value="Confort / Chame 3***">Confort / Chame 3***</option>
                                        <option value="Luxe 4**** +">Luxe 4**** +</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>You want the services of a guide </label>
                                    <div class="row">
                                        <div class="col-sm-4"><input type="radio" name="guide" value="Francophone"> <small>Francophone</small></div>
                                        <div class="col-sm-4"><input type="radio" name="guide" value="Anglophone"> <small>Anglophone</small></div>
                                        <div class="col-sm-4"><input type="radio" name="guide" value="Hispanophone"> <small>Hispanophone</small></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>You want more</label>
                                    <select class="form-control" name="plus">
                                        <option value="Voyage regroupant les incontournables du pays">Travel grouping the country's must-haves</option>
                                        <option value="Voyage aventure">Adventure trip</option>
                                        <option value="Voyage Communauté">Travel Community</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Describe your trip</label>
                                    <textarea name="message" rows="5" class="form-control"></textarea>
                                </div>
                                <button class="btn btn-primary hvr-sweep-to-right" type="submit">Reserve</button>

                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-8">
<div class="modal fade" id="favoritesModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="favoritesModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" 
          aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" 
        id="favoritesModalLabel">Make your question</h3>
      </div>
      
             <div class="modal-body"> 
                        <form action="{{ url('') }}/sendComment" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="col-sm-8"><label>Name</label>
                                <input type="text" name="nameUser" class="form-control"  placeholder="Write your name" value="" required >
                                <input type="hidden" name="idTour" value="{{ $tours[0]->id }}"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8"><label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="write your e-mail" value="" required></div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-8"><label>Question</label>
                                <textarea class="form-control" name="comment" placeholder="Write your question" required></textarea></div>
                            </div>
                            <br><br><br>
                            <button class="btn btn-primary hvr-sweep-to-right">Send</button>

                        </form>
                 </div>
        </div>

            </div>
    </div>
</div>


<style>
  h4{
    color: #fff;
    
  }
  a{
    color: #000;
  }
  a:hover{
    color: #018416;
  }
  .panel-footer{
    background-color: #e6ece7;
  }
  ul#menu li {
    display:inline;
}
footer{
  background-color: rgb(23,58,27);
}
</style>



<!--inicio del footer-->

 @include('website.en.footerEN')
  
  	<a href="https://www.facebook.com/tierrasdelosandes" class="floatFacebook">
		<i class="fa fa-facebook my-float"></i>
	</a>
	<a href="https://twitter.com/terandes1" class="floatTwitter">
		<i class="fa fa-twitter my-float"></i>
	</a>
	<a href="https://codepen.io/androidcss/pen/yOopGp" class="floatGoogle">
		<i class="fa fa-google-plus my-float"></i>
	</a>
	
@endsection
