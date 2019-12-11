<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;
use Symfony\Component\HttpFoundation\Request;

class Order extends Model
{
    //
    protected $table = "orders";
    protected $primaryKey = 'orderNumber';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['orderNumber','orderDate','requiredDate','shippedDate','status','comments','customerNumber'];
    public function orderdetail(){

        return $this->hasOne('App\Orderdetail','orderNumber','orderNumber');
    }

    public function customers() 
    {
        return $this->belongsTo('App\customer','customerNumber');
    }

    
}
