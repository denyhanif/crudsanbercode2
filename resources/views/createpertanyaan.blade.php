@extends('template.master')
@section('judul_halaman', 'Buat Pertanyaan')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Buat Pertanyaan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/pertanyaan')}}">Pertanyaan</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0">Buat Pertanyaan</h5>
                </div>
                <div class="card-body">
                    <form action="{{url('/pertanyaan/store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="judul" class="form-control" placeholder="Judul Pertanyaan">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="isi" placeholder="Isi pertanyaan" rows="5"></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Kirim Pertanyaan">
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection