@extends('layouts.template')
@section('css')

@endsection
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Buat Soal Ujian</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Anda dapat membuat soal ujian disini</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-9 col-lg-8">
            <div class="card">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom justify-content-center pt-2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#all-post" role="tab">
                            Soal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#archive" role="tab">
                            Jawaban
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-4">
                    <div class="tab-pane active" id="all-post" role="tabpanel">
                        <div>
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <div>
                                        <textarea id="tiny">&lt;p&gt;Welcome to the TinyMCE jQuery example!&lt;/p&gt;</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="archive" role="tabpanel">
                        <div>
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <h5>Archive</h5>

                                    <div class="mt-5">
                                        <div class="d-flex flex-wrap">
                                            <div class="me-2">
                                                <h4>2020</h4>
                                            </div>
                                            <div class="ms-auto">
                                                <span
                                                    class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">03</span>
                                            </div>
                                        </div>
                                        <hr class="mt-2">

                                        <div class="list-group list-group-flush">
                                            <a href="blog-details.html" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Beautiful Day with
                                                Friends</a>

                                            <a href="blog-details.html" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Drawing a sketch</a>

                                            <a href="blog-details.html" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Project discussion with
                                                team</a>

                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <div class="d-flex flex-wrap">
                                            <div class="me-2">
                                                <h4>2019</h4>
                                            </div>
                                            <div class="ms-auto">
                                                <span
                                                    class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">06</span>
                                            </div>
                                        </div>
                                        <hr class="mt-2">

                                        <div class="list-group list-group-flush">
                                            <a href="blog-details.html" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Coffee with Friends</a>

                                            <a href="blog-details.html" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Neque porro quisquam est</a>

                                            <a href="blog-details.html" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Quis autem vel eum iure</a>

                                            <a href="blog-details.html" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Cras mi eu turpis</a>

                                            <a href="blog-details.html" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Drawing a sketch</a>

                                            <a href="blog-details.html" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Project discussion with
                                                team</a>

                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <div class="d-flex flex-wrap">
                                            <div class="me-2">
                                                <h4>2018</h4>
                                            </div>
                                            <div class="ms-auto">
                                                <span
                                                    class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">03</span>
                                            </div>
                                        </div>
                                        <hr class="mt-2">

                                        <div class="list-group list-group-flush">
                                            <a href="blog-details.html" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Beautiful Day with
                                                Friends</a>

                                            <a href="blog-details.html" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Drawing a sketch</a>

                                            <a href="blog-details.html" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Project discussion with
                                                team</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-xl-3 col-lg-4">
            <div class="card">
                <div class="card-body p-4">
                    <div class="search-box">
                        <p class="text-muted">Search</p>
                        <div class="position-relative">
                            <input type="text" class="form-control rounded bg-light border-light"
                                placeholder="Search...">
                            <i class="mdi mdi-magnify search-icon"></i>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div>
                        <p class="text-muted">Categories</p>

                        <ul class="list-unstyled fw-medium">
                            <li><a href="javascript: void(0);" class="text-muted py-2 d-block"><i
                                        class="mdi mdi-chevron-right me-1"></i> Design</a></li>
                            <li><a href="javascript: void(0);" class="text-muted py-2 d-block"><i
                                        class="mdi mdi-chevron-right me-1"></i> Development <span
                                        class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">04</span></a>
                            </li>
                            <li><a href="javascript: void(0);" class="text-muted py-2 d-block"><i
                                        class="mdi mdi-chevron-right me-1"></i> Business</a></li>
                            <li><a href="javascript: void(0);" class="text-muted py-2 d-block"><i
                                        class="mdi mdi-chevron-right me-1"></i> Project</a></li>
                            <li><a href="javascript: void(0);" class="text-muted py-2 d-block"><i
                                        class="mdi mdi-chevron-right me-1"></i> Travel<span
                                        class="badge badge-soft-success rounded-pill ms-1 float-end font-size-12">12</span></a>
                            </li>
                        </ul>
                    </div>

                    <hr class="my-4">

                    <div>
                        <p class="text-muted">Archive</p>

                        <ul class="list-unstyled fw-medium">
                            <li><a href="javascript: void(0);" class="text-muted py-2 d-block"><i
                                        class="mdi mdi-chevron-right me-1"></i> 2020 <span
                                        class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">03</span></a>
                            </li>
                            <li><a href="javascript: void(0);" class="text-muted py-2 d-block"><i
                                        class="mdi mdi-chevron-right me-1"></i> 2019 <span
                                        class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">06</span></a>
                            </li>
                            <li><a href="javascript: void(0);" class="text-muted py-2 d-block"><i
                                        class="mdi mdi-chevron-right me-1"></i> 2018 <span
                                        class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">05</span></a>
                            </li>
                        </ul>
                    </div>

                    <hr class="my-4">

                    <div>
                        <p class="text-muted mb-2">Popular Posts</p>

                        <div class="list-group list-group-flush">

                            <a href="javascript: void(0);" class="list-group-item text-muted py-3 px-2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <img src="assets/images/small/img-7.jpg" alt=""
                                            class="avatar-md h-auto d-block rounded">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-13 text-truncate">Beautiful Day with Friends</h5>
                                        <p class="mb-0 text-truncate">10 Apr, 2020</p>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item text-muted py-3 px-2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <img src="assets/images/small/img-4.jpg" alt=""
                                            class="avatar-md h-auto d-block rounded">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-13 text-truncate">Drawing a sketch</h5>
                                        <p class="mb-0 text-truncate">24 Mar, 2020</p>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item text-muted py-3 px-2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <img src="assets/images/small/img-6.jpg" alt=""
                                            class="avatar-md h-auto d-block rounded">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-13 text-truncate">Project discussion with team</h5>
                                        <p class="mb-0 text-truncate">11 Mar, 2020</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div>
                        <p class="text-muted">Tags</p>

                        <div class="d-flex flex-wrap gap-2 widget-tag">
                            <div><a href="javascript: void(0);" class="badge bg-light font-size-12">Design</a></div>
                            <div><a href="javascript: void(0);" class="badge bg-light font-size-12">Development</a>
                            </div>
                            <div><a href="javascript: void(0);" class="badge bg-light font-size-12">Business</a></div>
                            <div><a href="javascript: void(0);" class="badge bg-light font-size-12">Project</a></div>
                            <div><a href="javascript: void(0);" class="badge bg-light font-size-12">Travel</a></div>
                            <div><a href="javascript: void(0);" class="badge bg-light font-size-12">Lifestyle</a></div>
                            <div><a href="javascript: void(0);" class="badge bg-light font-size-12">Photography</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- end row -->
</div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-jquery@2/dist/tinymce-jquery.min.js"></script>

<script>
    var table;

    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    $('textarea#tiny').tinymce({
        height: 500,
        menubar: false,
        plugins: [
          'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
          'anchor', 'searchreplace', 'visualblocks', 'fullscreen',
          'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
        ],
        toolbar: 'undo redo | blocks | bold italic backcolor | ' +
          'alignleft aligncenter alignright alignjustify | ' +
          'bullist numlist outdent indent | removeformat | help'
      });
</script>
@endsection