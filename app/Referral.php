<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    protected $table = 'referrals';
    protected $primaryKey ='id';

    protected $guarded = [];
    public $timestamps = false;


    public function bid_user()
    {
        return $this->belongsTo(Bid_User::class);
    }


}