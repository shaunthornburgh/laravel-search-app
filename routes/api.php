<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleSearchController;
use Illuminate\Support\Facades\Route;

Route::prefix('/article')
    ->group(function () {
        Route::get('/', ArticleController::class);
        Route::get('/search', ArticleSearchController::class);
    });
