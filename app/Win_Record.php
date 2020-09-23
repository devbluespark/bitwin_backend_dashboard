<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Win_Record extends Model
{
    protected $table = 'win_records';
    protected $primaryKey ='id';
    const UPDATED_AT=NULL;


    public function product()
    {
        return $this->belongsTo(product::class);
    }

    public function bid_user()
    {
        return $this->belongsTo(Bid_User::class);
    }
}
