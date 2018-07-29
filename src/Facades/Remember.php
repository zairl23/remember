<?php 

namespace Ney\Laravel\Remember\Facades;

use Illuminate\Support\Facades\Facade;

class Remember extends Facade 
{
    public static function getFacadeAccessor()
    {
        return 'remember';
    }
}