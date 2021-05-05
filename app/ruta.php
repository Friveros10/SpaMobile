<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruta extends Model
{
    protected $table = 'rutas';

    public function local()
    {
        return $this->hasMany('App\local','id_ruta');
    }
}
