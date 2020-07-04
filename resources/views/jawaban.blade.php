@extends('template.master')
@section('judul_halaman', 'Halaman Jawaban')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Starter Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
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
                    <h5 class="m-0">Featured</h5>
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
					@foreach ($pertanyaan as $tanya)
                    <a class="list-group-item list-group-item-action mb-3 list-group-item-warning">
						<div class="d-flex w-100 justify-content-between">
							<h5 class="mb-1">{{ $tanya->judul }}</h5>
							<small class="text-muted">3 days ago</small>
						</div>
						<p class="mb-1">{{ $tanya->isi }}</p>
						<small class="text-muted">jumlah jawaban</small>
					</a>
					@endforeach
					<h5>Daftar Jawaban:</h5>
					<div class="row">
						<div class="col-6">
							@foreach ($listJawaban as $jawab)
							<a class="list-group-item list-group-item-action mb-3 list-group-item-success">
								<div class="d-flex w-100 justify-content-between">
									<small class="text-muted">Nama yg jawab</small>
								</div>
								<p class="mb-1">{{ $jawab->isi }}</p>
								<small class="text-muted">{{$jawab->tanggal_diperbaharui}}</small>
							</a>
							@endforeach
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<h6>Berikan Jawaban:</h6>
							<form action="{{url('/jawaban/store')}}" method="POST">
								@csrf
								<div class="form-group">
								<input type="hidden" name="id" value="{{ $id }}">
									<textarea name="jawaban" class="form-control" placeholder="Berikan Jawaban..." rows="5" ></textarea>
								</div>
								<input type="submit" class='btn btn-primary' value="Berikan Jawaban">
							</form>
						</div>
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