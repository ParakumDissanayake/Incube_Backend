<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Style extends Model 
{

    protected $table = 'styles';
    public $timestamps = true;
    protected $fillable = [
        'styleCode',
        'styleName',
        'styleQuantity',
        'styleStatus',
        'styleType'
    ];

    public function StyleItems()
    {
        return $this->belongsToMany(StyleItems::class);
    }

}