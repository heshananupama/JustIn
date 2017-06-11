<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $fillable = [
        'address', 'type','name', 'email','personInCharge','telephone','website','longitude','latitude'
    ];
}
