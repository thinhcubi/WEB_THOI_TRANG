<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Producer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProducerController extends Controller
{
    public function index()
    {
        $producers = Producer::all();
        return view('admin.producer.list',compact('producers'));
    }
    public function create()
    {
        return view('admin.producer.create');
    }

    public function store(Request $request)
    {
        $producer = new Producer();
        $producer->name = $request->name;
        $producer->save();
        return redirect()->route('product.list');
    }

    public function edit($id)
    {
        $producer = Producer::findOrFail($id);
        return view('admin.producer.edit',compact('producer'));
    }

    public function update(Request $request)
    {
        $producer = Producer::findOrFail($request->id);
        $producer->name = $request->name;
        $producer->save();
        return redirect()->route('product.list');
    }
    public function delete($id){
        if (!Gate::allows('crud-product')) {
            abort(403);
        }
        $producer = Producer::findOrFail($id);
        $producer->delete();
        return redirect()->route('product.list');
    }
}
