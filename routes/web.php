<?php

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

Route::get('/', function () {
    return view('app.home.index');
})->name('home');

Route::get('/projects', function () {
    return view('app.projects.index');
})->name('projects');

Route::get('/training', function () {
    return view('app.training.index');
})->name('training');

Route::get('/skills', function () {
    return view('app.skills.index');
})->name('skills');

Route::get('/news', function () {
    return view('app.news.index');
})->name('news');

Route::get('/contact', function () {
    return view('app.contact.index');
})->name('contact');
