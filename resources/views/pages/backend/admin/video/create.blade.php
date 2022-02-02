@extends('layouts.admin')

@section('title')
Tambah Video
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
                        <li class="breadcrumb-item"><a href="#">Tambah Video</a>
                        </li>

                    </ol>
                </div>
                <h4 class="page-title">Tambah Video</h4>
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
                    <a href="{{ route('video.index') }}" class="btn btn-primary mb-3"><i class="mdi mdi-backburger"></i>
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
                    <form action="{{ route('video.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label for="title" class="col-sm-2 col-form-label">Judul Video</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{ old('title') }}" name="title"
                                    id="title" placeholder="Masukan Judul Video" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea name="description" id="description" cols="30" rows="3"
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
                            <label for="no_hp" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <select name="category" id="category" class="form-control" required>
                                    <option value="">- Pilih Kategori -</option>
                                    <option value="Dongeng" {{ old('category')=='Dongeng' ? 'selected' : '' }}>Dongeng
                                    </option>
                                    <option value="Pendidikan Karakter" {{ old('category')=='Pendidikan Karakter'
                                        ? 'selected' : '' }}>Pendidikan Karakter</option>
                                    <option value="Cerita Pendek" {{ old('category')=='Cerita Pendek' ? 'selected' : ''
                                        }}>Cerita Pendek
                                    </option>
                                    <option value="Education" {{ old('category')=='Education' ? 'selected' : '' }}>
                                        Education
                                    </option>
                                    <option value="Kesehatan" {{ old('category')=='Kesehatan' ? 'selected' : '' }}>
                                        Kesehatan
                                    </option>
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