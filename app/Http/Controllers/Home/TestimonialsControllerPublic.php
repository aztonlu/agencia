<?php
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\User_newsletters;
use Image;
use App\Http\Requests\TestimonialsRequest;
use App\Http\Requests\UsersRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin;

class TestimonialsControllerPublic extends Controller
{

    public function blogsFrench($id){
        return view('website.fr.blogs.'. $id);
    }
    public function blogsSpanish($id){
        return view('website.es.blogs.'. $id);
    }
    public function blogsGerman($id){
        return view('website.de.blogs.'. $id);
    }
    public function blogsItalian($id){
        return view('website.it.blogs.'. $id);
    }
    public function blogsEnglish($id){
        return view('website.en.blogs.'. $id);
    }
    
    public function store(Request $request){
        $carbon = new \Carbon\Carbon();
        $file = $request->file('imagen');
        $timestemp = $request->date;
        $year = $carbon::createFromFormat('d/m/Y', $timestemp)->year;
        $month = $carbon::createFromFormat('d/m/Y', $timestemp)->month;
        $day = $carbon::createFromFormat('d/m/Y', $timestemp)->day;
        $newDate = $year.'-'.$month.'-'.$day;

        //estoy eliminando todo el condicional porque no necesitara ingresar imagen desde el index, solo dejo la ruta de imagen por defecto
            $cadena = "users/persona.png";
        
        $testimonial = new Testimonial($request->all());
        switch($request->language){
            case 'fr':
                $language = 'french';
                break;
            case 'de':
                $language = 'german';
                break;
            case 'es':
                $language = 'spanish';
                break;
            case 'en':
                $language = 'english';
                break;
            case 'it':
                $language = 'italian';
                break;
        }
        $testimonial->date = $newDate;
        $testimonial->language = $language;
        $testimonial->photo = $cadena;
        //$testimonial->tour_id = $request->tour;
        $testimonial->tour_id = "72";
        //$testimonial->status = $request->status;
        $testimonial->status = "draft";
        $testimonial->save();
        flash('Se registró a "'.$testimonial->name.'" satisfactoriamente', 'success')->important();
        return redirect('/'.$request->language);
}

}