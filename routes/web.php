<?php

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
    return view('inicio');
});

Route::get('desarrollador', function (){
    return "Nombre: Luis Jose Arias Reyes";
});

Route::get('creador/{ciclo}', function($ciclo){
    return "Ciclo enviado por url: $ciclo";
});

Route::get('materia', function(){
    return "Programacion Computacional IV";
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('caracteristicas', function () {
    return view('caracteristicas');
});
Route::get('view2', function () {
    return view('view2');
});
Route::get('view3', function () {
    return view('view3');
});
