<?php

use Illuminate\Support\Facades\Route;
// ESTA LÍNEA ES CLAVE:
use App\Http\Controllers\ContactoController; 


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola-mundo', function () {
    return view('hola');
});

// RUTAS DEL FORMULARIO:
Route::get('/formulario-contacto', [ContactoController::class, 'formulario_contacto']);
Route::post('/recibe-formulario', [ContactoController::class, 'recibe_formulario']);
Route::get('/listaContactos', [ContactoController::class, 'listaContactos']);

