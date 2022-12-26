@extends('auth.template.layout')

@section('title', 'Register')

@section('content')
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register Card -->
            <div class="card">
                <div class="card-body">
                    <div class="app-brand justify-content-center">
                        <img src="{{ asset('assetsHome/img/logo/logo.svg') }}" alt="">
                        </a>
                    </div>
                    <form id="formAuthentication" class="mb-3" action="{{url('register')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" autofocus />
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password">Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <button class="btn btn-primary d-grid w-100">Daftar</button>
                    </form>

                    <p class="text-center">
                        <span>Sudah memiliki akun?</span>
                        <a href="{{ url('login') }}">
                            <span>Silahkan Masuk</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- Register Card -->
        </div>
    </div>
@endsection
