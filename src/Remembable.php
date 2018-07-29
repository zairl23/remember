<?php 

namespace Ney\Laravel\Remember;

use Ney\Laravel\Remember\Facades\Remember as RememberFacade;

trait Remembable 
{
    public static function bootRemembable()
    {
        static::observe(new ModelObserver);
    }

    public function remembable()
    {
        if ($this->remembableWhen()) {
            RememberFacade::set($this->remembableAs(), $this->toCacheArray());
        }
        
    }

    public function unremembable()
    {
        if ($this->unremembableWhen()) {
            RememberFacade::forget($this->remembableAs());
        }
    }

    public function remembableAs()
    {
        return self::class . ':online';
    }

    public function remembableWhen()
    {
        return true;
    }

    public function unremembableWhen()
    {
        return true;
    }

    public function toCacheArray()
    {
        return $this->toArray();
    }


}