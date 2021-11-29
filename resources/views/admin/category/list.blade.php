@extends('admin.master')
@section('content')

    <body class="g-sidenav-show  bg-gray-200">

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
    @include('admin.layouts.navbar')

    <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-danger shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Thể loại</h6>
                            </div>
                            @can('crud-product')
                                <div>
                                    <a href="{{route('category.create')}}" class="btn btn-dark" style="float: left">Thêm mới</a>
                                </div>
                                <div style="float: right;margin-top: 10px">
                                    <button class="btn btn-danger delete-product">Xóa nhiều</button>
                                </div>
                            @endcan
                        </div>
                        <table class="table">

                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tên</th>
                                <th>Tùy chọn</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $key => $category)
                                <tr id="product-item-{{$category->id}}">
                                    <td> {{ ++$key }}</td>
                                    <td> {{ $category->name }}</td>
                                    <td>
                                        <a href="{{ route('category.delete',$category->id) }}" onclick="confirm('Bạn có chắc chắn muốn xóa không?')" class="btn btn-danger">Xóa</a>
                                        <a href="{{ route('category.edit',$category->id) }}" class="btn btn-behance" >Chỉnh sửa</a>
                                    </td>
                                    <td><input type="checkbox" class="product-checked" value="{{$category->id}}"></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>

        </div>
    </main>

    @endsection
