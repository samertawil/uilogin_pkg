 <div class="d-flex mt-4">
     <div class="container m-auto ">
         <div class="row justify-content-center">
             <div class="col-md-6">
                 <div class="card">

                     <div class="card-header">{{ __('uilogin.get-help') }}</div>




                     <div class=" ">
                         <form wire:submit='create'>


                             <x-uilogin-input name="name" wire:model='name' label labelname="اسم مقدم الطلب" req
                                 divWidth="12"></x-uilogin-input>

                             <x-uilogin-input name="user_name" wire:model='user_name' label
                                 divWidth="12"></x-uilogin-input>



                             <x-uilogin-input name="mobile" wire:model='mobile' label divWidth="12"
                                 description_field=" الرجاء ادخال رقم الخليوي كاملا بالمقدمة 059 او 056"></x-uilogin-input>

                             <x-uilogin-select wire:model='subject_id' id='subject_id' name="subject_id"
                                 :options="config('techsupport')['list']" label labelname="الرجاء إختيار نوع الدعم المطلوب " divWidth="12"
                                 req></x-uilogin-select>

                             <x-uilogin-textarea wire:model='issue_description' name="issue_description" label req
                                 rows="6" cols="30" divWidth="12"></x-uilogin-textarea>

                     </div>

                     <div class="g-recaptcha" data-sitekey="{!! env('RECAPTCHA_SITE_KEY', 'NO-KEY-FOUND') !!}"></div>

                     <div class="container my-5">
                         <img src="{{ captcha_src('technicalSupport') }}" alt="captcha">
                         <div class="mt-2"></div>
                         <input type="text" wire:model='captcha' name="captcha" class="form-control @error('captcha') is-invalid @enderror"
                             placeholder=" ادخل كود التحقق ">
                         @error('captcha')
                             <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                     </div>


               


                 </div>

                 <div class="row mb-3 ">

                     <div class="col-6 text-start">
                         <a href="{{route('uilogin.login')}}" wire:navigate  type="submit" class="btn btn-primary">
                             العودة للرئيسية
                         </a>
                     </div>
                     <div class="col-6 text-end">
                         <button type="submit" class="btn btn-primary">
                             ارسال
                         </button>
                     </div>
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
