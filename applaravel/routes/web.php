<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
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
//Para comprobar si existe la vista
// if (View::exists('vista2')){
//     Route::get('/', function () {
//         return view('vista2'); });
// }
// Route::get('/', function () {
//     return 'la vista solicitada no existe';});
Route::get('/w', function () {
    return view('welcome');});
Route::get('/', 'App\Http\Controllers\InicioController@index');
//Llamando una vista con un controlador, direccion de la vista, @ y el metodo