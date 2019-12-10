<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offices extends Model
{
    protected $table = 'offices';
    protected $primaryKey = 'officeCode';
    public $incrementing = false;
    
}
