<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BidDetail extends Model
{
    protected $table = 'bid_records';
    protected $primaryKey ='id';

    public function biduser(){       
        return $this->hasMany(BidDetail::class);
    }

}
