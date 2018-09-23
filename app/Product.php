<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','price','price_before','size','description',
        'overview','quantity','available','category_id'
    ];

    public function image(){

        return $this->hasMany('App\Image');
    }

    public function category(){

        return $this->belongsTo('App\Category');

    }
}
