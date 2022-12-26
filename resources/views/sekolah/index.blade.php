@extends('layout.layoutAdmin')

@section('title', 'Sekolah')

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
                    @if (Auth::user()->portofolio->sekolah == null)
                    <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Data
                    </button>
                    @endif
                    @include('sekolah.create')


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
                                @if($portofolio->sekolah != null)
                                <table class="table table-bordered table-dark">
                                    <tr>
                                        <th width="10%"> SD</th>
                                        <td>{{$portofolio->sekolah->sd}}</td>
                                    </tr>
                                    <tr>
                                        <th>SMP</th>
                                        <td>{{$portofolio->sekolah->smp}}</td>
                                    </tr>
                                    <tr>
                                        <th>SMA</th>
                                        <td>{{$portofolio->sekolah->smp}}</td>
                                    </tr>
                                    @include('sekolah.edit')
                            </table>
                            <button type="button" class="btn btn-success my-3 float-end" data-bs-toggle="modal" data-bs-target="#get-{{ $portofolio->sekolah->id }}">
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
