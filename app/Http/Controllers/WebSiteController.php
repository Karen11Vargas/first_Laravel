<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class WebSiteController extends Controller
{
    public function home(){

        $date = date('d/m/y');
        $time = date('H:i:s');

        $user = Session::get('name', 'Usuario');

        return view('website.home',[
            'date'=>$date,
            'time'=>$time,
            'user'=>$user
        ]);
    }

    public function who(){
        $name = "Karen Vargas";
        $profession = "Developer";
        $age = 17;
        $section = "who";

        return view('website.who-we-are', [
            'name'=>$name,
            'profession'=>$profession,
            'age'=>$age,
            'section'=>$section
        ]);

    }

    public function usuario(Request $request){
        $name = $request->input('name');
        Session::put('name',$name);
        return redirect()->back();
    }

    public function contact(){
        return view('website.contact');

    }

    public function sendContact(){
        return view('website.contact-results.contact-success');
        return view('website.contact-results.contact-error');

    }
}
