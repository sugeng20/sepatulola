<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="utf-8" />
    <title> | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    App favicon
    <link rel="shortcut icon" href="assets/images/favicon.ico"> -->

    <meta charset="utf-8" />
    <title>Sepatulola - Sistem Informasi Terpadu Pengembangan Literasi Anak</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">



    <!-- App css -->
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/app.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body id="body" class="auth-page"
    style="background-image: url('{{ asset('backend/images/p-1.png') }}'); background-size: cover; background-position: center center;">
    <!-- Log In page -->
    <div class="container-md">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="index.html" class="logo logo-admin">
                                            <img src="{{ asset('frontend/img/logo-sepatulola-white.png') }}" height="50"
                                                alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">DAFTAR AKUN
                                        </h4>
                                        <p class="text-muted  mb-0">Sistem Informasi Terpadu <br /> Pengembangan
                                            Literasi Anak
                                        </p>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
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

                                    <form class="my-4" action="{{ route('registration') }}" method="POST">
                                        @csrf

                                        <div class="form-group mb-2">
                                            <label class="form-label" for="name">Nama</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" name="name" placeholder="Masukan Nama">
                                        </div>
                                        <!--end form-group-->

                                        <div class="form-group mb-2">
                                            <label class="form-label" for="no_hp">No HP</label>
                                            <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                                                id="no_hp" name="no_hp" placeholder="Masukan No HP">
                                        </div>
                                        <!--end form-group-->

                                        <div class="form-group mb-2">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text"
                                                class="form-control @error('username') is-invalid @enderror"
                                                id="username" name="username" placeholder="Enter username">
                                        </div>
                                        <!--end form-group-->

                                        <div class="form-group">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password"
                                                class="form-control @error('username') is-invalid @enderror"
                                                name="password" id="userpassword" placeholder="Enter password">
                                        </div>
                                        <!--end form-group-->

                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-primary" type="submit">Daftar <i
                                                            class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end form-group-->
                                    </form>
                                    <!--end form-->
                                    <div class="m-3 text-center text-muted">
                                        <p><a href="{{ url('/') }}">Kembali</a></p>
                                        <p class="mb-0">&copy; {{ date('Y') }} <a
                                                href="https://itgenic.co.id">itgenic.co.id</a> </p>
                                    </div>

                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-body-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->

    <!-- App js -->
    <script src="{{ asset('backend/js/app.js') }}"></script>

</body>

</html>