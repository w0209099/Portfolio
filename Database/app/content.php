<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class content extends Model
{
    protected $fillable = array('contents_name', 'contents_alias', 'contents_order','contents_descript', 'Created_by', 'Modifyed_by');
}
