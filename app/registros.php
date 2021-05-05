<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registros extends Model
{
    protected $table = 'registros';

    public function user()
    {
        return $this->hasMany('App\User','id');
    }
    public function local()
    {
        return $this->hasMany('App\local','id');
    }
    
    public function type_bandeja()
    {
        return $this->hasMany('App\typeBandeja','id');
    }
    
    public function type_register()
    {
        return $this->hasMany('App\typeRegister','id');
    }
    
}
