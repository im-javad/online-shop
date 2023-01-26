<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model{
    use HasFactory;
    
    /**
     * Is coupon expired?
     *
     * @return boolean
     */
    public function isExpired(){
        return Carbon::now()->isAfter(Carbon::parse($this->expire_time));
    }
}
