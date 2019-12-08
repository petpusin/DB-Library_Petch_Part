<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'customerNumber','customerName','contactLastName','contactFirstName','phone','addressLine1','addressLine2','city','state','postalCode','country','salesRepEmployeeNumber',
    ];
    protected $table = "customers";
    protected $primaryKey = 'customerNumber';
    public $increments = false;
    public $timestamps = false;
    public function orders() 
    {
        return $this->hasMany('App\order','customerNumber');
    }

}
