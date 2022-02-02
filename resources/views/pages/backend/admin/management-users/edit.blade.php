@extends('layouts.admin')

@section('title')
Edit User
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
                        <li class="breadcrumb-item"><a href="#">Edit User</a>
                        </li>

                    </ol>
                </div>
                <h4 class="page-title">Edit User</h4>
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
                    <form action="{{ route('management-users.update', $user->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{ $user->name }}" name="name" id="name"
                                    placeholder="Masukan Nama User" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{ $user->email }}" name="email"
                                    id="email" placeholder="Masukan Email" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{ $user->username }}" name="username"
                                    id="username" placeholder="Masukan username" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="no_hp" class="col-sm-2 col-form-label">No Hp</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{ $user->no_hp }}" name="no_hp"
                                    id="no_hp" placeholder="Masukan No Hp" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="no_hp" class="col-sm-2 col-form-label">Photo Profile</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" value="" name="foto" id="foto">
                                <img width="200" class="mt-2" src="{{ asset('backend/images/users/' . $user->foto) }}"
                                    alt="">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="no_hp" class="col-sm-2 col-form-label">Sebagai</label>
                            <div class="col-sm-10">
                                <select name="role" id="role" class="form-control" required>
                                    <option value="">- Pilih Role -</option>
                                    <option value="ADMIN" {{ $user->role=='ADMIN' ? 'selected' : '' }}>ADMIN</option>
                                    <option value="GURU" {{ $user->role=='GURU' ? 'selected' : '' }}>GURU</option>
                                    <option value="ORTU" {{ $user->role=='ORTU' ? 'selected' : '' }}>ORANG TUA</option>
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