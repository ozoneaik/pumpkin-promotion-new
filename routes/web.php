<?php

use App\Http\Controllers\PromotionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class,'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class,'adminHome'], 'adminHome')->name('admin.home');
    Route::get('/promotion-dashboard',[PromotionController::class,'index'])->name('promotion.dashboard');
    Route::get('/promotion-manage',[PromotionController::class,'pro_manage'])->name('promotion.manage');
    Route::get('/promotion-join',[PromotionController::class,'pro_join'])->name('promotion.join');
    Route::get('/promotion-check',[PromotionController::class,'check'])->name('promotion.check');
    Route::get('/promotion-add-reduce',[PromotionController::class,'add_reduce'])->name('promotion.add-reduce');
    Route::get('/promotion-approve',[PromotionController::class,'pro_approve'])->name('promotion.approve');
});

/*------------------------------------------
--------------------------------------------
All Manager Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/manager/home', [HomeController::class,'managerHome'])->name('manager.home');
});
