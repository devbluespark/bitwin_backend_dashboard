<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral_Package_Roll extends Model
{


    protected $table = 'referral_package_rolls';
    protected $primaryKey ='id';
    public $timestamps = false;
    
    protected $guarded = [];
}
