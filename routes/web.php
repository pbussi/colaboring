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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/mensaje', function () {
    return redirect()->route('welcome')->with('error','Item actualizado!');
});