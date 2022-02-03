@extends('layouts.admin')

@section('title')
Game
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
                        <li class="breadcrumb-item"><a href="#">Game</a>
                        </li>

                    </ol>
                </div>
                <h4 class="page-title">Game</h4>
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
                    <a href="{{ route('game.create') }}" class="btn btn-primary"><i class="mdi mdi-plus-circle"></i>
                        Tambah Data
                    </a>

                    @if (Session::get('status'))
                    <div class="my-3 alert alert-primary alert-dismissible fade show border-0 b-round" role="alert">
                        <strong>{{ Session::get('status') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table" id="table-datatables">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Cover</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>
                                        <img width="50" height="50"
                                            src="{{ asset('backend/images/cover/' . $item->cover) }}" alt="">
                                    </td>
                                    <td>
                                        <a href="{{ $item->link_game }}" title="Show" target="_blank"
                                            class="btn btn-info btn-sm"><i class="mdi mdi-eye-circle"></i>
                                        </a>
                                        <a href="{{ route('game.edit', $item->id) }}" title="Edit"
                                            class="btn btn-warning btn-sm"><i class="mdi mdi-square-edit-outline"></i>
                                        </a>

                                        <form class="d-inline" action="{{ route('game.destroy', $item->id) }}"
                                            method="POST" onsubmit="return confirm('Apakah Anda Yakin?')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" title="Hapus" class="btn btn-danger btn-sm"><i
                                                    class="mdi mdi-trash-can"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center">Tidak Ada Data</td>
                                </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
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