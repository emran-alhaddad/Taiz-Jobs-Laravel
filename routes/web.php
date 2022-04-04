<?php

use App\Http\Controllers\AdminCompaniesController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminJobsController;
use App\Http\Controllers\AdminServicesController;
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
    return view('welcome');
});

Route::get('/admin/jobs',[AdminJobsController::class,'index']);
Route::get('/admin/services',[AdminServicesController::class,'index']);
Route::get('/admin/companies',[AdminCompaniesController::class,'index'])->name('show_companies');
Route::post('/admin/companies/add',[AdminCompaniesController::class,'addNew'])->name('add_company');

