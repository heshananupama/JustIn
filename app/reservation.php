<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    protected $table='reservation';

    public function roomType()
    {
        return $this->belongsTo('App\roomType');
    }
}
