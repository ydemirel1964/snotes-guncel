<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WriterProfileController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('/hakkimda', [AboutMeController::class, 'index']);
Route::get('/aboutme', [AboutMeController::class, 'index']);

Route::get('/iletisim', [ContactController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact/create',[ContactController::class, 'create']);
Route::delete('/article/{id}', [ArticleController::class, 'delete']);
Route::get('/article/{id}', [ArticleController::class, 'index']);
Route::get('/comment/create', [CommentController::class, 'create']);

Route::get('/category/{id}', [CategoryController::class, 'index']);
Route::get('/writerprofile/{id}', [WriterProfileController::class, 'index']);
Route::get('/searchresult', [searchController::class, 'search']);



Route::get('/admin/articlecreate', [AdminArticleController::class,'createForm'])->middleware('auth');
Route::post('/admin/article/create', [AdminArticleController::class, 'create'])->middleware('auth');;
Route::get('/admin/article/update/{id}', [AdminArticleController::class, 'update'])->middleware('auth');
Route::get('/dashboard', [ProfileController::class, 'index'])->middleware(['auth'])->name('profile');
Route::get('/dashboard/articles',[AdminArticleController::class, 'index'])->middleware(['auth']);


require __DIR__.'/auth.php';