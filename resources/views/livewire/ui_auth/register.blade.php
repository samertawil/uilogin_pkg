 


 <div class="d-flex mt-4" style="height: 600px;">
     <div class="container m-auto">
         <div class="row justify-content-center">
             <div class="col-md-4">
                 <div class="card">
                     <div class="card-header">تسجيل حساب جديد</div>

                     <div class="card-body">
                 
                         <form  wire:submit='register'>
                           
                             <x-uilogin-input wire:model.live='user_name' name="user_name" label="yes" dir="ltr" divlclass='col-lg-12'></x-uilogin-input>

                             <x-uilogin-input wire:model.live='name' name="name" label="yes" divlclass='col-lg-12'></x-uilogin-input>

                          
                             <x-uilogin-input wire:model.live='mobile' name="mobile" label="yes" divlclass='col-lg-12' dir="ltr"></x-uilogin-input>

 
                             <x-uilogin-input wire:model.live='email' name="email" label="yes" divlclass='col-lg-12' dir="ltr"></x-uilogin-input>

                             <x-uilogin-select-parts-date></x-select-parts-date>
                            

                             <x-uilogin-input wire:model='password' type="password" name="password" label="yes"  autocomplete="new-password" divlclass='col-lg-12'></x-uilogin-input>

                             <x-uilogin-input wire:model.live='passwordConfirmation' name="passwordConfirmation" id="password_confirmation" type="password" label="yes"  autocomplete="new-password" divlclass='col-lg-12'></x-uilogin-input>

                          
                             <x-uilogin-button :name="__('uilogin.register_new_account')" class="bg-primary text-white" divlclass="d-grid gap-2" ></x-uilogin-button>

                   
                           <x-uilogin-cancel-back :route="route('uilogin.login')" wire:navigate ></x-uilogin-cancel-back>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 