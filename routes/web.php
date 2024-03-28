<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('post/new', function () {
    return view('newPost');
});
Route::get('/post/all', [PostController::class, 'getAll']);
Route::get('/post/{id}', [PostController::class, 'getOne'])->where('id', '[0-9]+')->name('show');
Route::get('/post/all/{order?}', [PostController::class, 'getAll'])->where('order', '^(id|title|date)$');
Route::get('/post/all/{order?}/{dir?}', [PostController::class, 'getAll'])->where('order', '^(id|title|date)$');
Route::post('/post/new', [PostController::class, 'newPost']);
Route::match(['get', 'post'], '/post/edit/{id}', [PostController::class, 'editPost'])->name('edit');
Route::get('/post/del/{id}', [PostController::class, 'delPost'])->name('del');

Route::get('/city', [CityController::class, 'showCity']);
