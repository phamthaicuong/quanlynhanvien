<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuanLyHoSoController extends Controller
{
    public function getDanhSach()
    {
    	return view('admin.quanlyhoso.danhsach');
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
