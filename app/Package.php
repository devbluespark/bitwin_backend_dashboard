<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';
    protected $primaryKey ='id';

    protected $guarded = [];


    public function user(){
        return $this->belongsTo(User::class);
    }

    
}