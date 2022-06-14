<?php
use App\Http\Controllers\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/register',[RegisterController::class, 'index']);
Route::post('/register',[RegisterController::class, 'register']);




Route::get('/home', function (){
 return view('home');
});

Route::get('/about', function (){
return view('/about');
});

Route::get('/course', function (){
return view('course');
});

Route::get("/home", function(){
    return View::make("home");
 });
 