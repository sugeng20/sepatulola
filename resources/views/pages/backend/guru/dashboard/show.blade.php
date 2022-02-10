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
                <h4 class="page-title">Dashboard</h4>
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
    <!-- end page title end breadcrumb -->

    <div class="row">
        <div class="col-12">
            <a href="{{ route('content-guru.category', [$category]) }}" class="btn btn-primary mb-3"><i
                    class="mdi mdi-backburger"></i>
                Kembali
            </a>
        </div>

        <div class="col-lg-12">
            @if($content->category->type == 'VIDEO')
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">{{ $content->title }}</h2>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        {!! $content->link !!}
                    </div>
                </div>
                <div class="card-footer">
                    <p class="text-muted mb-0">
                        {!! $content->description !!}
                    </p>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
            @endif

            @if($content->category->type == 'TEKS')
            <div class="card">
                <img class="card-img-top img-fluid bg-light-alt"
                    src="{{ asset('backend/images/cover/' . $content->cover) }}" alt="Card image cap">
                <div class="card-header">
                    <h1 class="card-title">{{ $content->title }}</h1>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    {!! $content->description !!}
                </div>
                <!--end card -body-->
            </div>
            @endif

            @if($content->category->type == 'PDF')
            <iframe src="{{ asset('backend/images/file/' . $content->file) }}" width="100%" height="600px"></iframe>
            @endif
        </div>

    </div>
    <!--end row-->


</div><!-- container -->
@endsection