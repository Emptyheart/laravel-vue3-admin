<?php

//use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::post('/register',[\App\Http\Controllers\UserController::class,'register'])->name('register');
Route::post('/login',[\App\Http\Controllers\UserController::class,'login'])->name('login');
Route::get('/logout',[\App\Http\Controllers\UserController::class,'logout'])->name('logout');


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//


Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get("/user",[\App\Http\Controllers\UserController::class,'index']);
    Route::get("/orderList",[\App\Http\Controllers\OrderController::class,'index']);
});

require __DIR__.'/auth.php';
