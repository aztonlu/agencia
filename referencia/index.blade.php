@extends('website.partials.main')
@section('title', 'Terandes')
@section('keywords', 'agence voyage perou, voyage perou, tour operateur perou, aventure inca perou, agence de voyages au perou, voyage au perou, circuit perou, perou tourisme')
@section('description', 'Tierras de los Andes: Agence de voyages et Tour opérateur péruvien spécialiste des voyages découverte, aventure, randonnée et trekking en petit groupe et sur mesure')

@section('translate')
    <div class="top-header">

        <div class="wrap-top">

            <div class="info-top pull-left">
                <small class="top-element"><strong><a href="#">Info: terandes@terandes.com</a></strong></small>
                <small class="top-element"><a href="#">Appelez-nous maintenant: 00 51 84 247277</a></small>
            </div>

            <div class="language-top pull-right">
                <small class="top-element-language">Langue:</small>
                <a class="route-language" href="{{url('')}}"><img class="img-lng" src="{{url('')}}/img/lng/fr.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/en"><img class="img-lng" src="{{url('')}}/img/lng/en.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/es"><img class="img-lng" src="{{url('')}}/img/lng/es.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/de"><img class="img-lng" src="{{url('')}}/img/lng/de.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/it"><img class="img-lng" src="{{url('')}}/img/lng/it.png" alt="Idioma"></a>
            </div>

        </div>

    </div>
@endsection

@section('content')


<form class="search-bar container" method="GET" action="search">
    <div class="col-sm-2 text-wrap">
        <h2 class="main-head">Trouver</h2>
        <h5 class="sub-head">Tours</h5>
    </div>
    <div class="col-sm-8 row">
        <div class="col-sm-3 form-group">
            <label>Les catégories</label>
            <select class="form-control selectpicker" name="categories">
                <option value="decouverte">Découverte</option>
                <option value="aventure">Aventure</option>
                <option value="excursions">Excursions</option>
                <option value="montagne">Haute montagne</option>
            </select>
        </div>
        <div class="col-sm-3 form-group">
            <label>À partir de</label>
            <input type="text" class="form-control datepicker" name="from" readonly>
        </div>
        <div class="col-sm-3 form-group">
            <label>En haut</label>
            <input type="text" class="form-control datepicker" name="to" readonly>
        </div>
        <div class="col-sm-3 form-group">
            <label>Prix</label>
            <select class="form-control selectpicker" name="price">
                <option value="800 - 3000">800 - 3000</option>
                <option value="900 - 1500">900 - 1500</option>
                <option value="1500 - 3000">1500 - 3000</option>
            </select>
        </div>
    </div>
    <div class="col-sm-2">
        <button class="btn btn-search btn-primary hvr-sweep-to-right">Recherche</button>
    </div>
</form>

