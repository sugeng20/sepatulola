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
            <div class="row">
                <div class="col-12">
                    <div class="top-bar">
                        <div class="row">
                            <div class="col-lg-2"></div>
                        </div>
                        <button class="btn" id="prev-page">
                            <i class="fas fa-arrow-circle-left"></i>Kembali
                        </button>
                        <button class="btn" id="next-page">
                            Selanjutnya <i class="fas fa-arrow-circle-right"></i>
                        </button>
                        <span class="page-info">
                            Page <span id="page-num"></span> of <span id="page-count"></span>
                        </span>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <div class="loader3" id="loader"></div>
                        <canvas id="pdf-render"></canvas>
                    </div>
                </div>
                <div class="col-12">
                    <div class="top-bar">
                        <div class="row">
                            <div class="col-lg-2"></div>
                        </div>
                        <button class="btn" id="prev-page2">
                            <i class="fas fa-arrow-circle-left"></i>Kembali
                        </button>
                        <button class="btn" id="next-page2">
                            Selanjutnya <i class="fas fa-arrow-circle-right"></i>
                        </button>
                        <span class="page-info">
                            Page <span id="page-num2"></span> of <span id="page-count2"></span>
                        </span>
                    </div>
                </div>
            </div>
            @endif
        </div>

    </div>
    <!--end row-->


</div><!-- container -->
@endsection

@push('add-css')
<style>
    .top-bar {
        background: #333;
        color: #fff;
        padding: 1rem;
    }

    .btn {
        background: coral;
        color: #fff;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 0.7rem 2rem;
    }

    .btn:hover {
        opacity: 0.9;
    }

    .page-info {
        margin-left: 1rem;
    }

    .error {
        background: orangered;
        color: #fff;
        padding: 1rem;
    }

    /*loader 3*/
    .loader3:before,
    .loader3:after,
    .loader3 {
        border-radius: 50%;
        width: 2.5em;
        height: 2.5em;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        -webkit-animation: load7 1.8s infinite ease-in-out;
        animation: load7 1.8s infinite ease-in-out;
    }

    .loader3 {
        font-size: 10px;
        margin: 80px auto;
        position: relative;
        text-indent: -9999em;
        -webkit-transform: translateZ(0);
        -ms-transform: translateZ(0);
        transform: translateZ(0);
        -webkit-animation-delay: -0.16s;
        animation-delay: -0.16s;
    }

    .loader3:before {
        left: -3.5em;
        -webkit-animation-delay: -0.32s;
        animation-delay: -0.32s;
    }

    .loader3:after {
        left: 3.5em;
    }

    .loader3:before,
    .loader3:after {
        content: '';
        position: absolute;
        top: 0;
    }

    @-webkit-keyframes load7 {

        0%,
        80%,
        100% {
            box-shadow: 0 2.5em 0 -1.3em #000000;
        }

        40% {
            box-shadow: 0 2.5em 0 0 #000000;
        }
    }

    @keyframes load7 {

        0%,
        80%,
        100% {
            box-shadow: 0 2.5em 0 -1.3em #000000;
        }

        40% {
            box-shadow: 0 2.5em 0 0 #000000;
        }
    }

    /*akhir loader3*/
</style>
@endpush


@push('add-js')
<script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
<script>
    const url = "{{ asset('backend/images/file/' . $content->file) }}";

    let pdfDoc = null,
    pageNum = 1,
    pageIsRendering = false,
    pageNumIsPending = null;

    const scale = 1.5,
    canvas = document.querySelector('#pdf-render'),
    ctx = canvas.getContext('2d');

    // Render the page
    const renderPage = num => {
    pageIsRendering = true;

    // Get page
    pdfDoc.getPage(num).then(page => {
        // Set scale
        const viewport = page.getViewport({ scale });
        canvas.height = viewport.height;
        canvas.width = viewport.width;

        const renderCtx = {
            canvasContext: ctx,
            viewport
        };

        page.render(renderCtx).promise.then(() => {
            pageIsRendering = false;

            if (pageNumIsPending !== null) {
                renderPage(pageNumIsPending);
                pageNumIsPending = null;
            }
        });

        // Output current page
        document.querySelector('#page-num').textContent = num;
        document.querySelector('#page-num2').textContent = num;
    });
    };

    // Check for pages rendering
    const queueRenderPage = num => {
        if (pageIsRendering) {
            pageNumIsPending = num;
        } else {
            renderPage(num);
        }
    };

    // Show Prev Page
    const showPrevPage = () => {
    if (pageNum <= 1) {
        return;
    }
    pageNum--;
    queueRenderPage(pageNum);
    };

    // Show Next Page
    const showNextPage = () => {
    if (pageNum >= pdfDoc.numPages) {
        return;
    }
    pageNum++;
    queueRenderPage(pageNum);
    };

    // Get Document
    pdfjsLib
    .getDocument(url)
    .promise.then(pdfDoc_ => {
        pdfDoc = pdfDoc_;

        document.querySelector('#page-count').textContent = pdfDoc.numPages;
        document.querySelector('#page-count2').textContent = pdfDoc.numPages;
        renderPage(pageNum);
        document.querySelector('#loader').classList.remove('loader3');
    })
    .catch(err => {
        // Display error
        const div = document.createElement('div');
        div.className = 'error';
        div.appendChild(document.createTextNode(err.message));
        document.querySelector('body').insertBefore(div, canvas);
        // Remove top bar
        document.querySelector('.top-bar').style.display = 'none';
    });

    // Button Events
    document.querySelector('#prev-page').addEventListener('click', showPrevPage);
    document.querySelector('#prev-page2').addEventListener('click', showPrevPage);
    document.querySelector('#next-page').addEventListener('click', showNextPage);
    document.querySelector('#next-page2').addEventListener('click', showNextPage);

</script>
@endpush