<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission
{
    protected $table = 'permissions';
    protected $primaryKey ='id';

    protected $guarded = [];
}