@extends('admin.master')
@section('content')

    <body class="g-sidenav-show  bg-gray-200">

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('admin.layouts.navbar')
        <h2>Thêm mới sản phẩm</h2>
        <form method="post" action="{{ route('category.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-row" style="border-color: #1A73E8">
                <div class="form-group col-md-6">
                    <label>Tên sản phẩm</label>
                    <input type="text" class="form-control" value="{{ old('name')  }}" name="name" >
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>

    </main>
@endsection

