<?php


namespace App\Livewire\Uilogin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use uilogin\pkg\Http\Models\User;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{

    public $email = '';
    public $password = '';
    public $remember = false;
    public $user_name = '';

    protected $rules = [
        'user_name' => ['required', 'exists:users,user_name'],
        'password' => ['required'],
    ];

    protected $messages = [
        'user_name.exists' => 'خطأ باسم المستخدم',
    ];

 
    
 
    public function authenticate()
    {

       
        $this->validate($this->rules, $this->messages);

        $user = User::user($this->user_name);


        if ($user->user_activation != 1) {

            $this->addError('user_name', trans('auth.deactive'));

            return;
        }

        if ($user->need_to_change == 1) {

            return redirect()->route('password.change', ['userId' => $user->user_name]);
        }

        if (!Auth::attempt(['user_name' => $this->user_name, 'password' => $this->password], $this->remember)) {

            $this->addError('user_name', trans('auth.failed'));

            return;
        }

        return redirect()->intended(route('home'));
    }

     #[Layout('components.layouts.uilogin-app')]
    public function render()
    {
    
        return view('livewire.ui_auth.login');
    }
}
