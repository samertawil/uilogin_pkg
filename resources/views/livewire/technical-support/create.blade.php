 <div class="d-flex mt-4">
     <div class="container m-auto ">
         <div class="row justify-content-center">
             <div class="col-md-5">
                 <div class="card">

                     <div class="card-header">{{ __('uilogin.get-help') }}</div>




                     <div class="m-3">
                         <form wire:submit='create'>


                             <x-uilogin-input  name="name" wire:model='name' label :labelname="__('uilogin.providerName')" req
                                 divWidth="12"></x-uilogin-input>

                             <x-uilogin-input name="user_name" wire:model='user_name' label :labelname="__('uilogin.accountName')"
                                 divWidth="12"></x-uilogin-input>



                             @php
                                 $techsipport = 'techsupport_' . app()->getLocale();
                             @endphp

                             <x-uilogin-input name="mobile" wire:model='mobile' label divWidth="12"
                                 :description_field="__('uilogin.mobileDetails')"></x-uilogin-input>

                             <x-uilogin-select wire:model='subject_id' id='subject_id' name="subject_id"
                                 :options="config($techsipport)['list']" label :labelname="__('uilogin.help-type')" divWidth="12" req></x-uilogin-select>

                             <x-uilogin-textarea wire:model='issue_description' name="issue_description" label req
                                 rows="4" cols="30" divWidth="12"></x-uilogin-textarea>

                     </div>

                     <div class="g-recaptcha" data-sitekey="{!! env('RECAPTCHA_SITE_KEY', 'NO-KEY-FOUND') !!}"></div>

                     <div class="container my-1">
                         <img src="{{ captcha_src('technicalSupport') }}" alt="captcha">

                         <input type="text" wire:model='captcha' name="captcha"
                             class="form-control  my-3 @error('captcha') is-invalid @enderror"
                             placeholder="{{ __('uilogin.captcha') }}">
                         @error('captcha')
                             <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                     </div>


                 </div>

                 <div class="row my-3 ">


                     <x-uilogin-button :name="__('uilogin.send')" class="bg-primary text-white"
                         divlclass="d-grid gap-2"></x-uilogin-button>

                     <x-uilogin-cancel-back :route="route('uilogin.login')" wire:navigate label="cancel_back"></x-uilogin-cancel-back>
                 </div>

                 </form>
             </div>
         </div>
     </div>

 </div>
 </div>


 <script src="{{ asset('uilogin-assets/js/jquery.min.js') }}"></script>
 <script>
     $('#subject_id').on('change', function() {

         $data = $("#subject_id option:selected").text();

     })
 </script>
 </div>
