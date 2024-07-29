<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PeriodController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\App\AppController;
use App\Http\Controllers\App\PdfViewController;
use App\Http\Controllers\App\ProjectNetworkController;
use App\Http\Controllers\App\ProjectSystemController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

URL::formatScheme('https');
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

// Authentication to administration
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'doLogin'])->name('doLogin');
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

// Administration interfaces
Route::prefix('admin')->name('admin.')->middleware('auth')->group( function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('projects', (ProjectController::class));
    Route::get('/projects/{project:slug}', [ProjectController::class, 'show'])->name('project.show')->where([
        'project' => '[0-9a-zA-Z\-]+',
    ]);
    Route::resource('categories', (CategoryController::class))->except('show');
    Route::resource('periods', (PeriodController::class))->except('show');
});

// App Portfolio interfaces
Route::get('/', [AppController::class, 'index'])->name('index');
Route::prefix('projects')->name('projects.')->group( function () {
    Route::get('/', [AppController::class, 'projects'])->name('index');
    Route::get('/internship', [AppController::class, 'internship'])->name('internship');
    Route::get('/apprenticeship', [AppController::class, 'apprenticeship'])->name('apprenticeship');
    Route::get('/formation', [AppController::class, 'formation'])->name('formation');
    Route::get('/{period:slug}/{category:slug}/{project:slug}', [AppController::class, 'show'])->name('show')->where([
        'period' => '[0-9a-zA-Z\-]+',
        'category' => '[0-9a-zA-Z\-]+',
        'project' => '[0-9a-zA-Z\-]+',
    ]);
    Route::prefix('system')->name('system.')->group( function () {
        Route::get('/', [ProjectSystemController::class, 'index'])->name('index');
        Route::get('/sheet', [PdfViewController::class, 'viewSheetSystem'])->name('sheet');
        Route::get('/samba', [PdfViewController::class, 'viewProjectSystemSamba'])->name('samba');
        Route::get('/glpi', [PdfViewController::class, 'viewProjectSystemGlpi'])->name('glpi');
        Route::get('/zabbix', [PdfViewController::class, 'viewProjectSystemZabbix'])->name('zabbix');
        Route::get('/glpi-agent', [PdfViewController::class, 'viewProjectSystemGlpiAgent'])->name('glpi-agent');
        Route::get('/zabbix-agent', [PdfViewController::class, 'viewProjectSystemZabbixAgent'])->name('zabbix-agent');
    });
    Route::prefix('network')->name('network.')->group( function () {
        Route::get('/', [ProjectNetworkController::class, 'index'])->name('index');
        Route::get('/sheet', [PdfViewController::class, 'viewSheetNetwork'])->name('sheet');
        Route::get('/config-ap', [PdfViewController::class, 'viewConfigAp'])->name('config-ap');
        Route::get('/config-switch', [PdfViewController::class, 'viewConfigSwitch'])->name('config-switch');
    });
});
Route::get('/trainings', [AppController::class, 'trainings'])->name('trainings');
Route::get('/trainings/cv', [PdfViewController::class, 'viewCv'])->name('viewCv');
Route::get('/skills', [AppController::class, 'skills'])->name('skills');
Route::get('/skills/summary', [PdfViewController::class, 'viewSummary'])->name('viewSummary');
Route::get('/news', [AppController::class, 'news'])->name('news');
Route::get('/about', [AppController::class, 'about'])->name('about');
Route::get('/contact', [AppController::class, 'contact'])->name('contact');
Route::post('/contactForm', [AppController::class, 'contactForm'])->name('contactForm');
