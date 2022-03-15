<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PageController;
use \App\Http\Controllers\ContactController;


Route::name('view.')->group(function() {
    Route::get('/', [PageController::class, 'index'])->name('index');
});

Route::name('submit.')->group(function () {
    Route::post('/contact', [ContactController::class, 'submission'])->name('contact');
});