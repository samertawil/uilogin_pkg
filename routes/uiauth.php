<?php

use App\Livewire\Uilogin\Login;
use App\Livewire\Uilogin\Register;
use Illuminate\Support\Facades\Route;
use App\Livewire\Uilogin\ForgetPassword;
 
 
Route::middleware(['web'])->group(function () {

    Route::get('login', Login::class)->name('uilogin.login');
       
    Route::get('register', Register::class)->name('uilogin.register');

  
    Route::get('forget-password', ForgetPassword::class)->name('uilogin.forgetpassword');
});
 
       