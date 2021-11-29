<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Producer;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        $producers = Producer::all();
        return view('admin.product.list', compact('products','categories','producers'));
    }

    public function create()
    {
        if (!Gate::allows('crud-product')) {
            abort(403);
        }
        $categories = Category::all();
        $producers = Producer::all();
        return view('admin.product.create', compact('categories', 'producers'));
    }

    public function store(StoreProductRequest $request)
    {
        if (!Gate::allows('crud-product')) {
            abort(403);
        }
        $product = new Product();
        $product->name = $request->name;
        $product->desc = $request->desc;
        $product->status = ProductStatus::Product_status1;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;
        $product->producer_id = $request->producer_id;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $product->image = $path;
        }
        $product->save();
        return redirect()->route('product.list');
    }

    public function delete($id)
    {
        if (!Gate::allows('crud-product')) {
            abort(403);
        }
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.list');
    }

    public function edit($id)
    {
        if (!Gate::allows('crud-product')) {
            abort(403);
        }
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $producers = Producer::all();
        return view('admin.product.edit', compact('product', 'categories', 'producers'));
    }

    public function update(Request $request)
    {
        if (!Gate::allows('crud-product')) {
            abort(403);
        }
        $product = Product::findOrFail($request->id);
        $product->name = $request->name;
        $product->desc = $request->desc;
        $product->quantity = $request->quantity;
        $product->status = $request->status;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->producer_id = $request->producer_id;
        $currentImage = $product->image;
        if ($request->hasFile('image')) {
            Storage::delete('/public/' . $currentImage);
            $path = $request->file('image')->store('images', 'public');
            $product->image = $path;
        } else {
            $product->image = $currentImage;
        }
        $product->save();
        return redirect()->route('product.list');
    }

    public function detail($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.detail', compact('product'));
    }

    public function search(Request $request)
    {
        $keyword = $request->product_search;
        $products = Product::where('name', 'LIKE', '%' . $keyword . '%')->get();
        return view('admin.product.list', compact('products'));
    }

    public function destroy(Request $request)
    {
        try {
            $productId = $request->productId;
            Product::destroy($productId);
            $data = [
                'status' => 'success',
                'message' => 'Xoá thành công!'
            ];
        } catch (\Exception $exception) {
            $data = [
                'status' => 'error',
                'message' => 'Lỗi hệ thống'
            ];
        }
        return response()->json($data);
    }
}