<div class="container">
    <div class="trip-insight">
        <div class="insight-list-wrap row">
            <div>
                <div class="insight-list">
                    <a href="{{url('')}}/tours/decouverte">
                        <span class="icon-balloon"></span>
                        <div class="txt">
                            <p>Vous êtes plutôt</p>
                            <h3>Découverte</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <div class="insight-list">
                    <a href="{{url('')}}/tours/aventure">
                        <span class="icon-hiking"></span>
                        <div class="txt">
                            <p>Vous êtes plutôt</p>
                            <h3>Aventure</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <div class="insight-list">
                    <a href="{{url('')}}/tours/haute-montagne">
                        <span class="icon-mountain"></span>
                        <div class="txt">
                            <p>Vous êtes plutôt</p>
                            <h3>Haute montagne</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <div class="insight-list">
                    <a href="{{url('')}}/tours/excursions">
                        <span class="icon-tent"></span>
                        <div class="txt">
                            <p>Vous êtes plutôt</p>
                            <h3>Excursions</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="showcase">

    <div class="container">

        <div class="row item">

            <div class="container">

                <div class="col-md-4 aside-home">

                    <!--Articles-->

                    <div class="col-md-12">
                        <h3 class="text-center title-aside">Des articles</h3>
                        <div class="post-list-sldr testimonial">

                            <div class="col-md-12">

                                <div class="post-img-sldr" style="background-image: url('{{url('')}}/img/blog/rendez.jpg')">
                                </div>
                                <div class="post-summary-sldr">
                                    <header>
                                        <h4 class="post-title-sldr">
                                            <a href="#">Rendez-vous en terre inconnue : Arthur chez les quechuas des And</a>
                                        </h4>
                                        <p class="byline author vcard">
                                            <span class="italic">By</span>&nbsp;
                                            <a href="#" rel="author">Aaron D. Cullen</a>
                                            <span class="dot">·</span>
                                            <span class="updated">02/10/2016</span>
                                        </p>
                                    </header>

                                    <div class="post-excerpt">
                                        Tierras de los Andes est fière d'avoir participé à la réalisation de l'émission Rendez-vous en terre...
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">

                                <div class="post-img-sldr" style="background-image: url('{{url('')}}/img/home_img/ausangate2.jpg')">
                                </div>
                                <div class="post-summary-sldr">
                                    <header>
                                        <h4 class="post-title-sldr">
                                            <a href="#">Jours</a>
                                        </h4>
                                        <p class="byline author vcard">
                                            <span class="italic">By</span>&nbsp;
                                            <a href="#" rel="author">Victor S.</a>
                                            <span class="updated">02/10/2016</span>
                                        </p>
                                    </header>

                                    <div class="post-excerpt">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hadis quaerat quas saepe? consectetur adipisicing elit.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Testimonials-->

                    <div class="col-md-12">
                        <h3 class="text-center  title-aside">Témoignages</h3>
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <div class="name">Pregnolato Tomas</div>
                                <div class="rating">
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star-half"></span>
                                </div>
                                <div class="post-excerpt">
                                    Viaggio in Peru' Bolivia Cile dal 6/03/17 al 30/03/17 organizzato da Tierras de los Andes. Un grazie particolare per il programma che Alessandro Baldelli responsabile di...
                                </div>
                            </div>

                            <div class="testimonial-content">
                                <div class="name">Laye</div>
                                <div class="rating">
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                                <div class="post-excerpt">
                                    onjour RICARDO JE VIENS VOUS REDIRE COMBIEN NOTRE VOYAGE DANS VOTRE MAGNIFIQUE PAYS ÉTAIT TRÈS BIEN ORGANISE tout était parfait: guides extraordinaires; chauffeur; bus...
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Gallery-->

                    <div class="col-md-12">
                        <h3 class="text-center  title-aside">Photos et Videos</h3>
                        <div class="testimonial" id="">
                            <div class="content-gallery-aside">
                                <a href="#">
                                    <img class="gallery-aside" src="{{url('')}}/img/gallery/photos/10_1.jpg" alt="">
                                    <figcaption class="small">Titre de la photo</figcaption>
                                </a>
                            </div>
                            <div class="content-gallery-aside">
                                <a href="#">
                                    <img class="gallery-aside" src="{{url('')}}/img/gallery/photos/10_1.jpg" alt="">
                                    <figcaption class="small">Titre de la photo</figcaption>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-8">

                    <div class="main-title">
                        <h2>Notre Destination Préférée</h2>
                        <p>Consectetur adipisicing elit. Quisquam fugit ducimus, qui molestias.</p>
                    </div>

                    <div class="row">

                        <div class="col-sm-6 col-md-6">
                            <div class="item-grid">
                                <div class="item-img" style="background-image: url('{{url('')}}/img/files/perou-bolivie-express.jpg');">
                                    <div class="item-overlay">
                                        <a href="{{url('')}}/tours/decouverte/perou-bolivie-express"><span class="icon-hiking"></span></a>
                                    </div>
                                </div>
                                <div class="item-desc">
                                    <div class="item-info">
                                        <h4 class="title"><a href="{{url('')}}/tours/decouverte/perou-bolivie-express">Pérou-Bolivie Express</a></h4>
                                    </div>

                                    <div class="sub-title">
                                        <small class="location">Peroú</small> <small class="location">Bolivie</small>
                                        <small class="grade"><i class="icon-rock-climbing"></i> Adventure</small>
                                        <small class="grade"><i class="icon-backpack"></i> Facilé</small>
                                        <small class="grade"><i class="icon-badge"></i> Standard</small>
                                    </div>

                                    <div class="item-detail">
                                        <div class="left">
                                            <div class="day"><span class="icon-shoe"></span>Adventure</div>
                                            <div class="night"><span class="icon-sun"></span>13 J / 12 N</div>
                                        </div>
                                        <div class="right">
                                            <div class="price">2035 USD</div>
                                            <a href="{{url('')}}/tours/decouverte/perou-bolivie-express" class="btn btn-primary hvr-sweep-to-right">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="item-grid">
                                <div class="item-img" style="background-image: url('{{url('')}}/img/files/du-machu-picchu-au-salar-d-uyuni.jpg');">
                                    <div class="item-overlay">
                                        <a href="{{url('')}}/tours/decouverte/du-machu-picchu-au-salar-duyuni"><span class="icon-hiking"></span></a>
                                    </div>
                                </div>
                                <div class="item-desc">
                                    <div class="item-info">
                                        <h4 class="title"><a href="{{url('')}}/tours/decouverte/du-machu-picchu-au-salar-duyuni">Du Machu Picchu au salar d''Uyuni</a></h4>
                                    </div>

                                    <div class="sub-title">
                                        <small class="location">Peroú</small> <small class="location">Bolivie</small>
                                        <small class="grade"><i class="icon-rock-climbing"></i> Adventure</small>
                                        <small class="grade"><i class="icon-backpack"></i> Facilé</small>
                                        <small class="grade"><i class="icon-badge"></i> Standard</small>
                                    </div>

                                    <div class="item-detail">
                                        <div class="left">
                                            <div class="day"><span class="icon-shoe"></span>Adventure</div>
                                            <div class="night"><span class="icon-sun"></span>17 J / 16 N</div>
                                        </div>
                                        <div class="right">
                                            <div class="price">2650 USD</div>
                                            <a href="{{url('')}}/tours/decouverte/du-machu-picchu-au-salar-duyuni" class="btn btn-primary hvr-sweep-to-right">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="item-grid">
                                <div class="item-img" style="background-image: url('{{url('')}}/img/files/au-coeur-des-communautes-andines.jpg');">
                                    <div class="item-overlay">
                                        <a href="{{url('')}}/tours/decouverte/au-coeur-des-communautes-andines"><span class="icon-hiking"></span></a>
                                    </div>
                                </div>
                                <div class="item-desc">
                                    <div class="item-info">
                                        <h4 class="title"><a href="{{url('')}}/tours/decouverte/au-coeur-des-communautes-andines">Au coeur des communautés</a></h4>
                                    </div>

                                    <div class="sub-title">
                                        <small class="location">Peroú</small>
                                        <small class="grade"><i class="icon-rock-climbing"></i> Adventure</small>
                                        <small class="grade"><i class="icon-backpack"></i> Facilé</small>
                                        <small class="grade"><i class="icon-badge"></i> Standard</small>
                                    </div>

                                    <div class="item-detail">
                                        <div class="left">
                                            <div class="day"><span class="icon-shoe"></span>Adventure</div>
                                            <div class="night"><span class="icon-sun"></span>15 J / 14 N</div>
                                        </div>
                                        <div class="right">
                                            <div class="price">2155 USD</div>
                                            <a href="{{url('')}}/tours/decouverte/au-coeur-des-communautes-andines" class="btn btn-primary hvr-sweep-to-right">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="item-grid">
                                <div class="item-img" style="background-image: url('{{url('')}}/img/files/tresors-du-sud-perou.jpg');">
                                    <div class="item-overlay">
                                        <a href="{{url('')}}/tours/decouverte/tresors-du-sud-perou"><span class="icon-hiking"></span></a>
                                    </div>
                                </div>
                                <div class="item-desc">
                                    <div class="item-info">
                                        <h4 class="title"><a href="">Trésors du sud Pérou</a></h4>
                                    </div>

                                    <div class="sub-title">
                                        <small class="location">Peroú</small>
                                        <small class="grade"><i class="icon-rock-climbing"></i> Adventure</small>
                                        <small class="grade"><i class="icon-backpack"></i> Facilé</small>
                                        <small class="grade"><i class="icon-badge"></i> Standard</small>
                                    </div>

                                    <div class="item-detail">
                                        <div class="left">
                                            <div class="day"><span class="icon-shoe"></span>Adventure</div>
                                            <div class="night"><span class="icon-sun"></span>15 J / 14 N</div>
                                        </div>
                                        <div class="right">
                                            <div class="price">2380 USD</div>
                                            <a href="{{url('')}}/tours/decouverte/tresors-du-sud-perou" class="btn btn-primary hvr-sweep-to-right">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="item-grid">
                                <div class="item-img" style="background-image: url('{{url('')}}/img/files/le-trek-du-chemin-inca.jpg');">
                                    <div class="item-overlay">
                                        <a href="{{url('')}}/tours/excursions/le-trek-du-chemin-inca"><span class="icon-hiking"></span></a>
                                    </div>
                                </div>
                                <div class="item-desc">
                                    <div class="item-info">
                                        <h4 class="title"><a href="">Le trek du chemin inca</a></h4>
                                    </div>

                                    <div class="sub-title">
                                        <small class="location">Peroú</small>
                                        <small class="grade"><i class="icon-rock-climbing"></i> Adventure</small>
                                        <small class="grade"><i class="icon-backpack"></i> Facilé</small>
                                        <small class="grade"><i class="icon-badge"></i> Standard</small>
                                    </div>

                                    <div class="item-detail">
                                        <div class="left">
                                            <div class="day"><span class="icon-shoe"></span>Adventure</div>
                                            <div class="night"><span class="icon-sun"></span>04 J / 03 N</div>
                                        </div>
                                        <div class="right">
                                            <div class="price">745 USD</div>
                                            <a href="{{url('')}}/tours/excursions/le-trek-du-chemin-inca" class="btn btn-primary hvr-sweep-to-right">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="item-grid">
                                <div class="item-img" style="background-image: url('{{url('')}}/img/files/le-perou-en-famille.jpg');">
                                    <div class="item-overlay">
                                        <a href="{{url('')}}/tours/decouverte/le-perou-en-famille"><span class="icon-hiking"></span></a>
                                    </div>
                                </div>
                                <div class="item-desc">
                                    <div class="item-info">
                                        <h4 class="title"><a href="">Le Pérou en famille</a></h4>
                                    </div>

                                    <div class="sub-title">
                                        <small class="location">Peroú</small>
                                        <small class="grade"><i class="icon-rock-climbing"></i> Adventure</small>
                                        <small class="grade"><i class="icon-backpack"></i> Facilé</small>
                                        <small class="grade"><i class="icon-badge"></i> Standard</small>
                                    </div>

                                    <div class="item-detail">
                                        <div class="left">
                                            <div class="day"><span class="icon-shoe"></span>Adventure</div>
                                            <div class="night"><span class="icon-sun"></span>14 J / 13 N</div>
                                        </div>
                                        <div class="right">
                                            <div class="price">1780 USD</div>
                                            <a href="{{url('')}}/tours/decouverte/le-perou-en-famille" class="btn btn-primary hvr-sweep-to-right">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="section-title center"><h3>Je voyage</h3></div>
            <div class="border-box">
                <div class="row feature-list center">
                    <div class="col-sm-4">
                        <a href="#">
                            <div class="diamond-icon"><span class="icon-addon"></span></div>
                            <div class="desc">
                                <h4>En Groupe</h4>
                                Un voyage qui saura satisfaire le plus grand nombre !
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#">
                            <div class="diamond-icon"><span class="icon-happy"></span></div>
                            <div class="desc">
                                <h4>En famille</h4>
                                Profitez d’un voyage adapté autant pour les petits que pour les grands !
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#">
                            <div class="diamond-icon"><span class="icon-heart"></span></div>
                            <div class="desc">
                                <h4>En couple</h4>
                                Partager des moments inoubliables avec votre moitié !
                            </div>
                        </a>
                    </div>
                </div>
                <hr>

            </div>

        </div>

    </div>

</section>

@endsection
