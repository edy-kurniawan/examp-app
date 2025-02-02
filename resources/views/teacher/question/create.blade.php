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

    <form method="POST" action="{{ route('teacher.question.store')}}">
    @csrf
    <input type="hidden" name="exam_id" value="{{ $exam_id }}">
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
                                <button type="button" class="btn btn-primary btn-sm me-2">Simpan & Lanjutkan</button>
                            </div>
                            <div class="p-1 bd-highlight">
                                <button type="submit" class="btn btn-light btn-sm">Simpan & Selesai</button>
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
                                        <textarea name="soal" id="elm1">&lt;p&gt;Welcome to the TinyMCE jQuery example!&lt;/p&gt;</textarea>
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
                                                <td><textarea class="form-control tiny-editor" name="jawaban_a"></textarea></td>
                                                <td><input type="radio" name="is_true" value="a"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <img src="https://ui-avatars.com/api/?name=B&size=32&background=EBF4FF&color=7F9CF5&bold=true"
                                                        alt="user-image" class="me-1 rounded-circle">
                                                </th>
                                                <td><textarea class="form-control tiny-editor" name="jawaban_b"></textarea></td>
                                                <td><input type="radio" name="is_true" value="b"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <img src="https://ui-avatars.com/api/?name=C&size=32&background=EBF4FF&color=7F9CF5&bold=true"
                                                        alt="user-image" class="me-1 rounded-circle">
                                                </th>
                                                <td><textarea class="form-control tiny-editor" name="jawaban_c"></textarea></td>
                                                <td><input type="radio" name="is_true" value="c"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <img src="https://ui-avatars.com/api/?name=D&size=32&background=EBF4FF&color=7F9CF5&bold=true"
                                                        alt="user-image" class="me-1 rounded-circle">
                                                </th>
                                                <td><textarea class="form-control tiny-editor" name="jawaban_d"></textarea></td>
                                                <td><input type="radio" name="is_true" value="d"></td>
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
                <h5 class="card-header bg-white text-center border-bottom">
                    PENGATURAN SOAL
                </h5>
                <div class="card-body p-4">
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Jenis Soal</label>
                        <select class="form-select" id="formrow-firstname-input">
                            <option value="1">Pilihan Ganda</option>
                            <option value="2">Isian Singkat</option>
                            <option value="3">Esai</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Bobot Soal</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="" id="formrow-firstname-input" value="1">
                            <div class="input-group-text">%</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Penilaian Otomatis</label>
                        <div>
                            <input type="checkbox" id="switch1" switch="none" checked />
                            <label for="switch1" data-on-label="On" data-off-label="Off"></label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- end row -->
    </form>
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
        content_style: 'body { font-family:"Poppins",sans-serif; font-size:16px }',
        images_upload_handler: function (blobInfo) {
            return new Promise((resolve, reject) => {
                let formData = new FormData();
                formData.append('file', blobInfo.blob());

                $.ajax({
                    url: '/teacher/upload-image',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.location) {
                            resolve(response.location); // ✅ TinyMCE menggunakan URL, bukan Base64
                        } else {
                            reject('Gagal mengunggah gambar');
                        }
                    },
                    error: function() {
                        reject('Terjadi kesalahan saat mengunggah');
                    }
                });
            });
        },
        images_upload_url: '/upload-image', // ✅ Pastikan ini ada agar TinyMCE tidak pakai Base64
        automatic_uploads: true, // ✅ Pastikan ini aktif
        images_reuse_filename: true // ✅ Gunakan nama file yang sama untuk cache
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