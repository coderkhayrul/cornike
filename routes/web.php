<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Website\WebsiteController;
use Illuminate\Support\Facades\Auth;
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
// DEFAULT ROUTE LIST
Auth::routes();


/////////////////////// WEBSITE ROUTE LIST ////////////////////////////
Route::get('/', [WebsiteController::class, 'home'])->name('website.home');


///////////////////ADMIN ROUTE LIST/////////////////////
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
