<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SlideController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [SlideController::class,'index'])->name('slider');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['prefix'=>'dashboard','middleware'=>'auth'],function() {
    Route::get('/', [SlideController::class,'dashboard'])->name('dashboard');
    Route::get('/add', [SlideController::class,'add'])->name('add');
    Route::post('/add', [SlideController::class,'store'])->name('store');
    Route::get('/delete/{id}', [SlideController::class,'delete'])->name('delete');
    Route::delete('/delete/{id}', [SlideController::class,'delete'])->name('delete');
    Route::get('/edit/{id}', [SlideController::class,'edit'])->name('edit');
    Route::post('/edit/{id}', [SlideController::class,'update'])->name('update');
    
});
require __DIR__.'/auth.php';
