<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;


class MyFirstController extends Controller
{
   public function index(){

    $concepts = [
        [
            'concepto' =>'Curso Laravel 9',
            'precio' => 20,
            'pais' => 'COL',
            'taxes' => 10,
            'descuento' => 0
        ],
        [
            'concepto' =>'Curso Python',
            'precio' => 10,
            'pais' => 'COL',
            'taxes' => 13,
            'descuento' => 12
        ],
        [
            'concepto' =>'Curso Programacion',
            'precio' => 50,
            'pais' => 'COL',
            'taxes' => 14,
            'descuento' => 0
        ]
    ];
    $date = date('y-m-d , H:i:s');

    return view('welcome', [
        'concepts'=>$concepts,
        'date' => $date

    ]);
   }
}
