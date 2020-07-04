@extends('template.master')
@section('judul_halaman', 'Halaman Pertanyaan')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Halaman Pertanyaan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active">Pertanyaan</li>
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
                    <h5 class="m-0">Daftar Pertanyaan</h5>
                </div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success alert-dismissible fade show mt-3 mb-3" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <a href="{{ url('/pertanyaan/create') }}" class="btn btn-primary mb-3">Buat
                        Pertanyaan</a>
                    <div class="list-group">
                        @foreach($pertanyaan as $tanya)
                            <a href="{{ url('/jawaban/'). "/" . $tanya->id }}"
                                class="list-group-item list-group-item-action mb-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">{{ $tanya->judul }}</h5>
                                    <small class="text-muted">3 days ago</small>
                                </div>
                                <p class="mb-1">{{ $tanya->isi }}</p>
                                <small class="text-muted">jumlah jawaban</small>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection