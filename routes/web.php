<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PeriodController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\App\AppController;
use App\Http\Controllers\App\ApprenticeshipsController;
use App\Http\Controllers\App\InternshipsController;
use App\Http\Controllers\App\PdfDownloadController;
use App\Http\Controllers\App\ProjectNetworkController;
use App\Http\Controllers\App\ProjectSystemController;
use App\Http\Controllers\App\TpController;
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
Route::prefix('admin')->name('admin.')->group( function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('projects', (ProjectController::class));
    Route::get('/projects/{project:slug}', [ProjectController::class, 'show'])->name('project.show')->where([
        'project' => '[0-9a-zA-Z\-]+',
    ]);
    Route::resource('categories', (CategoryController::class));
    Route::resource('periods', (PeriodController::class));
});

Route::get('/', [AppController::class, 'index'])->name('index');
Route::prefix('projects')->name('projects.')->group( function () {
    Route::get('/', [AppController::class, 'projects'])->name('index');
    Route::get('/{period:slug}/{category:slug}/{project:slug}', [AppController::class, 'show'])->name('show')->where([
        'period' => '[0-9a-zA-Z\-]+',
        'category' => '[0-9a-zA-Z\-]+',
        'project' => '[0-9a-zA-Z\-]+',
    ]);
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
        Route::get('/sheet', [PdfDownloadController::class, 'donwloadSheetSytem'])->name('sheet');
        Route::get('/samba', [PdfDownloadController::class, 'downloadProjectSystemSamba'])->name('samba');
        Route::get('/glpi', [PdfDownloadController::class, 'downloadProjectSystemGlpi'])->name('glpi');
        Route::get('/zabbix', [PdfDownloadController::class, 'downloadProjectSystemZabbix'])->name('zabbix');
        Route::get('/glpi-agent', [PdfDownloadController::class, 'downloadProjectSystemGlpiAgent'])->name('glpi-agent');
        Route::get('/zabbix-agent', [PdfDownloadController::class, 'downloadProjectSystemZabbixAgent'])->name('zabbix-agent');
    });
    Route::prefix('network')->name('network.')->group( function () {
        Route::get('/', [ProjectNetworkController::class, 'index'])->name('index');
        Route::get('/sheet', [PdfDownloadController::class, 'donwloadSheetNetwork'])->name('sheet');
        Route::get('/downloadProjectNetwork', [PdfDownloadController::class, 'downloadProjectNetwork'])->name('downloadProjectNetwork');
    });
    Route::prefix('tp')->name('tp.')->group( function () {
        Route::get('/', [TpController::class, 'index'])->name('index');
        Route::prefix('windows-server')->name('windows-server.')->group( function () {
            Route::get('/ad-ds', [PdfDownloadController::class, 'downloadAdds'])->name('ad-ds');
            Route::get('/dhcp', [PdfDownloadController::class, 'downloadDhcp'])->name('dhcp');
            Route::get('/iis', [PdfDownloadController::class, 'downloadIis'])->name('iis');
            Route::get('/wds', [PdfDownloadController::class, 'downloadWds'])->name('wds');
            Route::get('/tse', [PdfDownloadController::class, 'downloadTse'])->name('tse');
            Route::get('/vpn', [PdfDownloadController::class, 'downloadVpn'])->name('vpn');
        });
        Route::prefix('linux')->name('linux.')->group( function () {
            Route::get('/bind', [PdfDownloadController::class, 'downloadBind'])->name('bind');
            Route::get('/lamp', [PdfDownloadController::class, 'downloadLamp'])->name('lamp');
            Route::get('/bookstack', [PdfDownloadController::class, 'downloadBookstack'])->name('bookstack');
            Route::get('/nextcloud', [PdfDownloadController::class, 'downloadNextcloud'])->name('nextcloud');
            Route::get('/free-ipa', [PdfDownloadController::class, 'downloadFreeipa'])->name('free-ipa');
        });
        Route::prefix('inventoring-monitoring')->name('inventoring-monitoring.')->group( function () {
            Route::get('/ocs', [PdfDownloadController::class, 'downloadOcs'])->name('ocs');
            Route::get('/glpi', [PdfDownloadController::class, 'downloadGlpi'])->name('glpi');
            Route::get('/zabix', [PdfDownloadController::class, 'downloadZabbix'])->name('zabbix');
        });
        Route::prefix('pfsense')->name('pfsense.')->group( function () {
            Route::get('/carp', [PdfDownloadController::class, 'downloadCarp'])->name('carp');
            Route::get('/nat', [PdfDownloadController::class, 'downloadNat'])->name('nat');
        });
    });
});
Route::get('/trainings', [AppController::class, 'trainings'])->name('trainings');
Route::get('/trainings/cv', [PdfDownloadController::class, 'downloadCv'])->name('downloadCv');
Route::get('/skills', [AppController::class, 'skills'])->name('skills');
Route::get('/skills/summary', [PdfDownloadController::class, 'downloadSummary'])->name('summary');
Route::get('/news', [AppController::class, 'news'])->name('news');
Route::get('/about', [AppController::class, 'about'])->name('about');
Route::post('/about', [AppController::class, 'contact'])->name('contact');
