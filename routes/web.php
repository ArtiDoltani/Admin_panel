<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\DashboardController;

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
    return view('admin.login');
});

Route::group(['prefix'=>'admin'],function(){
Route::group(['middleware'=>'admin.guest'],function(){
//here we will define guest routes
Route::get('/login',[AdminLoginController::class,'index'])->name('admin.login');
Route::post('/login',[AdminLoginController::class,'authenticate'])->name('admin.auth');
});
//here we will define admin route 
Route::group(['middleware'=>'admin.auth'],function(){
    //here we will define password protected  routes
    Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
   // Route::view('/dashboard', 'admin.dashboard')->name('admin.dashboard');
   Route::get('/logout',[AdminLoginController::class,'logout'])->name('admin.logout');
   Route::get('/dashboard/add',[DashboardController::class,'add'])->name('admin.add');
  // Route::post('/dashboard/add',[DashboardController::class,'store']);
  Route::get('/dashboard/show',[DashboardController::class,'show'])->name('admin.show');
 //Route::get('/dashboard/store',[DashboardController::class,'store'])->name('admin.store');
  Route::post('/dashboard/add',[DashboardController::class,'store'])->name('admin.add');
  Route::get('/dashboard/delete/{id}',[DashboardController::class,'destroy'])->name('admin.destroy');
  Route::get('/dashboard/edit/{id}',[DashboardController::class,'edit'])->name('admin.edit');
  Route::post('/dashboard/update/{id}',[DashboardController::class,'update'])->name('admin.update');


});
});

