@extends('website.partials.de.main')
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
      	 <h4><p align="center" style="color: #4b4b4b">Tierras de los Andes sarà presente alla fiera internazionale di viaggi turismo che si terrà il 6, 7 e 8 novembre a Londres!</p></h4>
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
  
  
<section id="about-us" class="parallax" style="color: #4b4b4b" "padding-top:10px; padding-bottom: 10px">
    <br>
    <br>
    
    <div class="container">
      <div class="row">
      	<h2 align="center" style="color: #4b4b4b">Wie du gehst</h2>
      	 <br>
    	<br>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/fr/tours/Group"><img src="{{url('')}}/img/grupo1icono.png" height="60%" width="60%" class="img-rounded">
          		<h3 style="color: #4b4b4b">In der Gruppe</h3></a>
            	<p>Eine Reise, die alle befriedigen wird</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/fr/tours/Family"><img src="{{url('')}}/img/familia1icono.png" height="60%" width="60%" class="img-rounded">
          		<h3 style="color: #4b4b4b">Familie</h3></a>
            	<p>Nutzen Sie die passende Reise für Erwachsene und Jugendliche</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/fr/tours/Couple"><img src="{{url('')}}/img/couple1icono.png" height="60%" width="60%" class="img-rounded">
          		<h3 style="color: #4b4b4b">Paar</h3></a>
            	<p>Partagez des moments inoubliables avec votre partenaire</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/fr/tours/Friends"><img src="{{url('')}}/img/amigos1icono.png" height="60%" width="60%" class="img-rounded">
          		<h3 style="color: #4b4b4b">Unter Freunden</h3></a>
            	<p>Teilen Sie unvergessliche Momente mit Ihrem Partner</p>
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
          <h2>Bereiten Sie Ihre Reise vor</h2>
          <br>
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
                    <p>Allgemeine Informationen, Formalitäten, Gesundheit und Sicherheit, Was sollte ich mitbringen?, Beste Jahreszeit, Feiertage, Praktische Informationen.</p>
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
                        Informations générales <br>
                        <p align="center"> Allgemeine Informationen über Peru ist:</p> <br>
                         • Eine Bevölkerung von etwa 30 Millionen. <br>
                         • Netto-Bankertrag von 301,5 Milliarden US-Dollar im Jahr 2011. <br>
                         • Eine Gesamtfläche von 1.285.220 km², dreimal so groß wie Frankreich. <br>
                         • 2414 km Küste. <br>
                         • Ein Land mit einer gemeinsamen Grenze zu Chile, Argentinien, Brasilien, Ecuador und Bolivien. <br>
                         • Ein Land mit dem Gipfel des Berges Huascarán auf 6768 Meter über dem Meeresspiegel. <br>
                         Ein besonderes Reiseziel: <br>
                         • Peru hat 28 der 31 Klimas auf dem Planeten (in einigen Landesteilen herrscht das ganze Jahr über ein sonniges Wetter) • 84 der 104 Ökosysteme der Welt sind in Peru vertreten.  <br></p>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru22.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Gesundheit und Sicherheit<br>

                        Allgemein: In Peru ist es wichtig, einige Regeln für Hygiene und Gesundheit einzuhalten. Wir beraten Sie:<br>
                        • Trinken Sie kein Leitungswasser, außer es wird gekocht oder mit Pellets gereinigt. <br>
                        • Waschen Sie Ihre Hände regelmäßig, um das Risiko einer Kontamination zu verringern. <br>
                        • Vermeiden Sie Fleisch und Fisch, die auf dem Markt gekauft werden. Bevorzugen Sie Restaurants, um Spezialitäten wie Ceviche zu probieren. <br>

                        Impfstoffe: Um aus Frankreich nach Peru einzureisen, ist kein Impfstoff erforderlich. Einige werden jedoch empfohlen: <br>
                        • Diphtherie-Tetanus-Poliomyelitis <br>
                        • Gelbfieber (Aufenthalt im Amazonasgebiet, obligatorisch bei einem Aufenthalt in Venezuela aus Peru) <br>
                        • Influenza (empfohlen für die zerbrechlichsten Personen, viele Fälle von Influenza AH1N1 in Peru) <br>

                      </div>
                    </div>
                     <div class="item">
                      <img class="img-responsive" src="img/peru33.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Was sollte ich mitbringen?<br>
                        Hier ist eine erschöpfende Liste von was während einer Reise nach Peru zu bringen ist <br>
