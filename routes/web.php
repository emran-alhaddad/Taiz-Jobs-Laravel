<?php

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/services', [ServiceController::class, 'index']);

Route::get('/companies', [PartenerController::class, 'index']);

Route::get('/job', [JobController::class, 'index']);

Route::get('/contact-us', [ContactController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/signup', [SignupController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/dashboard/user-info',  [DashboardController::class, 'index']);


Route::get('/dashboard/courses', [DashboardController::class, 'courses']);


Route::get('/dashboard/education', [DashboardController::class, 'education']);

Route::get('/dashboard/experience', [DashboardController::class, 'experience']);

Route::get('/dashboard/skills', [DashboardController::class, 'skills']);

