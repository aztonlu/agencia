@extends('website.partials.it.mainit')
@section('title', 'Terandes')
@section('keywords', 'agence voyage perou, voyage perou, tour operateur perou, aventure inca perou, agence de voyages au perou, voyage au perou, circuit perou, perou tourisme')
@section('description', 'Tierras de los Andes: Agence de voyages et Tour opérateur péruvien spécialiste des voyages découverte, aventure, randonnée et trekking en petit groupe et sur mesure')

@section('translate')
  
@endsection


@section('content')
<div id="titu">
    <br><br><br>
<h2 style="color: #FFF" align="center">Testimonianze</h2>
<h4 align="center">Condividi le esperienze di viaggio con noi</h4>
</div>
  

  
  <section id="testimonial" style="padding-top: 0px; padding-bottom: 0px">
      
      <br>
      <br>
      <br>
      <br>
    <div class="container">
      <!--<div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Témoignages</h2>
          <br>
          <p align="center">Partager expériences de voyage avec nous</p>
          <br><br>
        </div>
      </div>-->
     
      
        @foreach($testimonials as $testimonial)
        <div class="col-sm-12">
          <div class="col-sm-2"></div>
          <div class="col-sm-2">
            <img src="{{url('')}}/{{ $testimonial->photo }}" height="177px" width="172px">
          </div>
          <div class="col-sm-8">
            <center>
              <?php
                $dias = array("Domenica","Lunedi","Martedì","Mercoledì","Giovedi","Venerdì","Sabato");
                $meses = array("Gennaio","Febbraio","Marzo","Aprile","Maggio","Giugno","Luglio","Agosto","Settembre","Ottobre","Novembre","Dicembre");
              ?>
              <h4 align="left" style="color: #222">{{ $testimonial->name }}</h4>
              <p align="left"><i class="fa fa-calendar" style="color: #222"><span> <?php echo $dias[date('w',strtotime($testimonial->date))]." ".date('d',strtotime($testimonial->date))." de ".$meses[date('n',strtotime($testimonial->date))-1]. " del ".date('Y',strtotime($testimonial->date)) ; ?></span></p></i>
              
              <h5 align="left">{{ $testimonial->testimonial }}</h5>

              
            </center>

          </div>
          
        </div>
        @endforeach
      <center>{{ $testimonials->links() }}</center>
    </div>
    <br><br>

    <div class="heading text-center col-sm-8 col-sm-offset-2">
      <button 
         type="button" 
         class="btn btn-primary btn-lg" 
         data-toggle="modal" 
         data-target="#favoritesModal">
        Inserisci la tua testimonianza
      </button>
    </div>
    <div class="modal fade" id="favoritesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
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
                              <input type="text" name="name" class="form-control" placeholder="Nome" required style="border: 2px solid #e6e6e6;">
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
                              <input type="text" name="date" class="form-control" style="border: 2px solid #e6e6e6;" data-placement="down" value="" required >
                            </div>
                                   </div>   
                            <div class="col-sm-6">
                            <div class="form-group">
                              <input type="text" name="nationality" class="form-control" placeholder="Nazionalità" required style="border: 2px solid #e6e6e6;">
                            </div>
                          </div>
                            <div class="col-sm-6">
                                      <div class="form-group">
                          </div>   
                      </div>
                        
                          </div>
                        <div class="form-group">
                          <textarea name="testimonial" id="testimonial" class="form-control" rows="4" placeholder="Inserisci la tua testimonianza" style="border: 2px solid #e6e6e6;" required></textarea>
                        </div>
                        <div class="form-group">
                          <button type="" class="btn-submit">Invia ora</button>
                        </div>
                      </form>
              </div>
            </div>
          </div>
      </div>
    </div>


<br><br><br><br><br>


  </section><!--/#testimonial-->

  





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
.col-sm-12{
  padding-bottom: 3%;
}
footer{
  background-color: rgb(16,54,9);
}
#titu {
    background-image: url(../img/fondo_testimonios.png);
    background-position: right bottom;
    background-repeat: no-repeat, repeat;
    /*padding: 5px;*/
    
    width: 100%;
    height: 300px;
    background-size: 100% 100%;
    /*border: 1px solid red;*/
}
</style>



<!--inicio del footer-->
@include('website.it.footerIT')
  <!--fin  del footer-->





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



