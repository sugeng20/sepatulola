@extends('layouts.admin')

@section('title')
Tambah Kontent
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
                        <li class="breadcrumb-item"><a href="#">Tambah Kontent</a>
                        </li>

                    </ol>
                </div>
                <h4 class="page-title">Tambah Kontent</h4>
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
                    <a href="{{ route($route_.'.index') }}" class="btn btn-primary mb-3"><i
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
                    <form action="{{ route($route_.'.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="role" value="{{ $role_ }}">
                        <div class="mb-3 row">
                            <label for="category_id" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <select name="category_id" id="category_id" class="form-control" required>
                                    <option value="">- Pilih Kategori -</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" data-type="{{ $category->type }}">{{
                                        $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="title" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" id="title" placeholder="Masukan Judul Content"
                                    class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="cover" class="col-sm-2 col-form-label">Cover Konten</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="cover" id="cover"
                                    placeholder="Masukan Cover Ebook" required>
                            </div>
                        </div>

                        <div id="pdf" style="display: none;">
                            <div class="mb-3 row">
                                <label for="file" class="col-sm-2 col-form-label">File</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="file" id="file">
                                </div>
                            </div>
                        </div>

                        <div id="linkTerkait" style="display: none;">
                            <div class="mb-3 row link">
                                <label for="link" class="col-sm-2 col-form-label">Link</label>
                                <div class="col-sm-10">
                                    <input type="text" name="link" id="link" placeholder="Masukan Link Content"
                                        class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea name="description" id="description" cols="30" rows="3"
                                    class="form-control ckeditor" required></textarea>
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

@push('add-js')
<script src="{{ url('backend/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('backend/js/jquery-3.5.1.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#category_id').change(function() {
            let type = $('#category_id option:selected').data('type');
            if(type == 'TEKS') {
                $('#pdf').attr('style', 'display: none;');
                $('#linkTerkait').attr('style', 'display: none;');
                $('#file').prop('required', false);
                $('#link').prop('required', false);
            } else if(type == 'PDF') {
                $('#file').prop('required', true);
                $('#link').prop('required', false);
                $('#pdf').attr('style', 'display: block;');
                $('#linkTerkait').attr('style', 'display: none;');
            } else if(type == 'LINK TERKAIT' || type == 'VIDEO') {
                $('#file').prop('required', false);
                $('#link').prop('required', true);
                $('#pdf').attr('style', 'display: none;');
                $('#linkTerkait').attr('style', 'display: block;');
            }
        })
    })
</script>
@endpush