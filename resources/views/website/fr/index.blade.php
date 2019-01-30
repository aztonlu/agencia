@extends('website.partials.maindescubrirnuevofr')
@section('title', 'Terandes')
@section('keywords', 'agence voyage perou, voyage perou, tour operateur perou, aventure inca perou, agence de voyages au perou, voyage au perou, circuit perou, perou tourisme')
@section('description', 'Tierras de los Andes: Agence de voyages et Tour opérateur péruvien spécialiste des voyages découverte, aventure, randonnée et trekking en petit groupe et sur mesure')



@section('content')

<section id="imagenes-ferias" class="parallax" style="color: #4b4b4b" "padding-top:10px; padding-bottom: 10px">
    
    <div class="container">
      <div class="row">
      	<h2 align="center" style="color: #4b4b4b">Blog</h2>
      	 <br>
      	 <h4><p align="center" style="color: #4b4b4b">sera représenté à la Foire internationale du tourisme, qui se tiendra les 6, 7 et 8 novembre Londres!</p></h4>
    	<br>
        
        <div class="col-sm-12">
        	<center>
        		<a href="{{ URL::to('http://london.wtm.com/') }}"><img src="img/feria2corregida.png" class="img-rounded"></a>
          		<h3 style="color: #4b4b4b">6 - 7 - 8 Novembre 2017</h3>
            	<a href="{{ URL::to('http://london.wtm.com/') }}" p>Salon International Tourisme Voyages e Londres</p></a>
        	</center>
        </div>
        
        
        
      </div>
    </div>
  </section>
  
  <br><br><br><br><br><br>
<section id="about-us" class="parallax" style="color: #4b4b4b" padding-top:500px; padding-bottom: 300px>
    <br>
    <br>
    
    <div class="container">
      <div class="row">
      	<h2 align="center" style="color: #4b4b4b">À mesure</h2>
      	 <br>
    	<br>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/fr/tours/Group"><img src="img/grupo1icono.png" height="60%" width="60%" class="img-rounded"></a>
          		<a href="{{url('')}}/fr/tours/Group"><h3 style="color: #4b4b4b">En groupe</h3></a>
            	<p>Un voyage qui satisfera tout le monde</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/fr/tours/Family"><img src="img/familia1icono.png" height="60%" width="60%" class="img-rounded">
          		<h3 style="color: #4b4b4b">En famille</h3></a>
            	<p>Profitez d'un voyage adapté pour les adultes ainsi que pour les jeunes</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/fr/tours/Couple"><img src="img/couple1icono.png" height="60%" width="60%" class="img-rounded">
          		<h3 style="color: #4b4b4b">Couple</h3></a>
            	<p>Partagez des moments inoubliables avec votre partenaire</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/fr/tours/Friends"><img src="img/amigos1icono.png" height="60%" width="60%" class="img-rounded">
          		<h3 style="color: #4b4b4b">Friends</h3></a>
            	<p>Renforcez votre complicité en partant vers de nouvelles aventures !</p>
        	</center>
        </div>
        
      </div>
    </div>
  </section>





  <section id="portfolio" style="padding-top:0px; padding-bottom: 0px">
      <br>
      <br>
      <br>
      <br>
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Préparez votre voyage</h2>
          <br><br><br>
          
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="img/peru_portada.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Peru</h3>
                    <p>Informations générales, Formalités, Santé et sécurité, Que dois-je apporter?, Meilleure saison, Vacances, Informations pratiques.</p>
                  </div>
                  <div class="folio-overview">
                    <!--<span class="folio-link"><a class="folio-read-more" href=""><i class="fa fa-link"></i></a></span>-->

                    <span class="folio-expand"><a data-toggle="modal" data-target=".bs-example-modal-lg" class="course_more"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false">
          <div class="modal-dialog modal-lg">
            <div class="modal-header" style="background-color: #2a6f14">
                      <button type="button" data-dismiss="modal" align="rigth" style="border-color: transparent;background-color: transparent; color: #fff">&times;</button>
                      <h3 align="center" style="color: #fff; margin-top: 0px;">Informations générales Pérou</h3>
                  </div>
            <div class="modal-content">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                     <img class="img-responsive" src="img/peru11.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Informations générales <br>
                        <p align="justify"> Le Pérou, c’est :</p> <br>
                        <p align="justify">• Une population d’environ 30 millions d’habitants. <br>
                        • Un PNB de $301.5 milliards de dollars en 2011. <br>
                        • Une surface totale de 1 285 220 km², soit trois fois la superficie de la France. <br>
                        • 2414 Km de côte. <br>
                        • Un pays ayant frontière commune avec le Chili, l’Argentine, le Brésil, l’Équateur et la Bolivie. <br>
                        • Un pays ayant comme point culminant le mont Huascarán, à 6768 mètres d’altitude.     <br>
                        <br>
                        <br></p>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru22.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        <p align="center">Santé et sécurité<br></p>

                        <p align="center">Généralités : Au Pérou, il est important de respecter quelques règles d’hygiène et de santé. Nous vous conseillons donc de :<br>
 
                        • Ne pas boire l’eau du robinet, sauf si elle est bouillie ou purifiée à l’aide de pastilles. <br>
                        • Vous laver régulièrement les mains pour limiter les risques de contaminations. <br>
                        • Éviter la viande et le poisson achetés sur les marchés : préférez les restaurants pour goûter aux spécialités telles que le ceviche.  <br><br>

                        Vaccins : Pour entrer au Pérou depuis la France, aucun vaccin n’est obligatoire. Certains sont cependant recommandés notamment les suivants :<br>
                        • Diphtérie-tétanos-poliomyélite<br>
                        • Fièvre jaune (en cas de séjour en Amazonie, et qui est obligatoire en cas de séjour  au Vénézuela depuis el Pérou) <br>
                        • Grippe (recommandée pour les sujets les plus fragiles, de nombreux cas de grippe AH1N1 ayant été détectés au Pérou)<br></p>

                      </div>
                    </div>
                     <div class="item">
                      <img class="img-responsive" src="img/peru33.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        <p>Que dois-je apporter?<br></p>
                        <p>Voici une liste exhaustive de ce qu’il faut apporter lors d’un voyage au Pérou <br>
 
                        Général : - Une valise ou un sac souple - Un sac à dos de 20 à 30 litres - Des chaussures confortables - Un chapeau ou casquette - Des lunettes de soleil - Une veste imperméable de type Gore Tex - Des vêtements chauds pour les soirées, car avec l’altitude, la température chute vite - Une trousse à pharmacie - Un foulard ou cache cou - Shorts ou pantacourts</p>

                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru44.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                       <p> Meilleure saison, Vacances <br></p>
                        <p>Le Pérou est aussi constitué de régions aussi nombreuses que distinctes (côte, Andes, Amazonie) caractérisése par des climats très différents les uns des autres :  <br>  
                        • Sur la côte, l’été austral (novembre à avril) affiche de fortes températures, tandis que l’hiver est plus frais (mais jamais froid) et marqué par des brumes matinales.  <br>  
                        • Dans les Andes et en Amazonie, il existe deux saisons principales : la saison sèche (mai à octobre) et la saison humide (novembre à avril). S’il est tout à fait possible de voyager dans la région andine durant la saison des pluies, il est cependant fort déconseillé de randonner en montagne, où les chutes de neige rendant les sentiers dangereux.     <br>
                        • Dans les Andes, le temps peut être très changeant au cours d’une même journée. Nous vous conseillons donc de prévoir des vêtements variés, c'est-à-dire chauds pour les soirées fraîches, plus légers pour les journées souvent ensoleillés, et un vêtement de pluie.  <br></p>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru55.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        <p>Informations pratiques<br></p>
                        <p>DÉCALAGE HORAIRE De mars à octobre (heure d’été), il faudra reculer votre montre de 7 heures en arrivant au Pérou, et de 6 heures seulement de novembre à février.   <br>
                        ÉLECTRICITÉ Voltage : 110/220V  <br>
                        Fréquence : 50/60 Hertz Les prises électriques au Pérou sont de deux types :  TÉLÉPHONE ET TÉLÉCOMMUNICATIONS Il est très facile de communiquer avec ses amis ou sa famille depuis le Pérou, les cabines téléphoniques étant nombreuses, et la couverture internet très bonne. <br>
                        Pour appeler du Pérou vers la France : 00 + 33 + numéro du correspondant (sans le 0 initial).  <br>
                        Pour appeler de la France vers le Pérou : 00 + 51 + indicatif de la ville (sans le 0) + numéro du correspondant.   <br>
                        Pour effectuer des appels intérieurs : indicatif de la région + numéro si l’on appelle dans une autre région. Sinon, ne pas composer l’indicatif.</p>
                        <br>
                        
                      </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="img/bolivia_portada.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Bolivia</h3>
                    <p>Informations générales, Formalités, Santé et sécurité, Que dois-je apporter?, Meilleure saison, Vacances, Informations pratiques.</p>
                  </div>
                  <div class="col-sm-12">
                  <div class="folio-overview">
                    <!--<span class="folio-link"><a class="folio-read-more" href="#" data-single_url="info2.html" ><i class="fa fa-link"></i></a></span>-->
                     <span class="folio-expand"><a data-toggle="modal" data-target=".bs-example-modalBoliva-lg" class="course_more"><i class="fa fa-search-plus"></i></a></span>
                  </div>

                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade bs-example-modalBoliva-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel1" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-header" style="background-color: #2a6f14">
                      <button type="button" data-dismiss="modal" align="rigth" style="border-color: transparent;background-color: transparent; color: #fff">&times;</button>
                      <h3 align="center" style="color: #fff; margin-top: 0px;">Informations générales Bolivia</h3>
            </div>
            <div class="modal-content">
              <div id="carousel-example-generic-bolvia" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                     <img class="img-responsive" src="img/bolivia11.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        <p>Informations générales <br></p>
                        <p align="center"> Bolivia tiene :</p> <br>
                        <p>• Une population d’environ 10,6 millions d’habitants. <br>
                        • Un PNB de $61.35 milliards de dollars en 2013. <br>
                        • • Une surface totale de 1 099 km², soit deux fois la superficie de la France. <br>
                        • 2414 Km de côte. <br>
                        • Un pays qui n’a pas de côtes maritimes et est entourée par le Pérou au Nord Ouest, par le Brésil au Nord et à l'Est, par le Paraguay au Sud Est, par l'Argentine au Sud et par le Chili à l'Ouest. <br>
                        • Le point le plus élevé de la Bolivie est le Nevado Sajama, 6,542m d’altitude.     <br>
                        <br>
                        Une destination à part :   <br>
                        La Bolivie est un des pays les plus sûr du continent.
                        • Il reste tout de même le pays le moins développé d’Amérique du sud.  <br></p>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/bolivia22.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                      <p>Santé et sécurité<br></p>

                        <p>Généralités : En Bolivie, il est important de respecter quelques règles d’hygiène et de santé. Nous vous conseillons donc de:</p>
 
                        • Ne pas boire l’eau du robinet, sauf si elle est bouillie ou purifiée à l’aide de pastilles. <br>
                        • Vous laver régulièrement les mains pour limiter les risques de contaminations. <br>
                        • Éviter la viande et le poisson achetés sur les marchés : préférez les restaurants pour goûter aux spécialités telles que le ceviche.  <br>

                        Vaccins : Pour entrer en Bolivie depuis la France, aucun vaccin n’est obligatoire. Certains sont cependant recommandés notamment les suivants :<br>
                        • Diphtérie-tétanos-poliomyélite-hépatite A-hépatite B<br>
                        • Fièvre jaune (en cas de séjour en Amazonie et zones tropicales) <br>
                        
                        <p>Séjour en Amazonie : A la suite de l’apparition d’un cas récent, les autorités boliviennes recommandent aux voyageurs d’être vaccinés contre la fièvre jaune. Il est par ailleurs conseillé de respecter toutes les précautions d’usage (utilisation de répulsif anti-moustique, port de vêtements couvrants) en particulier dans les zones amazoniennes.</p>

                      </div>
                    </div>
                     <div class="item">
                      <img class="img-responsive" src="img/bolivia33.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                      <p> Que dois-je apporter? <br></p>
                        Voici une liste exhaustive de ce qu’il faut apporter lors d’un voyage au Pérou <br>
                         
                        Général : - Une valise ou un sac souple<br>
