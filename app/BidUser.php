<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BidUser extends Model
{
    protected $table = 'bid_users';
    protected $primaryKey ='id';

    protected $guarded = [];
}