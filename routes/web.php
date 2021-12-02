<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnrollmentController;

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


Route::get('/', [CourseController::class, 'index'])->name('home');
Route::get('/about', [CourseController::class, 'About'])->name('about');
Route::get('/contact', [CourseController::class, 'Contact'])->name('contact');
Route::get('/course-detail/{slug?}',[CourseController::class, 'detail'])->name('course-detail');
Route::get('/module/module_details',[ModuleController::class, 'detail'])->name('module_details');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('resend_code', [AuthController::class, 'resendCode'])->name('resend_code');
Route::post('send_code', [AuthController::class, 'sendCode'])->name('send_code');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::post('account/verify', [AuthController::class, 'verifyAccount'])->name('user.verify');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth','is_verify_email']);
Route::get('slots/{course_id?}',[CourseController::class, 'Slots'])->name('slots');

Route::get('slot_details/{course_id?}/{slot_id?}',[EnrollmentController::class, 'Slotdetail'])->name('slot_details')->middleware(['is_verify_email']);
Route::get('enrollment/notify', [EnrollmentController::class,'Notify'])->name('enrollment.notify');
Route::resource('enrollment', EnrollmentController::class, ['names' => 'enrollment'])->middleware(['is_verify_email']);
