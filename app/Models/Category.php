<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\models\FeaturedCategory;
use App\models\Product;

class Category extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'categories';

    protected $fillable = [
            'title', 
            'description',
            'image',
            'meta_title',
            'meta_description',
            'meta_keyword',
    ];
   
    public function featured_categories()
    {
        return $this->hasMany(FeaturedCategory::class, 'category_id', 'id');
    }
    
    public function products(){
        return $this::hasMany(Product::class, 'category_id', 'id');
    }
}
