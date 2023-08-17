<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class WebSiteController extends Controller
{

    public function section($section){
        $user = Session::get('name', 'Usuario');
        $data =[
            'user'=>$user,
            'section' => $section
        ];

        switch ($section){
            case 'home':
                $data['date'] = date('d/m/y');
                $data['time'] = date('H:i:s');
                
            break;
            case 'who-we-are':
                $data['name']= "Karen Vargas";
                $data['age']= 17;
                $data['profession']= "Developer";
            break;
        }
        return view('website.'.$section,$data);
    }



    public function usuario(Request $request){
        $name = $request->input('name');
        Session::put('name',$name);
        return redirect()->back();
    }

 
    public function sendContact(Request $request){
        $input = $request->only('name', 'email', 'mensaje');
        if (!isset($input['name']) || !isset($input['email']) || !isset($input['mensaje'])) 
            return view('website.contact-results.contact-error');
        return view('website.contact-results.contact-success');

    }
}
