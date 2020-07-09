<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'description',
        'user_id',
        'category_id',
        'brand_id',
        'price',
      
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
