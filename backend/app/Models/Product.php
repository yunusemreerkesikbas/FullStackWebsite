<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'category_id',
        'stock_status',
        'sku',
        'quantity',
        'meta_title',
        'meta_description',
        'cover_image',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function parent()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
