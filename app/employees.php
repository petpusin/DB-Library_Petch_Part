<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'employeeNumber';
    public $increments = false;
    public $timestamps = false;
    public function admin(){

        return $this->hasone('App\Admin','employeeNumber','em_id');
    }

    protected $fillable = [
        'jobTitle',
    ];
}
