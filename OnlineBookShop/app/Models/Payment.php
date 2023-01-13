<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model{
    use HasFactory;

    /**
     * 1TO1 relationship between payment and order
     *
     * @return array
     */
    public function order(){
        return $this->belongsTo(Order::class);
    }
}
