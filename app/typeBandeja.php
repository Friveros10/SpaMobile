<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class typeBandeja extends Model
{
    protected $table = 'tipo_bandeja';

    public function registro()
    {
        return $this->belongsTo('App\registros','id_tipo_bandeja');
    }
}
