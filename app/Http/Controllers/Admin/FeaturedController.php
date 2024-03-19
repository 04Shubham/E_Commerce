<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\FeaturedProduct;
use App\Models\Category;
use App\Models\FeaturedCategory;

class FeaturedController extends Controller
{
    public function view_featured_categories(){
        $categories = Category::all();
        $featured_categories = FeaturedCategory::all();
        return view('admin.featured.category', compact('categories', 'featured_categories'));
    }

    public function store_featured_category(Request $request){
        $category = FeaturedCategory::where('category_id', $request->category_id)->first();
        if($category) {
            return redirect('/admin/featured/categories')->with('error','Category already added to Featured List !');
        } 
        else{ 
            $featuredCategory = new FeaturedCategory;
            $featuredCategory->category_id = $request->category_id;
            $featuredCategory->save();
           
            return redirect('/admin/featured/categories')->with('success','Category Successfully added to Featured List !');
        }
        
     }

     public function remove_featured_category($id){
        $featuredCategories = FeaturedCategory::find($id);
        if ($featuredCategories) {
            $featuredCategories->delete();
            return redirect('/admin/featured/categories')->with('success','Category Successfully remove form the Featured List !');
        } 
        else {
            return redirect('/admin/featured/categories')->with('error','Category not found !');
            
        }
        
     }

    public function view_featured_products(){
        $products = Product::all();
        $featured_products = FeaturedProduct::all();
        return view('admin.featured.products', compact('products','featured_products'));
    }

    public function store_featured_product(Request $request){
        $product = FeaturedProduct::where('product_id', $request->product_id)->first();
        if($product) {
            return redirect('/admin/featured/products')->with('error','Products already added to Featured List !');
        } 
        else{ 
            $featuredproduct = new FeaturedProduct;
            $featuredproduct->product_id = $request->product_id;
            $featuredproduct->save();
           
            return redirect('/admin/featured/products')->with('success','product Successfully added to Featured List !');
        }
        
     }

     public function remove_featured_product($id){
        $featuredproducts = FeaturedProduct::find($id);
        if ($featuredproducts) {
            $featuredproducts->delete();
            return redirect('/admin/featured/products')->with('success','product Successfully remove form the Featured List !');
        } 
        else {
            return redirect('/admin/featured/products')->with('error','product not found !');
            
        }
        
     }
    
}
