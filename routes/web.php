<?php

use App\Http\Controllers\CalculationController;
use Illuminate\Support\Facades\Route;


Route::get('/', [CalculationController::class, 'index'])->name('calculate');
Route::post('/', [CalculationController::class, 'store']);
