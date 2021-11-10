@extends('layouts.app')

@section('main_content')
<h1>Danh sách giảng viên</h1>
<a href="{{route('them-moi-giang-vien')}}">Thêm mới</a>
<table border = "1">
    <tr>
        <th>ID</th>
        <th>Họ tên</th>
        <th>Tên đăng nhập</th>
        <th>Email</th>
        <th>Ngày tạo</th>
    </tr>
    @forelse($dsGiangVien as $giangVien)
    <tr>
        <th>{{$giangVien->id}}</th>
        <th>{{$giangVien->ho_ten}}</th>
        <th>{{$giangVien->ten_dang_nhap}}</th>
        <th>{{$giangVien->email}}</th>
        <th>{{$giangVien->craete_at}}</th>
    </tr>
    @empty
    <tr>
        <td colspan = "5">Không có dữ liệu</td>
    </tr>
    
    @endforelse
</table>
@endsection

@section('tilte')
- Giảng Viên 
@endsection