<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = "payments";
    protected $primatyKey = "checkNumber";
    public $increments = false;
    public $timestamps = false;
}
