<?php

use App\Http\Controllers\TemperaturesController;
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

Route::get('/temperatures', [TemperaturesController::class, 'index'])->name('temperatures.index');
Route::get('/create', [TemperaturesController::class, 'create'])->name('temperatures.create');
Route::post('/temperatures', [TemperaturesController::class, 'store'])->name('temperatures.store');
Route::get('/temperatures/{id}', [TemperaturesController::class, 'show'])->name('temperatures.show');
Route::get('/temperatures/{id}', [TemperaturesController::class, 'show'])->name('temperatures.show');
Route::get('/temperatures/{id}/edit', [TemperaturesController::class, 'edit'])->name('temperatures.edit');
Route::patch('/temperatures/{id}', [TemperaturesController::class, 'update'])->name('temperatures.update');
Route::delete('/temperatures/{id}', [TemperaturesController::class, 'destroy'])->name('temperatures.destroy');

