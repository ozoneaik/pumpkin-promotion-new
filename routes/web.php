<?php

use App\Http\Controllers\PromotionController;
use App\Http\Controllers\TypePromotionController;
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

Route::group(['prefix' => 'promotion'], function () {
    Route::middleware(['auth', 'user-access:admin'])->group(function () {
        Route::get('/admin/home', [HomeController::class,'adminHome'], 'adminHome')->name('admin.home');
        Route::get('/dashboard',[PromotionController::class,'index'])->name('promotion.dashboard');
        Route::get('/manage',[TypePromotionController::class,'pro_manage'])->name('promotion.manage');
        Route::get('/join',[PromotionController::class,'pro_join'])->name('promotion.join');
        Route::get('/check',[PromotionController::class,'check'])->name('promotion.check');
        Route::get('/add-reduce',[PromotionController::class,'add_reduce'])->name('promotion.add-reduce');
        Route::get('/approve',[PromotionController::class,'pro_approve'])->name('promotion.approve');

        //manage-type of promotion
        Route::post('/create-pro',[TypePromotionController::class,'create_pro'])->name('promotion.create-pro');
        Route::delete('/delete-pro/{id}',[TypePromotionController::class,'delete_pro'])->name('promotion.delete-pro');
    });
});


/*------------------------------------------
--------------------------------------------
All Manager Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/manager/home', [HomeController::class,'managerHome'])->name('manager.home');
});


Route::get('/print',function (){
    return view('print');
});
