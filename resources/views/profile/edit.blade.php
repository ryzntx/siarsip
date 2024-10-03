@extends('layout.index')
@section('title', 'Edit profil')

@section('content')
<div class="main-content side-content pt-0">

    <div class="main-container container-fluid">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">Profile</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </div>
            </div>
            <!-- End Page Header -->

            <div class="row square">
                <div class="col-lg-12 col-md-12">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="panel profile-cover" style="position: relative;">
                                <div class="profile-cover__img" style="position: absolute; bottom: -50px; left: 20px;">
                                    <img src="{{asset('storage/foto_profil/' . auth()->user()->photo_path)}}" alt="Profile picture of Sonia Taylor"
                                        style="border-radius: 50%; width: 100px; height: 100px; object-fit: cover; border: 3px solid white;" />
                                    <h3 class="h3" style="margin-top: 10px; font-weight: bold;">
                                        {{ auth()->user()->name }}</h3>
                                </div>
                                <div class="profile-cover__action bg-img"
                                    style="height: 200px; background-color: #d1e0ff;">
                                    <!-- Background atau konten tambahan bisa diisi di sini -->
                                </div>
                            </div>
                            <div class="profile-tab tab-menu-heading" style="margin-top: 100px;">
                                {{-- <nav class="nav main-nav-line p-3 tabs-menu profile-nav-line bg-gray-100">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#about">About</a>
                                    <a class="nav-link" data-bs-toggle="tab" href="#settings">Account Settings</a>
                                </nav> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12 col-md-12">
                    <div class="card custom-card main-content-body-profile">
                        <div class="main-content-body tab-pane p-4 border-top-0" id="settings">
                            <div class="card-header">
                                <div class="mb-4 main-content-label">Pengaturan Akun</div>
                            </div>
                            <div class="card-body" data-select2-id="12">
                                <div class="mb-4 border p-3">
                                    <div class="mb-4 main-content-label">Informasi Akun</div>

                                    <form action="{{ route('profile.update') }}" method="post" class="form-horizontal" data-select2-id="11" enctype="multipart/form-data">
                                        @csrf
                                        @method('patch')
                                        <div class="form-group ">
                                            <div class="row row-sm">
                                                <div class="col-md-3">
                                                    <label class="form-label">Nama</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="name"
                                                        value="{{auth()->user()->name}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row row-sm">
                                                <div class="col-md-3">
                                                    <label class="form-label">Email</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="email" class="form-control" placeholder="Email" name="email"
                                                        value="{{ auth()->user()->email}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row row-sm">
                                                <div class="col-md-3">
                                                    <label class="form-label">Foto Profil</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control" placeholder="Foto Profil" name="photo_path" accept="iamge/*">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary rounded-5">Simpan</button>
                                    </form>
                                </div>
                                <div class="mb-4 border p-3">
                                    <div class="mb-4 main-content-label">Perbaharui Sandi</div>
                                    <form action="{{ route('password.update') }}" class="form-horizontal" method="post">
                                        @csrf
                                        @method('put')
                                        <!-- Password Saat Ini -->
                                        <div class="form-group">
                                            <div class="row row-sm">
                                                <div class="col-md-3">
                                                    <label for="current_password" class="form-label">Password
                                                        Saat Ini</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="password" name="current_password" class="form-control"
                                                        placeholder="Password Saat Ini" required>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Password Baru -->
                                        <div class="form-group">
                                            <div class="row row-sm">
                                                <div class="col-md-3">
                                                    <label for="password" class="form-label">Password
                                                        Baru</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="password" name="password" class="form-control"
                                                        placeholder="Password Baru" required>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Konfirmasi Password Baru -->
                                        <div class="form-group">
                                            <div class="row row-sm">
                                                <div class="col-md-3">
                                                    <label for="password_confirmation" class="form-label">Konfirmasi
                                                        Password Baru</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="password" name="password_confirmation"
                                                        class="form-control" placeholder="Konfirmasi Password Baru"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary rounded-5">Perbaharui Sandi</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </div>
</div>
@endsection
