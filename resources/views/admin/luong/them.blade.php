@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Luong
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
                <form action="admin/luong/them" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Phu Cap</label>
                        <input class="form-control" name="PhuCap" placeholder="Nhap luong phu cap" />
                    </div>

                    <div class="form-group">
                        <label>Muc Luong</label>
                        <select class="form-control" name="BacLuong">
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