<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ItemManager;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    Route::get('/item/new', ItemManager::class)->name('item.new');



require __DIR__.'/auth.php';

