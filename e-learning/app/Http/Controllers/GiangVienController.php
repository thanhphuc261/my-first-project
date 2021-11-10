<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GiangVien;

class GiangVienController extends Controller
{
    function layDanhSach(){
        $dsGiangVien = GiangVien::all();
        return view('danh-sach-giang-vien',compact('dsGiangVien'));
    }
    function formThemMoi(){
        return view('them-moi-giang-vien');
    }
    function themMoi(Request $req){
        $giangVien = new GiangVien;
        $giangVien -> ho_ten = $req->ho_ten;
        $giangVien -> ten_dang_nhap = $req->ten_dang_nhap;
        $giangVien -> mat_khau = $req->mat_khau;
        $giangVien -> email = $req->email;

        $giangVien ->save();
        return redirect()->route('ds-giang-vien');
       
    }
}
