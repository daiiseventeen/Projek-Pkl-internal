<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'harga',
        'gambar',
        'stok',
        'category_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function orderProduct()
    {
        return $this->hasMany(OrderProduct::class, 'product_id');
    }
}
