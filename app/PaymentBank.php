<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentBank extends Model
{
    
    protected $table = 'payments_receipts';
    protected $primaryKey ='id';

    protected $guarded = [];

}