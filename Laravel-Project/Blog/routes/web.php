<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\CommentController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/articles', function() {
//     return 'Article List';
// });

// Route::get('/articles/details', function() {
//     return 'Article Detail';
// })->name('article.detail');

// Route::get('/articles/details/{id}', function($id) {
//     return "Article Detail - $id";
// });

// Route::get('/articles/more', function() {
//     return redirect()->route('article.detail');
// });

Route::get('/', [ArticleController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/articles/detail/{id}', [
    ArticleController::class,
    'detail'
]);

Route::get('/products', [ProductController::class, 'index']);

Route::get('/articles/info/{boldText}', [ArticleController::class, 'info']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/articles/add', [ArticleController::class, 'add']);

Route::post('/articles/add', [ArticleController::class, 'create']);

Route::get('/articles/delete/{id}', [ArticleController::class, 'delete']);

Route::post('/comments/add', [CommentController::class, 'create']);

Route::get('/comments/delete/{id}', [CommentController::class, 'delete']);

Route::get('/articles/add', [ArticleController::class, 'add'])->middleware('auth');
