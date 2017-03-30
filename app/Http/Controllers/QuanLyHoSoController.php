<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function getSua()
    {
    	return view('admin.quanlyhoso.sua');
    }
}
