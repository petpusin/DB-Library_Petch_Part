<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class multi_addrs extends Model
{
    protected $table = 'multi_addrs';
    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo('App\customer','customerNumber','customerNumber');
    }
}
