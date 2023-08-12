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



//Agrupar rutas
Route::prefix('/post')->name('principal.')->group(function(){

    Route::get('/contacto-example',function(){
        echo "Hellp here";
    })->name("getContacto");

    Route::get('/contacto', function(){
        echo "Hola desde aqui";
    });
    
});



