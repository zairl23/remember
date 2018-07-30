<?php 

namespace Ney\Laravel\Remember;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\Foundation\AliasLoader;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->app->singleton('remember', function($app){
            return new Remember();
        });

        AliasLoader::getInstance()->alias(
           'Remember', Facades\Remember::class
        );

    }
}
