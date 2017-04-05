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
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>SDT</th>
                                <th>Quyen</th>
                                <th>GioiTinh</th>
                                <th>QueQuan</th>
                                <th>TDHocVan</th>
                                <th>PhongBan</th>
                                <th>MucLuong</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $u)
                            <tr class="odd gradeX" align="center">
                                <td>{{$u->id}}</td>
                                <td>{{$u->name}}</td>
                                <td>{{$u->email}}</td>
                                <td>{{$u->SDT}}</td>
                                <td>{{$u->quyen}}</td>
                                    @if($u->quyen == 1)
                                    {{"Admin"}}
                                    @else
                                    {{"Thường"}}
                                    @endif

                                <td>{{$u->GioiTinh}}</td>
                                <td>{{$u->QueQuan}}</td>
                                <td>{{$u->TDHocVan}}</td>
                                <td>{{$u->PhongBan}}</td>
                                <td>{{$u->MucLuong}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/xoa/{{$u->id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/sua/{{$u->id}}"> Sửa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

        @endsection