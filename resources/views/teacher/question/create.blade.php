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
                        <input type="number" min="1" class="form-control" id="formrow-firstname-input" value="1">
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
        images_upload_url: '/teacher/upload-image',
        images_upload_credentials: true, // Untuk kirim CSRF token
        file_picker_types: 'image',
        automatic_uploads: true,

        // Kirim CSRF token dengan setiap request
        setup: function (editor) {
            editor.on('init', function () {
                editor.getElement().setAttribute('data-csrf', '{{ csrf_token() }}');
            });
        },

        images_upload_handler: function (blobInfo, success, failure) {
            let formData = new FormData();
            formData.append('image', blobInfo.blob(), blobInfo.filename());
            formData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

            fetch('/teacher/upload-image', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(result => {
                console.log(result.location);
                if (result.location) {
                    success(result.location); // Kirim URL gambar kembali ke editor
                } else {
                    failure('Upload gagal');
                }
            })
            .catch(() => failure('Upload error'));
        }
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