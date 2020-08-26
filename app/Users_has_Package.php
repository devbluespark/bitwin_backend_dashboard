<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_has_Package extends Model
{
    protected $table = 'users_has_packages';
    protected $primaryKey ='id';
    public $timestamps = false;

    protected $guarded = [];
}