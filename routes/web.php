<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/r/create', [App\Http\Controllers\PetsController::class, 'create']);
Route::post('/r', [App\Http\Controllers\PetsController::class, 'store']);
Route::get('/pet/{pet}', [App\Http\Controllers\PetsController::class, 'show']);
Route::get('/pet/{pet}/edit', [App\Http\Controllers\PetsController::class, 'edit']);
Route::patch('/pet/{pet}', [App\Http\Controllers\PetsController::class, 'update']);

Route::post('/profile/{user}/comments', [App\Http\Controllers\CommentsController::class, 'store']);
//Route::get('/profile/{comment}', [App\Http\Controllers\CommentsController::class, 'destroy']);

Route::get('/post/create', [App\Http\Controllers\PostsController::class, 'create']);
Route::post('/post', [App\Http\Controllers\PostsController::class, 'store']);
Route::get('/post/{post}', [App\Http\Controllers\PostsController::class, 'destroy']);


Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');
