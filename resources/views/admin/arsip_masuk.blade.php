@extends('layout.index')
@section('title', 'Sekretaris')
@section('content')

<div class="main-content side-content pt-0">

    <div class="main-container container-fluid">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">DAFTAR DOKUMEN KELUAR</h2>
                </div>
            </div>
            <!-- End Page Header -->

            <!-- Row -->
            <div class="row row-sm">
                <!-- Left Panel (Daftar Dokumen) -->
                <div class="col-md-8 col-lg-8">
                    <div class="card custom-card">
                        <div class="card-header  border-bottom-0 pb-0">
                            <div>
                                <div class="d-flex">
                                    <label class="main-content-label my-auto pt-2">ARSIP DOKUMEN KELUAR</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row table-filter">
                                <div class="col-lg-3">
                                    <div class="show-entries d-flex align-items-center">
                                        <span class="me-2">Lihat</span> <!-- Menambahkan margin kanan untuk mengatur spasi -->
                                        <select class="form-control select2 wd-50">
                                            <option>5</option>
                                            <option>10</option>
                                            <option>15</option>
                                            <option>20</option>
                                        </select>
                                        <span class="ms-2">baris</span> <!-- Menambahkan margin kiri untuk memisahkan dari dropdown -->
                                    </div>
                                </div>

                                <div class="col-lg-9 d-lg-flex justify-content-end">
                                    <div class="d-flex mt-4 me-4 mt-lg-0">
                                        <div class="filter-group">
                                            <input type="text" class="form-control rounded-end-0" placeholder="Cari dokumen...">

                                        <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="table-responsive border border-bottom-0">

                                <div class="list-group">
                                    <table class="table mb-0 text-nowrap text-md-nowrap">

                                    </table>
                                </div>


                            <div class="table-responsive border border-bottom-0">
                                <table class="table mb-0 text-nowrap text-md-nowrap">
                                    <thead>
                                        <tr class="border-bottom">
                                            <th style="text-align: center;"><i class="typcn typcn-star fa-lg"></i></th>
                                            <th style="text-align: center;">Dinas</th>
                                            <th style="text-align: center;">Nama Dokumen</th>
                                            <th style="text-align: center;">Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                            <tr class="border-bottom" onclick="showDetails('BARANG HILANG MENGGUNAKAN METODE PROFILE MATCHING', 'Penerima 1', '00', 'path/to/document1.pdf')">
                                                <td class="font-weight-semibold d-flex">
                                                    <span class="my-auto me-4 mt-1 star-icon" onclick="toggleStar(this)">
                                                        <!-- Menggunakan icon bintang dari Typicons -->
                                                        <i class="typcn typcn-star-outline fa-sm" aria-hidden="true"></i> <!-- Icon bintang outline (tidak terisi) -->
                                                    </span>
                                                </td>                                                <td>KEMENDIKBUD</td>
                                                <td>BARANG HILANG MENGGUNAKAN METODE PROFILE MATCHING</td>
                                                <td>27/09/2024</td>
                                            </tr>
                                            <tr class="border-bottom" onclick="showDetails('Pengirim 2', 'Penerima 2', 'Isi dokumen 2', 'path/to/document2.pdf')">
                                                <th scope="row">#</th>
                                                <td>KEMENDIKBUD</td>
                                                <td>NIOOLLL</td>
                                                <td>28/09/2024</td>
                                            </tr>
                                            <!-- Tambah row dokumen lain di sini -->


                                            {{-- <td>
                                                <div class="button-list">
                                                    <a href="#" class="btn"><i class="ti ti-files"></i></a>
                                                    <a href="#" class="btn"><i class="ti ti-pencil"></i></a>
                                                    <a href="#" class="btn"><i class="ti ti-trash"></i></a>
                                                </div>
                                            </td> --}}
                                    </tbody>
                                </table>
                            </div>
                            <nav class="mt-3">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled"><a class="page-link" href="#">Prev</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
        </div>
                <!-- Right Panel (Detail Dokumen) -->
                <div class="col-md-4 col-lg-4">
                    <div class="card custom-card">
                        <div class="card-body">
                            <h5 class="card-title">Detail Dokumen</h5>
                            <div id="document-details">
                                <p id="document-info">
                                    Kategori Dokumen: <br>
                                    <strong style="text-justify"><span id="kategori_dokumen">-</span></strong><br>
                                    Pengirim: <span id="pengirim">-</span><br>
                                    Penerima: <span id="penerima">-</span><br>
                                    Tanggal: <br>
                                </p>
                                <!-- PDF Viewer -->
                                <iframe id="pdf-viewer" src="" width="100%" height="400px" style="border: none;"></iframe>

                            </div>
                        </div>
                    </div>
                </div>

                <script>
                function showDetails(kategori_dokumen, penerima, pengirim, pdfUrl) {
                    // Menampilkan detail dokumen

                    document.getElementById('kategori_dokumen').innerText = kategori_dokumen;
                    document.getElementById('penerima').innerText = penerima;
                    document.getElementById('pengirim').innerText = pengirim;

                    // Menampilkan PDF di iframe
                    document.getElementById('pdf-viewer').src = pdfUrl;
                }
                </script>
            </div>
            <!-- End Row -->
        </div>
    </div>
</div>


@endsection
