<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\EditorialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 👉 Ruta principal
Route::get('/', function () {
    return redirect()->route('autores.index');
});

// 👉 Rutas del sistema editorial
Route::resource('autores', AutorController::class);
Route::resource('libros', LibroController::class);
Route::resource('editoriales', EditorialController::class);

