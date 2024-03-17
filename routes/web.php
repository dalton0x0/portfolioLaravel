<?php

use App\Http\Controllers\App\AppController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AppController::class, 'home'])->name('home');
Route::get('/projects', [AppController::class, 'projects'])->name('projects');
Route::get('/training', [AppController::class, 'training'])->name('training');
Route::get('/skills', [AppController::class, 'skills'])->name('skills');
Route::get('/news', [AppController::class, 'news'])->name('news');
Route::get('/about', [AppController::class, 'about'])->name('about');
Route::post('/about', [AppController::class, 'contact'])->name('contact');
