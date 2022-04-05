<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelcoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationListController;


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

Route::get('/home', [TelcoController::class,'index']);
Route::get('/apply', [TelcoController::class, 'apply']);
Route::post('/apply', [TelcoController::class, 'store']);
Route::get('/admin',function () {
    return view('admindashboard');
});

// ->middleware(['auth'])->name('admindashboard');


// Auth::routes('');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/packagelist',[AdminController::class, 'index'])->name('packagelist');
    Route::get('/applicationlist',[ApplicationListController::class, 'index'])->name('applicationlist');
    
    Route::get('/addpackage',[AdminController::class, 'add'])->name('addpackage');
    Route::post('/addpackage',[AdminController::class, 'create']);
    
    Route::get('/edit/{id}',[AdminController::class, 'edit']);
    Route::post('/edit',[AdminController::class, 'update']);

    Route::get('delete/{id}',[AdminController::class, 'delete']);
});
