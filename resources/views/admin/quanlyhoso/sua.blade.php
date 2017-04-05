@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sua Ho So
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Vui Long Dien Thong Tin</label>
                    </div>
                    <div class="form-group">
                        <label>Ho va Ten</label>
                        <input class="form-control" name="txtCateName" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Ngay sinh</label>
                        <div class="clearfix"></div>
                        <div class="col-xs-3">
                            <select class="form-control" name="birthday">
                                <option value="0">Ngay</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                        <div class="col-xs-3">
                            <select class="form-control" name="month">
                                <option value="0">Thang</option>
                                <option value="1">Thang 1</option>
                                <option value="2">Thang 2</option>
                                <option value="3">Thang 3</option>
                                <option value="4">Thang 4</option>
                                <option value="5">Thang 5</option>
                                <option value="6">Thang 6</option>
                                <option value="7">Thang 7</option>
                                <option value="8">Thang 8</option>
                                <option value="9">Thang 9</option>
                                <option value="10">Thang 10</option>
                                <option value="11">Thang 11</option>
                                <option value="12">Thang 12</option>
                            </select>
                        </div>
                        <div class="col-xs-3">
                            <select class="form-control" name="year">
                                <option value="0">Nam</option>
                                <option value="1">1970</option>
                                <option value="2">1971</option>
                                <option value="3">1972</option>
                                <option value="4">1973</option>
                                <option value="5">1974</option>
                                <option value="6">1975</option>
                                <option value="7">1976</option>
                                <option value="8">1977</option>
                                <option value="9">1978</option>
                                <option value="10">1979</option>
                                <option value="11">1980</option>
                                <option value="12">1981</option>
                                <option value="13">1982</option>
                                <option value="14">1983</option>
                                <option value="15">1984</option>
                                <option value="16">1985</option>
                                <option value="17">1986</option>
                                <option value="18">1987</option>
                                <option value="19">1988</option>
                                <option value="20">1989</option>
                                <option value="21">1990</option>
                                <option value="22">1991</option>
                                <option value="23">1992</option>
                                <option value="24">1993</option>
                                <option value="25">1994</option>
                                <option value="26">1995</option>
                                <option value="27">1996</option>
                                <option value="28">1997</option>
                                <option value="29">1998</option>
                                <option value="30">1999</option>
                                <option value="31">2000</option>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="form-group">
                        <label>Dan Toc</label>
                        <input class="form-control" name="txtCateName" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Gioi Tinh</label>
                        <label class="radio-inline">
                            <input name="rdoStatus" value="1" checked="" type="radio">Nam
                        </label>
                        <label class="radio-inline">
                            <input name="rdoStatus" value="2" type="radio">Nu
                        </label>
                    </div>
                    <div class="form-group">
                        <label>So Dien Thoai</label>
                        <input class="form-control" name="txtCateName" placeholder="0123456789" />
                    </div>
                    <div class="form-group">
                        <label>Que Quan</label>
                        <input class="form-control" name="txtCateName" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Cho O Hien Tai</label>
                        <input class="form-control" name="txtCateName" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>So CMND</label>
                        <input class="form-control" name="txtCateName" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Phong Ban</label>
                        <input class="form-control" name="txtCateName" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label>Muc Luong</label>
                        <select class="form-control">
                            <option value="0"></option>
                            <option value="">5tr->10tr</option>
                            <option value="">11tr->15tr</option>
                            <option value="">16tr->20tr</option>
                            <option value="">21tr->25tr</option>
                            <option value="">26tr->30tr</option>
                            <option value="">31tr->35tr</option>
                            <option value="">36tr->40tr</option>
                            <option value="">Tren 40tr</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Chinh Sua</button>
                    <button type="reset" class="btn btn-default">Thu Lai</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection