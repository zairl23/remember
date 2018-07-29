<?php

namespace Ney\Laravel\Remember;

use Illuminate\Database\Eloquent\SoftDeletes;

class ModelObserver
{

    /**
     * Handle the saved event for the model.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function saved($model)
    {
        $model->remembable();
    }

    /**
     * Handle the deleted event for the model.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function deleted($model)
    {
        $model->unremembable();
    }

   
}