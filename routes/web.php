<?php

use Illuminate\Support\Facades\Route;
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



Route::middleware([
    // 'auth:',
    // config('jetstream.auth_session'),
    // 'verified',
])->group(function () {

    Route::get('/home', function () {
        return view('dashboard');
    })->name('home');

    Route::get('/', function () {
        if (auth()->check()) {
            return redirect('/home');
        }

        return redirect('/home');
    });
});

Route::get('/manage-users', ManageUsers::class)->name('manage-users');
