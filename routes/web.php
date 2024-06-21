<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');

Route::get('/article/index',[ArticleController::class, 'index'])->name ('article.index');
Route::get('/article/category/{category}',[ArticleController::class, 'category'])->name ('article.category');
Route::get('/article/{article}', [ArticleController::class, 'show'])->name('article.show');