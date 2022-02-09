@extends('layouts.orang-tua')

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
                <h4 class="page-title">Dashboard</h4>
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
    <!-- end page title end breadcrumb -->

    <div class="row">
        <div class="col-12">
            <a href="{{ url('dashboard-ortu') }}" class="btn btn-primary mb-3"><i class="mdi mdi-backburger"></i>
                Kembali
            </a>
        </div>
        @foreach ($categories as $category)
        <div class="col-lg-6">
            <a href="{{ route('ortu-anak.category', [$slug, $category->id]) }}">
                <div class="card" style="background-color: {{ $color_ }};">
                    <div class="card-body">
                        <div class="media">
                            <img src="{{ asset('backend/images/background/children.png') }}" width="100" alt=""
                                class="rounded">
                            <div class="media-body align-self-center ms-3 text-truncate">
                                <h5 class="my-0 fw-bold text-white">{{ $category->name }}</h5>
                            </div>
                            <!--end media-body-->
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <!--end row-->


</div><!-- container -->
@endsection