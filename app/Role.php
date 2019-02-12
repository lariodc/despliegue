<?php

namespace InterSoluciones;

use Illuminate\Database\Eloquent\Model;
//use Provider\Role;

class Role extends Model
{
    public function users(){
        return $this->belongsToMany('InterSoluciones\User');

	}
}
