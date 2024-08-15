<?php

use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('blog', 'blog')->name('blog');
Route::resource('clientes', ClientesController::class)->names('clientes');
Route::view('contacto', 'contacto')->name('contacto');
Route::view('servicios', 'servicios')->name('servicios');
Route::view('proyectos', 'proyectos')->name('proyectos');