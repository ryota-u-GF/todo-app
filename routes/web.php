<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/todos', 'dashboard')->name('todos.index');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::livewire('/todos/create', 'pages::todos.create')->name('todos.create');
});

require __DIR__.'/settings.php';
