@extends('admin.master')
@section('content')

    <body class="g-sidenav-show  bg-gray-200">

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
    @include('admin.layouts.navbar')
        <h2>Thêm mới sản phẩm</h2>
        <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-row" style="border-color: #1A73E8">
                <div class="form-group col-md-6">
                    <label>Tên sản phẩm</label>
                    <input type="text" class="form-control" value="{{ old('name')  }}" name="name" >
                    @error('name')
                    <p class="text-danger"> {{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <label>Ảnh</label>
                <input type="file" class="form-control" name="image">
                @error('image')
                <p class="text-danger"> {{$message}}</p>
                @enderror
            </div>
            <div class="form-row">
                <label>Mô tả</label>
                <input type="text" class="form-control" name="desc">
                @error('image')
                <p class="text-danger"> {{$message}}</p>
                @enderror
            </div>
            <div class="form-row">
                <label>Số lượng</label>
                <input type="text" class="form-control" name="quantity">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">Thể loại</label>
                    <select id="inputState" class="form-control" name="category_id">
                        @foreach($categories as $key => $category)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">Nhà sản xuất</label>
                    <select id="inputState" class="form-control" name="producer_id">
                        @foreach($producers as $key => $producer)
                        <option value="{{ $producer->id }}" selected>{{ $producer->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Giá</label>
                    <input type="text" class="form-control" name="price">
                    @error('image')
                    <p class="text-danger"> {{$message}}</p>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>

    </main>
@endsection
