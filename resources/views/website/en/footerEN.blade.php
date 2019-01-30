 <footer >
            
    <div class="footer-top wow fadeInUp animated" style="padding-top: 0px;" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInUp;background-color: rgb(23,58,27)">
        


<div class="container-fluid">
  <div class="row" style="text-align: center; color: white;">
     <div class="col-xs-12 col-md-4">
            <h2><strong>PARTNERS</strong></h2>
        
            <div class="col-xs-12 col-sm-6 col-md-12">
                   <a href="{{ URL::to('https://www.patronatomachupicchu.org/') }}"><h5 style="color: #FFF">- Patronato de Cultura Machu Picchu</h5>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-12">
                   <a href="{{ URL::to('http://www.illapa.com/') }}"><h5 style="color: #FFF">- Illapa Culturas Andinas</h5>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-12">
                   <a href="{{ URL::to('https://www.patronatomachupicchu.org/') }}"><h5 style="color: #FFF">- Tatoo, Adventure Gear</h5>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-12">
                   <a href="{{ URL::to('http://www.peru.travel/fr/') }}"><h5 style="color: #FFF">- Promperu</h5>
            </div>
           
    </div>
    
     <div class="col-xs-12 col-md-4">
      <div class="row" style="text-align: center; color: white;">
        <div class="col-xs-12">
            <h2><strong>TOURS</strong></h2>
        </div>
    
      </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3">
                   <a href="{{url('')}}/en/tours/decouverte/Discover"><h4>Discover</h4></a><br>
              <a href="{{url('')}}/en/tours/decouverte/Discover"><img src="{{url('')}}/img/Aventura.jpg" height="60%" width="60%"> 
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                  <a href="{{url('')}}/en/tours/decouverte/High-Mountain"><h4>High Mountain</h4></a>
            <a href="{{url('')}}/en/tours/decouverte/High-Mountain"><img src="{{url('')}}/images/Alta_montaña.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                  <a href="{{url('')}}/en/tours/decouverte/Aventure"><h4>Adventure</h4></a><br>
              <a href="{{url('')}}/en/tours/decouverte/Aventure"><img src="{{url('')}}/images/Descubir.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="{{url('')}}/en/tours/decouverte/Excursions"><h4>Excursions</h4></a><br>
                <a href="{{url('')}}/en/tours/decouverte/Excursions"><img src="{{url('')}}/images/Excursiones2.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
        </div>
    </div>
     <div class="col-xs-12 col-md-4">
            <h2><strong>Subscribe</strong></h2>
        
            <h5 style="color: #fff;">Subscribe to receive news</h5>
          
              <form action="{{route('publicnewsletters.store')}}" method="post">
            {{ csrf_field() }}
              <?php $url = Request::path();?>
              <input type="hidden" name="language" value="{{$url}}">
              <input name='email' placeholder='example@mail.com' class="form-control text-center" type="email" style="width:90%" required>
              
              <!--<a href="{{url('')}}/fr/tours/decouverte/Excursions"><img src="{{url('')}}/img/cap.png" height="20%" width="20%"></a>
                <br><br>
                <div class="col-sm-2"></div>
                <input name='text' placeholder='entrez le texte de limage' class="form-control text-center" type="email" style="width:60%" padding="0 40px 0 0" required>-->
              <!--Aqui agrego-->
              <center><div class="g-recaptcha" data-sitekey="6LckRDcUAAAAABk1EwZMaaw4eSAcnsL5Qz0jfNSe"></div></center><br>
              <!--Aqui termino-->
              
              
              <button type="submit" class="btn-submit text-center" style="width:90%">Subscribe now</button>
                  
          </form>
           
    </div>
  </div>
</div>
    </div>
 
    
  </footer>