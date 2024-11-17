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
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'uilogin');
        $this->loadTranslationsFrom(__DIR__.'/../lang','uilogin');

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
            __DIR__.'/../routes/auth.php' => base_path('routes/uiauth.php'),
        ]);
    

    }
}
