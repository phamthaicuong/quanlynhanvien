@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Nguoibaocao</th>
                                <th>Thoigianbaocao</th>
                                <th>Banbaocao</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($baocao as $bc)
                            <tr class="odd gradeX" align="center">
                                <td>{{$bc->Nguoibaocao}}</td>
                                <td>{{$bc->Thoigianbaocao}}</td>
                                <td>{{$bc->Nguoibaocao}}</td>
                                <td></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/baocao/xoa"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/quanlyhoso/sua/{{$bc->id}}">Edit</a></td>
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