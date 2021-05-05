<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roleModel extends Model
{
    protected $table = 'role';

    public function user()
    {
        return $this->hasMany('App\User','id');
    }
}
