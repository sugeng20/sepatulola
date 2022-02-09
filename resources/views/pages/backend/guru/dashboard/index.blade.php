@extends('layouts.guru')

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
                <h4 class="page-title">Dashboard Guru</h4>
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
    <!-- end page title end breadcrumb -->

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <img src="{{ asset('backend/images/users/user-5.jpg') }}" alt="" class="rounded">
                        <div class="media-body align-self-center ms-3 text-truncate">
                            <h3 class="my-0 fw-bold">Anthony Stover</h3>
                            <p class="text-muted mb-2 font-13">UI &amp; UX Designer, USA</p>
                            <button type="button" class="btn btn-sm btn-de-primary">Massage</button>
                        </div>
                        <!--end media-body-->
                    </div>
                </div>
                <!--end card-body-->
            </div>
        </div>
    </div>
    <!--end row-->


</div><!-- container -->
@endsection