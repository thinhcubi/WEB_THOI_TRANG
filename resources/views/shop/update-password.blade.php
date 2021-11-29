@extends('shop.master')
@section('content')
<div class="text-center">
    <form id="updatePassword" method="post" action="{{route('password.update')}}">
        @csrf
    <h2>Đổi mật khẩu</h2>
<div>
    <label>Mật khẩu cũ</label>
    <input type="text" name="oldPassword">
</div>
    <div>
    <label>Mật khẩu mới</label>
    <input type="password" id="password" name="password">
</div>
    <div>
    <label>Nhập lại mật khẩu mới</label>
    <input type="password" id="confirmPassword">
        <p id="error" class="text-danger"  >Mật khẩu nhập lại không chính xác</p>
</div>
<div>
    <button type="submit">Cập nhật</button>
</div>
        @if(session('errorPassword'))
            <p class="text-danger">{{ session()->get('errorPassword') }}</p>
        @endif
 @if(session('true'))
            <p class="text-danger">{{ session()->get('true') }}</p>
        @endif

    </form>
</div>
@endsection
