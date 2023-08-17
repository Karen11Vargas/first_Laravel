<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstController;
use App\Http\Controllers\WebSiteController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\SecondController;


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

//Invocar un controlador tipo reosurce 
Route::resource('/welcome',ResourceController::class)->except(['index', 'create']);

Route::name('website.')->prefix('/website')->group(function(){
    Route::get('{section}', [WebSiteController::class, 'section'])->name('section');
    Route::get('usuario', [WebSiteController::class, 'usuario'])->name('usuario');
    Route::get('contact', [WebSiteController::class, 'contact'])->name('contact');
    Route::post('contact', [WebSiteController::class, 'sendContact']);

});
Route::get('/',[SecondController::class, 'index']);

Route::get('/welcome', [MyFirstController::class, 'index']);
