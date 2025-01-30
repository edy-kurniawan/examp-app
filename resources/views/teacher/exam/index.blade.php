@extends('layouts.template')
@section('css')

@endsection
@section('content')
<div class="container-fluid">

    <!-- Modal -->
    <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" action="{{ route('teacher.exam.store') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Form Data Ujian</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Nama Ujian</label>
                        <input type="text" class="form-control" name="exam_name" id="exam_name" placeholder="Masukkan Nama Ujian">
                    </div>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Paket Soal</label>
                        <input type="text" class="form-control" name="package_name" id="package_name" placeholder="Masukkan Nama Paket Soal">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                </div>
            </div><!-- /.modal-content -->
            </form>
        </div><!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Menu Ujian</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Anda dapat melihat data ujian yang telah dimasukkan</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="card">
                <div class="card-body border-bottom">
                    <div class="row">
                        <div class="col-6">
                            <h5 class="card-title flex-grow-1">Data Ujian</h5>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <button onclick="addData()" class="btn btn-primary btn-sm"><i
                                        class="mdi mdi-plus-circle"></i> Tambah
                                    Data</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body border-bottom">
                    <div class="row g-3">
                        <div class="col-xxl-3 col-lg-3">
                            <select name="paket_soal" class="form-control select2">
                                <option value="all" selected>-- Semua Paket Soal --</option>
                                <option value="1">Paket Soal 1</option>
                                <option value="2">Paket Soal 2</option>
                            </select>
                        </div>
                        <div class="col-xxl-3 col-lg-3">
                            <select name="jenis_soal" class="form-control select2">
                                <option value="all" selected>-- Semua Jenis Soal --</option>
                                <option value="pilihan-ganda">Pilihan Ganda</option>
                                <option value="isian-singkat">Isian Singkat</option>
                                <option value="essay">Essay</option>
                            </select>
                        </div>
                        <div class="col-xxl-2 col-lg-2">
                            <button type="button" class="btn btn-soft-secondary w-100"><i
                                    class="mdi mdi-filter-outline align-middle"></i> Filter</button>
                        </div>
                        <div class="col-xxl-2 col-lg-2">
                            <button type="button" class="btn btn-soft-secondary w-100"><i
                                    class="mdi mdi-export align-middle"></i> Export</button>
                        </div>
                        <div class="col-xxl-2 col-lg-2">
                            <button type="button" class="btn btn-soft-secondary w-100"><i
                                    class="mdi mdi-import align-middle"></i> Import</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="table" class="table table-bordered align-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Ujian</th>
                                <th scope="col">Paket Ujian</th>
                                <th scope="col">Jenis Soal</th>
                                <th scope="col">Total Soal</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($exams as $exam)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $exam->exam_name }}</td>
                                <td>{{ $exam->package_name }}</td>
                                <td>Ujian Pilihan Ganda</td>
                                <td>10</td>
                                <td>
                                    <a href="{{ route('teacher.exam.show', $exam->id) }}" class="btn btn-primary btn-sm"><i class="mdi mdi-eye"></i> Detail</a>
                                    <button onclick="editData({{ $exam->id }})" class="btn btn-warning btn-sm"><i class="mdi mdi-pencil"></i> Edit</button>
                                    <form action="{{ route('teacher.exam.destroy', $exam->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="mdi mdi-delete"></i> Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--end card-->
        </div>
        <!--end col-->

        
    </div>
    <!--end row-->
</div>
@endsection

@section('js')
<script>
    var table;

    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        table = $('#table').DataTable({});
    });

    function addData() {
        // reset form
        $('#form').trigger('reset');
        // show modal
        $('#myModal').modal('show');
    }

    function editData(id) {
        $.ajax({
            url: "{{ url('teacher/exam') }}" + '/' + id + '/edit',
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('#id').val(data.id);
                $('#exam_name').val(data.exam_name);
                $('#package_name').val(data.package_name);
                $('#myModal').modal('show');
            },
            error: function() {
                alert("Tidak dapat menampilkan data!");
            }
        });
    }
</script>
@endsection