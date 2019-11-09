<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'employeeNumber';
    protected $increments = 'false';
    public $timestamps = false;
    public function admin(){

        return $this->hasOne('App\Admin','em_id','employeeNumber');
    }

    protected $fillable = [
        'jobTitle',
    ];
}
