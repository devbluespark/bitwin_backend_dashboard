<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey ='id';
   

    public function bid_records()
    {
        return $this->hasMany(Bid_Record::class);
    }

    public function win_record()
    {
        return $this->hasOne(Win_Record::class);
    }

    



}