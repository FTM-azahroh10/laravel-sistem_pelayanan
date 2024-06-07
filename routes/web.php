<?php

use App\Http\Controllers\AdminStudentController;
use App\Http\Controllers\AdminAcademicController;
use App\Http\Controllers\AdminAppointmentController;
use App\Http\Controllers\AdminStudentServiceController;
use App\Http\Controllers\AdminFinancialServiceController;
use App\Http\Controllers\AdminGeneralServiceController;
use App\Http\Controllers\SopController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuperAdminController;
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

Route::get('/', function () {
    return redirect()->to('/login');
})->name('home');

// login
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'loginPost'])->name('login.post')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// superadmin
Route::get('/dashboard-superadmin', [SuperAdminController::class, 'dashboardSuperadmin'])->middleware('superadmin');
Route::get('/staffs', [SuperAdminController::class, 'staffs'])->middleware('superadmin');
Route::get('/report', [SuperAdminController::class, 'report'])->middleware('superadmin');


// admin
Route::get('/dashboard-admin', [AdminController::class, 'dashboardAdmin'])->middleware('admin');
Route::get('/faq', [AdminController::class, 'faq'])->middleware('admin');
Route::get('/service-admin', [AdminController::class, 'serviceAdmin'])->middleware('admin');
Route::get('/staff-admin', [AdminController::class, 'staffAdmin'])->middleware('admin');

Route::resource('/student-admin', AdminStudentController::class)->middleware('admin');
Route::resource('/academic-services', AdminAcademicController::class)->middleware('admin');
Route::resource('/student-services', AdminStudentServiceController::class)->middleware('admin');
Route::resource('/financial-services', AdminFinancialServiceController::class)->middleware('admin');
Route::resource('/general-services', AdminGeneralServiceController::class)->middleware('admin');
Route::resource('/appointment-admin', AdminAppointmentController::class)->middleware('admin');
Route::resource('/sop', SopController::class)->middleware('admin');
Route::resource('/faq', FaqController::class)->middleware('admin');

//homepage
Route::get('/home', [HomepageController::class, 'homepage']);
Route::get('/homepage-academic', [HomepageController::class, 'homapageAcademic']);
Route::get('/homepage-profile', [HomepageController::class, 'homepageProfile']);
Route::get('/homepage-support', [HomepageController::class, 'homapageSupport']);
Route::get('/homepage-status', [HomepageController::class, 'homapageStatus']);
Route::get('/homepage-status-1', [HomepageController::class, 'homapageStatus1']);
Route::get('/homepage-status-2', [HomepageController::class, 'homapageStatus2']);

