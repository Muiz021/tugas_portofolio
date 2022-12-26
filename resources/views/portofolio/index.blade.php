@extends('layout.layoutAdmin')

@section('title', 'Biodata')

@section('content')
    <div class="layout-container">
        <!-- Menu -->

        @include('layout.menuAdminLayout')

        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
            @include('layout.navAdminLayout')
            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">

                    <!-- Button trigger modal -->
                    @if (Auth::user()->portofolio == null)
                    <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Data
                    </button>
                    @endif

                    @include('portofolio.create')


                    <div class="row">
                        @if(session('message'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            {{ session('message') }}
                        </div>
                        @endif
                        <div class="card">
                            <h5 class="card-header">Portofolio</h5>
                            <div class="table-responsive text-nowrap">
                                @if($user->portofolio != null)
                                <table class="table table-bordered table-dark">
                                    <tr>
                                        <th width="10%"> NAMA</th>
                                        <td>{{$user->username}}</td>
                                    </tr>
                                    <tr>
                                        <th>TTL</th>
                                        <td>{{$user->portofolio->tempat,$user->portofolio->tanggal}}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>{{$user->portofolio->alamat}}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>{{$user->portofolio->jenis_kelamin}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tinggi Badan</th>
                                        <td>{{$user->portofolio->tinggi_badan}}</td>
                                    </tr>
                                    <tr>
                                        <th>Berat Badan</th>
                                        <td>{{$user->portofolio->berat_badan}}</td>
                                    </tr>
                                    <tr>
                                        <th>Agama</th>
                                        <td>{{$user->portofolio->agama}}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>{{$user->portofolio->status}}</td>
                                    </tr>
                                    <tr>
                                        <th>No HP</th>
                                        <td>{{$user->portofolio->no_hp}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{$user->portofolio->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Gambar</th>
                                        <td><img src="{{asset('storage/images/'.$user->portofolio->gambar)}}" height="20%" width="20%" alt=""></td>
                                    </tr>
                                    @include('portofolio.edit')
                            </table>
                            <button type="button" class="btn btn-success my-3 float-end" data-bs-toggle="modal" data-bs-target="#get-{{ $user->portofolio->id }}">
                                Edit Data
                            </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
    </div>
@endsection
