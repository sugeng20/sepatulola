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
            <a href="{{ route('ortu-anak.category', [$slug, $category]) }}" class="btn btn-primary mb-3"><i
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
            {{-- <iframe src="{{ asset('backend/images/file/' . $content->file) }}" width="100%"
                height="600px"></iframe> --}}


            <canvas id="pdf-render"></canvas>

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
</style>
@endpush


@push('add-js')
<script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
<script>
    const url = '{{ asset('backend/images/file/' . $content->file) }}';

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

        renderPage(pageNum);
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
    document.querySelector('#next-page').addEventListener('click', showNextPage);
    document.querySelector('#kembali').addEventListener('click', showPrevPage);
    document.querySelector('#selanjutnya').addEventListener('click', showNextPage);

</script>
@endpush