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
            <a href="{{ route('ortu-anak.slug', $slug) }}" class="btn btn-primary mb-3"><i
                    class="mdi mdi-backburger"></i>
                Kembali
            </a>
        </div>

        @foreach ($contents as $content)
        <div class="col-lg-4">
            <a href="{{ route('ortu-anak.id', [$slug, $category, $content->id]) }}">
                <div class="card">
                    <img class="card-img-top img-fluid bg-light-alt"
                        src="{{ asset('backend/images/cover/' . $content->cover) }}" alt="Card image cap">
                    <div class="card-header">
                        <h4 class="card-title">{{ $content->title }}</h4>
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <p class="card-text text-muted ">{!! str_replace(['
                        <p>', '</p>'], '', $content->description) !!}</p>
                        <a href="{{ route('ortu-anak.id', [$slug, $category, $content->id]) }}"
                            class="btn btn-de-primary btn-sm">Go
                            somewhere</a>
                    </div>
                    <!--end card -body-->
                </div>
            </a>
        </div>
        @endforeach

    </div>
    <!--end row-->


</div><!-- container -->
@endsection