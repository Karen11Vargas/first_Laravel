<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;


class MyFirstController extends Controller
{
    //Este controlador responde con un mensaje
    public function index(Request $request){

        print_r( $request->header());
        // return new Response("Hello Word");
        return new JsonResponse("Hello");
    }
}
