<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $table = 'receipts';
    protected $primaryKey ='id';
    public $timestamps = false;

    protected $guarded = [];

    //wrong
    public function payments_gateway(){
        return $this->belongsTo(Payments_Gateway::class);
    }


    public function payments_receipt(){
        return $this->hasOne(Payments_Receipt::class);
    }



}
