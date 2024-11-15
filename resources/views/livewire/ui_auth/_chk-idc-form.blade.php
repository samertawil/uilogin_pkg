<div class="d-flex" style="height: 600px; ">

    <div class="container  m-auto px-5  ">

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card ">

                    <div class="card-header ">حسابات المستخدمين</div>

                    <div class="card-body">


                        <x-uilogin-input wire:model="user_name" name="user_name" label="yes" divlclass="col-lg-12"
                            autofocus></x-uilogin-input>

                           

                        <x-uilogin-button :name="$buttontitle ?? 'استمرار'" divlclass="d-grid gap-2" class="bg-primary text-white"></x-uilogin-button>

                        {{-- <x-cancel-back :route="route('login')" wire:navigate ></x-cancel-back> --}}


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