// mahasiswa
Route::get('/dashboard', [MahasiswaController::class, 'dashboard'])->middleware('mahasiswa');
Route::get('/academicService', [MahasiswaController::class, 'academicService'])->middleware('mahasiswa');
Route::get('/activities', [MahasiswaController::class, 'activities'])->middleware('mahasiswa');
Route::get('/activitiesQueue', [MahasiswaController::class, 'activitiesQueue'])->middleware('mahasiswa');
Route::get('/activitiesStatus', [MahasiswaController::class, 'activitiesStatus'])->middleware('mahasiswa');
Route::get('/activitiesUpload', [MahasiswaController::class, 'activitiesUpload'])->middleware('mahasiswa');
Route::get('/enrolling', [MahasiswaController::class, 'enrolling'])->middleware('mahasiswa');
Route::get('/enrollingQueue', [MahasiswaController::class, 'enrollingQueue'])->middleware('mahasiswa');
Route::post('/enrollingQueue', [MahasiswaController::class, 'enrollingQueueStore'])->middleware('mahasiswa');
Route::get('/enrollingStatus', [MahasiswaController::class, 'enrollingStatus'])->middleware('mahasiswa');
Route::get('/enrollingUpload', [MahasiswaController::class, 'enrollingUpload'])->middleware('mahasiswa');
Route::get('/faq-mahasiswa', [MahasiswaController::class, 'faq'])->middleware('mahasiswa');
Route::get('/financialService', [MahasiswaController::class, 'financialService'])->middleware('mahasiswa');
Route::get('/funds', [MahasiswaController::class, 'funds'])->middleware('mahasiswa');
Route::get('/fundsQueue', [MahasiswaController::class, 'fundsQueue'])->middleware('mahasiswa');
Route::get('/fundsStatus', [MahasiswaController::class, 'fundsStatus'])->middleware('mahasiswa');
Route::get('/fundsUpload', [MahasiswaController::class, 'fundsUpload'])->middleware('mahasiswa');
Route::get('/generalService', [MahasiswaController::class, 'generalService'])->middleware('mahasiswa');
Route::get('/ijazah', [MahasiswaController::class, 'ijazah'])->middleware('mahasiswa');
Route::get('/ijazahDownload', [MahasiswaController::class, 'ijazahDownload'])->middleware('mahasiswa');
Route::get('/leave', [MahasiswaController::class, 'leave'])->middleware('mahasiswa');
Route::get('/leaveQueue', [MahasiswaController::class, 'leaveQueue'])->middleware('mahasiswa');
Route::post('/leaveQueue', [MahasiswaController::class, 'leaveQueueStore'])->middleware('mahasiswa');
Route::get('/leaveStatus', [MahasiswaController::class, 'leaveStatus'])->middleware('mahasiswa');
Route::get('/leaveUpload', [MahasiswaController::class, 'leaveUpload'])->middleware('mahasiswa');
Route::get('/registration', [MahasiswaController::class, 'registration'])->middleware('mahasiswa');
Route::get('/registrationQueue', [MahasiswaController::class, 'registrationQueue'])->middleware('mahasiswa');
Route::post('/registrationQueue', [MahasiswaController::class, 'registrationQueueStore'])->middleware('mahasiswa');
Route::get('/registrationStatus', [MahasiswaController::class, 'registrationStatus'])->middleware('mahasiswa');
Route::get('/registrationUpload', [MahasiswaController::class, 'registrationUpload'])->middleware('mahasiswa');
Route::get('/scholarship', [MahasiswaController::class, 'scholarship'])->middleware('mahasiswa');
Route::get('/scholarshipQueue', [MahasiswaController::class, 'scholarshipQueue'])->middleware('mahasiswa');
Route::get('/scholarshipStatus', [MahasiswaController::class, 'scholarshipStatus'])->middleware('mahasiswa');
Route::get('/scholarshipUpload', [MahasiswaController::class, 'scholarshipUpload'])->middleware('mahasiswa');
Route::get('/sexualBullying', [MahasiswaController::class, 'sexualBullying'])->middleware('mahasiswa');
Route::get('/studentServices', [MahasiswaController::class, 'studentServices'])->middleware('mahasiswa');
Route::get('/submission', [MahasiswaController::class, 'submission'])->middleware('mahasiswa');
Route::get('/submissionQueue', [MahasiswaController::class, 'submissionQueue'])->middleware('mahasiswa');
Route::post('/submissionQueue', [MahasiswaController::class, 'submissionQueueStore'])->middleware('mahasiswa');
Route::get('/submissionStatus', [MahasiswaController::class, 'submissionStatus'])->middleware('mahasiswa');
Route::get('/submissionUpload', [MahasiswaController::class, 'submissionUpload'])->middleware('mahasiswa');
Route::get('/terminal', [MahasiswaController::class, 'terminal'])->middleware('mahasiswa');
Route::get('/terminalQueue', [MahasiswaController::class, 'terminalQueue'])->middleware('mahasiswa');
Route::post('/terminalQueue', [MahasiswaController::class, 'terminalQueueStore'])->middleware('mahasiswa');
Route::get('/terminalStatus', [MahasiswaController::class, 'terminalStatus'])->middleware('mahasiswa');
Route::get('/terminalUpload', [MahasiswaController::class, 'terminalUpload'])->middleware('mahasiswa');
Route::get('/ukt', [MahasiswaController::class, 'ukt'])->middleware('mahasiswa');
Route::get('/uktQueue', [MahasiswaController::class, 'uktQueue'])->middleware('mahasiswa');
Route::get('/uktStatus', [MahasiswaController::class, 'uktStatus'])->middleware('mahasiswa');
Route::get('/uktUpload', [MahasiswaController::class, 'uktUpload'])->middleware('mahasiswa');

// routes/web.php

use App\Http\Controllers\FileUploadController;

Route::get('/fileupload/create', [FileUploadController::class, 'create'])->name('fileupload.create');
Route::post('/fileupload/store', [FileUploadController::class, 'store'])->name('fileupload.store');
