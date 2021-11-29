
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
                            <div class="bg-gradient-light shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Nhà sản xuất</h6>
                            </div>
                            @can('crud-product')
                                <div>
                                    <a href="{{route('producer.create')}}" class="btn btn-dark" style="float: left">Thêm mới</a>
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
                            @foreach($producers as $key => $producer)
                                <tr id="product-item-{{$producer->id}}">
                                    <td> {{ ++$key }}</td>
                                    <td> {{ $producer->name }}</td>
                                    <td>
                                        <a href="{{ route('producer.delete',$producer->id) }}" onclick="confirm('Bạn có chắc chắn muốn xóa không?')" class="btn btn-danger">Xóa</a>
                                        <a href="{{ route('producer.edit',$producer->id) }}" class="btn btn-behance" >Chỉnh sửa</a>
                                    </td>
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
