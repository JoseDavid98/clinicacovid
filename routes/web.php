<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DialogCovidController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ConsultoriosController;
use App\Http\Controllers\DoctoresController;
use Illuminate\Support\Facades\Auth;

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
    return view('modulos.Seleccionar');
});

Route::get('/Ingresar', function () {
    return view('modulos.Ingresar');
});



//Route::resource('Consultorios', ConsultoriosController::class);

//UNA VEZ INICIADO SESION 
Auth::routes();

Route::get('Inicio',[InicioController::class,'index']);

Route::get('Consultorios',[ConsultoriosController::class,'index']);
Route::post('Consultorios',[ConsultoriosController::class,'store']);
Route::get('DialogCovid',[DialogCovidController::class,'index']);
Route::put('Consultorio/{id}',[ConsultoriosController::class,'update']);
Route::delete('borrar-Consultorio/{id}',[ConsultoriosController::class,'destroy']);

Route::get('Doctores',[DoctoresController::class,'index']);




//Route::get('/logout', [Login_logout::class,'logout']);
//Auth::logout();
//Route::get('/logout', 'Auth\LoginController@logout');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
