@extends('layouts.template')
@section('css')

@endsection
@section('content')
<div class="container-fluid">

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
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body border-bottom">
                    <div class="row">
                        <div class="col-6">
                            <h5 class="card-title flex-grow-1">Data Ujian</h5>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <a href="{{ route('teacher.examp.create')}}" class="btn btn-primary btn-sm"><i class="mdi mdi-plus-circle"></i> Tambah
                                    Data</a>
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
                                <option value="1">Ujian Pilihan Ganda</option>
                                <option value="2">Ujian Essay</option>
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
                            <tr>
                                <td>1</td>
                                <td>Ujian 1</td>
                                <td>Paket Ujian 1</td>
                                <td>Ujian Pilihan Ganda</td>
                                <td>10</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="mdi mdi-eye"></i> Detail</a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="mdi mdi-pencil"></i> Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i> Hapus</a>
                                </td>
                            </tr>
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
</script>
@endsection