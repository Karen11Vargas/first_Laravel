<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstController;
use App\Http\Controllers\WebSiteController;
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

Route::name('website.')->prefix('/website')->group(function(){
    
    Route::get('home', [WebSiteController::class, 'home'])->name('home');
    Route::get('who-we-are', [WebSiteController::class, 'who'])->name('who');
    Route::get('usuario', [WebSiteController::class, 'usuario'])->name('usuario');
    Route::get('contact', [WebSiteController::class, 'contact'])->name('contact');
    Route::post('contact', [WebSiteController::class, 'sendContact'])->name('send-contact');

});
Route::view('/', 'contacto');

Route::get('/welcome', [MyFirstController::class, 'index']);
