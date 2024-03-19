<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

use App\Models\Category;
use App\Models\FeaturedProduct;

class Product extends Model
{
    use HasFactory;
    use softDeletes;

    public function category(){
        return $this->belongsTo(Category::class, 'category_id','id');
    }

    public function featured_products()
    {
        return $this->hasMany(FeaturedProduct::class, 'product_id', 'id');
    }
    public function cart(){
        return $this->belongsTo(Category::class, 'cart_id','id');
    }
}
