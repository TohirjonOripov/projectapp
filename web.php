<?php

use Illuminate\Support\Facades\Route;
use Models\App\Post;
use Models\App\Name;
use App\Comment;
 
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

Route::get('/', [App\Http\Controllers\PostController::class, 'view'])->name('view');

Route::get('/show/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('show');

Route::post('/create', [App\Http\Controllers\PostController::class, 'create'])->name('create');

Route::post('/comment', [App\Http\Controllers\PostController::class, 'comment'])->name('comment');
Route::get('/post', [App\Http\Controllers\PostController::class, 'post'])->name('post');
Route::get('/news/{id}', [App\Http\Controllers\PostController::class, 'news'])->name('news');