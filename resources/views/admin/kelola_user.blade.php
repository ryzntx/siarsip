@extends('layout.index')
@section('title', 'Sekertaris')
@section('content')

<div class="main-content side-content pt-0">

    @if(session('pesan'))
        <div class="alert alert-primary">
            {{ session('pesan') }}
        </div>
    @endif
    <div class="main-container container-fluid">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">Tabel User</h2>

                </div>
                <div class="d-flex">
                    <a href="/admin/kelola_user/add">
                        <button type="button" class="btn btn-primary my-2 btn-icon-text">
                        <i class="ion ion-plus-circled"></i> Tambah User</button>
                    </a>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="table-responsive border">
                                <table class="table text-nowrap text-md-nowrap mg-b-0">

                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Nama</th>
                                            <th style="text-align: center;">Email</th>
                                            <th style="text-align: center;">Role</th>
                                            {{-- <th>Password</th> --}}
                                            <th style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($user as $data)
                                        <tr>
                                            <td style="text-align: center;">{{ $no++ }}</td>
                                            <td style="text-align: center;">{{ $data->name }}</td>
                                            <td style="text-align: center;">{{ $data->email }}</td>
                                            <td style="text-align: center;">{{ $data->role }}</td>
                                            {{-- <td>{{ $data->password }}</td> --}}
                                            <td style="text-align: center;">
                                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{ $data->id }}" >
                                                     <i class="fe fe-trash"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @foreach ($user as $data)
        <div class="modal modal-danger fade" id="delete{{ $data->id }}">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">{{ $data->name }}</h4>
                </div>
                <div class="modal-body">
                  <p>Apakah anda yakin ingin menghapus data ini?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                  <a href="{{ url('/admin/kelola_user/delete/'.$data->id ) }}" class="btn btn-outline">Yes</a>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>

    @endforeach

@endsection