<p>Allgemein: - Eine Tasche oder eine weiche Tasche - Ein Rucksack von 20 bis 30 Liter - Bequeme Schuhe - Ein Hut oder eine Kappe - Sonnenbrille - Eine wasserdichte Gore Tex Jacke - Warme Kleidung für die Abende mit Höhe, Temperatur sinkt schnell - Ein Apotheke-Kit - Ein Schal oder Hals-Cover - Shorts oder pantacourts</p>

                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru44.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Beste Jahreszeit, Feiertage <br>
                        Peru besteht auch aus so unterschiedlichen Regionen (Küste, Anden, Amazonien), die sich durch sehr unterschiedliche Klimate auszeichnen: <br>
                        • An der Küste zeigt der Südsommer (November bis April) hohe Temperaturen, während der Winter kühler (aber nie kalt) ist und von Morgennebel geprägt ist. <br>
                        • In den Anden und Amazonien gibt es zwei Hauptsaisons: die Trockenzeit (Mai bis Oktober) und die Regenzeit (November bis April). Wenn es während der Regenzeit möglich ist, in der Andenregion zu reisen, ist es nicht ratsam, in den Bergen zu wandern, wo Schneefälle die Wege gefährlich machen. <br>
                        • In den Anden kann das Wetter im Laufe eines Tages sehr variabel sein. Wir empfehlen Ihnen deshalb, verschiedene Kleidung, das heißt warm für die kühlen Abende, heller für Tage oft sonnig und eine Regenkleidung zu bieten. <br>

                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru55.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Praktische Informationen<br>
                        ZEITUNTERSCHIED Von März bis Oktober (Sommerzeit), dauert es Ihre Uhr 7 Stunden in Peru und 6 Stunden von November bis Februar Ankunft zurück. <br>
                        STROM Spannung: 110 / 220V<br>
                        Frequenz: 50/60 Hertz Steckdosen in Peru sind von zwei Arten: TELEFON UND TELEKOMMUNIKATION Es ist sehr einfach, mit Freunden oder der Familie aus Peru zu kommunizieren, Telefonzellen sind viele, und sehr gute Internet-Abdeckung. <br>
                        So rufen Peru nach Frankreich: 00 + 33 + Nummer (ohne die erste 0). <br>
                        Um von Frankreich nach Peru zu nennen: 00 + 51 + Vorwahl (ohne 0) + Nummer. <br>
                        Um interne Anrufe: Vorwahl + Nummer, wenn in einer anderen Region genannt. Ansonsten wählen Sie nicht die Ortsvorwahl.
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
                    <p>Allgemeine Informationen, Formalitäten, Gesundheit und Sicherheit, Was muss ich mitbringen ?, Beste Saison, Feiertage, Praktische Informationen.</p>
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
                      <h3 align="center" style="color: #fff; margin-top: 0px;">Allgemeine Informationen Bolivien</h3>
            </div>
            <div class="modal-content">
              <div id="carousel-example-generic-bolvia" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                     <img class="img-responsive" src="img/bolivia11.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        <p>Allgemeine Informationen <br></p>
                        <p align="center"> Bolivia:</p> <br>
                        •  Eine Bevölkerung von rund 10,6 Millionen <br>
                         • Mehrere offizielle Sprachen wie Spanisch, Quechua, Aymara und Guarani.<br>
                         • Ein Nettoeinkommen von 61,35 Milliarden US-Dollar im Jahr 2013. <br>
                         • Eine Gesamtfläche von 1.099 km², doppelt so groß wie Frankreich. <br>
                         • Ein Land, das keine Küstenlinie hat und von Peru im Nordwesten, Brasilien im Norden und Osten, Paraguay im Südosten, Argentinien im Süden und Chile im Westen umgeben ist. <br>
                         • Der höchste Punkt in Bolivien ist Nevado Sajama, 6.542 Meter über dem Meeresspiegel. <br>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/bolivia22.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                      Gesundheit und Sicherheit<br>

                       Allgemein: In Bolivien ist es wichtig, bestimmte Hygiene- und Gesundheitsvorschriften einzuhalten. Wir empfehlen Ihnen deshalb: <br>
 
                        • Trinken Sie kein Leitungswasser, es sei denn, es wird gekocht oder mit Pellets gereinigt. <br>
                        • Waschen Sie Ihre Hände regelmäßig, um das Kontaminationsrisiko zu reduzieren. <br>
                         <br>

                        Impfstoffe: Es ist kein Impfstoff erforderlich, um aus Frankreich nach Bolivien einzureisen. Einige werden jedoch empfohlen, einschließlich: <br>
                        • Diphtherie-Tetano-Polio-Hepatitis Hepatitis B
