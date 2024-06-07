<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\UsercenterController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\OrganizationProfileController;
use App\Http\Controllers\ScholarshipApplicationController;

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

Route::get('/blogs/list', [HomeController::class, 'blogList'])->name('blogs.list');

Route::get('/blogs/{id}', [HomeController::class, 'blogShow'])->name('blogs.show');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/scholarship-details/{scholarship}', [HomeController::class, 'scholarshipDetails'])->name('scholar.details');
Route::get('/organization-details/{organization}', [HomeController::class, 'organizationDetails'])->name('organization.details');
Route::get('/scholarship-list', [HomeController::class, 'scholarshipList'])->name('scholarship.list');
Route::get('/organization-list', [HomeController::class, 'organizationList'])->name('organization.list');
Route::get('/scholarship/apply/{scholarship}', [HomeController::class, 'scholarshipApply'])->name('scholarship.apply');
Route::post('/scholarship/apply', [HomeController::class, 'scholarshipApplyPost'])->name('scholarship.apply.store');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('aboutus');


Route::middleware(['auth', 'check_user_type'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/organization/dashboard', [\App\Http\Controllers\OrganizationDashboardController::class, 'index'])->middleware(['check_organization_email'])->name('organization.dashboard');
    Route::get('/student/dashboard', [\App\Http\Controllers\StudentDashboardController::class, 'index'])->middleware(['check_student_email'])->name('student.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('organization')->group(function () {
    Route::get('/', [OrganizationController::class, 'index'])->name('organizations.index');
    Route::get('/create', [OrganizationController::class, 'create'])->name('organization.create');
    Route::post('/store', [OrganizationController::class,'store'])->name('organizations.store');
    Route::get('/organizations/{organization}/edit', [OrganizationController::class, 'edit'])->name('organizations.edit');
    Route::put('/organizations/{organization}', [OrganizationController::class, 'update'])->name('organizations.update');
    Route::delete('/organizations/{organization}', [OrganizationController::class, 'destroy'])->name('organizations.destroy');

    Route::prefix('application-list')->group(function() {
        Route::get('/', [\App\Http\Controllers\ScholarshipApplicationController::class, 'index'])->name('scholarship.application.list');
        Route::post('/scholarship/application/{id}/accept', [ScholarshipApplicationController::class, 'accept'])->name('scholarship.application.accept');
        Route::post('/scholarship/application/{id}/reject', [ScholarshipApplicationController::class, 'reject'])->name('scholarship.application.reject');
    });

});

Route::prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('students.index');
    Route::get('/create', [StudentController::class, 'create'])->name('students.create');
    Route::post('/store', [StudentController::class,'store'])->name('students.store');
    Route::get('/students/{students}/edit', [StudentController::class, 'edit'])->name('students.edit');
    Route::put('/students/{students}', [StudentController::class, 'update'])->name('students.update');
    Route::delete('/students/{students}', [StudentController::class, 'destroy'])->name('students.destroy');
});


Route::prefix('organization/profile')->group(function () {
    Route::get('/', [\App\Http\Controllers\OrganizationProfileController::class, 'index'])->name('organization.profile.index');
    Route::post('/store', [OrganizationProfileController::class,'store'])->name('organizations.profile.store');
    Route::get('/scholarship/list', [OrganizationProfileController::class, 'scholarshipList'])->name('scholarships.profile.list');
    Route::get('/scholarship/create', [OrganizationProfileController::class, 'scholarshipCreate'])->name('scholarships.profile.create');
    Route::post('/scholarship/store', [OrganizationProfileController::class,'scholarshipStore'])->name('scholarships.profile.store');
    Route::get('/scholarship/edit/{scholarship}', [OrganizationProfileController::class, 'scholarshipEdit'])->name('scholarships.profile.edit');
    Route::put('/scholarship/update/{scholarship}', [OrganizationProfileController::class,'scholarshipUpdate'])->name('scholarships.profile.update');
    Route::delete('/scholarship/delete/{scholarship}', [OrganizationProfileController::class,'scholarshipDelete'])->name('scholarships.profile.delete');
});

Route::resource('scholarships', ScholarshipController::class);

Route::prefix('student')->group(function () {
    Route::get('/profile', [\App\Http\Controllers\StudentProfileController::class, 'index'])->name('student.profile.index');
    Route::post('/store', [\App\Http\Controllers\StudentProfileController::class, 'store'])->name('student.profile.store');

    Route::prefix('scholarship')->group(function (){
        Route::get('/list', [\App\Http\Controllers\StudentScholarshipController::class, 'index'])->name('student.scholarship.index');
        Route::get('/apply/{scholarship}', [\App\Http\Controllers\StudentScholarshipController::class, 'apply'])->name('student.scholarship.apply');
        Route::post('/apply', [\App\Http\Controllers\StudentScholarshipController::class, 'store'])->name('student.scholarship.store');
    });

});


Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('blogs/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('blogs', [BlogController::class, 'store'])->name('blogs.store');
Route::get('blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
Route::put('blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');
Route::delete('blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');


Route::get('usercenter', [UsercenterController::class, 'index'])->name('usercenter');
Route::get('usercenter/edit/{id}', [UsercenterController::class, 'edit'])->name('usercenter.edit');
Route::delete('usercenter/destroy/{id}', [UsercenterController::class, 'destroy'])->name('usercenter.destroy');


Route::get('contact-us', [ContactusController::class, 'index'])->name('contact-us');
Route::post('/contact/store', [ContactusController::class, 'store'])->name('contact.store');
Route::get('/dashboard/contact', [ContactusController::class, 'dashboardContact'])->name('contact.me');



require __DIR__.'/auth.php';
