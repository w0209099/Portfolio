<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_permissions extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'permissions_id'
    ];
}
