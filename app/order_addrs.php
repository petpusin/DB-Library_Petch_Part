<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_addrs extends Model
{
    // 
    protected $table = 'order_addrs';
    protected $primaryKey = 'orderNumber';
    public $increments = false;
    public $timestamps = false;

}
