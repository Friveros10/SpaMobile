<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class local extends Model
{
    protected $table = 'locales';

    public function user()
    {
        return $this->belongsTo('App\User','id');
    }
    public function ruta()
    {
        return $this->belongsTo('App\ruta','id_ruta');
    }
}
