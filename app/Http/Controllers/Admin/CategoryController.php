<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
Use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view("admin.category.index",compact("categories"));
    }

    public function create(){
        return view("admin.category.create");
    }

    public function store(Request $request){
        $category = new Category;
        $category->title = $request->title;
        $category->slug = Str::slug($request->title);
        $category->description = $request->description;
        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/category/', $filename);
            $category->image = $filename;
        }
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->meta_keyword = $request->meta_keyword;
        $category->save();
        return redirect()->route('admin.categories')->with('success', 'Category created successfully!');
    }

    public function show($id){
        $category = Category::find($id);
        return view("admin.category.view",compact("category"));
    }

    public function edit($id){
        $category = Category::find($id);
        return view("admin.category.edit",compact("category"));
    }

    public function update(Request $request, $id){
        $category = Category::find($id);
        if($category){
            $category->title = $request->title;
            $category->slug = Str::slug($request->title);
            $category->description = $request->description;
            if($request->hasfile('image')){
                $destination = 'uploads/category/'.$category->image;
                if(File::exists($destination)){
                    File::delete($destination);
                }

                $file = $request->file('image');
                $filename = time().'.'.$file->getClientOriginalExtension();
                $file->move('uploads/category/', $filename);
                $category->image = $filename;
            }
            $category->meta_title = $request->meta_title;
            $category->meta_description = $request->meta_description;
            $category->meta_keyword = $request->meta_keyword;
            $category->update();
            return redirect()->route('admin.categories')->with('success', 'Category updated successfully!');
        }
        else{
            return redirect()->route('admin.categories')->with('error', 'Category not found!');
        }
    }

    // public function destroy($id){
    //     $category = Category::find($id);
    //     if($category){
    //         $destination = 'uploads/category/'.$category->image;
    //         if(File::exists($destination)){
    //             File::delete($destination);
    //         }

    //         $category->delete();
    //         return redirect()->route('admin.categories')->with('success', 'Category deleted successfully!');
    //     }
    //     else{
    //         return redirect()->route('admin.categories')->with('error', 'Category not found!');
    //     }
    // }

     // It deletes soft delete
     public function destory($id){
        $category = Category::find($id);
        if($category){
            $category->delete();
            return redirect()->back()->with('success','Categroy moved to Trash!');
        }
        else{
            return redirect()->back()->with('error','Categroy not Found!');
        }
    }
     
    // It Deletes permanently 
    public function delete($id){
        $category = Category::withTrashed()->where('id', $id)->first();
        if($category){
            $destination = 'uploads/category/'.$category->image;
            if(file::exists($destination)){
                file::delete($destination);
            }
            $category->forceDelete();
            return redirect()->back()->with('success','Categroy Deleted Successfully!');
        }
        else{
            return redirect()->back()->with('error','Categroy not Found!');
        }
    }

    // It restore the delete items
    public function restore($id){
        $category = Category::withTrashed()->where('id', $id)->first();
        if($category){
           $category->restore();
           return redirect()->back()->with('success','Categroy Restored Successfully!');
        }
        else{
            return redirect()->back()->with('error','Categroy not Found!');
        }
    }

    public function trash(){
        $trashed_categories = Category::onlyTrashed()->get();
        return view('admin.category.trash', compact('trashed_categories'));
    }
}
