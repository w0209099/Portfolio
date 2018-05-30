<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    protected $fillable = array('Pages_name', 'Pages_alias', 'Pages_descript', 'Created_by', 'Modifyed_by');
}
