<?php

namespace InterSoluciones;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
protected $fillable = ['name','logo'];

    /**
 * Get the route key for the model.
 *
 * @return string
 */
public function getRouteKeyName()
	{
    return 'slug';
	}
}
