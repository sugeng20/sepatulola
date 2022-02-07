@extends('layouts.admin')

@section('title')
Tambah Kategori
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
                        <li class="breadcrumb-item"><a href="#">Tambah Kategori</a>
                        </li>

                    </ol>
                </div>
                <h4 class="page-title">Tambah Kategori</h4>
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
                    <a href="{{ route('category.index') }}" class="btn btn-primary mb-3"><i
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
                    <form action="{{ route('category.update', $item->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="mb-3 row">
                            <label for="role" class="col-sm-2 col-form-label">Dipakai Untuk</label>
                            <div class="col-sm-10">
                                <select name="role" id="role" class="form-control" required>
                                    <option value="{{ $item->role }}">{{ $item->role }}</option>
                                    <option value="ANAK">ANAK</option>
                                    <option value="ORANG TUA">ORANG TUA</option>
                                    <option value="GURU">GURU</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label">Nama Kategori</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Masukan Nama Kategori" value="{{ $item->name }}" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="type" class="col-sm-2 col-form-label">Type</label>
                            <div class="col-sm-10">
                                <select name="type" id="type" class="form-control" required>
                                    <option value="{{ $item->type }}">{{ $item->type }}</option>
                                    <option value="PDF">PDF</option>
                                    <option value="TEKS">TEKS</option>
                                    <option value="VIDEO">VIDEO</option>
                                    <option value="LINK TERKAIT">LINK TERKAIT</option>
                                </select>
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