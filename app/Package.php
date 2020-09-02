<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';
    protected $primaryKey ='id';

    protected $guarded = [];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function payments_gateways(){
        return $this->hasMany(Payments_Gateway::class);
    }

    
    public function payments_receipts(){
        return $this->hasMany(Payments_Receipt::class);
    }
    
    public function bid_users(){
        return $this->belongsToMany(Bid_User::class);
    }

  

    
}