<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $table = 'receipts';
    protected $primaryKey ='id';

    protected $guarded = [];

    public function payments_gateways(){
        return $this->hasMany(Payments_Gateway::class);
    }

    
    public function payments_receipts(){
        return $this->hasMany(Payments_Reciept::class);
    }

    
}