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
                        <div class="bg-gradient-secondary  border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Sản phẩm</h6>
                        </div>
                        @can('crud-product')
                        <div>
                        <a href="{{route('product.create')}}" class="btn btn-dark" style="float: left">Thêm mới</a>
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
                                    <th>Trạng thái</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                    <th>Thể loại</th>
                                    <th>Tùy chọn</th>
                                    <th><input type="checkbox"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $key => $product)
                                <tr id="product-item-{{$product->id}}">
                                    <td> {{ ++$key }}</td>
                                    <td> {{ $product->name }}</td>
                                    @if($product->status == 1)
                                    <td>Còn hàng</td>
                                    @else
                                        <td>Hết hàng</td>
                                    @endif
                                    <td>{{$product->quantity}}</td>
                                    <td> {{ number_format($product->price) }}</td>
                                    <td> {{$product->categories->name}}</td>
                                    <td>
                                        <a href="{{ route('product.delete',$product->id) }}" onclick="confirm('Bạn có chắc chắn muốn xóa không?')" class="btn btn-danger">Xóa</a>
                                        <a href="{{ route('product.edit',$product->id) }}" class="btn btn-behance" >Chỉnh sửa</a>
                                        <a href="{{ route('product.detail',$product->id) }}" class="btn btn-success">Chi tiết</a>
                                    </td>
                                    <td><input type="checkbox" class="product-checked" value="{{$product->id}}"></td>
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
