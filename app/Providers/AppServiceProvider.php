<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Form::component('bsText', 'components.form.text', [
            'name', 'value' => null, 'attributes' => []
        ]);
        \Form::component('bsTextArea', 'components.form.textarea', [
            'name', 'value' => null, 'attributes' => []
        ]);

        \Form::component('bsSelect', 'components.form.select', [
            'name', 'values', 'value' => null, 'attributes' => []
        ]);
    }
}
