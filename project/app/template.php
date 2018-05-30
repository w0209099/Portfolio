<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class template extends Model
{
    protected $fillable = array('Template_name', 'Template_descript', 'Template_content', 'Template_active', 'Created_by', 'Modifyed_by');
}
