@extends('admin.layout.index')
@section('content')
	<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(session('thong bao'))
                            <div class="alert alert-success">
                                {{session('thong bao')}}
                            </div>
                        @endif
                        <form action="admin/loaitin/them" method="POST">
                            {{csrf_field()}}
                            @php
                                $stt=1;
                            @endphp
                            <div class="form-group">
                                <label>Category Parent</label>
                                <select class="form-control" name='idTheLoai_'>
                                    <option value="0">Please Choose Category</option>                                    
                                    @foreach( $theloai as $tl)
                                        <option value="{{$stt}}">{{$tl->Ten}}</option>
                                        @php
                                            $stt++;
                                        @endphp
                                    @endforeach
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Name:</label>
                                <input class="form-control" name="Ten" placeholder="Please Enter Category Name" />
                            </div>
                            
                            <button type="submit" class="btn btn-default">Category Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection