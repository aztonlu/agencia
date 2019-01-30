@extends('website.partials.en.main')
@section('title', 'Terandes')
@section('keywords', 'agence voyage perou, voyage perou, tour operateur perou, aventure inca perou, agence de voyages au perou, voyage au perou, circuit perou, perou tourisme')
@section('description', 'Tierras de los Andes: Agence de voyages et Tour opérateur péruvien spécialiste des voyages découverte, aventure, randonnée et trekking en petit groupe et sur mesure')

@section('translate')
    
@endsection

@section('content')

<section id="imagenes-ferias" class="parallax" style="color: #4b4b4b" "padding-top:10px; padding-bottom: 10px">
    
    <div class="container">
      <div class="row">
      	<h2 align="center" style="color: #4b4b4b">Blog</h2>
      	 <br>
      	 <h4><p align="center" style="color: #4b4b4b">Tierras de los Andes will be present at the international Tourism Travel exhibition which will take place on 6, 7 and 8 November in London!</p></h4>
    	<br>
        
        <div class="col-sm-12">
        	<center>
        		<a href="{{ URL::to('http://london.wtm.com/') }}"><img src="img/feria2corregida.png" class="img-rounded"></a>
          		<h3 style="color: #4b4b4b">6 - 7 - 8 November 2017</h3>
            	<a href="{{ URL::to('http://london.wtm.com/') }}" p>International Travel and Tourism Exhibition in London</p></a>
        	</center>
        </div>
        
        
        
      </div>
    </div>
  </section>
  
  
  
  
<section id="about-us" class="parallax" style="color: #4b4b4b" "padding-top:10px; padding-bottom: 10px">
    <br>
    <br>
    
    <div class="container">
      <div class="row">
      	<h2 align="center" style="color: #4b4b4b">Measure</h2>
      	 <br>
    	<br>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/en/tours/Group"><img src="{{url('')}}/img/grupo1icono.png" height="60%" width="60%" class="img-rounded">
          		<h3 style="color: #4b4b4b">In Group</h3></a>
            	<p>A trip that will satisfy everyone</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/en/tours/Family"><img src="{{url('')}}/img/familia1icono.png" height="60%" width="60%" class="img-rounded">
          		<h3 style="color: #4b4b4b">In family</h3></a>
            	<p>Enjoy an adapted trip for adults as well as for young people</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/en/tours/Couple"><img src="{{url('')}}/img/couple1icono.png" height="60%" width="60%" class="img-rounded">
          		<h3 style="color: #4b4b4b">Couple</h3></a>
            	<p>Share unforgettable moments with your partner</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/en/tours/Friends"><img src="{{url('')}}/img/amigos1icono.png" height="60%" width="60%" class="img-rounded">
          		<h3 style="color: #4b4b4b">Friends</h3></a>
            	<p>Share unforgettable moments with your friends</p>
        	</center>
        </div>
        
      </div>
    </div>
  </section>



  <section id="portfolio" style="padding-top:0px; padding-bottom: 0px">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Prepare your trip</h2>
          <br>
          <p> </p>
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
                    <p>General information, Formalities, Health and safety, What should I bring ?, Best season, Holidays, Practical information.</p>
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
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                        General information <br>
                         • A population of about 30 million. <br>
                         • Net banking income of $ 301.5 billion in 2011. <br>
                         • A total area of 1,285,220 km², three times the area of France. <br>
                         • 2414 Km of coastline. <br>
                         • A country that has a common border with Chile, Argentina, Brazil, Ecuador and Bolivia. <br>
                         • A country with the summit of Mount Huascarán at 6768 meters above sea level. <br>
                         A special destination: <br>
                         • Peru has 28 of the 31 climates on the planet (in some parts of the country, the weather is sunny all year round) • 84 of the world's 104 ecosystems are present in Peru. <br>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru22.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Health and security<br>
                        General: In Peru, it is important to respect some rules of hygiene and health. We advise you to:<br>
 
                        • Do not drink tap water unless it is boiled or purified using pellets. <br>
                        • Wash your hands regularly to reduce the risk of contamination. <br>
                        • Avoid meat and fish bought on the market: prefer restaurants to try specialties such as ceviche. <br>

                        Vaccines: To enter Peru from France, no vaccine is obligatory. Some however are recommended include: <br>
                        • Diphtheria-tetanus-poliomyelitis <br>
                        • Yellow fever (in case of stay in the Amazon, which is compulsory in case of stay in Venezuela from el Peru) <br>
                        • Influenza (recommended for the most fragile subjects, many cases of influenza AH1N1 detected in Peru) <br>

                      </div>
                    </div>
                     <div class="item">
                      <img class="img-responsive" src="img/peru33.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        What should I bring?<br>
                        Here is an exhaustive list of what to bring during a trip to Peru <br>
General: - A bag or a soft bag - A backpack of 20 to 30 liters - Comfortable shoes - A hat or cap - Sunglasses - A waterproof Gore Tex jacket - Warm clothing for the evenings with altitude, temperature drops quickly - A pharmacy kit - A scarf or neck cover - Shorts or pantacourts
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru44.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Best Season, Holidays<br>
                        Peru is also made up of regions as numerous as distinct (coast, Andes, Amazonia) characterized by climates very different from each other: <br>
                        • On the coast, the southern summer (November to April) displays high temperatures, while the winter is cooler (but never cold) and marked by morning mists. <br>
                        • In the Andes and Amazonia there are two main seasons: the dry season (May to October) and the wet season (November to April). If it is possible to travel in the Andean region during the rainy season, it is not advisable to hike in the mountains, where snow falls make the trails dangerous. <br>
                        • In the Andes, the weather can be very variable over the course of a day. We therefore advise you to provide various clothes, that is to say warm for the cool evenings, lighter for days often sunny, and a rain clothes. <br>

                         As Peru is very close to the equator, the sun is vertical and strong. This phenomenon is greatly amplified by altitude. So do not forget to wear a hat, sunscreen and sunglasses with a high degree of protection.
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru55.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Useful information<br>
                        HOURLY SHIFT From March to October (summer time), it will be necessary to reverse your watch of 7 hours arriving in Peru, and of 6 hours only from November to February. <br>
                        ELECTRICITY Voltage: 110 / 220V<br>
                        Frequency: 50/60 Hertz The electrical outlets in Peru are of two types: TELEPHONE AND TELECOMMUNICATIONS It is very easy to communicate with his friends or his family from Peru, the telephone booths are numerous, and the Internet coverage very good. <br>
                        To call from Peru to France: 00 + 33 + correspondent's number (without the initial 0). <br>
                        To call from France to Peru: 00 + 51 + city code (without the 0) + correspondent's number. <br>
                        To make internal calls: area code + number if called in another area. Otherwise, do not dial the area code.
                        
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
                    <p>General information, Formalities, Health and safety, What should I do ?, Best season, Holidays, Practical information.</p>
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
        <div class="modal fade bs-example-modalBoliva-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
                <div class="modal-header" style="background-color: #2a6f14">
                      <button type="button" data-dismiss="modal" align="rigth" style="border-color: transparent;background-color: transparent; color: #fff">&times;</button>
                      <h3 align="center" style="color: #fff; margin-top: 0px;">General Information from Bolivia</h3>
                 </div>
            <div class="modal-content">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                     <img class="img-responsive" src="img/bolivia11.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        General information <br>
                         • A population of around 10.6 million <br>
                         • Several official languages such as Spanish, Quechua, Aymara and Guarani.<br>
                         • A net income of $ 61.35 billion in 2013. <br>
                         •A total area of 1,099 km², twice the size of France. <br>
                         • A country that has no coastline and is surrounded by Peru to the northwest, Brazil to the north and east, Paraguay to the southeast, Argentina to the south and Chile to the west. <br>
                         • The highest point in Bolivia is Nevado Sajama, 6,542 meters above sea level. <br>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/bolivia22.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                      Health and safety<br>

                        General: In Bolivia, it is important to comply with certain rules of hygiene and health. We therefore advise you to: <br>
 
                        •Do not drink tap water unless boiled or purified using pellets. <br>
                        •Wash your hands regularly to reduce the risk of contamination. <br>
                         <br>

                        Vaccines: No vaccine is required to enter Bolivia from France. Some are however recommended, including: <br>
                        • Diphtheria-tetano-polio-hepatitis hepatitis B
                        • Influenza (recommended for the most fragile subjects, many cases of AH1N1 influenza detected in Bolivia) <br>

                      </div>
                    </div>
                     <div class="item">
                      <img class="img-responsive" src="img/bolivia33.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        <div> What should I bring? <br>
                        <p>Here is an exhaustive list of what to do during a trip to Bolivia</p>

<p>General: - A purse or a soft bag - A 20 to 30 liter backpack - Comfortable shoes - A hat or a cap - Sunglasses - A waterproof jacket Gore Tex - Warm clothing for high altitude nights, temperature drops fast - a pharmacy kit - a scarf or neck cover - shorts</p> <br>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/bolivia44.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Best Season, Holidays <br>
                        Bolivia is in the southern hemisphere and there are 2 seasons: <br>  
                        •The winter of May to October is the dry season and is the best time to visit the country (even since mid-May). <br>  
                        • Summer from November to April: this is the rainy season and therefore the least recommended to visit Bolivia, especially because Uyuni salar could be flooded during this season.    
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/bolivia55.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                       Useful information<br>
                        HOURLY SHIFT From March to October (summer time), it will be necessary to reverse your watch of 7 hours arriving in Peru, and of 6 hours only from November to February. <br>
                        ELECTRICITY Voltage: 110 / 220V<br>
                        Frequency: 50/60 Hertz The electrical outlets in Bolivia are of two types: TELEPHONE AND TELECOMMUNICATIONS It is very easy to communicate with his friends or his family from Peru, the telephone booths are numerous, and the Internet coverage very good. <br>
                        To call from Bolivia to France: 00 + 33 + correspondent's number (without the initial 0). <br>
                        To call from France to BOlivia: 00 + 591 + city code (without the 0) + correspondent's number. <br>
                        To make internal calls: area code + number if called in another area. Otherwise, do not dial the area code.
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
        </div>
      </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->





  
  <section id="team" style="padding-top: 0px">
      <br>
      <br>
      <br>
      <br>
      
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>About us</h2>
            <p>TTierras de los Andes is a Limited Liability Tour Operator, which started its operations in the year 2000. This Peruvian tour operator specializes in adventure trips with the primary goal the creation of complete programs off the beaten path.
             </p>
            <p>Our objective is to provide a reliable service of high quality  involving local  suppliers. Our approach tends to go towards a fair, responsible tourism products including ecological responsibility.

                Tierras de los Andes is a company oriented to planning trips, covering a wide range of benefits and services to individual clients  as well as groups. We can create any type of program, from discovery to adventure trek, as well as business trips.
                We work creating programs to discover Peru and South America for families and companies.</p>
          </div>

        </div>
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>The spirit of Tierras de los Andes</h2>
            <p>Tierras de los Andes offers a wide range of business planning and travel management as through quality service to our customers. Our operations in Peru are built on a team of professionals who do their best to ensure the best possible services to travelers and thus ensuring total satisfaction.</p>
            <p> Peru is a paradise for Adventure Tourism. Whether it's climbing the mountains, walking on ancient Inca trails, exploring the network of paths that crisscross the country, white water rafting. Tierras de los Andes offers all types of adventure travel according to the level of interest: From extreme adrenaline to simpler adventures, for amateurs or enthusiasts.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Tierras de los Andes Team </h2>
          <p align="center">Experience and enthusiasm to create and offer you the most original trips to Peru. We operate from the heart of the Andes, Cusco where our head office is located.</p>
          <br><br>
        </div>
      </div>
      <!--<div class="team-members">
        <div class="row">
        <div class="col-sm-12">
          @foreach($users as $user)
          <div class="col-sm-4">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
                <img class="img-responsive" src="{{ $user->routeImage }}" alt="">
              </div>
              <div class="member-info">
                <h3>{{ $user->name }}</h3>
                <h4>Director ejecutivo</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              <div class="social-icons">
                <ul>
                  @if($user->facebook != "")
                  <li><a class="facebook" href="{{ $user->facebook }}"><i class="fa fa-facebook"></i></a></li>
                  @endif
                  @if($user->twitter != "")
                  <li><a class="twitter" href="{{ $user->twitter }}"><i class="fa fa-twitter"></i></a></li>
                  @endif
                  @if($user->linkedin != "")
                  <li><a class="linkedin" href="{{ $user->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
                  @endif
                </ul>
              </div>
            </div>
          </div>
          @endforeach
        </div>-->

          <div class="col-sm-12">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="member-image">
                <img class="img-responsive" src="img/gruponuevo4.gif" alt="">
              </div>
              <div class="member-info">
                
              </div>
              
            </div>
          </div>
          <!--<div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/persona.png" alt="">
              </div>
              <div class="member-info">
                <h3>Carmen Arr&oacute;spide</h3>
                <h4>Gerente administrativa y financiera</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/persona.png" alt="">
              </div>
              <div class="member-info">
                <h3>Victor</h3>
                <h4>Ventas</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/persona.png" alt="">
              </div>
              <div class="member-info">
                <h3>Mar&iacute;a Cardenas</h3>
                <h4>Externe</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>-->
        </div>
      </div>
    </div>

  </section><!--se acaba modulo de nosotros-->    

