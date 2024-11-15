<?php

 
 
 
use uilogin\pkg\Http\Livewire\ui_auth\Login;
use Illuminate\Support\Facades\Route;
use uilogin\pkg\Http\Livewire\ui_auth\Register;
 
 

 

Route::middleware(['web'])->group(function () {

    Route::get('login', Login::class)->name('uilogin.login');
       
    Route::get('register', Register::class)->name('uilogin.register');

  
  
});
 
       