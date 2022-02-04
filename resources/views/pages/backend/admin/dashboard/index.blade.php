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
                                <p class="mb-0 text-truncate text-muted"><span class="text-success"><i
                                            class="mdi mdi-checkbox-marked-circle-outline me-1"></i></span>{{ $users }}
                                    Total Users
                                </p>
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
            <a href="{{ route('video.index') }}">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 fw-semibold">Videos</p>
                                <h4 class="font-22 fw-bold">{{ $videos }}</h4>
                                <p class="mb-0 text-truncate text-muted"><span class="text-success"><i
                                            class="mdi mdi-checkbox-marked-circle-outline me-1"></i></span>{{ $videos }}
                                    Total Videos
                                </p>
                            </div>
                            <div class="col-auto align-self-center">
                                <div
                                    class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-video">
                                        <polygon points="23 7 16 12 23 17 23 7"></polygon>
                                        <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
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
            <a href="{{ route('ebook.index') }}">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 fw-semibold">Ebooks</p>
                                <h4 class="font-22 fw-bold">{{ $ebooks }}</h4>
                                <p class="mb-0 text-truncate text-muted"><span class="text-success"><i
                                            class="mdi mdi-checkbox-marked-circle-outline me-1"></i></span>{{ $ebooks }}
                                    Total Ebooks
                                </p>
                            </div>
                            <div class="col-auto align-self-center">
                                <div
                                    class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-book-open icon-dual">
                                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
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
            <a href="{{ route('game.index') }}">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 fw-semibold">Games</p>
                                <h4 class="font-22 fw-bold">{{ $games }}</h4>
                                <p class="mb-0 text-truncate text-muted"><span class="text-success"><i
                                            class="mdi mdi-checkbox-marked-circle-outline me-1"></i></span>{{ $games }}
                                    Total Games
                                </p>
                            </div>
                            <div class="col-auto align-self-center">
                                <div
                                    class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-smartphone">
                                        <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                                        <line x1="12" y1="18" x2="12.01" y2="18"></line>
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