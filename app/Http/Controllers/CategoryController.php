<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.list',compact('categories'));
    }
    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
       $category = new Category();
       $category->name = $request->name;
       $category->save();
       return redirect()->route('category.list');
    }

    public function edit($id)
    {
       $category = Category::findOrFail($id);
       return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request)
    {
         $category = Category::findOrFail($request->id);
         $category->name = $request->name;
         $category->save();
         return redirect()->route('product.list');
    }
    public function delete($id){
        if (!Gate::allows('crud-product')) {
            abort(403);
        }
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('product.list');
    }
}
