<?php 

namespace Ney\Laravel\Remember;

use Cache;
use Closure;
use Exception;
use Ney\Laravel\Remember\Contracts\Remember as RememberContract;

class Remember implements RememberContract
{
    protected $memories = [];

    public function get($key)
    {
        return Cache::rememberForever($key, function() use ($key) {
            if (isset($this->memories[$key])) {
                return $this->memories[$key]();
            }

            throw new Exception("Can't remember the cache source data, please register reminders in routes/reminders.php file");

        });
    }

    public function set($key, $data)
    {
        return Cache::forever($key, $data);
    }

    public function forget($key)
    {
        return Cache::forget($key);
    }

    public  function remind($key, Closure $reminder)
    {
        $this->memories[$key] = $reminder;
    }
}