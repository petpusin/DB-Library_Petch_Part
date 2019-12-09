<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productsvendor extends Model
{
    protected $fillable=['productName','productScale','productVendor'];

    public function removespace()
    {
        return str_replace(' ', '', $this->productVendor);
    }
}
