<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductLine extends Model
{
    protected $table = "productlines";
    protected $primaryKey = 'productLine';
    protected $increments = 'false';
    protected $keyType = 'string';
    public $timestamps = false;
}
