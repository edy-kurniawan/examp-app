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
        <div class="col-xl-3 col-lg-4">
            <div class="card">
                <div class="d-flex justify-content-between border-bottom">
                    <div class="bd-highlight">

                    </div>
                    <div class="bd-highlight">
                        <h5 class="card-header bg-white text-center ms-4">
                            INFORMASI UJIAN
                        </h5>
                    </div>
                    <div class="bd-highlight mt-2 me-2">
                        <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">
                            <i class="fas fa-cog"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Nama Ujian</label>
                        <input type="text" class="form-control" id="formrow-firstname-input"
                            value="Ujian Bahasa Indonesia" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Tanggal Mulai Ujian</label>
                        <input type="datetime-local" class="form-control" id="formrow-firstname-input"
                            value="{{ date('Y-m-d\TH:i') }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Tanggal Selesai Ujian</label>
                        <input type="datetime-local" class="form-control" id="formrow-firstname-input"
                            value="{{ date('Y-m-d\TH:i', strtotime('+1 hour')) }}" disabled>
                    </div>
                </div>
                <div class="d-flex justify-content-between border-bottom">
                    <div class="bd-highlight">

                    </div>
                    <div class="bd-highlight">
                        <h5 class="card-header bg-white text-center ms-4">
                            INFORMASI PAKET SOAL
                        </h5>
                    </div>
                    <div class="bd-highlight mt-2 me-2">
                        <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#myModal2">
                            <i class="fas fa-cog"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="mb-3">
                                <label class="card-radio-label mb-2">
                                    <input type="radio" name="currency" id="buycurrencyoption1" class="card-radio-input"
                                        checked>
                                    <div class="card-radio">
                                        <div>
                                            <i class="fas fa-tag font-size-24 text-primary align-middle me-2"></i>
                                            <span>PAKET A</span>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="mb-3">
                                <label class="card-radio-label mb-2">
                                    <input type="radio" name="currency" id="buycurrencyoption1"
                                        class="card-radio-input">
                                    <div class="card-radio">
                                        <div>
                                            <i class="fas fa-tag font-size-24 text-primary align-middle me-2"></i>
                                            <span>PAKET B</span>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="mb-3">
                                <label class="card-radio-label mb-2">
                                    <input type="radio" name="currency" id="buycurrencyoption1"
                                        class="card-radio-input">
                                    <div class="card-radio">
                                        <div>
                                            <i class="fas fa-tag font-size-24 text-primary align-middle me-2"></i>
                                            <span>PAKET C</span>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-8">
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="mdi mdi-check-all me-2"></i>
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="card">
                <div class="row border-bottom">
                    <div class="col-6">
                        <h5 class="card-header bg-white">
                            Daftar Soal
                        </h5>
                    </div>
                    <div class="col-6 my-2 mr-2">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <div class="p-1 bd-highlight">
                                <a href="{{ route('teacher.question.create', ['exam_id' => $exam_id]) }}"
                                    class="btn btn-primary btn-sm me-2">
                                    <i class="fas fa-plus"></i>
                                    Tambah Soal
                                </a>
                            </div>
                            <div class="p-1 bd-highlight">
                                <button type="button" class="btn btn-light btn-sm">
                                    <i class="fas fa-file-export"></i>
                                    Export
                                </button>
                            </div>
                            <div class="p-1 bd-highlight">
                                <button type="button" class="btn btn-light btn-sm">
                                    <i class="fas fa-file-import"></i>
                                    Import
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="table" class="table table-bordered table-nowrap align-middle">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Soal</th>
                                <th>Mode Koreksi</th>
                                <th>Bobot</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($questions as $question)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if ($question->question_type == 'multiple_choice')
                                    Pilihan Ganda
                                    @elseif ($question->question_type == 'short_answer')
                                    Isian Singkat
                                    @elseif ($question->question_type == 'essay')
                                    Esai
                                    @endif
                                </td>
                                <td>{{ $question->correction_mode }}</td>
                                <td>{{ $question->weight }}</td>
                                <td>
                                    <button type="button" class="btn btn-light btn-sm">Edit</button>
                                    <button type="button" class="btn btn-light btn-sm">Hapus</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <!-- sample modal content -->
    <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Setting Ujian</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Mulai Ujian</label>
                        <input type="datetime-local" class="form-control" value="{{ date('Y-m-d\TH:i') }}">
                    </div>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Selesai Ujian</label>
                        <input type="datetime-local" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime('+1 hour')) }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light">Save</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- sample modal content -->
    <div id="myModal2" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Setting Ujian</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal"
                                data-bs-target="#myModal3">
                                <i class="fas fa-plus"></i>
                                Tambah Paket
                            </button>
                        </div>
                        <div class="col-12">
                            <table id="table2" class="table table-bordered table-nowrap align-middle">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Paket</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Paket A</td>
                                        <td>
                                            <button type="button" class="btn btn-light btn-sm">Edit</button>
                                            <button type="button" class="btn btn-light btn-sm">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Paket B</td>
                                        <td>
                                            <button type="button" class="btn btn-light btn-sm">Edit</button>
                                            <button type="button" class="btn btn-light btn-sm">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Paket C</td>
                                        <td>
                                            <button type="button" class="btn btn-light btn-sm">Edit</button>
                                            <button type="button" class="btn btn-light btn-sm">Hapus</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div> <!-- end preview-->
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

        $('#table').DataTable({});
        $('#table2').DataTable({
            "paging": false,
            "info": false,
            "searching": false
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