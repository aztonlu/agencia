<?php use App\Models\Article; $articles = Article::where("blog_id",45)->get();?> @extends("website.partials.maindescubrirnuevofr") @section("prueba 00.16", "Voyage combiné Pérou/Bolivie, Machu Picchu, Salar Uyuni, Titicaca, Laguna Colora") @section("keywords", "machu picchu, agence voyage, voyage de noce, circuit perou, voyage perou, voya    ge au perou, perou, nomade aventure, le perou, lac titicaca, tour operateur, Agence de voyages au Pérou") @section("description", "Découvrez les incontournables du Pérou et de la Bolivie dans ce combiné parfaitement équilibré. Nature et découvertes culturelles ne manqueront pas à lappel.")@section("translate")<div class="top-header"> <div class="wrap-top"> <div class="info-top pull-left"> <small class="top-element"><strong><a href="#">Info: terandes@terandes.com</a></strong></small> <small class="top-element"><a href="#">Appelez-nous maintenant: 00 51 84 247277</a></small> </div> <div class="language-top pull-right"> <small class="top-element-language">Langue:</small> <a class="route-language" href="#"><img class="img-lng" src="{{url("")}}/img/lng/fr.png" alt="Idioma"></a> <a class="route-language" href="{{url("")}}/en/tours/discovery/peru-bolivia-express"><img class="img-lng" src="{{url("")}}/img/lng/en.png" alt="Idioma"></a> <a class="route-language" href="{{url("")}}/es/tours/descubrimiento/perou-bolivia-expreso"><img class="img-lng" src="{{url("")}}/img/lng/es.png" alt="Idioma"></a> <a class="route-language" href="{{url("")}}/de/tours/Entdeckung/peru-bolivien-express"><img class="img-lng" src="{{url("")}}/img/lng/de.png" alt="Idioma"></a> <a class="route-language" href="{{url("")}}/it/tours/scoperta/peru-bolivia-espresso"><img class="img-lng" src="{{url("")}}/img/lng/it.png" alt="Idioma"></a> </div> </div> </div>@endsection
            @section("content")<div class="trip-detail"> <div class="container">
            <div class="col-md-9 tab-wrap"> <h2>Le Blog</h2>
            <div id="shop-detail">  
            </div><ul class="nav nav-tabs" data-toggle="tabs"> <li class="active"><a href="#itenary"></a></li> </ul><div class="tab-content paper-effect"> <div class="tab-pane active" id="itenary"> 
            @if(count($articles)!=0)@foreach($articles as $article) <div class="row day-description-content"> <div class="col-sm-4"> <img src="{{url("")}}/{{$article->image}}" class="img-day" alt=""> </div> <div class="col-sm-8"> <h4 class="text-success">{{$article->title}}</h4> <p>{{$article->description}}</p> </div> </div> @endforeach
            @else
            <p>Aun no existe articulos en este blog</p>
            @endif
            </div></div> </div></div> </div> @endsection