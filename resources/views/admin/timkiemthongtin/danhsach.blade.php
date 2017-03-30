@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tim kiem Thong tin
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>HovaTen</th>
                                <th>NgaySinh</th>
                                <th>QueQuan</th>
                                <th>Mucluong</th>
                                <th>SDT</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($timkiemthongtin as $tktt)
                            <tr class="odd gradeX" align="center">
                                <td>{{$tktt->HovaTen}}</td>
                                <td>{{$tktt->NgaySinh}}</td>
                                <td>{{$tktt->QueQuan}}</td>
                                <td>{{$tktt->Mucluong}}</td>
                                <td>{{$tktt->SDT}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/timkiemthongtin/xoa"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/timkiemthongtin/sua/{{$tktt->id}}">Edit</a></td>
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