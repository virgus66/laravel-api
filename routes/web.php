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

use App\Http\Middleware\IfStartsWithS;

/* 
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PagesController@index');
Route::get('/providers-list', 'PagesController@provider');
Route::resource('/providers', 'ProvidersController');
Route::resource('/routes', 'RoutesController')/* ->except(['store','create','destroy']) */;
Route::get('/middleware', 'PagesController@middleware_view');

// ---two ways of applying middleware, as an array or using middleware() method
/* 
Route::get('/tescik/{id}', [
    'middleware' => 'App\Http\Middleware\IfStartsWithS',
    function ($id) {
        return view('pages.testowa', ['numerek' => $id]);
    }]
); 
*/
Route::get('/tescik/{id}/{nb2}/{nb3}', 
    function ($id) {
        return view('pages.testowa', ['numerek' => $id]);
    }
)->middleware('starts.with.s');

Route::get('/tescik', function() {
    return "test przeszedl";
})->middleware('starts.with.s');
