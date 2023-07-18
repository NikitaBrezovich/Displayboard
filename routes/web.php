<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\SliderController;
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

Route::get('/show/{id}', [SliderController::class,'show'])->name('slider');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [SlideController::class,'index'])->name('dashboard');
    Route::get('/', [SliderController::class,'index'])->name('index');
});



Route::group(['prefix'=>'slide','middleware'=>'auth'],function() {
    Route::get('/', [SlideController::class,'index'])->name('slide.index');
    Route::get('/add', [SlideController::class,'add'])->name('slide.add');
    Route::post('/add', [SlideController::class,'store'])->name('slide.store');
    Route::get('/delete/{id}', [SlideController::class,'delete'])->name('slide.delete');
    Route::delete('/delete/{id}', [SlideController::class,'delete'])->name('slide.delete');
    Route::get('/edit/{id}', [SlideController::class,'edit'])->name('slide.edit');
    Route::post('/edit/{id}', [SlideController::class,'update'])->name('slide.update');
    Route::get('/activate/{id}', [SlideController::class,'activate'])->name('slide.activate');
    Route::get('/deactivate/{id}', [SlideController::class,'deactivate'])->name('slide.deactivate');
    Route::get('/duplicate/{id}', [SlideController::class,'duplicate'])->name('slide.duplicate');
    Route::post('/duplicate/{id}', [SlideController::class,'duplicate'])->name('slide.duplicate');
});

Route::group(['prefix'=>'slider','middleware'=>'auth'],function() {
    Route::get('/', [SliderController::class,'index'])->name('displayboard.index');
    Route::get('/add', [SliderController::class,'add'])->name('displayboard.add');
    Route::post('/add', [SliderController::class,'store'])->name('displayboard.store');
    Route::get('/delete/{id}', [SliderController::class,'delete'])->name('displayboard.delete');
    Route::delete('/delete/{id}', [SliderController::class,'delete'])->name('displayboard.delete');
    Route::get('/edit/{id}', [SliderController::class,'edit'])->name('displayboard.edit');
    Route::post('/edit/{id}', [SliderController::class,'update'])->name('displayboard.update');
    Route::get('/activate/{id}', [SliderController::class,'activate'])->name('displayboard.activate');
    Route::get('/deactivate/{id}', [SliderController::class,'deactivate'])->name('displayboard.deactivate');
    Route::post('/updatedSince/{id}', [SliderController::class,'updatedSince'])->name('displayboard.updatedSince');
});
require __DIR__.'/auth.php';
