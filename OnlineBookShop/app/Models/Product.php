<?php

namespace App\Models;

use App\Exceptions\QuantityExceededException;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model{
    use HasFactory;

    protected $guarded = [];

    /**
     * 1TON relationship between product and category
     *
     * @return array|null
     */
    public function category(){
        return $this->belongsTo(Category::class);
    }
    /**
     * NTON relationship between product and order
     *
     * @return array|null
     */
    public function orders(){
        return $this->belongsToMany(Order::class);
    }
    
    /**
     * Checking stock
     *
     * @param integer $quantity
     * @return void
     */
    public function hasStock(int $quantity){
        if($this->stock <= $quantity)
            throw new QuantityExceededException("End of stock");
    }

    /**
     * Decrement stock quantity after register order
     *
     * @param integer $count
     * @return void
     */
    public function decrementStock(int $count){
        $this->decrement('stock' , $count);
    }
}

