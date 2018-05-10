<?php

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
use App\Anime;

Route::get('/', function () {
    $animes=Anime::paginate(24);
    return view('welcome',['animes'=>$animes]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


