<?php

namespace  uilogin\pkg\Http\Livewire\ui_auth;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use uilogin\pkg\Http\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class Register extends Component
{

    #[Validate(['required'])]
    public $name = '';
    #[Validate(['required','unique:users,user_name'])]
    public $user_name = '';

    #[Validate(['required', 'numeric', 'min_digits:10', 'max_digits:15', 'unique:users,mobile'])]
    public $mobile = '';
    #[Validate(['required', 'email', 'unique:users'])]
    public $email = '';
    #[Validate(['required', 'min:4', 'same:passwordConfirmation'])]
    public $password = '';
    public $passwordConfirmation = '';
    public $year='';
    public $month='';
    public $day='';
 
 
 
    public function register()
    {

           $this->validate();
        
          
        $user = User::create([
            'user_name' => $this->user_name,
            'name' => $this->name,
            'mobile' => $this->mobile,
            'email' => $this->email,
            'password' => Hash::make($this->password),
          
            
        ]);

        event(new Registered($user));

        Auth::login($user, true);

        return redirect()->intended(route('home'));
    }

    public function updated($prop) {

       
       $this->validateOnly($prop);
       

    }
    
    #[Layout('uilogin::components.layouts.uilogin-app')]
    public function render()
    {
 
        return view('uilogin::livewire.ui_auth.register');
    }
}
