@extends('auth.template.layout')

@section('title', 'login')

@section('content')
<div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
            <div class="card-body">
                <!-- Logo -->
                <div class="app-brand justify-content-center">
                    <img src="{{ asset('assetsHome/img/logo/logo.svg') }}" alt="">
                    </a>
                </div>
                <!-- /Logo -->
                <form id="formAuthentication" class="mb-3" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Username</label>
                        <input type="text" class="form-control" id="email" name="username" placeholder="Masukan username" autofocus />
                    </div>
                    <div class="mb-3 form-password-toggle">
                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="password">Password</label>
                        </div>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary d-grid w-100" type="submit">Masuk</button>
                    </div>
                </form>

                <p class="text-center">
                    <span>Baru di platform kami?</span>
                    <a href="{{url('register')}}">
                        <span>Buat sebuah akun</span>
                    </a>
                </p>
            </div>
        </div>
        <!-- /Register -->
    </div>
</div>
@endsection
