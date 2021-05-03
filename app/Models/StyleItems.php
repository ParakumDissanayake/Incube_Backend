<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StyleItems extends Model 
{

    protected $table = 'styleItems';
    public $timestamps = true;
    protected $fillable = [
        'itemId',
        'styleId',
        'consumption'
    ];
    public function StyleItems()
    {
        return $this->belongsToMany('Style');
    }

    public function item()
    {
        return $this->hasOne('Item');
    }

}