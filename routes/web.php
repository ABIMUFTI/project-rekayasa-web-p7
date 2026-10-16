<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
Route::get('/menu/{id}', [MenuController::class, 'show'])->name('menu.show');

    Route::get('/', function () {
    return view('page.home');
});
    Route::get('/about', function () {
    return view('page.about');
});

    Route::get('/contact', function () {
    return view('page.contact');
});


    