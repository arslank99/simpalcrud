<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\postcontroller;
use App\http\controllers\studentcontroller;
use App\http\controllers\studentdata;
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

Route::get('/', function () {
    return view('index');
});

Route::get('contact', function () {
    return view('contact');
});


/*Route::get('form', function () {
    return view('form.form');
});
*/

Route::view('form','form.form');
Route::post('show',[postcontroller::class,'show']);

/*=============================
      component layout 
===============================*/
Route::get('home', function () {
    return view('component-display.home');
})->name('home');

Route::get('skill', function () {
    return view('component-display.skill');
})->name('skill');

route::get("service",[postcontroller::class,'service'])->name('service');
route::get("contact1",[postcontroller::class,'contact'])->name('contact1');


/*=============================
         Crud Layout
===============================*/
Route::get('crud',[studentcontroller::class,'index'])->name('crud');
Route::post('crud',[studentcontroller::class,'create'])->name('create');
Route::get('edit/{id}',[studentcontroller::class,'edit'])->name('edit');
Route::put('edit/{id}',[studentcontroller::class,'update'])->name('update');
Route::get('delete/{id}',[studentcontroller::class,'destroy'])->name('delete');
/*=============================
         Crud Layout model
===============================*/
Route::get('crud2',[studentdata::class,'index'])->name('crud2');
Route::post('crud2',[studentdata::class,'create'])->name('create');
Route::get('edit2/{id}',[studentdata::class,'edit'])->name('edit');
Route::put('edit2/{id}',[studentdata::class,'update'])->name('update');
Route::get('delete2/{id}',[studentdata::class,'destroy'])->name('delete2');
//Route::get('login',[studentdata::class,'login'])->name('login');
//Route::get('register',[studentdata::class,'register'])->name('register');
//Route::post('register',[studentdata::class,'register'])->name('register');
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
