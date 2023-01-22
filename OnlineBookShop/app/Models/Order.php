<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model{
    use HasFactory;

    protected $fillable = ['user_id' , 'amount' , 'res_num' , 'status'];

    /**
     * 1TON relationship between order and user
     *
     * @return array|null
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    /**
     * 1TO1 relationship between order and payment
     *
     * @return array|null
     */
    public function payment(){
        return $this->hasOne(Payment::class , 'order_id');
    }

    /**
     * NTON relationship between order and product
     *
     * @return array|null
     */
    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('quantity');;
    }
}


