<?php
use App\Http\Controllers\AuthenticateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
// Route::post('/menu',[DashboardController::class,'viewMenu'])->name('menu');
Route::post('/register',[AuthenticateController::class , 'register'])->name('post.register');
Route::post('/login',[AuthenticateController::class , 'login'])->name('post.login');