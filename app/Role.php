<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends \Spatie\Permission\Models\Role
{
    protected $table = 'roles';
    protected $primaryKey ='id';

    protected $guarded = [];
}