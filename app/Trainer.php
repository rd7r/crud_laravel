<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{

    protected $fillable = ['name','avatar','descripcion'];

      /**
      * Get the route key for the model.
      *customizing key name
      * @return string
      */
      public function getRouteKeyName()
      {
        return 'slug';
      }
}
