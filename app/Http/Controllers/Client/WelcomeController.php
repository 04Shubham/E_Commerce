<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\FeaturedCategory;
use App\Models\FeaturedProduct;

class WelcomeController extends Controller
{
    public function index(){
        $featured_categories = FeaturedCategory::all();
        $featured_products = FeaturedProduct::all();
        
        // dd($featured_categories);
        // die;
        return view ("welcome", compact("featured_categories","featured_products"));
    }
   
}
