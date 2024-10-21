<?php
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');


Route::post('/register',[AuthenticateController::class , 'register'])->name('post.register');
Route::post('/login',[AuthenticateController::class , 'login'])->name('post.login');

 Route::post('/logout',[AuthenticateController::class, 'logout'])->name('logout');
Route::middleware('auth:sanctum')->group(function () {
Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
Route::get('/paid',[PaymentController::class , 'paid'])->name('paid');
//  Route::get('/user',[AuthenticateController::class , 'loggedInUser']);
}); 