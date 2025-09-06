<?php

use App\Livewire\Auth\Login;
use App\Livewire\BaseModel;
use App\Livewire\Brokers;
use App\Livewire\BrokerDetail;
use App\Livewire\BrokerPublic;
use App\Livewire\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', Login::class)->name('login');
    Route::get('/login', Login::class)->name('login.form');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/brokers', Brokers::class)->name('brokers');
    Route::get('/brokers/{broker}', BrokerDetail::class)->name('broker.detail');
    Route::get('/base-model', BaseModel::class)->name('base-model');
    
    Route::post('/logout', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    })->name('logout');
});

// Public routes (no authentication required)
Route::get('/{url}', BrokerPublic::class)->name('broker.public');
