<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'slug', 'created_at', 'updated_at'
    ];

    public static function boot() {
        parent::boot();

        static::deleting(function($category) { // before delete() method call this
            $uncategorized = Category::firstOrCreate(['name' => 'Uncategorized', 'slug' => 
                                'uncategorized']);
            Product::where('category_id', $category->id)->update(
                                ['category_id' => $uncategorized->id]);
        });
    }

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
