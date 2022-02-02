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
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <img src="{{ asset('backend/images/flags/us_flag.jpg') }}"
                            class="me-3 thumb-md align-self-center rounded" alt="...">
                        <div class="media-body align-self-center">
                            <div class="coin-bal">
                                <h4 class="mt-0 mb-1 font-22 fw-bold">50,289</h4>
                                <p class="text-muted mb-0 fw-semibold">USA . Last Month
                                    <span class="text-success">2.5% <i class="mdi mdi-arrow-up"></i></span>
                                </p>
                            </div>
                        </div>
                        <!--end media body-->
                    </div>
                    <!--end media-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <img src="{{ asset('backend/images/flags/germany_flag.jpg') }}"
                            class="me-3 thumb-md align-self-center rounded" alt="...">
                        <div class="media-body align-self-center">
                            <div class="coin-bal">
                                <h4 class="mt-0 mb-1 font-22 fw-bold">50,289</h4>
                                <p class="text-muted mb-0 fw-semibold">Germany . Last Month
                                    <span class="text-success">1.2% <i class="mdi mdi-arrow-up"></i></span>
                                </p>
                            </div>
                        </div>
                        <!--end media body-->
                    </div>
                    <!--end media-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <img src="{{ asset('backend/images/flags/spain_flag.jpg') }}"
                            class="me-3 thumb-md align-self-center rounded" alt="...">
                        <div class="media-body align-self-center">
                            <div class="coin-bal">
                                <h4 class="mt-0 mb-1 font-22 fw-bold">50,289</h4>
                                <p class="text-muted mb-0 fw-semibold">Spain . Last Month
                                    <span class="text-success">0.5% <i class="mdi mdi-arrow-up"></i></span>
                                </p>
                            </div>
                        </div>
                        <!--end media body-->
                    </div>
                    <!--end media-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->


</div><!-- container -->
@endsection