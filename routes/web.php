<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/post/all', [PostController::class, 'getAll']);
Route::get('/post/{id}', [PostController::class, 'getOne'])->where('id', '[0-9]+')->name('show');
Route::get('/post/all/{order?}', [PostController::class, 'getAll'])->where('order', '^(id|title|date)$');
