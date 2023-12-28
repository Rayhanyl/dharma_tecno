<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ApplicationController,
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
    Route::resource('/application', ApplicationController::class);
    Route::get('/dashboard', [DashboardController::class, 'dashboardView'])->name('dashboard.page');
    Route::get('/interview/dashboard', [DashboardController::class, 'dashboardInterviewView'])->name('interview.page');
    Route::get('/interviewer', [DashboardController::class, 'interviewerView'])->name('interviewer.page');
    Route::get('/create/interviewer', [DashboardController::class, 'createInterviewerView'])->name('create.interviewer.page');
    Route::post('/store/interviewer', [DashboardController::class, 'storeUserInterviewer'])->name('store.user.interviewer');
    Route::get('/edit/interviewer/{user}', [DashboardController::class, 'editInterviewerView'])->name('edit.interviewer.page');
    Route::post('/update/interviewer/{user}', [DashboardController::class, 'updateUserInterviewer'])->name('update.user.interviewer');
    Route::delete('/delete/interviewer/{user}', [DashboardController::class, 'destroyUserInterviewer'])->name('delete.user.interviewer');
    Route::get('/data-diri/user', [DashboardController::class, 'dataDiriView'])->name('datadiri.page');
    Route::get('/status-lamaran', [DashboardController::class, 'statusLamaranView'])->name('status.page');
    Route::get('/form/calon-karyawan', [DashboardController::class, 'formCalonKaryawanView'])->name('form.calon-karyawan.page');
    Route::get('/data/calon-karyawan', [DashboardController::class, 'dataCalonPelamarView'])->name('data.calon.page');
    Route::get('/data/pelamar-interview', [DashboardController::class, 'interviewPelamarView'])->name('data.interview.page');
    Route::get('/view/data/applicant/{id}', [DashboardController::class, 'viewDataApplicant'])->name('view.data.applicant');
    Route::get('/history/pelamar', [DashboardController::class, 'historyPelamarView'])->name('data.pelamar.page');
    Route::get('/modal/approval/{application}', [DashboardController::class, 'modalApproval'])->name('ajax.modal.approval');
    Route::post('/update/approval', [DashboardController::class, 'updateApproval'])->name('update.approval');
    Route::post('/update/jadwal/{id}', [DashboardController::class, 'updateInterview'])->name('update.jadwal');
});
