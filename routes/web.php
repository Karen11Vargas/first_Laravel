<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

// Route::get('/{cadena}', function ($cadena) {

//     $resultado = 'No se reconoce';
//     switch ($cadena){
//         case 'hola-Mundo':
//             $resultado = "Hola desde Marte";
//             break;
//         case 'holaMundo':
//             $resultado = 'Hola desde Colombia';
//             break;
//         default:
//         $resultado;
//         break;
//     }
//     return view('welcome', ['cadena' =>$resultado]);
// });
