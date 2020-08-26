<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BidUser extends Model
{
    protected $table = 'bid_users';
    protected $primaryKey ='id';

    protected $guarded = [];

    public function payments_gateways(){
        return $this->hasMany(Payments_Gateway::class);
    }

    
    public function payments_receipts(){
        return $this->hasMany(Payments_Receipt::class);
    }

    public function packages(){
        return $this->belongsToMany(Package::class);
    }


}