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
                <div class="row border-bottom">
                    <div class="col-6">
                        <h5 class="card-header bg-white">
                            <span class="fw-normal">Soal No. 1</span>
                        </h5>
                    </div>
                    <div class="col-6 my-2 mr-2">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <div class="p-1 bd-highlight">
                                <button type="button" class="btn btn-primary btn-sm mx-2">Simpan & Lanjutkan</button>
                            </div>
                            <div class="p-1 bd-highlight">
                                <button type="button" class="btn btn-light btn-sm">Simpan & Selesai</button>
                            </div>
                            <div class="p-1 bd-highlight">
                                <select class="form-select form-select-sm">
                                    <option value="1">Pilihan Ganda</option>
                                    <option value="2">Isian Singkat</option>
                                    <option value="3">Esai</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom justify-content-center pt-2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#all-post" role="tab">
                            Soal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#archive" role="tab">
                            Opsi Jawaban
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-4">
                    <div class="tab-pane active" id="all-post" role="tabpanel">
                        <div>
                            <div class="row justify-content-center">
                                <div class="col-xl-12">
                                        <textarea id="elm1">&lt;p&gt;Welcome to the TinyMCE jQuery example!&lt;/p&gt;</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="archive" role="tabpanel">
                        <div>
                            <div class="row justify-content-center">
                                <div class="col-xl-12">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Opsi</th>
                                                <th scope="col">Jawaban</th>
                                                <th scope="col">Jawaban Benar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <img src="https://ui-avatars.com/api/?name=A&size=32&background=EBF4FF&color=7F9CF5&bold=true"
                                                        alt="user-image" class="me-1 rounded-circle">
                                                </th>
                                                <td><textarea class="form-control tiny-editor" name="jawaban"></textarea></td>
                                                <td><input type="radio" name="jawaban_benar" value="1"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <img src="https://ui-avatars.com/api/?name=B&size=32&background=EBF4FF&color=7F9CF5&bold=true"
                                                        alt="user-image" class="me-1 rounded-circle">
                                                </th>
                                                <td><textarea class="form-control tiny-editor" name="jawaban"></textarea></td>
                                                <td><input type="radio" name="jawaban_benar" value="1"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <img src="https://ui-avatars.com/api/?name=C&size=32&background=EBF4FF&color=7F9CF5&bold=true"
                                                        alt="user-image" class="me-1 rounded-circle">
                                                </th>
                                                <td><textarea class="form-control tiny-editor" name="jawaban"></textarea></td>
                                                <td><input type="radio" name="jawaban_benar" value="1"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <img src="https://ui-avatars.com/api/?name=D&size=32&background=EBF4FF&color=7F9CF5&bold=true"
                                                        alt="user-image" class="me-1 rounded-circle">
                                                </th>
                                                <td><textarea class="form-control tiny-editor" name="jawaban"></textarea></td>
                                                <td><input type="radio" name="jawaban_benar" value="1"></td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- end row -->
</div>
@endsection

@section('js')
<!--tinymce js-->
<script src="{{ url('assets/libs/tinymce/tinymce.min.js') }}"></script>
<script>

    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    // tinymce editor soal
    document.getElementById("elm1") && tinymce.init({
        selector: "textarea#elm1",
        height: 500,
        plugins: ["advlist", "autolink", "lists", "link", "image", "charmap", "preview", "anchor", "searchreplace", "visualblocks", "code", "fullscreen", "insertdatetime", "media", "table", "wordcount"],
        toolbar: "undo redo | blocks | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat",
        content_style: 'body { font-family:"Poppins",sans-serif; font-size:16px }'
    });

    // tinymce editor jawaban
    document.querySelectorAll('.tiny-editor').forEach(function (element) {
        tinymce.init({
            selector: '.tiny-editor',
            height: 300,
            plugins: 'advlist autolink lists link charmap preview',
            toolbar: 'undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
        });
    });
</script>
@endsection