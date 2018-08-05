<?php 

namespace Ney\Laravel\Remember;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class LaravelServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->app->singleton('remember', function($app){
            return new Remember();
        });

        AliasLoader::getInstance()->alias(
           'Remember', Facades\Remember::class
        );

        // you should load your own reminders like routes/reminders.php below
        //require __DIR__ . "/routes/reminders.php";
    }
}
