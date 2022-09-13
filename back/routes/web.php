<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('/contactanos', [ContactanosController::class, 'store'])->name('contactanos.store') ;
