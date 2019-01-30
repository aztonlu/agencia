@extends('website.partials.es.maintrip')
@section('title', 'Trésors du sud Pérou')
@section('keywords', 'machu picchu, agence voyage, voyage de noce, circuit perou, voyage perou, voyage au perou, perou, nomade aventure, le perou, lac titicaca, tour operateur, Agence de voyages au Pérou')
@section('description', 'From the coast to Machu Picchu, this trip combines the main sites of Peru. You will start on the coast with the Ballestas Islands and the Huacachina oasis as well as Nasca and its mysterious lines. You will then continue your journey visiting the beautiful city of Arequipa and the Colca Canyon before heading for Lake Titicaca. Your trip will end with the must-see Cusco region and its Inca sites including the most famous place, the majestic citadel Machu Picchu.')

@section('translate')

    

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
                <h3>En pocas palabras...</h3>
                <br>
                <p>{{ $tour->summary}}</p>
                
            </div>
            @endforeach
            <ul class="nav nav-tabs" data-toggle="tabs">
                <li class="active"><a href="#itenary">Itinerario</a></li>
                <li class=""><a href="#overview">Organización</a></li>
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

                            <!--<div class="day-description">
                                <div class="etapes"><strong><span class="icon-location"></span> Etapes: </strong> 
                                  
                                   @for ($i = 0; $i < count($etapes); $i++)
                                        @if($gallery->id == $etapes[$i]->id_tour_gallery)
                                            <span class="city">{{ $etapes[$i]->nameEtape }}</span>
                                        @endif
                                   @endfor
                                </div>
                                <div class="hotel"><strong><span class="icon-moon"></span> Hébergement: </strong> <a href="#" target="_new">{{ $gallery->stay }}</a></div>
                                <div class="transfer"><strong><span class="icon-bus"></span> Transfert: </strong>{{ $gallery->transport }}</div>
                            </div>-->

                        </div>
                    </div>
                    @endforeach
                    

                    <h4>FIN DE NUESTROS SERVICIOS</h4>

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
                <h3>Reserva</h3>
            </div>
            <div class="resume">
                <small>A partir de:</small><span class="pd price-cat"><i class="icon-money"></i> USD {{ $tours[0]->price}}</span>
            </div>
            <div class="resume">
                <small>Dias:</small><span class="pd days"><i class="icon-sun"></i>{{ $tours[0]->days}} D / <i class="icon-moon"></i>{{ $tours[0]->days - 1}} N</span>
            </div>
            <div class="content-buy">
                <div class="content-categories">
                    <div class="categories"><i class="icon-mountain"></i> <strong>Altitud:</strong></div><div class="categorie-detail"> 4500 msnm</div>
                    <div class="categories"><i class="icon-shoe"></i> <strong>Nivel:</strong></div><div class="categorie-detail"> {{ $tours[0]->difficulty }}</div>
                    <div class="categories"><i class="icon-backpack"></i> <strong>Categoria:</strong></div><div class="categorie-detail"> {{ $tours[0]->category }}</div>
                    
                </div>
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">RESERVAR</button><button class="btn btn-info" data-toggle="modal" data-target="#favoritesModal"><span class="icon-chat"></span>Mas información</button>
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
                <h4 class="modal-title">Formulario de reserva</h4>
            </div>
            <div class="modal-body">

                <div class="preview-wrap">
                    <div class="preview-img" style="background-image: url('{{url('')}}/img/pay-img.jpg')"></div>

                    <div class="form-wrap">
                        <h4 class="text-center">Escoja un medio de pago:</h4>
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
                <h4 class="modal-title">Formulario de reserva</h4>
            </div>
            <div class="modal-body">

                <div class="preview-wrap">
                    <form action="{{ url('') }}/storeReservation" method="POST">   
                        {{ csrf_field() }}
                        <div class="form-wrap-two">  
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="name" placeholder="Escriba su nombre" value="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="E-mail" value="">
                            </div>
                            <div class="form-group">
                                <label>Telefono</label>
                                <input type="text" class="form-control" name="phone" placeholder="Numero de telephone" value="">
                            </div>
                            <div class="form-group">
                                <label>Skype</label>
                                <input type="text" class="form-control" name="skype" placeholder="ID Skype" value="">
                            </div>
                            <div class="form-group">
                                <label>Nacionalidad</label>
                                <input type="text" class="form-control" name="nationality" placeholder="Pais" value="">
                            </div>
                            <div class="form-group">
                                <label>Duracion</label>
                                <div class="row">
                                    <div class="col-sm-6"><input type="text" name="checkin" class="form-control datepicker" placeholder="De"></div>
                                    <div class="col-sm-6"><input type="text" name="checkout" class="form-control datepicker" placeholder="A"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Numero de personas</label>
                                <div class="row">
                                    <div class="col-sm-6"><input type="number" name="adults" class="form-control" placeholder="Personnes" value="1"></div>
                                    <div class="col-sm-6"><input type="number" name="Children" class="form-control" placeholder="D'enfants" value="0"></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-wrap-two">

                                <div class="form-group">
                                    <label>Tipo de viaje</label>
                                    <select class="form-control" name="type">
                                        <option value="Vacance">Vacaciones</option>
                                        <option value="Voyage de noces">Luna de miel</option>
                                        <option value="Voyage team building">En grupo</option>
                                        <option value="Autre">Otro</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tipo de habitaciones</label>
                                    <select class="form-control" name="hostel">
                                        <option value="Maison Habitante">Maison Habitante</option>
                                        <option value="Standard (2**/B&B)">Standard (2**/B&B)</option>
                                        <option value="Confort / Chame 3***">Confort / Chame 3***</option>
                                        <option value="Luxe 4**** +">Luxe 4**** +</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Servicios de guia extra </label>
                                    <div class="row">
                                        <div class="col-sm-4"><input type="radio" name="guide" value="Francophone"> <small>Francophone</small></div>
                                        <div class="col-sm-4"><input type="radio" name="guide" value="Anglophone"> <small>Anglophone</small></div>
                                        <div class="col-sm-4"><input type="radio" name="guide" value="Hispanophone"> <small>Hispanophone</small></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Otros servicios extra</label>
                                    <select class="form-control" name="plus">
                                        <option value="Voyage regroupant les incontournables du pays">Viajes que agrupan los artículos imprescindibles del país</option>
                                        <option value="Voyage aventure">Viaje de aventura</option>
                                        <option value="Voyage Communauté">Viaje en comunidad</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Describe tu viaje</label>
                                    <textarea name="message" rows="5" class="form-control"></textarea>
                                </div>
                                <button class="btn btn-primary hvr-sweep-to-right" type="submit">Reservar</button>

                            
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
        id="favoritesModalLabel">H&aacute;ganos una pregunta</h3>
      </div>
      
             <div class="modal-body"> 
                        <form action="{{ url('') }}/sendComment" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="col-sm-8"><label>Nombre</label>
                                <input type="text" name="nameUser" class="form-control"  placeholder="Ingrese su nombre" value="" required >
                                <input type="hidden" name="idTour" value="{{ $tours[0]->id }}"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8"><label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Ingrese su e-mail" value="" required></div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-8"><label>Pregunta</label>
                                <textarea class="form-control" name="comment" placeholder="Escriba aqui su pregunta" required></textarea></div>
                            </div>
                            <br><br><br>
                            <button class="btn btn-primary hvr-sweep-to-right">Envienos su pregunta</button>

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
  background-color: rgb(16,54,9);
}
</style>



<!--inicio del footer-->

 @include('website.es.footerES')
  
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
