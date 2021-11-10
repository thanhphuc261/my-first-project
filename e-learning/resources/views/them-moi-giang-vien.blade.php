@extends('layouts.app')

@section('tilte')
- Giảng Viên | Thêm mới
@endsection

@section('main_content')
<h1>Thêm mới giảng viên</h1>
<a href="{{route('ds-giang-vien')}}">Quay lại</a>
<form method="POST" action="{{route('xl-them-moi-giang-vien')}}">
    @csrf
    <table>
        <tr>
            <th>Họ tên</th>
            <td><input type="text" name = "ho_ten"/></td>
        </tr>
        <tr>
            <th>Tên đăng nhập</th>
            <td><input type="text" name = "ten_dang_nhap"/></td>
        </tr>
        <tr>
            <th>Mật khẩu</th>
            <td><input type="text" name = "mat_khau"/></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="text" name = "email"/></td>
        </tr>
        <tr>
            
            <td><button type = "submit">Lưu</button></td>
        </tr>
    </table>
</form>
@endsection
