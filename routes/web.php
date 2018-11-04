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

Route::get('index', function () {
    $posts = App\Post::all();
    return view('index', compact('posts'));
});

Auth::routes();
Route::post('/make-payment', 'PaymentsController@pay');

Route::get('/index', 'HomeController@index')->name('index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
