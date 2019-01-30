<?php use App\Models\Article;
$articles = Article::where('blog_id',1)->get();?>
@extends('website.partials.maintrip')
@section('title', 'Voyage combiné Pérou/Bolivie, Machu Picchu, Salar Uyuni, Titicaca, Laguna Colora')
@section('keywords', 'machu picchu, agence voyage, voyage de noce, circuit perou, voyage perou, voyage au perou, perou, nomade aventure, le perou, lac titicaca, tour operateur, Agence de voyages au Pérou')
@section('description', 'Découvrez les incontournables du Pérou et de la Bolivie dans ce combiné parfaitement équilibré. Nature et découvertes culturelles ne manqueront pas à lappel.')

@section('translate')

    <div class="top-header">
        <div class="wrap-top">
            <div class="info-top pull-left">
                <small class="top-element"><strong><a href="#">Info: terandes@terandes.com</a></strong></small>
                <small class="top-element"><a href="#">Appelez-nous maintenant: 00 51 84 247277</a></small>
            </div>
            <div class="language-top pull-right">
                <small class="top-element-language">Langue:</small>
                <a class="route-language" href="#"><img class="img-lng" src="{{url('')}}/img/lng/fr.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/en/tours/discovery/peru-bolivia-express"><img class="img-lng" src="{{url('')}}/img/lng/en.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/es/tours/descubrimiento/perou-bolivia-expreso"><img class="img-lng" src="{{url('')}}/img/lng/es.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/de/tours/Entdeckung/peru-bolivien-express"><img class="img-lng" src="{{url('')}}/img/lng/de.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/it/tours/scoperta/peru-bolivia-espresso"><img class="img-lng" src="{{url('')}}/img/lng/it.png" alt="Idioma"></a>
            </div>
        </div>
    </div>

@endsection

@section('content')

<div class="trip-detail" style="position:relative;height:100%">
    <div class="container" style="height:100%">

        <div class="col-md-9 tab-wrap" >
            <h2>Le Blog</h2>

            <div id="shop-detail">

            </div>
            <ul class="nav nav-tabs" data-toggle="tabs">
                <li class="active"><a href="#itenary"></a></li>
            </ul>

            <div class="tab-content paper-effect" >
                <div class="tab-pane active" id="itenary">
                    
                    <div class="row day-description-content" >
                        <div class="col-sm-4">
                            <img src="{{url('')}}/" class="img-day" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h4 class="text-success">No existe articulos en este blog</h4>
                            
                        </div>
                    </div>

                </div>


            </div>
        </div>

    </div>
</div>
@endsection
