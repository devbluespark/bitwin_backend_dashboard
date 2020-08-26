<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Win_Detail extends Model
{
    protected $table = 'win_records';
    protected $primaryKey ='id';

    public function biduser(){
        return $this->belongsTo(BidUser::class);
    }
}
