<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/cars/create', [PostController::class, 'create'])->name('cars.create');
Route::post('/cars', [PostController::class, 'store'])->name('cars.store');


Route::get('/', function () {
    return view('welcome');
});
