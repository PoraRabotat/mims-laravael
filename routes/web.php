<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'showIndex'])->name('home');

Route::get('/array', [MainController::class, 'showArray'])->name('array');

Route::get('/array/shuffle', [MainController::class, 'shuffleArray'])->name('array.shuffle'); //перемешивание
Route::get('/array/sort', [MainController::class, 'sortArray'])->name('array.sort'); // сортировка
Route::get('/array/filter', [MainController::class, 'filterArray'])->name('array.filter'); // фильтрация