@extends('admin.master')
@section('content')

    <body class="g-sidenav-show  bg-gray-200">

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('admin.layouts.navbar')
        <h2>Chỉnh sửa thông tin người dùng</h2>
        <form method="post" action="{{ route('user.update') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-row" style="border-color: #1A73E8">
                <div class="form-group col-md-6">
                    <input type="hidden" value="{{ $user->id }}" name="id">
                    <label>Tên</label>
                    <input type="text" value="{{ $user->name }}" class="form-control" name="name" >
                </div>
            </div>
            <div class="form-row">
                <label>Ảnh</label>
                <input type="file" class="form-control" name="image">
                <img src="{{ asset('storage/'.$user->image) }}" width="50px" height="50px">
            </div>
            <div class="form-row">
                <label>Email</label>
                <input type="email" disabled value="{{ $user->email }}" class="form-control" name="email">
            </div>
            <div class="form-row">
                <label>Mật khẩu</label>
                <input type="password" disabled value="12331121" class="form-control" name="password">
            </div>
            <div class="form-row">
                <label>Số điện thoại</label>
                <input type="text" value="{{$user->phone}}" class="form-control" name="phone">
            </div>
            <div class="form-row">
                <label>Địa chỉ</label>
                <input type="text" value="{{$user->address}}" class="form-control" name="address">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                        <label class="form-check-label" for="inlineCheckbox3">3</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>

    </main>
@endsection
