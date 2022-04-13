<?php

use App\Http\Controllers\Admin\AdminAddsController;
use App\Http\Controllers\Admin\AdminCategoriesController;
use App\Http\Controllers\Admin\AdminCitiesController;
use App\Http\Controllers\Admin\AdminCompaniesController;
use App\Http\Controllers\Admin\AdminJobsController;
use App\Http\Controllers\Admin\AdminPartenersController;
use App\Http\Controllers\Admin\AdminServicesController;
use App\Http\Controllers\Admin\AdminSlidersController;
use App\Http\Controllers\Front\WebsiteController;
use App\Http\Controllers\User\UserDashboardController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

// Front Routes
Route::group(
    [

        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::get('/', [WebsiteController::class, 'home'])->name('home');
        Route::get('/home', [WebsiteController::class, 'home'])->name('home');
        Route::get('/about-us', [WebsiteController::class, 'about'])->name('about');
        Route::get('/jobs', [WebsiteController::class, 'jobs'])->name('jobs');
        Route::get('/job-details', [WebsiteController::class, 'job_details'])->name('job_details');
        Route::get('/contact-us', [WebsiteController::class, 'contact'])->name('contact');
        Route::get('/our-services', [WebsiteController::class, 'services'])->name('services');
        Route::get('/parteners-companies', [WebsiteController::class, 'partener_companies'])->name('parteners_companies');


    });


// User Routes

Route::get('/user/',[UserDashboardController::class,'home'])->name('show_user_home');
Route::get('/user/home',[UserDashboardController::class,'home']);
Route::get('/user/account',[UserDashboardController::class,'account'])->name('show_user_account');
Route::get('/user/courses',[UserDashboardController::class,'courses'])->name('show_user_courses');
Route::get('/user/education',[UserDashboardController::class,'education'])->name('show_user_education');
Route::get('/user/experiences',[UserDashboardController::class,'experiences'])->name('show_user_experiences');
Route::get('/user/profile',[UserDashboardController::class,'profile'])->name('show_user_profile');
Route::get('/user/skills',[UserDashboardController::class,'skills'])->name('show_user_skills');


//  Admin Dashboard Routes

// Shows Routes
Route::get('/admin/jobs', [AdminJobsController::class, 'index'])->name('show_jobs');
Route::get('/admin/companies', [AdminCompaniesController::class, 'index'])->name('show_companies');
Route::get('/admin/services', [AdminServicesController::class, 'index'])->name('show_services');
Route::get('/admin/parteners', [AdminPartenersController::class, 'index'])->name('show_parteners');
Route::get('/admin/adds', [AdminAddsController::class, 'index'])->name('show_advertizings');
Route::get('/admin/sliders', [AdminSlidersController::class, 'index'])->name('show_sliders');
Route::get('/admin/categories', [AdminCategoriesController::class, 'index'])->name('show_categories');
Route::get('/admin/cities', [AdminCitiesController::class, 'index'])->name('show_cities');


// Companies Routes
Route::post('/admin/companies/add', [AdminCompaniesController::class, 'addNew'])->name('add_company');
Route::get('/admin/companies/edit/{id}', [AdminCompaniesController::class, 'edit'])->name('edit_company');
Route::put('/admin/companies/edit/{id}', [AdminCompaniesController::class, 'update']);
Route::delete('/admin/companies/delete/{id}', [AdminCompaniesController::class, 'delete'])->name('delete_company');
Route::put('/admin/companies/restore/{id}', [AdminCompaniesController::class, 'restore'])->name('restore_company');

// Parteners Routes
Route::post('/admin/parteners/add', [AdminPartenersController::class, 'addNew'])->name('add_partener');
Route::get('/admin/parteners/edit/{id}', [AdminPartenersController::class, 'edit'])->name('edit_partener');
Route::put('/admin/parteners/edit/{id}', [AdminPartenersController::class, 'update']);
Route::delete('/admin/parteners/delete/{id}', [AdminPartenersController::class, 'delete'])->name('delete_partener');
Route::put('/admin/parteners/restore/{id}', [AdminPartenersController::class, 'restore'])->name('restore_partener');

// Services Routes
Route::post('/admin/services/add', [AdminServicesController::class, 'addNew'])->name('add_service');
Route::get('/admin/services/edit/{id}', [AdminServicesController::class, 'edit'])->name('edit_service');
Route::put('/admin/services/edit/{id}', [AdminServicesController::class, 'update']);
Route::delete('/admin/services/delete/{id}', [AdminServicesController::class, 'delete'])->name('delete_service');
Route::put('/admin/services/restore/{id}', [AdminServicesController::class, 'restore'])->name('restore_service');

// Advertizings Routes
Route::post('/admin/adds/add', [AdminAddsController::class, 'addNew'])->name('add_advertizing');
Route::get('/admin/adds/edit/{id}', [AdminAddsController::class, 'edit'])->name('edit_advertizing');
Route::put('/admin/adds/edit/{id}', [AdminAddsController::class, 'update']);
Route::delete('/admin/adds/delete/{id}', [AdminAddsController::class, 'delete'])->name('delete_advertizing');
Route::put('/admin/adds/restore/{id}', [AdminAddsController::class, 'restore'])->name('restore_advertizing');

// Sliders Routes
Route::post('/admin/sliders/add', [AdminSlidersController::class, 'addNew'])->name('add_slider');
Route::get('/admin/sliders/edit/{id}', [AdminSlidersController::class, 'edit'])->name('edit_slider');
Route::put('/admin/sliders/edit/{id}', [AdminSlidersController::class, 'update']);
Route::delete('/admin/sliders/delete/{id}', [AdminSlidersController::class, 'delete'])->name('delete_slider');
Route::put('/admin/sliders/restore/{id}', [AdminSlidersController::class, 'restore'])->name('restore_slider');

// Categories Routes
Route::post('/admin/categories/add', [AdminCategoriesController::class, 'addNew'])->name('add_category');
Route::get('/admin/categories/edit/{id}', [AdminCategoriesController::class, 'edit'])->name('edit_category');
Route::put('/admin/categories/edit/{id}', [AdminCategoriesController::class, 'update']);
Route::delete('/admin/categories/delete/{id}', [AdminCategoriesController::class, 'delete'])->name('delete_category');
Route::put('/admin/categories/restore/{id}', [AdminCategoriesController::class, 'restore'])->name('restore_category');

// Cities Routes
Route::post('/admin/cities/add', [AdminCitiesController::class, 'addNew'])->name('add_city');
Route::get('/admin/cities/edit/{id}', [AdminCitiesController::class, 'edit'])->name('edit_city');
Route::put('/admin/cities/edit/{id}', [AdminCitiesController::class, 'update']);
Route::delete('/admin/cities/delete/{id}', [AdminCitiesController::class, 'delete'])->name('delete_city');
Route::put('/admin/cities/restore/{id}', [AdminCitiesController::class, 'restore'])->name('restore_city');

// Jobs Routes
Route::post('/admin/jobs/add', [AdminJobsController::class, 'addNew'])->name('add_job');
Route::get('/admin/jobs/{id}', [AdminJobsController::class, 'edit'])->name('edit_job');
Route::put('/admin/jobs/edit/{id}', [AdminJobsController::class, 'update'])->name('update_job');
Route::delete('/admin/jobs/delete/{id}', [AdminJobsController::class, 'delete'])->name('delete_job');
Route::put('/admin/jobs/restore/{id}', [AdminJobsController::class, 'restore'])->name('restore_job');



