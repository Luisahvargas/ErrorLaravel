<?php

use App\Http\Controllers\LuisaControllers;
use App\Http\Controllers\UsuarioControlador;
use App\Http\Controllers\usuariocontrollers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', function () {
    return "Hola Instructor Andres Agudelo";
});

Route::get('/Palabra', [LuisaControllers::class, 'Palabra']);

Route::resource('/usuarios', usuariocontrollers::class);
