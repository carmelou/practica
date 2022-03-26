<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartamentoController;
use Illuminate\Support\Facades\Route;

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
Route::group(['prefix' => '/user'], function() {
    Route::get('/',   [ UserController::class, 'index'] );
    Route::get('/show/{id}',  [ UserController::class, 'show'] );
    Route::get('/create/',   [ UserController::class, 'create'] );
    Route::get('/edit/{id}',   [ UserController::class, 'edit'] );
    //user actions
    Route::post('/store',   [ UserController::class, 'store'] );
    Route::put('/update',   [ UserController::class, 'put'] );
    Route::delete('/delete',   [ UserController::class, 'destroy'] );
});


Route::group(['prefix' => '/departamento'], function() {
    Route::get('/',   [ DepartamentoController::class, 'index'] );
    Route::get('/show/{id}',  [ DepartamentoController::class, 'show'] );
    Route::get('/create/',   [ DepartamentoController::class, 'create'] );
    Route::get('/edit/{id}',   [ DepartamentoController::class, 'edit'] );
    //user actions
    Route::post('/store',   [ DepartamentoController::class, 'store'] );
    Route::put('/update',   [ DepartamentoController::class, 'put'] );
    Route::delete('/delete',   [ DepartamentoController::class, 'destroy'] );
});

Route::get('/saludo/{name}/{nickname?}',   [ UserController::class, 'saludo']  );

