<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonationRegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/donation/{slug}', [DonationRegisterController::class, 'detail'])->name('donationDetail');
Route::middleware('auth')->group(function () {
    Route::get('/donation/register/{slug}', [DonationRegisterController::class, 'register'])->name('donationRegister');
    Route::post('/donation/register/{slug}/post', [DonationRegisterController::class, 'post'])->name('donationPost');
    Route::get('/donasi/{slug}/finish/{id}', [DonationRegisterController::class, 'step3'])->name('step3');

    Route::get('/dashboard/{id}-{name}', [DashboardController::class, 'index'])->name('mydashboard');
    Route::get('/mydonation/{id}-{name}', [DashboardController::class, 'mydonation'])->name('mydonation');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
