<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RevisorController;

// PUBLIC CONTROLLER

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/lavoraconnoi', [PublicController::class, 'lavoraconnoi'])->name('lavoraconnoi');
Route::get('/search/article', [PublicController::class, 'searchArticles'])->name('article.search');
Route::get('/profile', [PublicController::class, 'profile'])->name('profile');

// ARTICLE CONTROLLER


Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::get('/article/index',[ArticleController::class, 'index'])->name ('article.index');
Route::get('/article/category/{category}',[ArticleController::class, 'category'])->name ('article.category');
Route::get('/article/{article}', [ArticleController::class, 'show'])->name('article.show');

// REVISOR CONTROLLER

Route::get('/revisor/index',[RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
Route::get('/revisor/list', [RevisorController::class, 'list'])->name('revisor.list');
Route::get('/revisor/{article}', [RevisorController::class, 'show'])->name('revisor.show');

Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept');
Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');


// mail
Route::get('/revisore/request', [RevisorController::class, 'becomeRevisor'])->name('become.revisor');
Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');


// Profile Controller

Route::middleware(['auth'])->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
   
});


