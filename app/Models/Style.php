<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;

class Style extends Model 
{

    protected $table = 'style';
    public $timestamps = true;

    public function StyleItems()
    {
        return $this->belongsToMany('StyleItems');
    }

    public function style()
    {
        return $this->belongsToMany('Style');
    }

}