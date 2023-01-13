<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model{
    use HasFactory;

    /**
     * 1TON relationship between order and user
     *
     * @return array
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    /**
     * 1TO1 relationship between order and payment
     *
     * @return array
     */
    public function payment(){
        return $this->belongsTo(Payment::class);
    }
}


