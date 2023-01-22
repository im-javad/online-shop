<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model{
    use HasFactory;

    protected $fillable = ['order_id' , 'amount' , 'method' , 'status'];

    /**
     * 1TO1 relationship between payment and order
     *
     * @return array
     */
    public function order(){
        return $this->belongsTo(Order::class , 'id');
    }

    /**
     * Checking method is online or not
     *
     * @return bool
     */
    public function isOnline(){
        return $this->method === 'online';
    }

    /**
     * Perform the curtain completion operation
     *
     * @param string $gateway       
     * @param string $res_num
     * @param string $ref_num
     * @param string $ref_id
     * @return void
     */
    public function confirm(string $gateway , string $res_num , string $ref_num , string $ref_id){
        $this->gateway = $gateway;
        $this->res_num = $res_num;
        $this->ref_num = $ref_num;
        $this->ref_id = $ref_id;
        $this->status = 'paid';
        $this->save();
    }
}

