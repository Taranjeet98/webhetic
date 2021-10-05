<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\UserArticlesController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomepageController::class, 'index']);

Route::resource('article', ArticleController::class)->middleware('admin');

Route::resource('user/posts' , UserArticlesController::class)->middleware('user');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');