<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>
    <!-- khai bao duong dan mac dinh -->
    <base href="{{asset('')}}" target="_blank, _self, _parent, _top">

    <!-- Bootstrap Core CSS -->
    <link href="admin_css/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="admin_css/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin_css/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin_css/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="admin_css/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="admin_css/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                    <!-- hien ra neu loi -->
                        @if(count($errors)>0)
                        <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                        <div>
                        @endif

                        @if(session('thongbao'))
                            <div class="alert alert-danger">
                            {{session('thongbao')}}
                            </div>
                        @endif

                        <form role="form" action="admin/dangnhap" method="POST">
                            <fieldset>
                                <input type="hidden" name="_token" value="{{csrf_token()}}" placeholder="">
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Đăng nhập</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="admin_css/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin_css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="admin_css/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="admin_css/dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <!-- <script src="admin_css/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script> -->
    <!-- <script src="admin_css/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script> -->

</body>

</html>
