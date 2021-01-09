<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments_Gateway extends Model
{
    protected $table = 'payments_gateways';
    protected $primaryKey ='id';
    public $timestamps = false;

    protected $guarded = [];

    public function bid_user()
    {
        return $this->belongsTo(Bid_User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function receipt()
    {
        return $this->belongsTo(Receipt::class);
        
    }

}