<div class="heading text-center col-sm-8 col-sm-offset-2">
<h2>Blog</h2>
</div><br><br><br><br><br><br><br>
</div>
  <section id="twitter" class="parallax">
     
    <div id="blogspace">
      <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev" style="margin-top: -220px;"><i class="fa fa-angle-left"></i></a>
      <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next" style="margin-top: -220px;"><i class="fa fa-angle-right"></i></a>
      <div class="container">
        <div class="row">
          <div id="blogsec" class="col-sm-8 col-sm-offset-2">

            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                 <?php $count=0;?>
                @foreach($blogs as $blog)
                @if($count==0)
                <div class="item active">
                    <a href="{{$blog->link}}"><h4>{{$blog->name}}</h4></a>
                    <a href="{{$blog->link}}"><h4>{{$blog->description}}</h4></a>
                </div>
                
                @endif
                <?php $count++;?>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#blog-->
  <section id="testimonial" style="padding-top: 0px; padding-bottom: 0px">
      
      <br>
      <br>
      <br>
      <br>
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Testimonials</h2>
          <br>
          <p>
              Share travel experiences with us
          </p>
          <br>
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
                      <span class="cetagory"></span><!--TOUR???-->
                    </div>
                    <div class="entry-content">
                      <p>{{$testimonials[$i]->testimonial}} </p>
                    </div>
                  </div>
                    @endif
                    @if($i+1<count($testimonials))
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
                    @if($i+2<count($testimonials))
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
            <div align="right"><a href="{{url('')}}/en/listTestimonials" style="color: #0e4817">See More</a></div> 
            </div>
          
          </div>
          

      </div>

        <div class="heading text-center col-sm-8 col-sm-offset-2" style="margin-top:-35px">
          <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>

    </div>
        <div class="heading text-center col-sm-8 col-sm-offset-2">
            <br><br><br>
<button 
   type="button" 
   class="btn btn-primary btn-lg" 
   data-toggle="modal" 
   data-target="#favoritesModal">
  Enter your testimony
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
        id="favoritesModalLabel">Enter your testimony</h3>
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
                      <input type="text" name="name" class="form-control" placeholder="Name" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                     <div class="col-sm-6">
                    <div class="form-group">
                      <input type="date" name="date" class="form-control" placeholder="Date" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                           </div>   
                    <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="nationality" class="form-control" placeholder="Nationality" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="tour" class="form-control" placeholder="City of reference" required style="border: 2px solid #e6e6e6;">
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
                  </div> -->
                  
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
                  <textarea name="testimonial" id="testimonial" class="form-control" rows="4" placeholder="Enter your testimony" style="border: 2px solid #e6e6e6;" required="required"></textarea>
                </div>
                <!--<center><div class="g-recaptcha" data-sitekey="6LckRDcUAAAAABk1EwZMaaw4eSAcnsL5Qz0jfNSe"></div></center>-->
                <div class="form-group">
                    
                  <button type="" class="btn-submit">Send now</button>
                </div>
              </form>
                 </div>
     

 </div>
    </div>
</div>






  </section><!--/#testimonial-->

  <a href="https://www.facebook.com/tierrasdelosandes" class="floatFacebook">
		<i class="fa fa-facebook my-float"></i>
	</a>
	<a href="https://twitter.com/terandes1" class="floatTwitter">
		<i class="fa fa-twitter my-float"></i>
	</a>
	<a href="https://codepen.io/androidcss/pen/yOopGp" class="floatGoogle">
		<i class="fa fa-google-plus my-float"></i>
	</a>

<section id="map-section" style="padding-top: 10%;">
    <br>
    
      <center>
        <h2>Contact us</h2>
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
                <p> Adress: Calle Turquezas E-11 Urb. Kenedy A - CUSCO - PERU</p>
                <p> Phone: 00 51 84 247277</p>
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
                <p> Adress: Calle Bolivar 221 Oficina 4 1er piso Miraflores - Lima - Perú</p>
                <p> Phone: 00 51 1 2434475</p>
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
  Contact Us
</button>
</div>
      
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
</section>


<div class="modal fade" id="contactModal" 
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
        id="favoritesModalLabel">Contact us</h3>
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
                      <input type="text" name="name" class="form-control" placeholder="Name" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                     
                    <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="nationality" class="form-control" placeholder="Nationality" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                      
              </div>
                
                     
                  </div>
                  
                <div class="form-group">
                  <textarea name="testimonial" id="testimonial" class="form-control" rows="4" placeholder="Contact" style="border: 2px solid #e6e6e6;" required="required"></textarea>
                </div><br>
                <center><div class="g-recaptcha" data-sitekey="6LckRDcUAAAAABk1EwZMaaw4eSAcnsL5Qz0jfNSe"></div></center>
                <div class="form-group">
                  <button type="" class="btn-submit">Send</button>
                </div>
              </form>
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

@include('website.en.footerEN')


  <!--fin  del footer-->




@endsection



