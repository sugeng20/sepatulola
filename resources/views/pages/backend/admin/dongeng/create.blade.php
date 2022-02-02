@extends('layouts.admin')

@section('title')
Tambah Dongeng
@endsection

@section('content')
<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Sepatulola</a>
                        </li>
                        <!--end nav-item-->
                        <li class="breadcrumb-item"><a href="#">Tambah Dongeng</a>
                        </li>

                    </ol>
                </div>
                <h4 class="page-title">Tambah Dongeng</h4>
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
    <!-- end page title end breadcrumb -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('dongeng.index') }}" class="btn btn-primary mb-3"><i
                            class="mdi mdi-backburger"></i>
                        Kembali
                    </a>
                    @if ($errors->any())
                    <div class="row my-3">
                        <div class="col-sm-12">
                            <div class="alert alert-danger dark" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endif
                    <form action="{{ route('dongeng.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label for="judul" class="col-sm-2 col-form-label">Judul Dongeng</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{ old('judul') }}" name="judul"
                                    id="judul" placeholder="Masukan Judul Dongeng" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="deksripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea name="deskripsi" id="deskripsi" cols="30" rows="3"
                                    class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="link_youtube" class="col-sm-2 col-form-label">Link Youtube</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{ old('link_youtube') }}"
                                    name="link_youtube" id="link_youtube" placeholder="Masukan Link Youtube" required>
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <div class="col-sm-2 col-form-label">
                                <button type="submit" class="btn btn-success"><i class="mdi mdi-database-plus"></i>
                                    Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <!--end row-->


</div><!-- container -->
@endsection