- Un sac à dos de 20 à 30 litres<br>
- Des chaussures confortables<br>
- Un chapeau ou casquette<br>
- Des lunettes de soleil<br>
- Une veste imperméable de type Gore Tex<br>
- Des vêtements chauds pour les soirées, car avec l’altitude, la température chute vite<br>
- Une trousse à pharmacie<br>
- Un foulard ou cache cou<br>
- Shorts ou pantacourts
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/bolivia44.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Meilleure saison, Vacances <br>
                        Le Pérou est aussi constitué de régions aussi nombreuses que distinctes (côte, Andes, Amazonie) caractérisése par des climats très différents les uns des autres :  <br>  
                        • Sur la côte, l’été austral (novembre à avril) affiche de fortes températures, tandis que l’hiver est plus frais (mais jamais froid) et marqué par des brumes matinales.  <br>  
                        • Dans les Andes et en Amazonie, il existe deux saisons principales : la saison sèche (mai à octobre) et la saison humide (novembre à avril). S’il est tout à fait possible de voyager dans la région andine durant la saison des pluies, il est cependant fort déconseillé de randonner en montagne, où les chutes de neige rendant les sentiers dangereux.     <br>
                        </p>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/bolivia55.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                       Informations pratiques<br>
                        DÉCALAGE HORAIRE De mars à octobre (heure d’été), il faudra reculer votre montre de 7 heures en arrivant au Bolivia, et de 6 heures seulement de novembre à février.   <br>
                        ÉLECTRICITÉ Voltage : 110/220V  <br>
                        Fréquence : 50/60 Hertz Les prises électriques au Bolivia sont de deux types :  TÉLÉPHONE ET TÉLÉCOMMUNICATIONS Il est très facile de communiquer avec ses amis ou sa famille depuis le Bolivia, les cabines téléphoniques étant nombreuses, et la couverture internet très bonne. <br>
                        Pour appeler du Bolivia vers la France : 00 + 33 + numéro du correspondant (sans le 0 initial).  <br>
                        Pour appeler de la France vers le Bolivia : 00 + 591 + indicatif de la ville (sans le 0) + numéro du correspondant.   <br>
                        Pour effectuer des appels intérieurs : indicatif de la région + numéro si l’on appelle dans une autre région. Sinon, ne pas composer l’indicatif.
                        
                      </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic-bolvia" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic-bolvia" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-arrow-right"></span>
                  </a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section>





  <section id="team" style="padding-top: 0px; padding-bottom: 0px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Qui sommes-nous ?</h2>
            <p>Tierras de los Andes est une S.A.C (Société Anonyme Fermée) qui a ouvert ses portes en 2000. Tour opérateur péruvien spécialisé dans les voyages d’aventures, nous avons comme principal objectif la création de séjours complets hors des sentiers battus. </p>
            <p>Tierras de los Andes est une agence qui organise des séjours et offre une large sélection de prestations et de services destinés à une clientèle individuelle ou de groupes. Nous concevons tout type de séjour, du voyage « découverte » au trek d’aventure, en passant par les séjours d'affaires. Nous recevons aussi bien des familles que des entreprises du monde entier afin de leur faire découvrir le Pérou et plus généralement l’Amérique du Sud.</p>
          </div>

        </div>
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Notre état d'esprit</h2>
            <p>Tierras de los Andes offre un large panel de services, depuis la planification des opérations jusqu’à la coordination des voyages sur mesure en passant par un service clientèle de qualité. Ce tour operateur péruvien repose sur une équipe de professionnels donnant le meilleur d’eux-mêmes pour assurer les meilleurs services possibles aux voyageurs et garantir ainsi, une satisfaction totale.</p>
            <p>Un esprit Aventure : le Pérou est un paradis pour le Tourisme d’Aventure. Qu’il s’agisse de gravir les montagnes, de marcher sur d’anciens sentiers incas, de parcourir les réseaux de chemins qui sillonnent le pays, de pratiquer du rafting en eaux vives. Tierras de los Andes vous propose tout type de voyages d’Aventure selon le niveau recherché : De l’extrême adrénaline aux aventures plus simples, pour amateurs ou passionnés.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>L'équipe Tierras de los Andes <a href="{{url('')}}/tours/decouverte/le-perou-en-famille"></a></h2>
          <br>
          <p align="center">Expérience et enthousiasme pour créer et vous proposer les voyages les plus originaux au Pérou. Nous opérons du cœur des Andes, Cusco où est situé notre siège social.</p>
          <br><br>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
          <div class="member-image">
            <img class="img-responsive" src="img/gruponuevo4.gif" alt="">
          </div>
          <div class="member-info">
            
          </div>
        </div>
      </div>
          
    </div>
  </section><!--se acaba modulo de nosotros--> 
  <!--<section id="blog2">-->
      
  <!--</section>-->

