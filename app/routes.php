<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
    var_dump(File::get(public_path().'/test.txt'));
});

//Route::get('/', 'HomeController@index');

Route::get('users/{id}', function($id)
{
   var_dump("user with the id of $id");
});