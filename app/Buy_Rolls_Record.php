<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy_Rolls_Record extends Model
{
    protected $table = 'buy_rolls_records';
    protected $primaryKey ='id';
    const UPDATED_AT=NULL;

    protected $guarded = [];
}
