<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;


Route::get('/pelicula', [PeliculaController::class, 'index']);
Route::post('/pelicula', [PeliculaController::class, 'store']);
Route::get('/pelicula/{id}', [PeliculaController::class, 'show']);
Route::put('/pelicula/{id}', [PeliculaController::class, 'update']);
Route::delete('/pelicula/{id}', [PeliculaController::class, 'destroy']);;
Route::post('/search', [PeliculaController::class, 'search']);
