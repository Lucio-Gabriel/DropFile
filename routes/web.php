<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('dashboard/dropfile', \App\Livewire\Dashboard\Index::class)->name('dashboard.dropfile');

Route::get('products-list', \App\Livewire\Products\Index::class)->middleware(['auth', 'verified'])->name('products.index');
Route::get('products/create', \App\Livewire\Products\Create::class)->middleware(['auth', 'verified'])->name('products.create');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
