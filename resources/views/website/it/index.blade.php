@extends('website.partials.it.main')
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
            	<a href="{{ URL::to('http://london.wtm.com/') }}" p>Mostra internazionale del turismo di viaggio a Londres</p></a>
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
      	<h2 align="center" style="color: #4b4b4b">A misura</h2>
      	 <br>
    	<br>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/it/tours/Group"><img src="img/grupo1icono.png" height="60%" width="60%" class="img-rounded">
          		<h3 style="color: #4b4b4b">In Gruppo</h3></a>
            	<p>Un viaggio che soddisferà tutti</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/it/tours/Family"><img src="img/familia1icono.png" height="60%" width="60%" class="img-rounded">
          		<h3 style="color: #4b4b4b">In Famiglia</h3></a>
            	<p>Godetevi un viaggio adatto per adulti e per i giovani</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/it/tours/Couple"><img src="img/couple1icono.png" height="60%" width="60%" class="img-rounded">
          		<h3 style="color: #4b4b4b">In Coppia</h3></a>
            	<p>Condividi momenti indimenticabili con il tuo partner</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/it/tours/Friends"><img src="img/amigos1icono.png" height="60%" width="60%" class="img-rounded">
          		<h3 style="color: #4b4b4b">Con gli amici</h3></a>
            	<p>Condividi momenti indimenticabili con il tuo partner</p>
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
          <h2>Preparate il vostro viaggio</h2>
          <p></p>
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
                    <p>Informazioni generali, Formalità, Salute e sicurezza, Cosa devo portare?, Migliore stagione, Vacanze, Informazioni pratiche.</p>
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
                      <h3 align="center" style="color: #fff; margin-top: 0px;">Informazioni generali Perù</h3>
                  </div>
            <div class="modal-content">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                     <img class="img-responsive" src="img/peru11.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Informazioni generali  <br>
                        <p align="center"> Perù è:</p> <br>
                         • Una popolazione di circa 30 milioni. <br>
                         • Reddito bancario netto di 301,5 miliardi di dollari nel 2011<br>
                         • Un'area totale di 1.285.220 km², tre volte l'area della Francia. <br>
                         • 2414 Km di costa. <br>
                         • Un paese che ha un confine comune con il Cile, l'Argentina, il Brasile, l'Ecuador e la Bolivia. <br>
                         • Un paese con la vetta del Monte Huascarán a 6768 metri sul livello del mare. <br>
                         <br>
                         Una destinazione speciale: <br>
                         • Il Perù ha 28 dei 31 climi del pianeta (in alcune parti del paese, il clima è soleggiato tutto l'anno) • 84 dei 104 ecosistemi del mondo sono presenti in Perù. <br></p>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru22.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                         Salute e sicurezza<br>

                        Generale: In Perù, è importante rispettare alcune norme igieniche e sanitarie. Vi consigliamo di:<br>
 
                        • Non bere acqua di rubinetto a meno che non sia bollita o purificata utilizzando pellet. <br>
                        • Lavare le mani regolarmente per ridurre il rischio di contaminazione. <br>
                        • Evitare di carne e pesce acquistati sul mercato: preferite i ristoranti a provare specialità come ceviche. <br>

                        Vaccini: Per entrare in Perù dalla Francia, nessun vaccino è obbligatorio. Alcuni comunque consigliati sono: <br>
                        • Dipolo-tetano-poliomielite <br>
                        • Febbre gialla (in caso di soggiorno nell'Amazzonia, obbligatorio in caso di soggiorno in Venezuela da El Peru)<br>
                        • Influenza (raccomandata per i soggetti più fragili, molti casi di influenza AH1N1 rilevati in Perù) <br>
 
                        Soggiorno in Amazzonia: oltre alla vaccinazione contro la febbre gialla, si può raccomandare un trattamento per la malaria (consultare il consiglio del medico) <br>


                      </div>
                    </div>
                     <div class="item">
                      <img class="img-responsive" src="img/peru33.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Cosa devo portare?<br>
                        Ecco un elenco esaustivo di cosa portare durante un viaggio in Perù <br>
 
                        Generale: - Una borsa o un sacchetto morbido - Un zaino da 20 a 30 litri - Scarpe comode - Un cappello o un tappo - Occhiali da sole - Una giacca impermeabile Gore Tex - Abbigliamento caldo per le serate con altitudine, la temperatura scende rapidamente - un kit di farmacia - un coperchio di sciarpa o collo - pantaloncini

                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru44.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Migliore stagione, Vacanze <br>
                        Il Perù è anche costituito da regioni numerose come distinte (costa, Ande, Amazzonia) caratterizzate da climi molto diversi tra di loro :  <br>  
                        • Sulla costa, l'estate australe (da novembre a aprile) mostra temperature elevate, mentre l'inverno è più fresco (ma mai freddo) e segnato dalla nebbia del mattino.  <br>  
                        • Nelle Ande e nell'Amazzonia, ci sono due stagioni principali: la stagione secca (da maggio a ottobre) e la stagione bagnata (da novembre a aprile). Anche se è molto possibile viaggiare nella regione andina durante la stagione delle piogge, è altamente inadvisabile escursioni nelle montagne, dove la nevicata rende i percorsi pericolosi.     <br>
                        • Nelle Ande, il tempo può essere molto variabile in un solo giorno. Vi consigliamo di fornire diversi abiti, vale a dire caldi per serate fresche, più leggeri per giornate soleggiate e pioggia.  <br>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru55.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Informations pratiques<br>
                        FUSO ORARIO Da marzo a ottobre (ora estiva), ci vorrà di nuovo l'orologio 7 ore che arrivano in Perù, e 6 ore da novembre a febbraio. <br>
                        ELETTRICITÀ Tensione: 110 / 220V<br>
                        Frequenza: 50/60 Hertz prese elettriche in Perù sono di due tipi: TELEFONO E TELECOMUNICAZIONI E 'molto facile comunicare con gli amici o la famiglia dal Perù, cabine telefoniche sono molti, e molto buona copertura internet. <br>
                        Per chiamare il Perù verso la Francia: 00 + 33 + numero (senza il primo 0). <br>
                        Per chiamare dalla Francia al Perù: 00 + 51 + prefisso locale (senza lo 0) + numero. <br>
                        Per effettuare chiamate interne: il prefisso + il numero di zona se viene chiamato in un'altra area. Altrimenti, non comporre il codice di zona.<br>
                        
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
                    <p>Informazioni generali, Formalità, Salute e sicurezza, Cosa devo portare ?, Migliore stagione, Vacanze, Informazioni pratiche.</p>
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
                      <h3 align="center" style="color: #fff; margin-top: 0px;">Informazioni generali </h3>
                  </div>
            <div class="modal-content">
              <div id="carousel-example-generic-bolvia" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                     <img class="img-responsive" src="img/bolivia11.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Informazioni generali  <br>
                        <p align="center"> Bolivia:</p> <br>
                        •  Una popolazione di circa 10,6 milioni <br>
                         • Diverse lingue ufficiali come lo spagnolo, Quechua, Aymara e Guarani.<br>
                         • Un reddito netto di 61,35 miliardi di dollari nel 2013. <br>
                         • Un'area totale di 1.099 km², due volte la dimensione della Francia. <br>
                         • Un paese che non ha una linea costiera ed è circondato dal Perù verso il Nord Ovest, il Brasile verso il Nord e l'Oriente, il Paraguay al Sud-Est, l'Argentina al Sud e il Cile a ovest. <br>
                         • Il punto più alto della Bolivia è Nevado Sajama, 6.542 metri sul livello del mare. <br>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/bolivia22.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                      Salute e sicurezza<br>

                        Generale: In Bolivia, è importante rispettare alcune regole di igiene e salute. Vi consigliamo pertanto di: <br>
 
                        • Non bere acqua di rubinetto a meno che non sia bollita o purificata utilizzando pellet. <br>
                        • Lavare le mani regolarmente per ridurre il rischio di contaminazione. <br>
                         <br>

                        Vaccini: Per entrare in Bolivia dalla Francia non è richiesto alcun vaccino. Alcuni sono comunque raccomandati, tra i quali: <br>
                        • Diphtheria-tetano-poliomielite-epatite A-epatite B
                        • Influenza (raccomandata per i soggetti più fragili, molti casi di influenza AH1N1 rilevati in Bolivia) <br>


                      </div>
                    </div>
                     <div class="item">
                      <img class="img-responsive" src="img/bolivia33.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                      <div> Cosa devo portare? <br>
                        <p>Ecco un elenco esaustivo di cosa portare durante un viaggio in Perù</p>

<p>Generale: - Una borsa o un sacchetto morbido - Un zaino da 20 a 30 litri - Scarpe comode - Un cappello o un tappo - Occhiali da sole - Una giacca impermeabile Gore Tex - Abbigliamento caldo per le serate con altitudine, la temperatura scende rapidamente - un kit di farmacia - un coperchio di sciarpa o collo - pantaloncini</p> <br>
                      </div>
                    </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/bolivia44.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                       Migliore stagione, Vacanze <br>
                        Bolivia è nell'emisfero meridionale e ci sono 2 stagioni: <br>  
                        • L'inverno di maggio ad ottobre: è la stagione secca e è il momento migliore per visitare il paese (anche da metà maggio).  <br>  
                        • Estate da novembre ad aprile: questa è la stagione delle piogge e quindi il meno raccomandato per visitare la Bolivia, specialmente perché il salar Uyuni potrebbe essere inondato durante questa stagione.     <br>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/bolivia55.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                       Informazioni pratiche<br>
                        FUSO ORARIO Da marzo a ottobre (ora estiva), ci vorrà di nuovo l'orologio 7 ore che arrivano in Bolivia, e 6 ore da novembre a febbraio. <br>
                        ELETTRICITÀ Tensione: 110 / 220V<br>
                        Frequenza: 50/60 Hertz prese elettriche in Bolivia sono di due tipi: TELEFONO E TELECOMUNICAZIONI E 'molto facile comunicare con gli amici o la famiglia dal Bolivia, cabine telefoniche sono molti, e molto buona copertura internet. <br>
                        Per chiamare il Bolivia verso la Francia: 00 + 33 + numero (senza il primo 0). <br>
                        Per chiamare dalla Francia al Perù: 00 + 591 + prefisso locale (senza lo 0) + numero. <br>
                        Per effettuare chiamate interne: il prefisso + il numero di zona se viene chiamato in un'altra area. Altrimenti, non comporre il codice di zona.
                        <br>
                      </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic-bolvia" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic-bolvia" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
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





  <section id="team" style="padding-top: 0px">
      <br>
      <br>
      <br>
      <br>
      
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Chi siamo?</h2>
            <p>Tierras de los Andes è un S.A.C, che ha aperto le sue porte nel 2000. Il nostro obiettivo principale è quello di creare una vacanza completa sulla pista battuta. </p>
             <p> Tierras de los Andes è un'agenzia che organizza soggiorni e offre una vasta gamma di servizi e servizi per la clientela individuale o di gruppo. Concepiremo qualsiasi tipo di soggiorno, dal viaggio "scoperto" all'avventura, attraverso soggiorni d'affari. Accogliamo famiglie e aziende provenienti da tutto il mondo per scoprire il Perù e più in generale l'America del Sud. </p>
          </div>

        </div>
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Il nostro spirito di lavoro </h2>
            <p>Tierras de los Andes offre una vasta gamma di servizi, dalle operazioni di pianificazione al coordinamento del viaggio su misura e al servizio clienti di qualità. Questo operatore turistico peruviano si affida a un team di professionisti che offrono il meglio di sé per garantire i migliori servizi possibili ai viaggiatori e garantire la completa soddisfazione. </p>
             <p> Uno spirito di avventura: il Perù è un paradiso per il turismo d'avventura. Se si arrampica le montagne, cammina sui sentieri antichi di Inca, attraversa la rete di strade che attraversano il paese o il rafting in acque bianche. Tierras de los Andes ti offre tutti i tipi di viaggi avventura a seconda del livello che stai cercando: dall'estrema adrenalina ad avventure più semplici per amatori o appassionati. </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Lo staff Tierras de los Andes  <a href="{{url('')}}/tours/decouverte/le-perou-en-famille"></a></h2>
          <p>
              Esperienza e entusiasmo per creare e offrire i viaggi più originali in Perù. Operiamo dal cuore delle Ande, Cusco dove si trova la nostra sede principale.
          </p>
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
          <h2>Testimonianze</h2>
          <br>
          <p align="center">
              Condividere esperienze di viaggio con noi
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
                      <span class="cetagory">
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
                      <span class="cetagory">
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
                      <span class="cetagory"></span>
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
                <div align="right"><a href="{{url('')}}/it/listTestimonials" style="color: #0e4817">Vedi altro</a></div> 
            </div>
          
          </div>
          

      </div>
      <br><br>

        <div class="heading text-center col-sm-8 col-sm-offset-2" style="margin-top:-35px">
          <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>
    <br>
    </div>
        <div class="heading text-center col-sm-8 col-sm-offset-2">
<button 
   type="button" 
   class="btn btn-primary btn-lg" 
   data-toggle="modal" 
   data-target="#favoritesModal">
  Inserisci la tua testimonianza
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
        id="favoritesModalLabel">Inserisci la tua testimonianza</h3>
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
                      <input type="text" name="name" class="form-control" placeholder="Nome" required="required" style="border: 2px solid #e6e6e6;">
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
                      <input type="text" name="nationality" class="form-control" placeholder="Nationalité" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                    
                  </div>
                  
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="tour" class="form-control" placeholder="Città di Riferimento" required style="border: 2px solid #e6e6e6;">
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
                  </div>   -->
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
                  <textarea name="testimonial" id="testimonial" class="form-control" rows="4" placeholder="Inserisci la tua testimonianza" style="border: 2px solid #e6e6e6;" required="required"></textarea>
                </div>
                
                <center><div class="g-recaptcha" data-sitekey="6LckRDcUAAAAABk1EwZMaaw4eSAcnsL5Qz0jfNSe"></div></center>
                <div class="form-group">
                  <button type="" class="btn-submit">Invia ora</button>
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
        <h2>Contattaci</h2>
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
                <p> indirizzo: Calle Turquezas E-11 Urb. Kenedy A - CUSCO - PERU</p>
                <p> Tel&eacute;fono: 00 51 84 247277</p>
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
                <p> indirizzo: Calle Bolivar 221 Oficina 4 1er piso Miraflores - Lima - Perú</p>
                <p> Tel&eacute;fono: 00 51 1 2434475</p>
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
  Contattaci
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
        id="favoritesModalLabel">Contattaci</h3>
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
                      <input type="text" name="name" class="form-control" placeholder="Nome" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                     
                    <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="nationality" class="form-control" placeholder="Nazionalita" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                      
              </div>
                
                     
                  </div>
                  
                <div class="form-group">
                  <textarea name="testimonial" id="testimonial" class="form-control" rows="4" placeholder="Contattaci" style="border: 2px solid #e6e6e6;" required="required"></textarea>
                </div>
                <center><div class="g-recaptcha" data-sitekey="6LckRDcUAAAAABk1EwZMaaw4eSAcnsL5Qz0jfNSe"></div></center><br>
                <div class="form-group">
                  <button type="" class="btn-submit">Inviare</button>
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

 @include('website.it.footerIT')


  <!--fin  del footer-->







@endsection



