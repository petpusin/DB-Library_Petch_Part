<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = "orders";
    protected $primaryKey = 'orderNumber';
    public $incrementing = false;
    public $timestamps = false;

    public function orderdetail(){

        return $this->hasOne('App\Orderdetail','orderNumber','orderNumber');
    }
}
