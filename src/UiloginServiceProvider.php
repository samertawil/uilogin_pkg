<?php

namespace uilogin\pkg;

use Illuminate\Support\ServiceProvider;

class UiloginServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        //
    }


    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
        //  $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        //  $this->loadViewsFrom(__DIR__ . '/../resources/views', 'uilogin');
        //  $this->loadTranslationsFrom(__DIR__.'/../lang','uilogin');

        $this->publishes(
            [__DIR__ . '/../config/techsupport.php' => config_path('techsupport.php'),],
            'config'
        );
		
		    $this->publishes(
            [__DIR__ . '/../config/captcha.php' => config_path('captcha.php'),],
            'config'
        );

        $this->publishes(
            [__DIR__ . '/../resources/views' => resource_path('views'),],
            'views'
        );


        $this->publishes(
            [__DIR__ . '/../lang' => lang_path(''),],
            'lang'
        );


        $this->publishes([
            __DIR__.'/Http/Livewire' => app_path('Livewire'),
        ]);

        $this->publishes([
            __DIR__.'/Http/Models' => app_path('Models'),
        ]);
    
    

        $this->publishes([
            __DIR__.'/../routes/uiauth.php' => base_path('routes/uiauth.php'),
        ]);


        $this->publishes([
            __DIR__.'/../routes/support.php' => base_path('routes/support.php'),
        ]);
    

    }
}
