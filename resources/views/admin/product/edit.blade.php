@extends('admin.master')
@section('content')

    <body class="g-sidenav-show  bg-gray-200">

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('admin.layouts.navbar')
        <h2>Chỉnh sửa sản phẩm</h2>
        <form method="post" action="{{ route('product.update') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-row" style="border-color: #1A73E8">
                <div class="form-group col-md-6">
                    <input type="hidden" value="{{ $product->id }}" name="id">
                    <label>Tên sản phẩm</label>
                    <input type="text" value="{{ $product->name }}" class="form-control" name="name" >
                </div>
            </div>
            <div class="form-row">
                <label>Ảnh</label>
                <input type="file" class="form-control" name="image">
                <img src="{{ asset('storage/'.$product->image) }}" width="50px" height="50px">
            </div>
            <div class="form-row">
                <label>Mô tả</label>
                <input type="text" value="{{ $product->desc }}" class="form-control" name="desc">
            </div>
            <div class="form-row">
                <label>Số lượng</label>
                <input type="text" value="{{ $product->quantity }}" class="form-control" name="quantity">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">Thể loại</label>
                    <select id="inputState" class="form-control" name="category_id">
                        @foreach($categories as $key => $category)
                            @if($product->category_id == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">Trạng thái</label>
                    <select id="inputState" class="form-control" name="status">
                        @if($product->status==1)
                        <option value="{{ $product->status }}" selected>Còn hàng</option>
                            <option value="0">Hết hàng </option>
                        @else
                        <option value="{{ $product->status }}" selected>Hết hàng</option>
                            <option value="1">Còn hàng</option>
                            @endif
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">Nhà sản xuất</label>
                    <select id="inputState" class="form-control" name="producer_id">
                        @foreach($producers as $key => $producer)
                            @if($product->producer_id == $producer->id)
                            <option value="{{ $producer->id }}" selected>{{ $producer->name }}</option>
                            @else
                                <option value="{{ $producer->id }}">{{ $producer->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Giá</label>
                    <input type="text" value="{{ $product->price }}" class="form-control" name="price">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>

    </main>
@endsection
