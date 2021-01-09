<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid_Record extends Model
{
    protected $table = 'bid_records';
    protected $primaryKey ='id';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function bid_user()
    {
        return $this->belongsTo(Bid_User::class);
    }

}