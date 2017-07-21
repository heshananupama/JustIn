<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roomType extends Model
{
    protected $fillable = [
        'id','roomType','availableRooms'
    ];

    public function reservation()
    {
        return $this->hasMany('App\reservation');
    }
}
