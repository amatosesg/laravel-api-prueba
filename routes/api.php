<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorEstudiante;

/**
 * API GET Routes
 */

 // Obtener todos los estudiantes
Route::get('/estudiantes', [ControladorEstudiante::class, 'index']);

// Obtener un estudiante por ID
Route::get('/estudiantes/{id}', [ControladorEstudiante::class, 'show']);

/**
 * API POST Routes
 */

 // Crear un nuevo estudiante
Route::post('/estudiantes', [ControladorEstudiante::class, 'store']);

/**
 * API PUT Routes
 */

 // Actualizar todos los campos de un estudiante
Route::put('/estudiantes/{id}', [ControladorEstudiante::class, 'update']);

/**
 * API PATCH Routes
 */

// Actualizar algún campo de un estudiante
Route::patch('/estudiantes/{id}', [ControladorEstudiante::class, 'partialUpdate']);

/**
 * API DELETE Routes
 */

 // Eliminar un estudiante por ID
Route::delete('/estudiantes/{id}', [ControladorEstudiante::class, 'destroy']);