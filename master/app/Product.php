<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'kode_product', 'name', 'slug', 'description', 'material', 'link_video', 'price', 'price_discount', 'image', 'category_id', 'created_at', 'updated_at', 'deleted_at'
    ];

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

    public function categories()
    {
        return $this->hasOne(Category::class);
    }
}
