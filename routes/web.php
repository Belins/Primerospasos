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

Route::pattern('id', '[0-9]+');
Route::pattern('nombre', '[a-zA-Z]+');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/blog/{id}', function ($id) {
    return view('blog', ['id'=>$id]);
});

Route::get('/blog2/{id}/{nombre}', function ($id, $nombre) {
    return view('blog2', ['id'=>$id, 'nombre'=>$nombre]);
})->where(array('nombre'=>'[a-zA-Z]+','id'=>'[0-9]+'));

Route::get('/saludo', 'SaludoController@getsaludo');
Route::get('/saludo2/{nombre}', 'SaludoController@getnombre');
Route::get('/saludo3/{nombre}/{color?}', 'SaludoController@getnombrecolor');

