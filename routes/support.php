<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\TechnicalSupport\TechSupportCreate;

Route::prefix('support/')->middleware(['web'])->name('support.')->group(function() {
    Route::get('create',TechSupportCreate::Class)->name('create');
});


