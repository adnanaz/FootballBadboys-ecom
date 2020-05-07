<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use Searchable;

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
        return $this->hasMany(Category::class);
    }

    public function toSearchableArray()
    {
        return [
            'id'=>$this->id,
            'kode_product'=>$this->kode_product,
            'name'=>$this->name
        ];
    }

}
