<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use App\Models\User_newsletters;
use App\Models\Blog;


class MailController extends Controller
{
    //

    public function store(Request $request)
    {
    	Mail::send('emails.contact',$request->all(), function($msj){
    		$msj->subject('Correo de contacto');
    		$msj->to('sistemas@terandes.com');
    	});

    	Session::flash('message','Mensaje Enviado correctamente');
    	return Redirect::to('/contacto2');
    }
    public function contact(Request $request)
    {
        $recaptcha = $request->input('g-recaptcha-response');
        if($recaptcha)
        {
            $secret = "6LckRDcUAAAAAMCbUVQEE13GJ3QVeSk0HrKXRLOs";
            $ip = $request->ip();
            $rpt = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$ip");
            var_dump($rpt);
            $arr = json_decode($rpt,TRUE);
            if($arr['success']){
                Mail::send('emails.contact',$request->all(),function($msj){
                $msj->subject('Correo de Contacto');
                $msj->to('sistemas@terandes.com');
                });
                Session::flash('message','Mensaje enviado correctamente');
                return Redirect::to('/');
            }
            else{
                return Redirect::to('/')->with('faile','Validate re-captcha');
            }
        }
        else{
            return Redirect::to('/')->with('faile','Validate re-captcha');
        }
        
    }
    public function publicidad($id)
    {
        $users = User_newsletters::all();
        $name = Blog::where('id',$id)->value('name');
        $description = Blog::where('id',$id)->value('description');

        for($i=0; $i<count($users); $i++)
        {
            
            $mail = $users[$i]->email;
            Mail::send('emails.publicidad', array('name' => $name,'description' => $description) ,function($msj) use ($mail){
                $msj->to($mail, 'Terandes')
                            ->subject('Dale un ojo a este gran noticia');
            });
        }
        flash('Se envio correctamente', 'success')->important();
        return back();
    }
}
