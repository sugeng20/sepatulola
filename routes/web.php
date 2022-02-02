<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ManagementUsers;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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
    Route::resource('/video', VideoController::class);
});

