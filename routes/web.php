<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PageController;
use \App\Http\Controllers\ContactController;


Route::name('view.')->group(function() {
    Route::get('/', [PageController::class, 'index'])->name('index');
    Route::get('/our-work', [PageController::class, 'ourWork'])->name('ourWork');
    Route::get('/register-to-win', [PageController::class, 'registerToWin'])->name('registerToWin');
    Route::get('/recent-project', [PageController::class, 'recentProject'])->name('recentProject');
});

Route::name('submit.')->group(function () {
    Route::post('/contact', [ContactController::class, 'submission'])->name('contact');
});
