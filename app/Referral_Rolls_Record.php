<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral_Rolls_Record extends Model
{
    protected $table = 'referral_rolls_records';
    protected $primaryKey ='id';
    const UPDATED_AT=NULL;

    protected $guarded = [];
}
