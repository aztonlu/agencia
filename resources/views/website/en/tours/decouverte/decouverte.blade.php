@extends('website.partials.en.mainen')
@section('title', 'Découverte')
@section('keywords', 'machu picchu, agence voyage, voyage de noce, circuit perou, voyage perou, voyage au perou, perou, nomade aventure, le perou, lac titicaca, tour operateur, Agence de voyages au Pérou')
@section('description', 'Cette catégorie de voyages est dédiée aux voyageurs qui souhaitent découvrir le pays et ses richesses, sans difficulté particulière si ce n\'est de choisir le séjour qui vous est le plus adapté. Nous ne vous présentons que des idées de voyages : si vous souhaitez y apporter des modifications ou créer votre propre voyage, consultez-nous par le biais de notre page "Sur mesure".')

@section('translate')

    

@endsection

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
                                        <img src="{{url('')}}/img/aven1.jpg" height="30%" width="50%" class="img-circle" >
                                        
                                        
                                        @elseif($tour_category == "Aventure")
                                        <img src="{{url('')}}/img/des1.jpg" height="30%" width="50%" class="img-circle">
                                        
                                        
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
                                        <label><strong>Categories</strong></label>
                                        <select class="form-control selectpicker" name="category">
                                            <option value="Discover">Discover</option>
                                            <option value="Adventure">Adventure</option>
                                            <option value="Excursions">Excursions</option>
                                            <option value="High Mountain">High Mountain</option>
                                        </select>
                                    </div>
                                    <input type="hidden" name="language" value="{{ $language }}">
                                    <div class="form-group">
                                        <label><strong>Dificult</strong></label>
                                        <select class="form-control selectpicker" name="difficult">
                                            <option value="Easy">Easy</option>
                                            <option value="Medium">Medium</option>
                                            <option value="Difficult">Hard</option>
                                            <option value="Very Difficult">Very  Hard</option>
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

                                    <button class="btn btn-search btn-primary hvr-sweep-to-right col-sm-12" type="submit">Search</button>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

    		<div class="col-sm-8">

    		

                <!-- LISTA -->
            @foreach($tours as $tour)
    			<div class="item-list">
                    
                        <div class="col-sm-5">
        					<div class="item-img row" style="background-image: url('{{url('')}}/{{  $tour->coverpage}}');">
        						<div class="item-overlay">
                                    
                                            <a href="{{url('')}}/en/tourshow/{{ $tour->id }}"><span class="icon-hiking"></a>  
                                                                 
                                    </span></a>
                                    
        						</div>
        					</div>
        				</div>
        				<div class="col-sm-7">
        					<div class="item-desc">
        						<h4 class="item-title"><a href="{{url('')}}/en/tourshow/{{ $tour->id }}">{{ $tour->title}}</h4></a>
        						<div class="sub-title">
        							Peru
        						</div>
        						<div class="item-excerpt">{{ $tour->summary}}</div>

        						<div class="left"><span class="icon-calendar"></span> {{ $tour->days}} Days / {{ $tour->days -1}} Nights</div>
        						<div class="right">
        							<a href="" data-toggle="tooltip" data-placement="bottom" title="Difficulté - Moyen" ><span class="icon-medium"></span></a>
        							<a href="" data-toggle="tooltip" data-placement="bottom" title="Decouverte"><span class="icon-balloon"></span></a>
        						</div>
        					</div>
        					<div class="item-book">
                                
                                    
                                    <a href="{{url('')}}/en/tourshow/{{ $tour->id }}" class="btn btn-primary hvr-sweep-to-right">Reserve</a>
                                
        						
        						<div class="price">USD {{ $tour->price}}</div>
        						
        					</div>
        				</div>
                    
    		    </div>
            @endforeach

            </div>
           
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

 @include('website.en.footerEN')
  
  
@endsection
