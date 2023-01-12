<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model{
    use HasFactory;

    protected $guarded = [];

    /**
     * 1TON relationship beet between product and category
     *
     * @return array
     */
    public function category(){
        return $this->belongsTo(Category::class);
    }
}

