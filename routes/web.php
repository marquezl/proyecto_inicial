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


Route::get('admin/users/index',[
        'uses' => 'UsersController@index',
        'as'   => 'admin.users.index'
    ]);

Route::get('admin/personas/index',[
        'uses' => 'PersonasController@index',
        'as'   => 'admin.personas.index'
    ]);

Route::get('admin/transportes/index',[
        'uses' => 'TransportesController@index',
        'as'   => 'admin.transportes.index'
]);


Route::group(['prefix' => 'admin'], function(){
    Route::resource('users','UsersController');
    Route::resource('personas','PersonasController');
    Route::resource('transportes','TransportesController');
    Route::get('users/{id}/destroy',[
        'uses' => 'UsersController@destroy',
        'as'   => 'admin.users.destroy'
    ]);
    Route::get('personas/{id}/destroy',[
        'uses' => 'PersonasController@destroy',
        'as'   => 'admin.personas.destroy'
    ]);
    Route::get('transportes/{id}/destroy',[
        'uses' => 'TransportesController@destroy',
        'as'   => 'admin.transportes.destroy'
    ]);

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

Route::get('logout', 'Auth\LoginController@logout');

