<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    protected $table = 'employees';
    protected $primarykey = 'employeeNumber';
    protected $increments = 'false';
    public function admin(){

        return $this->hasOne('App\Admin','em_id','employeeNumber');
    }
}
