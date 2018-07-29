<?php 

namespace Ney\Laravel\Remember\Contracts;

use Closure;

interface Remember 
{
    public function get($key);

    public function set($key, $data);

    public function forget($key);

    public function remind($key, Closure $reminder);


}