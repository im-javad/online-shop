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
     * @return array
     */
    public function category(){
        return $this->belongsTo(Category::class);
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
}

