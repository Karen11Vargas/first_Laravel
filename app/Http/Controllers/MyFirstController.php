<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;


class MyFirstController extends Controller
{
    public function contactPage(){
        return view('contacto');
    }

  

    public function processContact(Request $request){
        echo "Formulario realizado";
        die();
    }

    public function processContactPut(Request $request){
        return new Response("Hello");
    }
}
