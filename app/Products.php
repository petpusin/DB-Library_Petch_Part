<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{

    

    protected $fillable=['productName','productScale','productVendor','productLine'];
    protected $table = "products";
    protected $primaryKey = 'productCode';
    protected $increments = 'false';
    protected $keyType = 'string';
    public $timestamps = false;

}
