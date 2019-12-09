<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{

    

    protected $fillable=['productCode','productName','productLine','productScale','productVendor','productDescription','quantityInStock','buyPrice','MSRP'];
    protected $table = "products";
    protected $primaryKey = 'productCode';
    protected $increments = 'false';
    protected $keyType = 'string';
    public $timestamps = false;

    public function productline()
    {
        return $this->belongsTo('App\ProductLine','productLine');
    }

    public function removespace()
    {
        return str_replace(' ', '', $this->productVendor);
    }
    public function removespacescale()
    {
        return str_replace(' ', '', $this->productScale);
    }
}
