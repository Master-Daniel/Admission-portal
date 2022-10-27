<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\StudentController;

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
    return view('welcome');
});
Route::get('contact-us', [pagesController::class, 'contact'])->name('contact');
Route::get('students/admission/application', [pagesController::class, 'apply'])->name('application');
Route::get('students/admission/status', [pagesController::class, 'admission_status'])->name('check.admission');
Route::get('admin/faculty/list', [FacultyController::class, 'index'])->name('faculty.list');
Route::get('admin/student/application/list', [StudentController::class, 'index'])->name('application.list');
Route::get('admin/login', [AuthAdminController::class, 'index'])->name('staff.login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
