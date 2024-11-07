<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComunaController;
Route::get('/', function () {
    return view('welcome');
});

Route::get("/comuna", [ComunaController::class, 'index'])->name('comuna.index');
Route::post("/comuna", [ComunaController::class, 'store'])->name('comuna.store');
Route::get('/comuna/create',[ComunaController::class,'create'])->name('comuna.create');
Route::delete('/comuna/{comuna}',[ComunaController::class,'destroy'])->name('comuna.destroy');
Route::put('/comuna/{comuna}',[ComunaController::class,'update'])->name('comuna.update');
Route::get('/comunas/{comuna}/edit',[ComunaController::class,'edit'])->name('comuna.edit');