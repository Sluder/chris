<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PageController;


Route::name('view.')->group(function() {
    Route::get('/', [PageController::class, 'index'])->name('index');
});

