<?php

namespace App\Livewire\TechnicalSupport;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use App\Models\TechnicalSupport;

class TechSupportCreate extends Component
{
    #[Validate('required', message: 'الرجاء ادخال اسم مقدم الطلب')]
    public  $name;
    public  $user_name;
    #[Validate('nullable')]
    #[Validate('numeric', message: 'ادخال ارقام فقط')]
    #[Validate('min_digits:10', message: 'خطا برقم الهاتف , اقل من 10 ارقام')]
    #[Validate('max_digits:15', message: 'خطا برقم الهاتف , اكثر من 15 رقم')]
    public $mobile;
    #[Validate('required', message: 'الرجاء ادخال نوع الدعم المطلوب  الطلب')]
    public $subject_id;
    #[Validate('required', message: 'الرجاء ادخال اسم تفصيل الطلب')]
    public $issue_description;

    public $captcha;


    public function create()
    {
       $this->validate();

        $validate_rules=[
            'captcha' => ['required', 'captcha'],
        ];

        $validate_message=[
            'captcha.required'=>'الرجاء ادخال كود التحقق',
            'captcha.captcha'=>'خطأ في كود التحقق , يرجي المحاولة مرة اخرى',
        ];

        $this->validate( $validate_rules , $validate_message);

      
        $data = TechnicalSupport::create([
            'name' => $this->name,
            'user_name' => $this->user_name,
            'mobile' => $this->mobile,
            'subject_id' => $this->subject_id,
            'subject' => $this->subject_id,
            'issue_description' => $this->issue_description,
        ]);
        
        $this->reset();
    }

    #[Layout('components.layouts.uilogin-app')]
    public function render()
    {
        return view('livewire.technical-support.create');
    }
}
