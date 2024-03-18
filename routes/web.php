<?php

use App\Http\Controllers\GoogleLoginController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Livewire\ManageUsers;

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
    if (auth()->check()) {
        return redirect('/dashboard');
    }

    return redirect('/dashboard');
});

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
})->name('tentang-kami');

Route::get('/fitur', function () {
    return view('fitur');
})->name('fitur');

Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// Socialite

Route::get('/auth/redirect', [GoogleLoginController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);

Route::middleware([
    // 'auth:',
    // config('jetstream.auth_session'),
    // 'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});

    Route::get('/manage-users', ManageUsers::class)->name('manage-users');
