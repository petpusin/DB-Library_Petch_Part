<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    public static function findByCode($code)
    {
        return self::where('code', $code)->first();
    }

    public function discount($total)
    {
        if ($this->type == 'fixed') {
            return $this->value;
        } else if ($this->type == 'percent_off') {
            return ($this->percent_off/100)*$total;
        }
        else{
            return 0;
        }
    }
    
    public function free(){
        if($this->buy_one_get_one == true){
            return 1;
        }else{
            return 0;
        }
    }
}
