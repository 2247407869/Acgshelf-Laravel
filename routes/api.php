<?php

use Illuminate\Http\Request;
use App\Anime;
use App\Http\Resources\AnimeResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('animes/{orderby?}/{order?}', function ($orderby = 'rank', $order = 'asc') {
    return AnimeResource::collection(Anime::orderBy($orderby,$order)->paginate(30));
});

Route::get('/hello', function () {
    return 'hello';
});
