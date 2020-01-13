<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use AjCastro\EagerLoadPivotRelations\EagerLoadPivotTrait;

class Product extends \Eloquent
{
    // use EagerLoadPivotTrait;

    protected $fillable = [
        'name', 'price','brand_id', 'description', 'status'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
