<?php 

namespace Ney\Laravel\Remember;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class LumenServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->app->singleton('remember', function($app){
            return new Remember();
        });

        $this->app->withFacades();

        class_alias(Facades\Remember::class, 'Remember');

        // you should load your own reminders like routes/reminders.php below
        //require __DIR__ . "/routes/reminders.php";
    }
}
