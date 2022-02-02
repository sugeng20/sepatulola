@extends('layouts.admin')

@section('title')
Ganti Password
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
                        <li class="breadcrumb-item"><a href="#">Ganti Password</a>
                        </li>

                    </ol>
                </div>
                <h4 class="page-title">Ganti Password</h4>
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
                    <a href="{{ route('management-users.index') }}" class="btn btn-primary mb-3"><i
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
                    <form action="{{ route('management-users.ganti-password', $user->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf


                        <div class="mb-3 row">
                            <label for="password" class="col-sm-2 col-form-label">Password Baru</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" value="" name="password" id="password"
                                    placeholder="Masukan password" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="password" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" value="" name="konfirmasi_password"
                                    id="konfirmasi_password" placeholder="Masukan Konfirmasi password" required>
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

@push('add-plugins-css')
<link href="{{ asset('backend/plugins/datatables/datatable.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('add-plugins-js')
<script src="{{ asset('backend/plugins/datatables/simple-datatables.js') }}"></script>
@endpush

@push('add-js')
<script>
    const dataTable = new simpleDatatables.DataTable("#table-datatables", {
        searchable: true,
        fixedHeight: false,
    })
</script>
@endpush