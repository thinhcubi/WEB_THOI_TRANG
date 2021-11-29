@extends('admin.master')
@section('content')

    <body class="g-sidenav-show  bg-gray-200">

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('admin.layouts.navbar')
        <h2>Thêm mới nhà sản xuất</h2>
        <form method="post" action="{{ route('producer.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-row" style="border-color: #1A73E8">
                <div class="form-group col-md-6">
                    <label>Tên nhà sản xuất</label>
                    <input type="text" class="form-control" value="{{ old('name')  }}" name="name" >
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>

    </main>
@endsection
