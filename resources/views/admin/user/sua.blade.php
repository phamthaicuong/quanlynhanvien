@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>{{$user->name}}</small>
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
                <form action="" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Họ Tên</label>
                        <input class="form-control" name="name" placeholder="Nhap ten nguoi dung" value="{{$user->name}}" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" name="email" placeholder="nguyenvana@gmail.com" value="{{$user->email}}"  readonly="" />
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="changePassword" name="changePassword">
                        <label>Doi mat khau</label>
                        <input class="form-control password" type="password" name="password" placeholder="" disabled=""  />
                    </div>
                    <div class="form-group">
                        <label>Nhập lại mat khau</label>
                        <input class="form-control password" type="password" name="passwordAgain" placeholder="" disabled="" />
                    </div>
                    <div class="form-group">
                        <label>Quyền người dùng</label>
                        <label class="radio-inline">
                            <input name="quyen" value="1"
                             type="radio"
                                @if($user->quyen == 0)
                                {{"checked"}}
                                @endif
                                />Admin
                        </label>
                        <label class="radio-inline">
                            <input name="quyen" value="0" type="radio"
                                @if($user->quyen == 0)
                                {{"checked"}}
                                @endif
                                />Thường
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Dan Toc</label>
                        <input class="form-control" name="DanToc" placeholder="" value="{{$user->DanToc}}" />
                    </div>
                    <div class="form-group">
                        <label>Gioi Tinh</label>
                        <label class="radio-inline">
                            <input name="GioiTinh" value="1" type="radio"
                                @if($user->quyen == 1)
                                {{"checked"}}
                                @endif
                                />Nam
                        </label>
                        <label class="radio-inline">
                            <input name="GioiTinh" value="0" type="radio"
                                @if($user->quyen == 0)
                                {{"checked"}}
                                @endif
                            />Nu
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Que Quan</label>
                        <input class="form-control" name="QueQuan" placeholder="" value="{{$user->QueQuan}}"/>
                    </div>
                    <div class="form-group">
                        <label>Phong Ban</label>
                        <input class="form-control" name="PhongBan" placeholder="" value="{{$user->PhongBan}}"/>
                    </div>
                    <div class="form-group">
                        <label>Muc Luong</label>
                        <select class="form-control" name="MucLuong" value="{{$user->MucLuong}}" >
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
                        <input class="form-control" name="TDHocVan" placeholder="" value="{{$user->TDHocVan}}" />
                    </div>

                    <button type="submit" class="btn btn-default">Sua</button>
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
<!-- kiem tra xem checkbox chua -->
@section('script')
    <script>
        $(document).ready(function(){
            $("#changePassword").change(function(){
                if($(this).is(":checked"))
                {
                    $(".password").removeAttr('disabled');
                }
                else
                {
                    $(".password").attr('disabled','');
                }
            });
        });
    </script>
@endsection