<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthenticationController,
    LandingPageController,
    DashboardController,
};
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

Route::get('/', [LandingPageController::class, 'homeView'])->name('landing.page');

Route::prefix('/auth')->name('auth.')->controller(AuthenticationController::class)->group(function () {
    Route::get('/login', 'loginView')->name('login.page');
    Route::get('/register', 'registerView')->name('register.page');
    Route::post('/register/user', 'registerUser')->name('register.user');
    Route::post('/edit/user', 'updateUser')->name('update.user');
    Route::post('/login', 'login')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboardView'])->name('dashboard.page');
    Route::get('/data-diri/user', [DashboardController::class, 'dataDiriView'])->name('datadiri.page');
    Route::get('/status-lamaran', [DashboardController::class, 'statusLamaranView'])->name('status.page');
    Route::get('/form/calon-karyawan', [DashboardController::class, 'formCalonKaryawanView'])->name('form.calon-karyawan.page');
    Route::get('/data/calon-karyawan', [DashboardController::class, 'dataCalonPelamarView'])->name('data.calon.page');
    Route::get('/data/pelamar', [DashboardController::class, 'dataPelamarView'])->name('data.pelamar.page');
});