<section id="titu" style="padding-top: 0px; padding-bottom: 0px;">
  
  <h2 style="color: #4b4b4b; padding-top: 5%;" align="center">Blog</h2>
  <div class="carousel-inner" id="titleBlog">
    <?php $count=0;?>
      @foreach($blogs as $blog)
        @if($count==0)
          <div style="padding-top: 8%;">
              <a href="{{$blog->link}}"><h4 align="center">{{$blog->name}}</h4></a>
              <a href="{{$blog->link}}"><h4 align="center">{{$blog->description}}</h4><a/>
          </div>
                  
        @endif
        <?php $count++;?>
      @endforeach
  </div>
</section>


  
  <section id="testimonial" style="padding-top: 60px; padding-bottom: 20px">
      
      
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Témoignages</h2>
          <p data-toggle="modal" data-target="#favoritesModal"<h2>Partager expériences de voyage avec nous</h2></p>
        </div>
       </div>
     
          <div class="col-sm-12 wow fadeInUp" data-wow-duration="10ms" data-wow-delay="10ms">
            <div class="post-thumb">
              <div id="post-carousel"  class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @for($i=0;$i<count($testimonials)/3;$i++)
                @if($i==0)
                  <li data-target="#post-carousel" data-slide-to="{{$i}}" class="active"></li>
                @else
                  <li data-target="#post-carousel" data-slide-to="{{$i}}"></li>
                @endif
                    @endfor
                </ol>
                <div class="carousel-inner">
                    @for($i = 0; $i < count($testimonials); $i += 3) 
	                    @if($i==0)
	                    <div class="item active">
	                    @else
	                    <div class="item">
	                    @endif
	                    @if($i<count($testimonials))
	                    <div class="col-sm-4">    
	                    <div class="post-thumb">
	                      <a href="#"><img class="img-responsive" src="{{$testimonials[$i]->photo}}" alt=""></a>
	                      </div>
	                    <div class="entry-header">
	                      <h3><a href="#">{{$testimonials[$i]->name}}</a></h3>
	                      <span class="date">{{$testimonials[$i]->date}}</span>
	                      <span class="cetagory"> </span><!--TOUR???-->
	                    </div>
	                    <div class="entry-content">
	                      <p>{{$testimonials[$i]->testimonial}} </p>
	                    </div>
	                  </div>
	                    @endif
                        @if(($i+1) < count($testimonials))
                        <div class="col-sm-4">
                        
	                    <div class="post-thumb">
	                      <a href="#"><img class="img-responsive" src="{{$testimonials[$i+1]->photo}}" alt=""></a>
	                    </div>
	                    <div class="entry-header">
	                     <h3><a href="#">{{$testimonials[$i+1]->name}}</a></h3>
	                     <span class="date">{{$testimonials[$i+1]->date}}</span>
	                      <span class="cetagory"></span><!--TOUR???-->
	                    </div>
	                    <div class="entry-content">
	                      <p>{{$testimonials[$i+1]->testimonial}} </p>
	                    </div>
                 	 </div>
                    @endif
                    @if($i+2 < count($testimonials))
                       <div class="col-sm-4">
                        
	                    <div class="post-thumb">
	                      <a href="#"><img class="img-responsive" src="{{$testimonials[$i+2]->photo}}" alt=""></a>
	                    </div>
	                    <div class="entry-header">
	                      <h3><a href="#">{{$testimonials[$i+2]->name}}</a></h3>
	                      <span class="date">{{$testimonials[$i+2]->date}}</span>
	                      <span class="cetagory"></span><!--TOUR???-->
	                    </div>
	                    <div class="entry-content">
	                      <p>{{$testimonials[$i+2]->testimonial}} </p>
	                    </div>
                 	 </div>
                    @endif
                    </div>
                    
                 @endfor
                </div>
                 
              </div>
				<div align="right"><a href="{{url('')}}/fr/listTestimonials" style="color: #0e4817">See More</a></div>  
            </div>
          
          </div>
          

      </div>
      <br><br>

        <div class="heading text-center col-sm-8 col-sm-offset-2" style="margin-top:-35px">
          <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>

    </div>
    
    
        <div class="heading text-center col-sm-8 col-sm-offset-2">
            <button 
            type="button" 
            class="btn btn-primary btn-lg" 
            data-toggle="modal" 
            data-target="#favoritesModal">
            Entrez votre témoignage
            </button>
        </div>
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
        id="favoritesModalLabel">Entrez votre témoignage</h3>
      </div>
             <div class="modal-body"> 

     <div style="padding:0 5 5 5">
          
        
                 <br>
          <form id="main2-contact-form" name="contact-form" method="post" action="{{ route('publictestimonials.store') }}" enctype="multipart/form-data">
             <?php $url = Request::path();?>
              <input type="hidden" name="language" value="{{$url}}">
              <input type="hidden" name="status" value="disapproved">
              <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Nom" required style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email" required style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                     <div class="col-sm-6">
                    <div class="form-group">
                      <!--<input type="date" name="date" class="form-control" placeholder="Date" required="required" style="border: 2px solid #e6e6e6;">-->
                      <input type="text" name="date" placeholder="Date" class="form-control" style="border: 2px solid #e6e6e6;" data-placement="down" value="" required >
                    </div>
                           </div>   
                    <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="nationality" class="form-control" placeholder="Nationalité" required style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="tour" class="form-control" placeholder="ville de référence" required style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                    <!--<div class="col-sm-6">
                              <div class="form-group">
                                <select name="tour" class="form-control">
                                 @foreach($tours as $tour) 
                                <option value="{{ $tour->id }}" selected="selected" > {{ $tour->title }} </option> 
                                @endforeach
                                </div>
                                </select>
                  </div>-->
                  
                  <!--aqui posiblemente este el error en validacion de texto desde responsive-->
              </div>
                
                     <!--<div class="col-sm-6">
                        <div class="form-group">
                                {!! Form::label('Iimagen', 'Imagen', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    <input id="imagen" type="file"  class="form-control" name="imagen" value="{{ old('imagen') }}" accept="image/png,image/gif,image/jpeg" onchange="readURL(this);">
                                </div>
                            </div>
                    </div>-->
                  </div>
                <div class="form-group">
                  <textarea name="testimonial" id="testimonial" class="form-control" rows="4" placeholder="Entrez votre témoignage" style="border: 2px solid #e6e6e6;" required></textarea>
                </div>
                <!--<center><div class="g-recaptcha" data-sitekey="6LckRDcUAAAAABk1EwZMaaw4eSAcnsL5Qz0jfNSe"></div></center>-->
                
                <div class="form-group">
                  <button type="" class="btn-submit">Envoyer maintenant</button>
                </div>
              </form>
                 </div>
     

 </div>
    </div>
</div>






  </section><!--/#testimonial-->
	
<section id="map-section" style="padding-top: 5%;">
    <br>
    
      <center>
        <h2>Contient</h2>
      </center>
      <br>
      
      <div class="col-sm-12">
          
          
          <div class="col-sm-6">
            
            <div class="panel panel-default">
              <div class="panel-body">
                <center>
                   <div id="google-map" class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"></div> 
                </center>
              </div>
              <div class="panel-footer" style="color: #000;">
                <p> Adresse: Calle Turquezas E-11 Urb. Kenedy A - Cusco - Perú</p>
                <p> Téléphone: 00 51 84 247277</p>
                <p> Email: <a href="#"> terandes@terandes.com</a></p>
              </div>
            </div>
            
            
          </div>

          <div class="col-sm-6">
            
            <div class="panel panel-default">
              <div class="panel-body">
                
                  <div id="google-map1" class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
                
              </div>
              <div class="panel-footer" style="color: #000;">
                <p> Adresse: Calle Bolivar 221 Oficina 4 1er piso Miraflores - Lima - Perú</p>
                <p> Téléphone: 00 51 1 2434475</p>
                <p> Email: <a href="#"> terandes@terandes.com</a></p>
              </div>
            </div>
            
            
          </div>

          
      </div>
      <div class="heading text-center col-sm-8 col-sm-offset-2">
<button 
   type="button" 
   class="btn btn-primary btn-lg" 
   data-toggle="modal" 
   data-target="#contactModal">
  Nous Contacter
</button>
</div>
      
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
</section>

<a href="https://www.facebook.com/tierrasdelosandes" class="floatFacebook">
    <i class="fa fa-facebook my-float"></i>
  </a>
  <a href="https://twitter.com/terandes1" class="floatTwitter">
    <i class="fa fa-twitter my-float"></i>
  </a>
  <a href="https://codepen.io/androidcss/pen/yOopGp" class="floatGoogle">
    <i class="fa fa-google-plus my-float"></i>
  </a>
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" 
            data-dismiss="modal" 
            aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title" 
          id="favoritesModalLabel">Nous Contacter</h3>
        </div>
          <div class="modal-body"> 

            <div style="padding:0 0 5 5">

                <form action="contact" method="post">
                  {{ csrf_field() }}
                    <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Nom" style="border: 2px solid #e6e6e6;" required>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" style="border: 2px solid #e6e6e6;" required>
                          </div>
                        </div> 
                        <div class="col-sm-6">
                          <div class="form-group">
                            <input type="text" name="nationality" class="form-control" placeholder="Nationalité" style="border: 2px solid #e6e6e6;" required>
                          </div>
                        </div>   
                    </div>  
                    <div class="form-group">
                      <textarea name="testimonial" id="testimonial" class="form-control" rows="4" placeholder="Nous Contacter" style="border: 2px solid #e6e6e6;" required></textarea>
                    </div>
                    <center><div class="g-recaptcha" data-sitekey="6LckRDcUAAAAABk1EwZMaaw4eSAcnsL5Qz0jfNSe"></div></center>
                    <div class="form-group">
                      <button type="" class="btn-submit">Envoyer</button>
                    </div>
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
#titleBlog {
    background-image: url(../img/fondo_blog_final.png);
    background-position: right bottom;
    background-repeat: no-repeat, repeat;
    /*padding: 5px;*/
    height: 407px;
    width: 100%;
    /*height: 300px;*/
    background-size: 100% 100%;
    /*border: 1px solid red;*/
}

footer{
  background-color: rgb(16,54,9);
}
</style>



<!--inicio del footer-->

@include('website.fr.footerFR')

  <!--fin  del footer-->








@endsection



