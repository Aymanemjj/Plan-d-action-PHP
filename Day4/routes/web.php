<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('article.index');
});

Route::get('/create', function () {
    return redirect()->route('article.create');
});


Route::resource('article', ArticleController::class);