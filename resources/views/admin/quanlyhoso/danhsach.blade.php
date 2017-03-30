@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quan ly ho so
                            <small>Danh sach</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Ten</th>
                                <th>TenKhongDau</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($quanlyhoso as $qlhs)
                            <tr class="odd gradeX" align="center">
                                <td>{{$qlhs->id}}</td>
                                <td>{{$qlhs->Ten}}</td>
                                <td>{{$qlhs->TenKhongDau}}</td>
                                <td></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/quanlyhoso/xoa"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/quanlyhoso/sua/{{$qlhs->id}}">Edit</a></td>
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