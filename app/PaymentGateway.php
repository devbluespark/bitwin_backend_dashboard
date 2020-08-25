<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentGateway extends Model
{
    protected $table = 'payments_gateway';
    protected $primaryKey ='id';

    protected $guarded = [];
}