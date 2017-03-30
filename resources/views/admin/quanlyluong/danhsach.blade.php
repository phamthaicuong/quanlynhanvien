@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quan ly luong
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Nhanvien</th>
                                <th>Mucluong</th>
                                <th>Luongthuong</th>
                                <th>Thoigiannghi</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($quanlyluong as $qll)
                            <tr class="odd gradeX" align="center">
                                <td>{{$qll->Nhanvien}}</td>
                                <td>{{$qll->Mucluong}}</td>
                                <td>{{$qll->Luongthuong}}</td>
                                <td>{{$qll->Thoigiannghi}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/quanlyluong/xoa"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/quanlyluong/sua/{{$qll->id}}">Edit</a></td>
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