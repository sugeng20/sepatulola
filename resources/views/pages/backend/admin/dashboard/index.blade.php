@extends('layouts.admin')

@section('title')
Dashboard
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
                        <li class="breadcrumb-item"><a href="#">Dashboard</a>
                        </li>

                    </ol>
                </div>
                <h4 class="page-title">Dashboard Admin</h4>
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
    <!-- end page title end breadcrumb -->

    <div class="row">
        <div class="col-md-3">
            <a href="{{ route('management-users.index') }}">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 fw-semibold">Users</p>
                                <h4 class="font-22 fw-bold">{{ $users }}</h4>
                            </div>
                            <div class="col-auto align-self-center">
                                <div
                                    class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-users">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
            </a>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-md-3">
            <a href="{{ route('anak.index') }}">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 fw-semibold">Dipakai Anak</p>
                                <h4 class="font-22 fw-bold">{{ $anak }}</h4>

                            </div>
                            <div class="col-auto align-self-center">
                                <div
                                    class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-folder icon-dual">
                                        <path
                                            d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
            </a>
            <!--end card-->
        </div>
        <!--end col-->

        <div class="col-md-3">
            <a href="{{ route('orang-tua.index') }}">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 fw-semibold">Dipakai Orang Tua</p>
                                <h4 class="font-22 fw-bold">{{ $orangTua }}</h4>
                            </div>
                            <div class="col-auto align-self-center">
                                <div
                                    class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-folder icon-dual">
                                        <path
                                            d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
            </a>
            <!--end card-->
        </div>
        <!--end col-->

        <div class="col-md-3">
            <a href="{{ route('guru.index') }}">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 fw-semibold">Dipakai Guru</p>
                                <h4 class="font-22 fw-bold">{{ $guru }}</h4>
                            </div>
                            <div class="col-auto align-self-center">
                                <div
                                    class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-folder icon-dual">
                                        <path
                                            d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
            </a>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->


</div><!-- container -->
@endsection