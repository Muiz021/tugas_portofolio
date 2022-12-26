@extends('layout.layoutAdmin')

@section('title', 'Project')

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
                    <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Data
                    </button>
                    @include('project.create')


                    <div class="row">
                        @if(session('message'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            {{ session('message') }}
                        </div>
                        @endif
                        <div class="card">
                            <h5 class="card-header">Project</h5>
                            <div class="table-responsive text-nowrap">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($project as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td><img src="{{asset('/storage/images/'.$item->gambar)}}" width="100px" height="80px" alt=""></td>
                                        <td>{{$item->judul}}</td>
                                        <td>{{$item->deskripsi}}</td>
                                        <td>
                                            <a href="{{url('/delete-project/'.$item->id)}}" class="badge bg-danger"><i class="bi bi-trash-fill"></i></a>
                                            <a data-bs-toggle="modal" data-bs-target="#get-{{ $item->id }}" class="badge bg-success"><i class="bi bi-exclamation-square-fill"></i></a>
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
            <div class="content-backdrop fade"></div>
            @foreach ($project as $edit)
            <tr>
                <td>
                    @include('project.edit')
                </td>
            </tr>
            @endforeach
        </div>
        <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
    </div>
@endsection