• Influenza (empfohlen für die empfindlichsten Personen, viele Fälle von AH1N1 Influenza in Bolivien nachgewiesen) <br>

                      </div>
                    </div>
                     <div class="item">
                      <img class="img-responsive" src="img/bolivia33.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                      <p> Was sollte ich mitbringen? </p><br>
                        Hier ist eine erschöpfende Liste von was während einer Reise nach Bolivia zu bringen ist<br>
                         
                        Allgemein: - Eine Tasche oder eine weiche Tasche - Ein Rucksack von 20 bis 30 Liter - Bequeme Schuhe - Ein Hut oder eine Kappe - Sonnenbrille - Eine wasserdichte Gore Tex Jacke - Warme Kleidung für die Abende mit Höhe, Temperatur sinkt schnell - Ein Apotheke-Kit - Ein Schal oder Hals-Cover - Shorts oder pantacourts
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/bolivia44.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                       Beste Jahreszeit, Feiertage <br>
                       Bolivien ist in der südlichen Hemisphäre und es gibt 2 Jahreszeiten: <br>  
                        • Der Winter von Mai bis Oktober ist die Trockenzeit und ist die beste Zeit, um das Land zu besuchen (sogar seit Mitte Mai). <br>  
                        • Sommer von November bis April: Dies ist die Regenzeit und daher am wenigsten empfohlen Bolivien zu besuchen, vor allem weil Uyuni Salar in dieser Saison überflutet werden kann.     <br>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/bolivia55.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                       Praktische Informationen<br>
                        ZEITPLAN Von März bis Oktober (Sommerzeit), bringt Sie zurück zur 7-Stunden-Uhr, die in Bolivien ankommt, und 6 Stunden von November bis Februar. <br>
                        ELEKTRIZITÄT Spannung: 110 / 220V<br>
                        Frequenz: 50/60 Hertz Steckdosen in Bolivien sind von zwei Arten: TELEFON UND TELEKOMMUNIKATION Es ist sehr einfach, mit Freunden oder Familie aus Bolivien zu kommunizieren, Telefonzellen sind viele, und sehr gute Internet-Abdeckung. <br>
                        Um Bolivien nach Frankreich anzurufen: 00 + 33 + Nummer (ohne die erste 0). <br>
                        Um von Frankreich nach Peru anzurufen: 00 + 591 + Ortsvorwahl (ohne 0) + Nummer. <br>
                        Interne Anrufe tätigen: das Präfix + die Zonennummer, wenn in einem anderen Bereich angerufen wird. Andernfalls wählen Sie nicht den Zonencode.
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
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section>





  <section id="team" style="padding-top: 0px">
      <br>
      <br>
      <br>
      <br>
      
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Wer wir sind ?</h2>
            <p>Tierras de los Andes ist eine S.A.C (Société Anonyme Fermée), die im Jahr 2000 ihre Pforten öffnete. Unser Hauptziel ist es, eine vollständige, abgelegene Tour durch Peru zu schaffen. </p>
            <p>Tierras de los Andes ist eine Agentur, die Aufenthalte organisiert und eine große Auswahl an Dienstleistungen und Dienstleistungen für Einzelpersonen oder Gruppen anbietet. Wir konzipieren jede Art von Aufenthalt, von der "Entdeckungsreise" zum Abenteuer-Trek, durch Geschäftsaufenthalte. Wir begrüßen Familien sowie Firmen aus der ganzen Welt, um Peru und ganz allgemein Südamerika zu entdecken.</p>
          </div>

        </div>
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Unser Geisteszustand</h2>
            <p>Tierras de los Andes bietet ein breites Leistungsspektrum von der Planung über die maßgeschneiderte Reisekoordination bis zum hochwertigen Kundenservice. Dieser peruanische Reiseveranstalter setzt auf ein Team von Fachleuten, die das Beste von sich geben, um den Reisenden den bestmöglichen Service zu bieten und somit die totale Zufriedenheit zu garantieren.</p>
            <p>Ein Abenteuergeist: Peru ist ein Paradies für Abenteuertourismus. Ob Sie die Berge erklimmen, auf alten Inka-Pfaden wandern, durch das Netz von Straßen, die das Land durchziehen, wandern oder Wildwasser-Rafting. Tierras de los Andes bietet Ihnen alle Arten von Abenteuerreisen je nach dem Niveau, das Sie suchen: Von extremem Adrenalin bis zu einfacheren Abenteuern für Amateure oder Enthusiasten.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Das Team Tierras de los Andes <a href="{{url('')}}/tours/decouverte/le-perou-en-famille"></a></h2>
          <br>
          <p> Erfahrung und Begeisterung zu schaffen und bieten Ihnen die originellsten Reisen nach Peru. Wir arbeiten aus dem Herzen der Anden, Cusco, wo unser Hauptsitz befindet</p>
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
          
        </div>
      </div>
    </div>

  </section><!--se acaba modulo de nosotros-->    

  <div class="heading text-center col-sm-8 col-sm-offset-2">
