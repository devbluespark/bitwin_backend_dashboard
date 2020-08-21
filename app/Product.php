<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        'product_name',
        'product_price',
        'product_bid_rolls',
        'product_bid_min_value',
        'product_bid_max_value',
        'product_img_1',
        'product_img_2',
        'product_img_3',
        'product_img_4',
        'product_img_5',
        'product_expired',
        'product_featured',
    ];
}
