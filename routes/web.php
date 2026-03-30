<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

Route::get('/', [MemberController::class, 'index'])->name('index');


Route::get('/register', [MemberController::class, 'create'])->name('register');
Route::post('/register', [MemberController::class, 'store'])->name('register.store');
Route::get('/register/confirm', [MemberController::class, 'confirmRegistration'])->name('register.confirm');
Route::get('/register/success', [MemberController::class, 'registerSuccess'])->name('register.success');

Route::get('/login', [MemberController::class, 'showLoginForm'])->name('login');
Route::post('/login', [MemberController::class, 'login'])->name('login.submit');

Route::get('/reservation', [MemberController::class, 'showReservation'])->name('reservation');
Route::get('/reservation/confirm', [MemberController::class, 'confirmReservation'])->name('reservation.confirm');
Route::post('/reservation', [MemberController::class, 'makeReservation'])->name('reservation.submit');
Route::get('/reservation/success', [MemberController::class, 'reservationSuccess'])->name('reservation.success');

Route::post('/logout', [MemberController::class, 'logout'])->name('logout');

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');
