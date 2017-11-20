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
});
Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/login', function(){
    return redirect('/');
})->name('login');

Route::get('/member/list', 'HomeController@memberlist')->name('member');
Route::get('/user/{name}', 'HomeController@user')->name('user');

Route::get('/event/new', 'PostController@create')->name('newevent');
Route::get('/event/{id}', 'HomeController@event')->name('event');
Route::get('/statement', 'HomeController@statement')->name('statement');

Route::post('/user/pay', ['as' => '/user/{name}', 'uses' => 'PostController@payformepayforme']);
Route::post('/event/store', ['as' => '/event/new', 'uses' => 'PostController@store']);
Route::post('/event/edit', ['as' => '/event/{id}', 'uses' => 'PostController@update']);
Route::post('/event/destroy', ['as' => '/event/{id}', 'uses' => 'PostController@destroy']);