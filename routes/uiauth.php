<?php

 
 
 
use App\Livewire\Uilogin\Login;
use Illuminate\Support\Facades\Route;
use App\Livewire\Uilogin\Register;
 
 

 

Route::middleware(['web'])->group(function () {

    Route::get('login', Login::class)->name('uilogin.login');
       
    Route::get('register', Register::class)->name('uilogin.register');

  
  
});
 
       