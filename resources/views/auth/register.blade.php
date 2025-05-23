@extends('auth.Auth')

@section('title')
    <title>Register | Aplikasi</title>
@endsection

@section('form')
    <div class="col-xxl-4 col-lg-5">
        <div class="card">
            <!-- Logo-->
            <div class="card-header py-4 text-center bg-primary">
                <a href="/">
                    <span><img src="{{ asset('assets/images/logo.png') }}" alt="logo" height="22"></span>
                </a>
            </div>

            <div class="card-body p-4">
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible text-bg-danger border-0 fade show" role="alert">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                        <strong>Error - </strong> {{ $errors->first() }}
                    </div>
                @endif

                <div class="text-center w-75 m-auto">
                    <h4 class="text-dark-50 text-center mt-0 fw-bold">Free Sign Up</h4>
                    <p class="text-muted mb-4">Don't have an account? Create your account, it takes less than a minute </p>
                </div>
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input class="form-control" name="name" type="text" id="name"
                            placeholder="Masukkan nama anda" required="">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input class="form-control" name="email" type="email" id="email" required=""
                            placeholder="Masukkan Email Anda">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group input-group-merge">
                            <input type="password" name="password" id="password" class="form-control" required
                                placeholder="Masukkan Password">
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="form-control" required placeholder="Konfirmasi password">
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-signup" required>
                            <label class="form-check-label" for="checkbox-signup">I accept <a href="#"
                                    class="text-muted">Terms and Conditions</a></label>
                        </div>
                    </div>

                    <div class="mb-3 text-center">
                        <button class="btn btn-primary" type="submit"> Sign Up </button>
                    </div>

                </form>
            </div> <!-- end card-body -->
        </div>
        <!-- end card -->

        <div class="row mt-3">
            <div class="col-12 text-center">
                <p class="text-muted">Already have account? <a href="/login" class="text-muted ms-1"><b>Log In</b></a></p>
            </div> <!-- end col-->
        </div>
        <!-- end row -->

    </div>
@endsection
