<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// User Controller




// Rotta get che porta al form di recupero password 
Route::get('/forgot-password', [UserController::class, 'forgotPassword'])->name('auth.forgot-password');
// Rotta get che porta al form di modifica del profilo utente
Route::get('/profile', [UserController::class, 'edit'])->middleware(['auth','verified'])->name('users.edit');


// Article Controler

// Rotta get che porta alla vista con il form per la creazione articoli
Route::get('/article/create', [ArticleController::class, 'create'])->name('articles.create')->middleware(['auth','verified']);
// Rotta get che porta alla vista che mostra tutti gli articoli
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
// Rotta get che porta alla vista che mostra il dettaglio articolo
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('articles.show');

// Category Controller

// Rotta che porta alla vista con tutte le categorie del sito
Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
// Rotta get che porta alla vista che mostra il dettaglio categoria
Route::get('/categories/{categoryName}', [CategoryController::class, 'show'])->name('categories.show');


// HOME Controller

// Rotta che porta alla hompage del sito
Route::get('/',[HomeController::class,'index'])->name('home.index');



// Revisor Controller

// Rotta che porta alla vista per il form del revisore
Route::get('/revisor/home',[RevisorController::class,'index'])->middleware('IsRevisor')->name('revisors.index');
// Rotta per accettare l'annuncio
Route::patch('/accept/article/{article}',[RevisorController::class,'acceptArticle'])->middleware('IsRevisor')->name('revisors.accept_article');
// Rotta per rifiutare l'annuncio
Route::patch('/reject/article/{article}',[RevisorController::class,'rejectArticle'])->middleware('IsRevisor')->name('revisors.reject_article');
// Rotta per richiedere di diventare revisore
Route::get('/revisor/request',[RevisorController::class,'becomeRevisor'])->middleware(['auth','verified'])->name('revisors.become.revisor');
// Rotta per rendere un utente revisore
Route::get('/revisor/make/{user}',[RevisorController::class,'makeRevisor'])->name('revisors.make.revisor');