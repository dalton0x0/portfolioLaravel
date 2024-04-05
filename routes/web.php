<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\App\AppController;
use App\Http\Controllers\App\ApprenticeshipsController;
use App\Http\Controllers\App\InternshipsController;
use App\Http\Controllers\App\PdfDownloadController;
use App\Http\Controllers\App\ProjectNetworkController;
use App\Http\Controllers\App\ProjectSystemController;
use App\Http\Controllers\App\TpController;
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

Route::prefix('admin')->name('admin.')->group( function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('projects', (ProjectController::class));
    Route::resource('categories', (CategoryController::class));
});

Route::get('/', [AppController::class, 'index'])->name('index');
Route::prefix('projects')->name('projects.')->group( function () {
    Route::get('/', [AppController::class, 'projects'])->name('index');
    Route::prefix('internships')->name('internships.')->group( function () {
        Route::get('/', [InternshipsController::class, 'index'])->name('index');
        Route::get('/tunnel-eoip-ipsec', [InternshipsController::class, 'tunnelEoipIpsec'])->name('tunnel-eoip-ipsec');
        Route::get('/vpn-ipsec-pfsense', [InternshipsController::class, 'vpnIpsecPfsense'])->name('vpn-ipsec-pfsense');
        Route::get('/ocs-inventory', [InternshipsController::class, 'ocsInventory'])->name('ocs-inventory');
        Route::get('/pxe-mikrotik', [InternshipsController::class, 'pxeMikrotik'])->name('pxe-mikrotik');
    });
    Route::prefix('apprenticeships')->name('apprenticeships.')->group( function () {
        Route::get('/', [ApprenticeshipsController::class, 'index'])->name('index');
    });
    Route::prefix('system')->name('system.')->group( function () {
        Route::get('/', [ProjectSystemController::class, 'index'])->name('index');
    });
    Route::prefix('network')->name('network.')->group( function () {
        Route::get('/', [ProjectNetworkController::class, 'index'])->name('index');
    });
    Route::prefix('tp')->name('tp.')->group( function () {
        Route::get('/', [TpController::class, 'index'])->name('index');
    });
});
Route::get('/trainings', [AppController::class, 'trainings'])->name('trainings');
Route::get('/skills', [AppController::class, 'skills'])->name('skills');
Route::get('/news', [AppController::class, 'news'])->name('news');
Route::get('/about', [AppController::class, 'about'])->name('about');
Route::post('/about', [AppController::class, 'contact'])->name('contact');

Route::get('/cv', [PdfDownloadController::class, 'downloadCv'])->name('downloadCv');

Route::get('/sheet-system', [PdfDownloadController::class, 'donwloadSheetSytem'])->name('sheet-system');
Route::get('/samba', [PdfDownloadController::class, 'downloadProjectSystemSamba'])->name('samba');

Route::get('/sheet-network', [PdfDownloadController::class, 'donwloadSheetNetwork'])->name('sheet-network');
Route::get('/downloadProjectNetwork', [PdfDownloadController::class, 'downloadProjectNetwork'])->name('downloadProjectNetwork');
