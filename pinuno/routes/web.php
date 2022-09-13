<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
/*

| Web Routes
Todo aqui es php
Todas las rutas que tengamos en nuewstro proyecyo estaran aqui o en api
como saber donde estan las rutas en mi proyecto? php artisan route:list -c
metodo get solicita datos
post enviar y crear un datos
put reemplazar un dato
patch modificar parcialmente un dato
delete borrar un dato
7Rutas principales en general
*/

Route::get('/', function () {
    return 'pagina principal';
    //aquí laravel devuelve por defecto una vista las vistas en laravel estan en
    // resource views: return view('welcome');
});
// Route::get('/home', [PageController::class, 'home'] );
Route::get('/quienes-somos', [PageController::class, 'quienessomos'] );
Route::get('/contacto', [PageController::class, 'contacto'] );
Route::get('/welcome', function () {
   return view('welcome');
});
Route::get('/home', function () {return view('home');});