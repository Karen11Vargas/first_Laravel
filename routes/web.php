<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstController;
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


Route::get('/contacto', [MyFirstController::class, 'contactPage']);
// Route::post('/contacto', [MyFirstController::class, 'processContact']);

Route::get('/contacto-example',function(){
    echo "Hellp here";
})->name("getContacto");

Route::put('/contacto', [MyFirstController::class, 'processContactPut']);

// Route::delete('/example', [MyFirstController::class, 'index']);
// Route::patch('/example', [MyFirstController::class, 'index']);
// Route::any('/example', [MyFirstController::class, 'index']);
// Route::match(['GET', 'POST'], '/example', [MyFirstController::class, 'index']);
// Route::head('/example', [MyFirstController::class, 'index']);
// Route::options('/example', [MyFirstController::class, 'index']);
// Route::redirect('/route1','/route2');
// Route::redirectPermanet('/route1','/route2');

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
