<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;

// PUBLIC CONTROLLER

Route::get('/', [PublicController::class, 'home'])->name('home');


// ARTICLE CONTROLLER


Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::get('/article/index',[ArticleController::class, 'index'])->name ('article.index');
Route::get('/article/category/{category}',[ArticleController::class, 'category'])->name ('article.category');
Route::get('/article/{article}', [ArticleController::class, 'show'])->name('article.show');

// REVISOR CONTROLLER

Route::get('/revisor/index', [RevisorController::class, 'index'])->name('revisor.index');
Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept');
Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');