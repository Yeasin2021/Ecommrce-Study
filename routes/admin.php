<?php

use App\Http\Controllers\Admin\AdminController;
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

// Route::get('/admin',[AdminController::class,'index'])->name('admin-index');
Route::group(['middleware' => 'admin'],function(){
    Route::get('/admin',[AdminController::class,'dashBoard'])->name('admin-dashboard');
});