<h2>Blog</h2>
</div><br><br><br><br><br><br><br>
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
          <h2>Über uns</h2>
          <p>Reiseerfahrungen mit uns teilen</p>
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
                <div align="right"><a href="{{url('')}}/de/listTestimonials" style="color: #0e4817">Mehr</a></div> 
            </div>
          
          </div>
          

      </div>

        <div class="heading text-center col-sm-8 col-sm-offset-2" style="margin-top:-35px">
          <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>

    </div>
        <div class="heading text-center col-sm-8 col-sm-offset-2">
            <br><br>
<button 
   type="button" 
   class="btn btn-primary btn-lg" 
   data-toggle="modal" 
   data-target="#favoritesModal">
  Geben Sie Ihre Aussage ein
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
        id="favoritesModalLabel">Geben Sie Ihre Aussage ein</h3>
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
                      <input type="text" name="name" class="form-control" placeholder="Name" required style="border: 2px solid #e6e6e6;">
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
                      <input type="text" name="date" placeholder="Datum" class="form-control" style="border: 2px solid #e6e6e6;" data-placement="down" value="" required >
                    </div>
                           </div>   
                    <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="nationality" class="form-control" placeholder="Nationalität" required style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="tour" class="form-control" placeholder="Referenzstadt" required style="border: 2px solid #e6e6e6;">
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
                
                  </div>
                <div class="form-group">
                  <textarea name="testimonial" id="testimonial" class="form-control" rows="4" placeholder="Gib dein Zeugnis ein" style="border: 2px solid #e6e6e6;" required></textarea>
                </div>
                <!--<center><div class="g-recaptcha" data-sitekey="6LckRDcUAAAAABk1EwZMaaw4eSAcnsL5Qz0jfNSe"></div></center>-->
                
                <div class="form-group">
                  <button type="" class="btn-submit">Jetzt senden</button>
                </div>
              </form>
                 </div>
     
<br>
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
                <p> Anschrift: Calle Turquezas E-11 Urb. Kenedy A - CUSCO - PERU</p>
                <p> Telefonnummer: 00 51 84 247277</p>
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
                <p> Anschrift: Calle Bolivar 221 Oficina 4 1er piso Miraflores - LIMA - PERU</p>
                <p> Telefonnummer: 00 51 1 2434475</p>
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
  Kontaktieren Sie uns
</button>
</div>
      
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
</section>


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
footer{
  background-color: rgb(16,54,9);
}
</style>



<!--inicio del footer-->

@include('website.de.footerDE')

  <!--fin  del footer-->








@endsection



