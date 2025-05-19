@extends('auth.Auth')

@section('title')
    <title>Login | Aplikasi</title>
@endsection

@section('form')
    <div class="col-xxl-4 col-lg-5">
        <div class="card">

            <!-- Logo -->
            <div class="card-header py-4 text-center bg-primary">
                <a href="/">
                    <span><img src="{{ asset('assets/images/logo.png') }}" alt="logo" height="22"></span>
                </a>
            </div>

            <div class="card-body p-4">

                <div class="text-center w-75 m-auto">
                    <h4 class="text-dark-50 text-center pb-0 fw-bold">Log In</h4>
                    <p class="text-muted mb-4">Masukkan Email Dan Password Untuk Membuka Dashboard.</p>
                </div>

                <form action="{{ route('login.store') }}"  method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="emailaddress" class="form-label">Email</label>
                        <input class="form-control" name="email" type="email" id="emailaddress" required=""
                            placeholder="Masukkan Email Anda">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group input-group-merge">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password Anda" >
                            <div class="input-group-text" data-password="false">
                                <span class="password-eye"></span>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-signin"  name="remember" checked>
                            <label class="form-check-label" for="checkbox-signin" >Remember me</label>
                        </div>
                    </div>

                    <div class="mb-3 mb-0 text-center">
                        <button class="btn btn-primary" type="submit"> Log In </button>
                    </div>

                </form>
            </div> <!-- end card-body -->
        </div>
        <!-- end card -->

        <div class="row mt-3">
            <div class="col-12 text-center">
                <p class="text-muted">Don't have an account? <a href="/register" class="text-muted ms-1"><b>Sign
                            Up</b></a></p>
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- end col -->
@endsection
