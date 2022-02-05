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
        @foreach ($videos as $video)
        <div class="col-lg-6">
            <div class="card">

                <div class="card-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe src="{{ $video->link_youtube }}" title="YouTube video" allowfullscreen=""></iframe>
                    </div>
                </div>
                <!--end card-body-->

                <div class="card-footer">
                    <h4 class="card-title">{{ $video->title }}</h4>
                    <p class="text-muted mb-0">{{ $video->description }}</p>
                </div>
                <!--end card-header-->
            </div>
            <!--end card-->
        </div>
        @endforeach
    </div>
    <!--end row-->


</div><!-- container -->
@endsection