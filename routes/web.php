<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\AtencionesController;
use App\Models\Atenciones;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [PersonasController::class, 'verDashboar'])->name('dashboard');
    Route::get('/atenciones', [PersonasController::class, 'index'])->name('personas.index');
    Route::get('/registro', [PersonasController::class, 'create'])->name('personas.create');
    Route::post('/personas', [PersonasController::class, 'store'])->name('personas.store');
    Route::post('/registro-atencion', [AtencionesController::class, 'store'])->name('atenciones.store');
    Route::delete('/atencion/{id}', [AtencionesController::class, 'destroy'])->name('atenciones.delete');
    Route::get('/detalle/{id}', [AtencionesController::class, 'detalle'])->name('personas.detalle');
    Route::get('/crear-atencion/{id_persona}', [AtencionesController::class, 'create'])->name('atenciones.create');
});

require __DIR__ . '/auth.php';
