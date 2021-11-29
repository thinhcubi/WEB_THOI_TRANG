@extends('shop.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{route('user.update')}}" enctype="multipart/form-data">
                @csrf
            <div class="col-md-6" >
                <img src="{{ asset('/storage/'.$users[0]->image) }}" alt="" width="300px" height="5px" style="margin-left: 200px">
                <div style="margin-left: 200px">
                <input type="file" name="image">
                </div>
            </div>
                <div class="col-md-6">
                    <input name="id" value="{{$users[0]->id}}" hidden>
                    <div>
                        <label>Tên</label>
                        <input type="text" value="{{$users[0]->name}}" name="name">
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" value="{{$users[0]->email}}" disabled>
                    </div>
                    <div>
                        <label>Số điện thoại</label>
                        <input type="text" value="{{$users[0]->phone}}" name="phone">
                    </div>
                    <div>
                        <label>Địa chỉ</label>
                        <input type="text" value="{{$users[0]->address}}" name="address">
                    </div>
                        <button type="submit">Cập nhật</button>
                    <button><a href="{{route('password.formUpdate')}}">Đổi mật khẩu</a></button>
            </div>
        </form>
        </div>

        </div>

@endsection
