@extends('website.partials.de.maindecouvertede')
@section('title', 'Découverte')
@section('keywords', 'machu picchu, agence voyage, voyage de noce, circuit perou, voyage perou, voyage au perou, perou, nomade aventure, le perou, lac titicaca, tour operateur, Agence de voyages au Pérou')
@section('description', 'Cette catégorie de voyages est dédiée aux voyageurs qui souhaitent découvrir le pays et ses richesses, sans difficulté particulière si ce n\'est de choisir le séjour qui vous est le plus adapté. Nous ne vous présentons que des idées de voyages : si vous souhaitez y apporter des modifications ou créer votre propre voyage, consultez-nous par le biais de notre page "Sur mesure".')



@section('content')

    

    <main>
    	<div class="container">

            <div class="col-sm-4">
                <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading1One">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse1One" aria-expanded="true" aria-controls="collapse1One">
                                    Filtre
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1One" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1One">

                            <div class="panel-body">

                                <form class="sidebar sort" action="{{ url('') }}/filterTours" method="get">
                                    <div class="form-group">
                                        
                                        @if($tour_category == "Discover")
                                         <p align="center">Discover</p>
                                         <input type="hidden" name="tour_category" value="Discover">
                                        @elseif($tour_category == "Aventure")
                                        <p align="center">Aventure</p>
                                        <input type="hidden" name="tour_category" value="Aventure">
                                        @elseif($tour_category == "High-Mountain")
                                        <p align="center">High Mountain</p>
                                        <input type="hidden" name="tour_category" value="High-Mountain">
                                        @elseif($tour_category == "Excursions")
                                        <p align="center">Excursion</p>
                                        <input type="hidden" name="tour_category" value="Excursions">
                                        
                                        @elseif($tour_category == "Group")
                                         <p align="center">Group</p>
                                         <input type="hidden" name="tour_category" value="Group">
                                        @elseif($tour_category == "Family")
                                        <p align="center">Family</p>
                                        <input type="hidden" name="tour_category" value="Family">
                                        @elseif($tour_category == "Friends")
                                        <p align="center">Friends</p>
                                        <input type="hidden" name="tour_category" value="Friends">
                                        @elseif($tour_category == "Couple")
                                        <p align="center">Couple</p>
                                        <input type="hidden" name="tour_category" value="Couple">
                                        @endif
                                        
                                        
                                        
                                        <div class="icono">
                                        
                                        
                                         @if($tour_category == "Discover")
                                        <img src="{{url('')}}/img/des1.jpg" height="30%" width="50%" class="img-circle" >
                                        
                                        
                                        @elseif($tour_category == "Aventure")
                                        <img src="{{url('')}}/img/aven1.jpg" height="30%" width="50%" class="img-circle">
                                        
                                        
                                        @elseif($tour_category == "Excursions")
                                        <img src="{{url('')}}/img/excur2.gif" height="30%" width="50%" class="img-circle">
                                        
                                        
                                        @elseif($tour_category == "High-Mountain")
                                        <img src="{{url('')}}/img/Altamon1.jpg" height="30%" width="50%" class="img-circle">
                                        
                                        
                                        @endif

                                        @if($tour_category == "Group")
                                        <img src="{{url('')}}/img/grupo1icono.png" height="30%" width="50%" class="img-circle" >
                                        
                                        
                                        @elseif($tour_category == "Family")
                                        <img src="{{url('')}}/img/familia1icono.png" height="30%" width="50%" class="img-circle">
                                        
                                        
                                        @elseif($tour_category == "Friends")
                                        <img src="{{url('')}}/img/amigos1icono.png" height="30%" width="50%" class="img-circle">
                                        
                                        
                                        @elseif($tour_category == "Couple")
                                        <img src="{{url('')}}/img/couple1icono.png" height="30%" width="50%" class="img-circle">
                                        
                                        
                                        @endif
                                          </div>  
                                            <br><br>
                                        <label><strong>Kategorien</strong></label>
                                        <select class="form-control selectpicker" name="category">
                                            <option value="Discover">Entdeckt</option>
                                            <option value="Adventure">Abenteuer</option>
                                            <option value="Excursions">Ausflug</option>
                                            <option value="High Mountain">Hoher Berg</option>
                                            <option value="none">None</option>
                                        </select>
                                    </div>
                                    <input type="hidden" name="language" value="{{ $language }}">
                                    <div class="form-group">
                                        <label><strong>Difficulté</strong></label>
                                        <select class="form-control selectpicker" name="difficult">
                                            <option value="Easy">Einfach</option>
                                            <option value="Medium">Durchschnittlich</option>
                                            <option value="Difficult">Hart</option>
                                            <option value="Very Difficult">Sehr schwer</option>
                                            <option value="none">None</option>
                                        </select>
                                    </div>

                                    

                                    <div class="form-group">
                                        <label><strong>Price <em>(in USD)</em></strong></label>
                                        <div class="price-widget">
                                            <div id="price-slider"></div>
                                            <div id="amount-min" class="pull-left"></div>
                                            <div id="amount-max" class="pull-right"></div>
                                            <input type="hidden" name="minA" id="minA">
                                            <input type="hidden" name="maxA" id="maxA">
                                        </div>
                                    </div>

                                    <button class="btn btn-search btn-primary hvr-sweep-to-right col-sm-12" type="submit">Recherche</button>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- CONTENEDOR DE LISTA -->
    		<div class="col-sm-8">

    			


                <!-- LISTA -->
            @foreach($tours as $tour)
    			<div class="item-list">
                    
                        <div class="col-sm-5">
        					<div class="item-img row" style="background-image: url('{{url('')}}/{{  $tour->coverpage}}');">
        						<div class="item-overlay">
                                    
                                            <a href="{{url('')}}/de/tourshow/{{ $tour->id }}"><span class="icon-hiking"></a>  
                                                                 
                                    </span></a>
                                    
                                </div>
        					</div>
        				</div>
        				<div class="col-sm-7">
        					<div class="item-desc">
        						<a href="{{url('')}}/de/tourshow/{{ $tour->id }}" h5 class="item-title">{{ $tour->title}}</h5></a>
        						<div class="sub-title">
        							Peru
        						</div>
        						<div class="item-excerpt">{{ $tour->summary}}</div>

        						<div class="left"><span class="icon-calendar"></span> {{ $tour->days}} Tage / {{ $tour->days -1}} Nuits</div>
        						<div class="right">
        							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
        							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-balloon"></span></a>
        						</div>
        					</div>
        					<div class="item-book">
                                
                                    
                                    <a href="{{url('')}}/de/tourshow/{{ $tour->id }}" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
                                
        						
        						<div class="price">USD {{ $tour->price}}</div>
        					</div>
        				</div>
                    
    		    </div>
            @endforeach
                <!-- -->

                <!-- LISTA 
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/au-coeur-des-communautes-andines.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/decouverte/au-coeur-des-communautes-andines"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Au coeur des communautés andines</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Un parcours différent, hors des sentiers battus, à la rencontre des communautés andines. Vous commencez par séjourner au cœur du canyon de Colca, au sein de la communauté de Pumachiri. Puis vous poursuivez votre voyage vers le lac Titicaca et sa communauté de Llachon avant de terminer votre découverte par la région de Cusco et plus spécialement la communauté de Maras. Durant cette immersion, vous découvrez les activités quotidiennes et les traditions ancestrales des habitants de ces trois villages. Une découverte en profondeur de la culture péruvienne!</div>

    						<div class="left"><span class="icon-calendar"></span> 17 journées / 16 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-balloon"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/decouverte/au-coeur-des-communautes-andines" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 2650.00</div>
    					</div>
    				</div>
    		    </div>-->
                <!-- -->

                <!-- LISTA 
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/le-perou-en-famille.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/decouverte/le-perou-en-famille"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Le Pérou en famille</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Ce voyage est conçu pour permettre de découvrir le Pérou, dans un esprit ludique qui séduira petits et grands. Des activités culturelles avec les communautés locales vous sont également proposés. Vos enfants et vous passerez ainsi un voyage agréable et divertissant pendant lequel vous n’aurez jamais l’occasion de vous ennuyer ! Un séjour idéal pour vous et votre famille.</div>

    						<div class="left"><span class="icon-calendar"></span> 14 journées / 13 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-balloon"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/decouverte/le-perou-en-famille" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 1730.00</div>
    					</div>
    				</div>
    		    </div>-->
                <!-- -->

                <!-- LISTA 
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/le-perou-culturel-du-nord-au-sud.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/decouverte/le-perou-culturel-du-nord-au-sud"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Le Pérou culturel, du Nord au Sud</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Le Pérou est un pays chargé d’histoire : vous aurez l’occasion de le découvrir au cours de ce voyage qui vous mènera d’abord dans la région Nord, jadis dominée par de nombreuses civilisations pré-incas ayant laissé derrière elles une multitude de vestiges archéologiques. Vous plongerez ensuite au cœur de la civilisation inca en vous rendant à Cusco, ancienne capitale de l’empire précolombien, puis dans la Vallée sacrée où vous découvrirez, entre autre, l’un des joyaux du Pérou : la célèbre et majestueuse citadelle du Machu Picchu.</div>

    						<div class="left"><span class="icon-calendar"></span> 14 journées / 13 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-balloon"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/decouverte/le-perou-culturel-du-nord-au-sud" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 2020.00</div>
    					</div>
    				</div>
    		    </div>-->
                <!-- -->

                <!-- LISTA 
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/voyage-de-noces-au-perou.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/decouverte/voyage-de-noces-au-perou"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Voyage de noces au Pérou</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Quelle meilleure occasion que votre voyage de noces pour découvrir le Pérou, pays magique et mystique ! Nous avons concocté pour vous un programme qui associe les principaux sites et attraits de notre pays au charme de ses hébergements. Nuits romantiques sur l’île de Suasi avec vue imprenable sur le lac Titicaca, ou encore au pied du célèbre Machu Picchu… Tout a été pensé pour faire de votre voyage de noces un séjour inoubliable !</div>

    						<div class="left"><span class="icon-calendar"></span> 14 journées / 13 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-balloon"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/decouverte/voyage-de-noces-au-perou" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 3085.00</div>
    					</div>
    				</div>
    		    </div>-->
                <!-- -->

                <!-- LISTA 
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/perou-bolivie-express.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/decouverte/perou-bolivie-express"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Pérou-Bolivie Express</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Ce voyage est un concentré des sites archéologiques majeurs et des paysages les plus époustouflants du Pérou et de la Bolivie, en un temps record : en 13 jours, vous découvrirez la région de Cusco et son Machu Picchu, la capitale bolivienne et sa folle ambiance, et le Salar d’Uyuni aux couleurs inoubliables, tout en rencontrant la population locale. Un séjour intense fait pour de courtes vacances !</div>

    						<div class="left"><span class="icon-calendar"></span> 12 journées / 11 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-balloon"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/decouverte/perou-bolivie-express" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 2035.00</div>
    					</div>
    				</div>
    		    </div>-->
                <!-- -->

                <!-- LISTA 
    			<div class="item-list">
                    <div class="col-sm-5">
    					<div class="item-img row" style="background-image: url('{{url('')}}/img/files/voyage-special-fetes-religieuses-et-pont-inca.jpg');">
    						<div class="item-overlay">
    							<a href="{{url('')}}/tours/decouverte/voyage-special-fetes-religieuses-et-pont-inca"><span class="icon-hiking"></span></a>
    						</div>
    					</div>
    				</div>
    				<div class="col-sm-7">
    					<div class="item-desc">
    						<h5 class="item-title">Voyage spécial : Fêtes religieuses et pont inca</h5>
    						<div class="sub-title">
    							Pérou
    						</div>
    						<div class="item-excerpt">Ce séjour vous permet d'assister aux deux fêtes les plus importantes du Pérou. Venez découvrir sa population et ses traditions ancestrales.</div>

    						<div class="left"><span class="icon-calendar"></span> 20 journées / 19 Nuits</div>
    						<div class="right">
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
    							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-balloon"></span></a>
    						</div>
    					</div>
    					<div class="item-book">
    						<a href="{{url('')}}/tours/decouverte/voyage-special-fetes-religieuses-et-pont-inca" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
    						<div class="price">USD 2555.00</div>
    					</div>
    				</div>
    		    </div>-->
                <!-- -->


                <!-- PAGINACION -->
                <!--<div class="pagination-wrap">
                	<span class="total">Total 127</span>
                	<nav class="pull-right">
                		<ul class="pagination">
                			<li class="page-item">
                				<a class="page-link" href="#" aria-label="First">Premier</a>
                			</li>
                			<li class="page-item"><a class="page-link" href="#">1</a></li>
                			<li class="page-item active"><a class="page-link" href="#">2</a></li>
                			<li class="page-item"><span class="page-link">..</span></li>
                			<li class="page-item"><a class="page-link" href="#">99</a></li>
                			<li class="page-item">
                				<a class="page-link" href="#" aria-label="Last">Dernier</a>
                			</li>
                		</ul>
                	</nav>
                	<div class="clearfix"></div>
                </div>-->
                <!-- -->

            </div>
            <!-- FIN CONTENEDOR DE LISTA -->
        </div>
        
        	<a href="https://www.facebook.com/tierrasdelosandes" class="floatFacebook">
		<i class="fa fa-facebook my-float"></i>
	</a>
	<a href="https://twitter.com/terandes1" class="floatTwitter">
		<i class="fa fa-twitter my-float"></i>
	</a>
	<a href="https://codepen.io/androidcss/pen/yOopGp" class="floatGoogle">
		<i class="fa fa-google-plus my-float"></i>
	</a>
	
    </main>



<style>
.icono{
    padding: 0px 0px 0px 90px;
}
  h4{
    color: #fff;
    
  }
  p{
    font-size:38px; color:#4b4b4b;
    margin-left: 15px 15px;
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

 @include('website.de.footerDE')


@endsection
