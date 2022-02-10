<?php

use App\Http\Controllers\Admin\AnakController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\ManagementUsers;
use App\Http\Controllers\Admin\OrangTuaController;;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Guru\DashboardController as GuruDashboardController;
use App\Http\Controllers\Ortu\CategoryController as OrtuCategoryController;
use App\Http\Controllers\Ortu\ContentController;
use App\Http\Controllers\Ortu\DashboardController as OrtuDashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard-admin', [DashboardController::class, 'index']);
    Route::post('/management-user/ganti-password/{id}', [ManagementUsers::class, 'gantiPassword'])
                ->name('management-users.ganti-password');
    Route::resource('/management-users', ManagementUsers::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/anak', AnakController::class);
    Route::resource('/orang-tua', OrangTuaController::class);
    Route::resource('/guru', GuruController::class);
});

Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard-guru', [GuruDashboardController::class, 'index']);
    Route::get('/content-guru/{category}', [GuruDashboardController::class, 'category'])->name('content-guru.category');
    Route::get('/content-guru/{category}/{id}', [GuruDashboardController::class, 'content'])->name('content-guru.id');
});

Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard-ortu', [OrtuDashboardController::class, 'index']);
    Route::get('/content-orang-tua-anak/{slug}', [ContentController::class, 'index'])->name('ortu-anak.slug');
    Route::get('/content-orang-tua-anak/{slug}/{category}', [ContentController::class, 'category'])->name('ortu-anak.category');
    Route::get('/content-orang-tua-anak/{slug}/{category}/{id}', [ContentController::class, 'content'])->name('ortu-anak.id');
});