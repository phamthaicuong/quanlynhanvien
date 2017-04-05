@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->

            <div class="col-lg-7" style="padding-bottom:120px">
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                    {{$err}}</br>
                    @endforeach
                </div>
            @endif

            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
                <form action="admin/user/them" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Họ Tên</label>
                        <input class="form-control" name="name" placeholder="Nhap ten nguoi dung" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" name="email" placeholder="nguyenvana@gmail.com" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" name="password" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Nhập lại Password</label>
                        <input class="form-control" type="password" name="passwordAgain" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label>So Dien Thoai</label>
                        <input class="form-control" name="SDT" placeholder="0123456789" />
                    </div>

                    <div class="form-group">
                        <label>Quyền người dùng</label>
                        <label class="radio-inline">
                            <input name="quyen" value="1" checked="" type="radio">Admin
                        </label>
                        <label class="radio-inline">
                            <input name="quyen" value="0" type="radio">Thường
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Dan Toc</label>
                        <input class="form-control" name="DanToc" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Gioi Tinh</label>
                        <label class="radio-inline">
                            <input name="GioiTinh" value="Nam" checked="" type="radio">Nam
                        </label>
                        <label class="radio-inline">
                            <input name="GioiTinh" value="Nu" type="radio">Nu
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Que Quan</label>
                        <input class="form-control" name="QueQuan" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Phong Ban</label>
                        <input class="form-control" name="PhongBan" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Muc Luong</label>
                        <select class="form-control" name="MucLuong">
                            <option value="0"></option>
                            <option value="5tr->10tr">5tr->10tr</option>
                            <option value="11tr->15tr">11tr->15tr</option>
                            <option value="16tr->20tr">16tr->20tr</option>
                            <option value="21tr->25tr">21tr->25tr</option>
                            <option value="26tr->30tr">26tr->30tr</option>
                            <option value="31tr->35tr">31tr->35tr</option>
                            <option value="36tr->40tr">36tr->40tr</option>
                            <option value="Tren 40tr">Tren 40tr</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Trinh Do Hoc Van</label>
                        <input class="form-control" name="TDHocVan" placeholder="" />
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Làm Mới</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection