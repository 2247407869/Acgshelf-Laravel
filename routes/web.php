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
use App\Http\Resources\AnimeResource;

Route::get('/', function () {
    return view('welcome');
});

Route::get('animes/{orderby?}/{order?}', function ($orderby = 'rank', $order = 'asc') {
    return AnimeResource::collection(Anime::orderBy($orderby,$order)->paginate(30));
});

Route::get('/test', function () {
    return view('welcome');
});