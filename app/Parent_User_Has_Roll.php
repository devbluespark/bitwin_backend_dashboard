<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parent_User_Has_Roll extends Model
{
    protected $table = 'parent_user_has_rolls';
    protected $primaryKey ='id';
    const UPDATED_AT=NULL;

    protected $guarded = [];
}
