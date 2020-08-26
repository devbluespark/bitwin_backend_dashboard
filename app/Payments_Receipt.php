<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments_Receipt extends Model
{
    protected $table = 'payments_receipts';
    protected $primaryKey ='id';
    public $timestamps = false;

    protected $guarded = [];

    public function BidUser()
    {
        return $this->belongsTo(BidUser::class);
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