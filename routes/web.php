<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController; // Importa el controlador


// Ruta para mostrar todas las tareas
Route::get('/', [TaskController::class, 'index'])->name('tasks.index');