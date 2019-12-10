<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    //
    protected $fillable = ['orderNumber','productCode','quantityOrdered','priceEach','orderLineNumber'];
    protected $table = "orderdetails";
    protected $primaryKey = 'orderNumber';
    public $incrementing = false;
    public $timestamps = false;

    public function order(){

        return $this->belongTo('App\order','orderNumber','orderNumber');
    }

    public function product()
    {
        return $this->belongsToMany('App\Product','productCode')->withPivot('quantityOrdered');
    }
}
