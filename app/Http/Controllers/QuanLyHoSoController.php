<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\QuanLyHoSo;

class QuanLyHoSoController extends Controller
{
    public function getDanhSach()
    {
        $quanlyhoso = QuanLyHoSo::all();
    	return view('admin.quanlyhoso.danhsach',['quanlyhoso'=>$quanlyhoso]);
    }

    public function getThem()
    {
    	return view('admin.quanlyhoso.them');
    }

    public function postThem(Request $request)
    {
        $this->validate($request,[
                'HoTen' => 'required|min:3',
                'DiaChi' => 'required',
                'SDT' => 'required',
                'QueQuan' => 'required',
                'PhongBan' => 'required',
                'TDHocVan' => 'required'
            ],[
                'HoTen.required' => 'Ban chua nhap ho ten',
                'HoTen.min' => 'Ten nguoi dung phai co it nhat 3 ky tu',
                'DiaChi.required' => 'Ban chua nhap dia chi',
                'SDT.required' => 'Ban chua nhap SDT',
                'QueQuan.required' => 'Ban chua dien que quan',
                'PhongBan.required' => 'Ban chua nhap phong ban',
                'TDHocVan.required' => ' Ban chua nhap TD Hoc Van'
            ]);

        $quanlyhoso = new QuanLyHoSo;
        $quanlyhoso->HoTen = $request->HoTen;
        $quanlyhoso->GioiTinh = $request->GioiTinh;
        $quanlyhoso->NgaySinh = $request->NgaySinh;
        $quanlyhoso->DanToc = $request->DanToc;
        $quanlyhoso->DiaChi = $request->DiaChi;
        $quanlyhoso->SDT = $request->SDT;
        $quanlyhoso->QueQuan = $request->QueQuan;
        $quanlyhoso->MucLuong = $request->MucLuong;
        $quanlyhoso->PhongBan = $request->PhongBan;
        $quanlyhoso->TDHocVan = $request->TDHocVan;
        $quanlyhoso->save();

        return redirect('admin/quanlyhoso/them')->with('thongbao','Them thanh cong');
    }

    public function getSua()
    {
    	return view('admin.quanlyhoso.sua');
    }
}
