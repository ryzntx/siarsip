@extends('layout.index')
@section('title', 'Sekretaris')
@section('content')

<div class="main-content side-content pt-0">

    <div class="main-container container-fluid">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">REKAP DOKUMEN</h2>
                </div>
                <div class="d-flex">
                    <div class="justify-content-center">
                        <button type="button" class="btn btn-white btn-icon-text my-2 me-2">
                            <i class="fe fe-filter me-2"></i> Filter
                        </button>
                        <button type="button" class="btn btn-primary my-2 btn-icon-text">
                            <i class="fe fe-download-cloud me-2"></i> Download Report
                        </button>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->

            <div class="row row-sm">
                <!-- Left Panel (Daftar Dokumen) -->
                <div class="col-md-12 col-lg-12">
                    <div class="card custom-card">
                        <div class="mt-3 mb-3">
                            <div class="card-header border-bottom-0 pb-0">
                                <div class="table-responsive border border-bottom-0">
                                    <table class="table mb-0 text-nowrap text-md-nowrap">
                                        <thead>
                                            <tr class="border-bottom">
                                                <th style="text-align: center;">
                                                    <i class="typcn typcn-star fa-lg"></i>
                                                </th>
                                                <th style="text-align: center;">Tanggal</th>
                                                <th style="text-align: center;">Dinas</th>
                                                <th style="text-align: center;">Nama Dokumen</th>
                                                <th style="text-align: center;">Pengirim</th>
                                                <th style="text-align: center;">Penerima</th>
                                                <th style="text-align: center;">Status Dokumen</th>
                                                <th style="text-align: center;">Status Pengajuan</th>
                                                <th style="text-align: center;">Tanggal diajukan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="font-weight-semibold d-flex">
                                                    <span class="my-auto me-4 mt-1 star-icon" onclick="toggleStar(this)">
                                                        <i class="typcn typcn-star-outline fa-sm" aria-hidden="true"></i>
                                                    </span>
                                                </td>
                                                <td>27/09/2024</td>
                                                <td>KEMENDIKBUD</td>
                                                <td>BARANG HILANG MENGGUNAKAN METODE PROFILE MATCHING</td>
                                                <td>amanda</td>
                                                <td>niol</td>
                                                <td>dokumen masuk</td>
                                                <td><span
                                                    class="badge bg-pill bg-success-light">Diterima</span>
                                            </td>                                                <td>12/10/2024</td>                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Left Panel -->

            <!-- End Row -->
        </div>
        </div>
    </div>
</div>

@endsection
