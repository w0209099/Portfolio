<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\page;


class article extends Model
{
    protected $fillable = array('Articles_name', 'Articles_descript', 'Articles_content', 'Articles_title', 'Articles_page',
        'Articles_html', 'Articles_CA_ID', 'Articles_All_pages', 'Created_by', 'Modifyed_by'
        );


    public function pagess()
    {
        return $this->hasMany('App\page');
    }

    public function contants()
    {
        return $this->hasMany('App\content');
    }


}
