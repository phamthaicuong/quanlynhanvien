<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function getDanhSach()
    {
    	$user = User::all();
    	return view('admin.user.danhsach',['user'=>$user]);
    }

    public function getThem()
	{
		return view('admin.user.them');
	}

	public function postThem(Request $request)
	{
		$this->validate($request,[
				'name' => 'required|min:3',
				'email' => 'required|email|unique:users,email', 
				'password' => 'required|min:3|max:32',
				'passwordAgain'=> 'required|same:password'
			],[
				'name.required' => 'Ban chua nhap ten nguoi dung',
				'name.min' => 'Ten nguoi dung phai co it nhat 3 ky tu',
				'email.required' => 'Ban chua nhap email',
				'email.email' => 'Ban chua nhap dung dinh dang email',
				'email.unique'=>'Email da ton tai',
				'password.required' => ' Ban chua nhap mat khau',
				'password.min' => 'Mat khau phai co it 3 ky tu',
				'password.max' => 'Mat khau chi duoc toi da 32 ky tu',
				'passwordAgain.required'=>'Ban chua nhap lai mat khau',
				'passwordAgain.same' => 'Mat khau nhap lai chua khop'
			]);

		$user = new User;
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		$user->quyen = $request->quyen;
		$user->save();

		return redirect('admin/user/them')->with('thongbao','Them thanh cong');
	}

	public function getSua($id)
	{
		$user = User::find($id);
		return view('admin.user.sua',['user'=>$user]);
	}

	public function postSua(Request $request,$id)
	{
		$this->validate($request,[
				'name' => 'required|min:3',
			],[
				'name.required' => 'Ban chua nhap ten nguoi dung',
				'name.min' => 'Ten nguoi dung phai co it nhat 3 ky tu'
			]);

		$user = User::find($id);
		$user->name = $request->name;
		$user->quyen = $request->quyen;


		if($request->changePassword == "on")
		{
			$this->validate($request,[
				'password' => 'required|min:3|max:32',
				'passwordAgain'=> 'required|same:password'
			],[
				'password.required' => ' Ban chua nhap mat khau',
				'password.min' => 'Mat khau phai co it 3 ky tu',
				'password.max' => 'Mat khau chi duoc toi da 32 ky tu',
				'passwordAgain.required'=>'Ban chua nhap lai mat khau',
				'passwordAgain.same' => 'Mat khau nhap lai chua khop'
			]);
			$user->password = bcrypt($request->password);
		}

		$user->save();
		return redirect('admin/user/sua/'.$id)->with('thongbao','Ban da sua thanh cong');
	}

	public function getDangNhapAdmin()
	{
		return view('admin.login');
	}

	public function postDangNhapAdmin(Request $request)
	{
		$this->validate($request,[
			'email'=>'required',
			'password'=>'required|min:3|max:32'
			],[
			'email.required'=>'Bạn chưa nhập Email',
			'password.required'=>'Bạn chưa nhập Password',
			'password.min'=>'Không đươc nhỏ hơn 3 ký tự',
			'password.max'=>'Không đươc nhỏ hơn 32 ký tự'
			]);
		if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
		{
			return redirect('admin/theloai/danhsach');
		}
		else
		{
			return redirect('admin/dangnhap')->with('thongbao','Dang nhap khong thanh cong');
		}
	}
}
