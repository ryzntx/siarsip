@extends('layout.index')
@section('title', 'Sekretaris')
@section('content')

<form action="/admin/tambah_dokumen/insert" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Tambah Dokumen</h2>
                    </div>
                </div>
                <!-- End Page Header -->

                <!-- Pilihan Jenis Dokumen -->
                <div class="form-group">
                    <label for="jenis_dokumen" class="tx-medium">Status Dokumen</label>
                    <select id="jenis_dokumen" class="form-control" name="jenis_dokumen">
                        <option value="pus_" selected>Pilih</option>
                        <option value="masuk">Dokumen Masuk</option>
                        <option value="keluar">Dokumen Keluar</option>
                    </select>
                </div>

                <!-- Template Form Dokumen Masuk -->
                <div class="row row-sm form-container" id="formMasuk" style="display: none;">
                    <div class="col-lg-12 col-md-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <h5>Form Dokumen Masuk</h5>
                                <div class="form-group">
                                    <label class="tx-medium">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal_dokumen" id="tanggal_dokumen" required>
                                </div>
                                <div class="form-group">
                                    <label for="namaDinas" class="tx-medium">Dinas</label>
                                    <select id="namaDinas" name="dinas_id" class="form-control">

                                        <!-- Option list remains unchanged -->
                                        <option value="" selected>Pilih</option>
                                        <option value="inspektorat">Inspektorat</option>
                                        <option value="setda">Sekertariat Daerah</option>
                                        <option value="disdik">Dinas Pendidikan</option>
                                        <option value="dinkes">Dinas Kesehatan</option>
                                        <option value="dinsos">Dinas Sosial Pemberdayaan Perempuan dan Perlindungan Anak</option>
                                        <option value="satpolPP">Satuan Polisi Pamong Praja</option>
                                        <option value="disnaker">Dinas Ketenagakerjaan dan Transmigrasi</option>
                                        <option value="dlh">Dinas Lingkungan Hidup</option>
                                        <option value="disdukcapil">Dinas Kependudukan dan Pencatatan Sipil</option>
                                        <option value="dppkb">Dinas Pengendalian Penduduk dan Keluarga Berencana</option>
                                        <option value="dishub">Dinas Perhubungan</option>
                                        <option value="diskominfo">Dinas Komunikasi dan Informatika</option>
                                        <option value="diskoprindag">Dinas Koperasi Usaha Kecil dan Menengah Perdagangan dan Perindustrian</option>
                                        <option value="dpmptsp">Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</option>
                                        <option value="disporaparbud">Dinas Kepemudaan, Olahraga, Pariwisata, dan Kebudayaan</option>
                                        <option value="arsip">Dinas Kearsipan dan Perpustakaan</option>
                                        <option value="dispangtan">Dinas Pangan dan Pertanian</option>
                                        <option value="diskanak">Dinas Perikanan dan Perternakan</option>
                                        <option value="bapelitbangda">Badan Perencanaan Pembangunan Penelitian dan Pengembangan Daerah</option>
                                        <option value="bkad">Badan Keuangan dan Aset Daerah</option>
                                        <option value="bapenda">Badan Pendapatan Daerah</option>
                                        <option value="bkpsdm">Badan Kepegawaian dan Pengembangan Sumber Daya Manusia</option>
                                        <option value="bpdb">Badan Penanggulangan Bencana Daerah</option>
                                        <option value="dputr">Dinas Pekerjaan Umum dan Tata Ruang</option>
                                        <option value="damkar">Dinas Pemadam Kebakaran dan Penyelematan</option>
                                        <option value="distarkim">Dinas Perumahan dan Kawasa Permukiman</option>
                                        <option value="kesbangpol">Badan Kesatuan Bangsa dan Politik</option>
                                        <option value="dpmd">Dinas Pemberdayaan Masyarakat dan Desa</option>
                                        <option value="setwan">Sekertariat Dewan</option>
                                        <option value="bayu_asih">RSUD Bayu Asih</option>
                                        <option value="bps">Badan Pusat Statistik</option>
                                        <option value="kec_darangdan">Kecamatan Darangdan</option>
                                        <option value="kec_cibatu">Kecamatan Cibatu</option>
                                        <option value="kec_campaka">Kecamatan Campaka</option>
                                        <option value="kec_bungursari">Kecamatan Bungursari</option>
                                        <option value="kec_babakancikao">Kecamatan Babakancikao</option>
                                        <option value="kec_sukasari">Kecamatan Sukasari</option>
                                        <option value="kec_jatiluhur">Kecamatan Jatiluhur</option>
                                        <option value="kec_manis">Kecamatan Maniis</option>
                                        <option value="kec_tegalwaru">Kecamatan Tegalwaru</option>
                                        <option value="kec_plered">Kecamatan Plered</option>
                                        <option value="kec_sukatani">Kecamatan Sukatani</option>
                                        <option value="kec_bojong">Kecamatan Bojong</option>
                                        <option value="kec_kiarapedes">Kecamatan Kiarapedes</option>
                                        <option value="kec_wanayasa">Kecamatan Wanayasa</option>
                                        <option value="kec_pondoksalam">Kecamatan Pondoksalam</option>
                                        <option value="kec_pasawahan">Kecamatan Pasawahan</option>
                                        <option value="kec_purwakarta">Kecamatan Purwakarta</option>
                                        <option value="kec_nagrikidul">Kecamatan Nagri Kidul</option>
                                        <option value="kec_nagrikaler">Kecamatan Nagri Kaler</option>
                                        <option value="kec_nagritengah">Kecamatan Nagri Tengah</option>
                                        <option value="kec_sindangkasih">Kecamatan Sindangkasih</option>
                                        <option value="kec_cipaisan">Kecamatan Cipaisan</option>
                                        <option value="kec_purwamekar">Kecamatan Purwamekar</option>
                                        <option value="kec_cisereuh">Kecamatan Cisereuh</option>
                                        <option value="kec_tegalmunjul">Kecamatan Tegalmunjul</option>
                                        <option value="kec_munjuljaya">Kecamatan Munjuljaya</option>
                                        <option value="pus_purwakarta">Puskesmas Purwakarta</option>
                                        <option value="pus_munjuljaya">Puskesmas Munjuljaya</option>
                                        <option value="pus_koncara">Puskesmas Koncara</option>
                                        <option value="pus_campaka">Puskesmas Campaka</option>
                                        <option value="pus_jatiluhur">Puskesmas Jatiluhur</option>
                                        <option value="pus_plered">Puskesmas Plered</option>
                                        <option value="pus_sukatani">Puskesmas Sukatani</option>
                                        <option value="pus_darangdan">Puskesmas Darangdan</option>
                                        <option value="pus_manis">Puskesmas Maniis</option>
                                        <option value="pus_tegalwaru">Puskesmas Tegalwaru</option>
                                        <option value="pus_wanayasa">Puskesmas Wanayasa</option>
                                        <option value="pus_pasawahan">Puskesmas Pasawahan</option>
                                        <option value="pus_bojong">Puskesmas Bojong</option>
                                        <option value="pus_marancang">Puskesmas Maracang</option>
                                        <option value="pus_mulyamekar">Puskesmas Mulyamekar</option>
                                        <option value="pus_bungursari">Puskesmas Bungursari</option>
                                        <option value="pus_cibatu">Puskesmas Cibatu</option>
                                        <option value="pus_sukasari">Puskesmas Sukasari</option>
                                        <option value="pus_pondoksalam">Puskesmas Pondoksalam</option>
                                        <option value="pus_kiarapedes">Puskesmas Kiarapedes</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="tx-medium">Pengirim</label>
                                    <input type="text" class="form-control" name="nama_pengirim" id="nama_pengirim" placeholder="Nama Pengirim">
                                </div>
                                <div class="form-group">
                                    <label class="tx-medium">Penerima</label>
                                    <input type="text" class="form-control" name="nama_penerima" id="nama_penerima" placeholder="Nama Penerima">
                                </div>
                                <div class="form-group">
                                    <label class="tx-medium">Nama Dokumen</label>
                                    <input type="text" class="form-control" name="nama_dokumen" id="nama_dokumen" placeholder="Nama Dokumen" required>
                                </div>
                                <div class="form-group">
                                    <label>Kategori Dokumen:</label>
                                    <div>
                                        <input type="radio" id="pilihan1" name="option" value="pilihan1">
                                        <label for="pilihan1">Dokumen Kontrak Kegiatan</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="pilihan2" name="option" value="pilihan2">
                                        <label for="pilihan2">Dokumen Kerjasama</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="pilihan3" name="option" value="pilihan3">
                                        <label for="pilihan3">Dokumen Undangan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="tx-medium">Lampiran Dokumen</label>
                                    <input type="file" name="file_dokumen" id="file_dokumen" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="tx-medium">Keterangan</label>
                                    <textarea name="keterangan_masuk" rows="3" class="form-control">{{ old('keterangan_masuk') }}</textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit Dokumen</button>
                                <a href="admin/tambah_dokumen/insert" class="btn btn-danger">Cancel</a>
                            </div>

                            <!-- Submit Buttons -->
                        </div>
                    </div>
                </div>

                <!-- Template Form Dokumen Keluar -->
                <div class="row row-sm form-container" id="formKeluar" style="display: none;">
                    <div class="col-lg-12 col-md-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <h5>Form Dokumen Keluar</h5>
                                <div class="form-group">
                                    <label class="tx-medium">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal_dokumen" id="tanggal_dokumen" required>
                                </div>
                                <div class="form-group">
                                    <label for="namaDinas" class="tx-medium">Dinas</label>
                                    <select id="namaDinas" name="dinas_id" class="form-control">

                                        <!-- Option list remains unchanged -->
                                        <option value="" selected>Pilih</option>
                                        <option value="inspektorat">Inspektorat</option>
                                        <option value="setda">Sekertariat Daerah</option>
                                        <option value="disdik">Dinas Pendidikan</option>
                                        <option value="dinkes">Dinas Kesehatan</option>
                                        <option value="dinsos">Dinas Sosial Pemberdayaan Perempuan dan Perlindungan Anak</option>
                                        <option value="satpolPP">Satuan Polisi Pamong Praja</option>
                                        <option value="disnaker">Dinas Ketenagakerjaan dan Transmigrasi</option>
                                        <option value="dlh">Dinas Lingkungan Hidup</option>
                                        <option value="disdukcapil">Dinas Kependudukan dan Pencatatan Sipil</option>
                                        <option value="dppkb">Dinas Pengendalian Penduduk dan Keluarga Berencana</option>
                                        <option value="dishub">Dinas Perhubungan</option>
                                        <option value="diskominfo">Dinas Komunikasi dan Informatika</option>
                                        <option value="diskoprindag">Dinas Koperasi Usaha Kecil dan Menengah Perdagangan dan Perindustrian</option>
                                        <option value="dpmptsp">Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</option>
                                        <option value="disporaparbud">Dinas Kepemudaan, Olahraga, Pariwisata, dan Kebudayaan</option>
                                        <option value="arsip">Dinas Kearsipan dan Perpustakaan</option>
                                        <option value="dispangtan">Dinas Pangan dan Pertanian</option>
                                        <option value="diskanak">Dinas Perikanan dan Perternakan</option>
                                        <option value="bapelitbangda">Badan Perencanaan Pembangunan Penelitian dan Pengembangan Daerah</option>
                                        <option value="bkad">Badan Keuangan dan Aset Daerah</option>
                                        <option value="bapenda">Badan Pendapatan Daerah</option>
                                        <option value="bkpsdm">Badan Kepegawaian dan Pengembangan Sumber Daya Manusia</option>
                                        <option value="bpdb">Badan Penanggulangan Bencana Daerah</option>
                                        <option value="dputr">Dinas Pekerjaan Umum dan Tata Ruang</option>
                                        <option value="damkar">Dinas Pemadam Kebakaran dan Penyelematan</option>
                                        <option value="distarkim">Dinas Perumahan dan Kawasa Permukiman</option>
                                        <option value="kesbangpol">Badan Kesatuan Bangsa dan Politik</option>
                                        <option value="dpmd">Dinas Pemberdayaan Masyarakat dan Desa</option>
                                        <option value="setwan">Sekertariat Dewan</option>
                                        <option value="bayu_asih">RSUD Bayu Asih</option>
                                        <option value="bps">Badan Pusat Statistik</option>
                                        <option value="kec_darangdan">Kecamatan Darangdan</option>
                                        <option value="kec_cibatu">Kecamatan Cibatu</option>
                                        <option value="kec_campaka">Kecamatan Campaka</option>
                                        <option value="kec_bungursari">Kecamatan Bungursari</option>
                                        <option value="kec_babakancikao">Kecamatan Babakancikao</option>
                                        <option value="kec_sukasari">Kecamatan Sukasari</option>
                                        <option value="kec_jatiluhur">Kecamatan Jatiluhur</option>
                                        <option value="kec_manis">Kecamatan Maniis</option>
                                        <option value="kec_tegalwaru">Kecamatan Tegalwaru</option>
                                        <option value="kec_plered">Kecamatan Plered</option>
                                        <option value="kec_sukatani">Kecamatan Sukatani</option>
                                        <option value="kec_bojong">Kecamatan Bojong</option>
                                        <option value="kec_kiarapedes">Kecamatan Kiarapedes</option>
                                        <option value="kec_wanayasa">Kecamatan Wanayasa</option>
                                        <option value="kec_pondoksalam">Kecamatan Pondoksalam</option>
                                        <option value="kec_pasawahan">Kecamatan Pasawahan</option>
                                        <option value="kec_purwakarta">Kecamatan Purwakarta</option>
                                        <option value="kec_nagrikidul">Kecamatan Nagri Kidul</option>
                                        <option value="kec_nagrikaler">Kecamatan Nagri Kaler</option>
                                        <option value="kec_nagritengah">Kecamatan Nagri Tengah</option>
                                        <option value="kec_sindangkasih">Kecamatan Sindangkasih</option>
                                        <option value="kec_cipaisan">Kecamatan Cipaisan</option>
                                        <option value="kec_purwamekar">Kecamatan Purwamekar</option>
                                        <option value="kec_cisereuh">Kecamatan Cisereuh</option>
                                        <option value="kec_tegalmunjul">Kecamatan Tegalmunjul</option>
                                        <option value="kec_munjuljaya">Kecamatan Munjuljaya</option>
                                        <option value="pus_purwakarta">Puskesmas Purwakarta</option>
                                        <option value="pus_munjuljaya">Puskesmas Munjuljaya</option>
                                        <option value="pus_koncara">Puskesmas Koncara</option>
                                        <option value="pus_campaka">Puskesmas Campaka</option>
                                        <option value="pus_jatiluhur">Puskesmas Jatiluhur</option>
                                        <option value="pus_plered">Puskesmas Plered</option>
                                        <option value="pus_sukatani">Puskesmas Sukatani</option>
                                        <option value="pus_darangdan">Puskesmas Darangdan</option>
                                        <option value="pus_manis">Puskesmas Maniis</option>
                                        <option value="pus_tegalwaru">Puskesmas Tegalwaru</option>
                                        <option value="pus_wanayasa">Puskesmas Wanayasa</option>
                                        <option value="pus_pasawahan">Puskesmas Pasawahan</option>
                                        <option value="pus_bojong">Puskesmas Bojong</option>
                                        <option value="pus_marancang">Puskesmas Maracang</option>
                                        <option value="pus_mulyamekar">Puskesmas Mulyamekar</option>
                                        <option value="pus_bungursari">Puskesmas Bungursari</option>
                                        <option value="pus_cibatu">Puskesmas Cibatu</option>
                                        <option value="pus_sukasari">Puskesmas Sukasari</option>
                                        <option value="pus_pondoksalam">Puskesmas Pondoksalam</option>
                                        <option value="pus_kiarapedes">Puskesmas Kiarapedes</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="tx-medium">Pengirim</label>
                                    <input type="text" class="form-control" name="nama_pengirim" id="nama_pengirim" placeholder="Nama Pengirim">
                                </div>
                                <div class="form-group">
                                    <label class="tx-medium">Penerima</label>
                                    <input type="text" class="form-control" name="nama_penerima" id="nama_penerima" placeholder="Nama Penerima">
                                </div>
                                <div class="form-group">
                                    <label class="tx-medium">Nama Dokumen</label>
                                    <input type="text" class="form-control" name="nama_dokumen" id="nama_dokumen" placeholder="Nama Dokumen" required>
                                </div>
                                <div class="form-group">
                                    <label>Kategori Dokumen:</label>
                                    <div>
                                        <input type="radio" id="pilihan1" name="option" value="pilihan1">
                                        <label for="pilihan1">Dokumen Kontrak Kegiatan</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="pilihan2" name="option" value="pilihan2">
                                        <label for="pilihan2">Dokumen Kerjasama</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="pilihan3" name="option" value="pilihan3">
                                        <label for="pilihan3">Dokumen Undangan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="tx-medium">Lampiran Dokumen</label>
                                    <input type="file" name="file_dokumen" id="file_dokumen" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="tx-medium">Perlu Pengajuan ke Pimpinan?</label>
                                    <select name="pengajuan_ke_pimpinan" class="form-control">
                                        <option value="tidak" selected>Tidak</option>
                                        <option value="ya">Ya</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="tx-medium">Keterangan</label>
                                    <textarea name="keterangan_masuk" rows="3" class="form-control">{{ old('keterangan_masuk') }}</textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit Dokumen</button>
                                <a href="admin/tambah_dokumen/insert" class="btn btn-danger">Cancel</a>
                            </div>
                            <!-- Submit Buttons -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>

<!-- Script to toggle between forms based on document type -->
<script>
    document.getElementById('jenis_dokumen').addEventListener('change', function() {
        var type = this.value;
        var formMasuk = document.getElementById('formMasuk');
        var formKeluar = document.getElementById('formKeluar');

        // Reset visibility
        formMasuk.style.display = 'none';
        formKeluar.style.display = 'none';

        // Show form based on selected document type
        if (type === 'masuk') {
            formMasuk.style.display = 'block';
        } else if (type === 'keluar') {
            formKeluar.style.display = 'block';
        }
    });
</script>

@endsection
