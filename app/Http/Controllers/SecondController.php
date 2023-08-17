<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function index($index = null){
        return redirect()->back();

        return redirect()->route('welcome');
        return view('contacto');
    }
}
