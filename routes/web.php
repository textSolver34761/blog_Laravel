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

Route::get('hello', function () {
    return 'Hello World';
});

Route::redirect('/world', '/hello', 301);

Route::get('user/{id?}', function ($id = '4') {

    if($id<=10){
        return 'User '.$id;
    }else{
        return "l'utilisateur n'existe pas";
    }
});

/*Route::group(['prefix'=>'admin','middleware'=>'ip'], function(){
    Route::get('salut', function(){
        return 'salut cher visiteur';
    });
});*/


route::get('salut/{name}/{id}',function($name,$id){
   return "Salut $name - $id";
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/a-propos','PageController@about')->name('a-propos');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
