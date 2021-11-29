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
                            <div class="bg-gradient-primary  border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Tài khoản</h6>
                            </div>
                        </div>
                        <table class="table">

                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Điện chỉ</th>
                                <th>Tùy chọn</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key => $user)
                                <tr id="product-item-{{$user->id}}">
                                    <td> {{ ++$key }}</td>
                                    <td> {{ $user->name }}</td>
                                    <td>{{$user->email}}</td>
                                    <td> {{ $user->phone }}</td>
                                    <td> {{$user->address}}</td>
                                    <td>
                                        <a href="{{ route('user.delete',$user->id) }}" onclick="confirm('Bạn có chắc chắn muốn xóa không?')" class="btn btn-danger">Xóa</a>
                                        <a href="{{ route('user.edit',$user->id) }}" class="btn btn-behance" >Chỉnh sửa</a>
                                        <a href="{{ route('user.detail',$user->id) }}" class="btn btn-success">Chi tiết</a>
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
