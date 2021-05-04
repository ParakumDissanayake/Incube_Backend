<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model 
{

    protected $table = 'item';
    public $timestamps = false;
    protected $fillable = [
        'itemName',
        'itemCode',
        'categoryID'
    ];

    public function ItemCategory()
    {
        return $this->hasOne('Category');
    }

}