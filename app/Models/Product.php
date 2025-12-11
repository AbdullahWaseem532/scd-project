<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'discount_price',
        'image',
        'category_id',
        'is_active',
        'stock'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getFinalPriceAttribute()
    {
        return $this->discount_price ?? $this->price;
    }

    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return 'https://via.placeholder.com/300x200';
        }

        
        if (strpos($this->image, 'http://') === 0 || strpos($this->image, 'https://') === 0) {
            return $this->image;
        }

        
        if (strpos($this->image, '/storage/') === 0) {
            return asset($this->image);
        }

        
        return $this->image;
    }
}
