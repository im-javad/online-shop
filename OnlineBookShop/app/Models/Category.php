<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model{
    use HasFactory;

    protected $fillable = ['slug' , 'title'];

    /**
     * NTO1 relationship between category and product
     *
     * @return array
     */
    public function products(){
        return $this->hasMany(Product::class);
    }
}


