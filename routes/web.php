<?php

use App\Http\Controllers\calculosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('fibonacci', function(){
    return view('vistaSerie');
})->name('fibonacci');

Route::post('obtenerSerie', [calculosController::class, 'calcularSerie'])->name('obtenerSerie');

Route::get('numPalabra', function(){
    return view('vistaNumeroPalabras');
})->name('numPalabra');

Route::post('obtenerNumeroPalabras', [calculosController::class, 'calcularNumeroPalabras'])->name('obtenerNumeroPalabras');

Route::get('numVocales', function(){
    return view('vistaVocales');
})->name('numVocales');

Route::post('obtenerVocales', [calculosController::class, 'calcularVocales'])->name('obtenerVocales');

Route::get('numPerfectos', function(){
    return view('vistaPerfectos');
})->name('numPerfectos');

Route::post('obtenerPerfectos', [calculosController::class, 'calcularPerfectos'])->name('obtenerPerfectos');
