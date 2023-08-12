<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;


class MyFirstController extends Controller
{
    public function middlewareFunction(Request $request){
        echo "<pre>";
        print_r($request->input());
        echo "</pre>";
        echo "Hola Middleware";
    }
   
}
