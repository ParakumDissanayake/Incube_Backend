<?php

namespace item;

use Illuminate\Database\Eloquent\Model;

class Item extends Model 
{

    protected $table = 'item';
    public $timestamps = false;

    public function ItemCategory()
    {
        return $this->hasOne('Category');
    }

}