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

Route::get('/login', function(){
    echo "Url de login";
})->name('login');

Route::middleware('firstMiddleware::all')->get('/middle',[MyFirstController::class,'middlewareFunction']);
