<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartamentoController;
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
//Route::get('/user/', 'UserController@index');


//user actions
Route::group(['prefix' => '/users'], function() {
    Route::get('/',   [ UserController::class, 'index'] )->name('todos');
    Route::get('/show/{id}',  [ UserController::class, 'show'] )->name('ver');
    Route::get('/create/',   [ UserController::class, 'create'] )->name('crear');
    Route::get('/edit/{id}',   [ UserController::class, 'edit'] );
    //user actions
    Route::post('/nuevo',   [ UserController::class, 'store'] )->name('nuevoUsuario');
    Route::put('/update',   [ UserController::class, 'put'] );
    Route::delete('/delete',   [ UserController::class, 'destroy'] );
});


Route::group(['prefix' => '/departamentos'], function() {
    Route::get('/',   [ DepartamentoController::class, 'index'] )->name('todosd');
    Route::get('/show/{id}',  [ DepartamentoController::class, 'show'] )->name('verd');
    Route::get('/create/',   [ DepartamentoController::class, 'create'] )->name('creard');
    Route::get('/edit/{id}',   [ DepartamentoController::class, 'edit'] );
    //user actions
    Route::post('/nuevo',   [ DepartamentoController::class, 'store'] )->name('nuevoDepartamento');
    Route::put('/update',   [ DepartamentoController::class, 'put'] );
    Route::delete('/delete',   [ DepartamentoController::class, 'destroy'] );
});

Route::get('/saludo/{name}/{nickname?}',   [ UserController::class, 'saludo']  );




