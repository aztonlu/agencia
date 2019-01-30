<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Article;
use App\Models\User;
use Image;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\TestimonialssRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;    
class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'ASC')->paginate(); 
        return view('admin.blogs.index')->with('blogs',$blogs);
    }
        

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $blog = new Blog($request->all());
                $blog->save();
        $random = str_random(15);
        if($user->language=='Admin'){
            $language = $request->idioma;
        }
        else{
        $language = $user->language;
        }
        
        //la variable $text se debe traducir de acuerdo al lenguaje
        if($language == 'french')
        {
            $url = "fr/blogs/" . $random . "_" . $blog->id;
            $text = '<?php use App\Models\Article; $articles = Article::where("blog_id",' .$blog->id . ')->get();?> @extends("website.partials.maintriptreasure") @section("'.$blog->name.'", "Voyage combiné Pérou/Bolivie, Machu Picchu, Salar Uyuni, Titicaca, Laguna Colora") @section("keywords", "machu picchu, agence voyage, voyage de noce, circuit perou, voyage perou, voya    ge au perou, perou, nomade aventure, le perou, lac titicaca, tour operateur, Agence de voyages au Pérou") @section("description", "Découvrez les incontournables du Pérou et de la Bolivie dans ce combiné parfaitement équilibré. Nature et découvertes culturelles ne manqueront pas à lappel.")
            @section("content")<div class="trip-detail"> <div class="container">
            <div class="col-md-12 tab-wrap"> <h2>Le Blog</h2>
            <div id="shop-detail">  
            </div><ul class="nav nav-tabs" data-toggle="tabs"> <li class="active"><a href="#itenary"></a></li> </ul><div class="tab-content paper-effect"> <div class="tab-pane active" id="itenary"> 
            @if(count($articles)!=0)@foreach($articles as $article) <div class="row day-description-content"> <div class="col-sm-2"> <img src="{{url("")}}/{{$article->image}}" class="img-day" alt=""> </div> <div class="col-sm-8"> <h4 class="text-success">{{$article->title}}</h4> <p>{{$article->description}}</p> </div> </div> @endforeach
            @else
            <p>Aun no existe articulos en este blog</p>
            @endif
            </div></div> </div></div> </div> <style>
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
@include("website.fr.footerFR")

@endsection';
        }
        else if($language == 'spanish')
        {
            $url = "es/blogs/" . $random . "_" . $blog->id;
            $text = '<?php use App\Models\Article; $articles = Article::where("blog_id",' .$blog->id . ')->get();?> @extends("website.partials.es.maines") @section("'.$blog->name.'", "Voyage combiné Pérou/Bolivie, Machu Picchu, Salar Uyuni, Titicaca, Laguna Colora") @section("keywords", "machu picchu, agence voyage, voyage de noce, circuit perou, voyage perou, voya    ge au perou, perou, nomade aventure, le perou, lac titicaca, tour operateur, Agence de voyages au Pérou") @section("description", "Découvrez les incontournables du Pérou et de la Bolivie dans ce combiné parfaitement équilibré. Nature et découvertes culturelles ne manqueront pas à lappel.")
            @section("content")<div class="trip-detail"> <div class="container">
            <div class="col-md-12 tab-wrap"> <h2>Le Blog</h2>
            <div id="shop-detail">  
            </div><ul class="nav nav-tabs" data-toggle="tabs"> <li class="active"><a href="#itenary"></a></li> </ul><div class="tab-content paper-effect"> <div class="tab-pane active" id="itenary"> 
            @if(count($articles)!=0)@foreach($articles as $article) <div class="row day-description-content"> <div class="col-sm-2"> <img src="{{url("")}}/{{$article->image}}" class="img-day" alt=""> </div> <div class="col-sm-8"> <h4 class="text-success">{{$article->title}}</h4> <p>{{$article->description}}</p> </div> </div> @endforeach
            @else
            <p>Aun no existe articulos en este blog</p>
            @endif
            </div></div> </div></div> </div> <style>
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

@include("website.es.footerES")
@endsection';
        }
        else if($language == 'german')
        {
            $url = "de/blogs/" . $random . "_" . $blog->id;
            $text = '<?php use App\Models\Article; $articles = Article::where("blog_id",' .$blog->id . ')->get();?> @extends("website.partials.de.maindecouvertede") @section("'.$blog->name.'", "Voyage combiné Pérou/Bolivie, Machu Picchu, Salar Uyuni, Titicaca, Laguna Colora") @section("keywords", "machu picchu, agence voyage, voyage de noce, circuit perou, voyage perou, voya    ge au perou, perou, nomade aventure, le perou, lac titicaca, tour operateur, Agence de voyages au Pérou") @section("description", "Découvrez les incontournables du Pérou et de la Bolivie dans ce combiné parfaitement équilibré. Nature et découvertes culturelles ne manqueront pas à lappel.")
            @section("content")<div class="trip-detail"> <div class="container">
            <div class="col-md-12 tab-wrap"> <h2>Blog</h2>
            <div id="shop-detail">  
            </div><ul class="nav nav-tabs" data-toggle="tabs"> <li class="active"><a href="#itenary"></a></li> </ul><div class="tab-content paper-effect"> <div class="tab-pane active" id="itenary"> 
            @if(count($articles)!=0)@foreach($articles as $article) <div class="row day-description-content"> <div class="col-sm-2"> <img src="{{url("")}}/{{$article->image}}" class="img-day" alt=""> </div> <div class="col-sm-8"> <h4 class="text-success">{{$article->title}}</h4> <p>{{$article->description}}</p> </div> </div> @endforeach
            @else
            <p>Aun no existe articulos en este blog</p>
            @endif
            </div></div> </div></div> </div><style>
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
@include("website.de.footerDE")
@endsection';
            
        }
        else if($language == 'italian')
        {
            $url = "it/blogs/" . $random . "_" . $blog->id;
            $text = '<?php use App\Models\Article; $articles = Article::where("blog_id",' .$blog->id . ')->get();?> @extends("website.partials.it.mainit") @section("'.$blog->name.'", "Voyage combiné Pérou/Bolivie, Machu Picchu, Salar Uyuni, Titicaca, Laguna Colora") @section("keywords", "machu picchu, agence voyage, voyage de noce, circuit perou, voyage perou, voya    ge au perou, perou, nomade aventure, le perou, lac titicaca, tour operateur, Agence de voyages au Pérou") @section("description", "Découvrez les incontournables du Pérou et de la Bolivie dans ce combiné parfaitement équilibré. Nature et découvertes culturelles ne manqueront pas à lappel.")
            @section("content")<div class="trip-detail"> <div class="container">
            <div class="col-md-12 tab-wrap"> <h2>Blog</h2>
            <div id="shop-detail">  
            </div><ul class="nav nav-tabs" data-toggle="tabs"> <li class="active"><a href="#itenary"></a></li> </ul><div class="tab-content paper-effect"> <div class="tab-pane active" id="itenary"> 
            @if(count($articles)!=0)@foreach($articles as $article) <div class="row day-description-content"> <div class="col-sm-2"> <img src="{{url("")}}/{{$article->image}}" class="img-day" alt=""> </div> <div class="col-sm-8"> <h4 class="text-success">{{$article->title}}</h4> <p>{{$article->description}}</p> </div> </div> @endforeach
            @else
            <p>Aun no existe articulos en este blog</p>
            @endif
            </div></div> </div></div> </div><style>
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
@include("website.it.footerIT")
@endsection';
        }
        else if($language == 'english')
        {
            $url = "en/blogs/" . $random . "_" . $blog->id;
            $text = '<?php use App\Models\Article; $articles = Article::where("blog_id",' .$blog->id . ')->get();?> @extends("website.partials.en.mainen") @section("'.$blog->name.'", "Voyage combiné Pérou/Bolivie, Machu Picchu, Salar Uyuni, Titicaca, Laguna Colora") @section("keywords", "machu picchu, agence voyage, voyage de noce, circuit perou, voyage perou, voya    ge au perou, perou, nomade aventure, le perou, lac titicaca, tour operateur, Agence de voyages au Pérou") @section("description", "Découvrez les incontournables du Pérou et de la Bolivie dans ce combiné parfaitement équilibré. Nature et découvertes culturelles ne manqueront pas à lappel.")
            @section("content")<div class="trip-detail"> <div class="container">
            <div class="col-md-9 tab-wrap"> <h2>Blog</h2>
            <div id="shop-detail">  
            </div><ul class="nav nav-tabs" data-toggle="tabs"> <li class="active"><a href="#itenary"></a></li> </ul><div class="tab-content paper-effect"> <div class="tab-pane active" id="itenary"> 
            @if(count($articles)!=0)@foreach($articles as $article) <div class="row day-description-content"> <div class="col-sm-4"> <img src="{{url("")}}/{{$article->image}}" class="img-day" alt=""> </div> <div class="col-sm-8"> <h4 class="text-success">{{$article->title}}</h4> <p>{{$article->description}}</p> </div> </div> @endforeach
            @else
            <p>Aun no existe articulos en este blog</p>
            @endif
            </div></div> </div></div> </div><style>
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
@include("website.en.footerEN")
@endsection';
        }
        
        $file = "/home/terres1//laravelfinal/resources/views/website/" . $url . ".blade.php";
        
        if(file_exists($file))
        {
            $mensaje = "El Archivo $file se ha modificado";
        }
        else
        {
            $mensaje = "El Archivo $file se ha creado";
        }
        
        if($openfile = fopen("/home/terres1//laravelfinal/resources/views/website/" . $url . ".blade.php", "a"))
        {
            if(fwrite($openfile, $text))
            {
                echo "Se ha ejecutado correctamente";
            }
            else
            {
                echo "Ha habido un problema al crear el archivo";
            }
            fclose($openfile);
        }
        
        $blog->fill($request->all());
        $blog->link = $url;
        $blog->save();
        flash('Se registró el "'.$blog->title.'" satisfactoriamente', 'success')->important();
        return redirect()->route('blogs.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}