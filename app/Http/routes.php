<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('ad/ad');
});*/
//Route::get('/', 'AdController@index');
get('/', ['as' => 'ads', 'uses' => 'AdController@index']);

/*get('ad/create',      ['as' => 'ad.create', 'uses' => 'AdController@create']);
post('ad',            ['as' => 'ad.store',  'uses' => 'AdController@store']);
get('ad/{ad}',      ['as' => 'ad.show',   'uses' => 'AdController@show']);
get('ad/{ad}/edit', ['as' => 'ad.edit',   'uses' => 'AdController@edit']);
post('ad/{ad}',     ['as' => 'ad.update', 'uses' => 'AdController@update']);*/

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
$router->resource('ad', 'AdController');