@extends('backend.master')

@section('title')
    <title>Student | Aplikasi</title>
@endsection

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="index.php">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">People</a></li>
                        <li class="breadcrumb-item active">Student</li>
                    </ol>
                </div>
                <h4 class="page-title">Student</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible text-bg-danger border-0 fade show" role="alert">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Error - </strong> {{ $errors->first() }}
        </div>
    @endif

    <div class="col">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Add Student</h4>

                <div class="tab-content">
                    <div class="tab-pane show active" id="basic-form-preview">
                        <form method="POST" action="{{ route('student.store') }}">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="status" value="active">
                                <input type="hidden" name="role" value="user">
                                <div class="mb-3 col-lg-3 col-md-4 col-sm-6">
                                    <label for="nis" class="form-label">NIS</label>
                                    <input type="number" required id="nis" name="nis" class="form-control">
                                </div>
                                <div class="mb-3 col-lg-3 col-md-4 col-sm-6">
                                    <label for="nisn" class="form-label">NISN</label>
                                    <input type="number" required id="nisn" name="nisn" class="form-control">
                                </div>

                                <div class="mb-3 col-lg-6 col-md-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" required id="email" name="email" class="form-control"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-lg-3 col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" required id="name" name="name" class="form-control">
                                </div>
                                <div class="mb-3 col-lg-3 col-md-6">
                                    <label for="Username" class="form-label">Username</label>
                                    <input type="text" required id="Username" name="username" class="form-control">
                                </div>
                                <div class="mb-3 col-lg-6 ">
                                    <label for="pob" class="form-label">Place And Date Of Birth</label>

                                    <div class="input-group input-group-merge">
                                        <input type="text" id="pob" required name="pob" class="form-control"
                                            placeholder="Place">
                                        <input class="form-control" required id="example-date" type="date"
                                            name="dob">
                                    </div>
                                </div>


                            </div>
                            <div class="row">

                                <div class="mb-3 col-lg-3 col-md-6">
                                    <p class="form-label">Jenis Kelamin</p>
                                    <div class=" mt-2">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="sex" required class="form-check-input"
                                                id="L" value="laki-laki">
                                            <label class="form-check-label" for="L">Laki - Laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="sex" class="form-check-input" id="P"
                                                value="perempuan">
                                            <label class="form-check-label" for="P">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-lg-3 col-md-6">
                                    <label for="saldo" class="form-label">Saldo</label>
                                    <input type="number" id="saldo" name="saldo" class="form-control">
                                </div>
                                <div class="mb-3 col-lg-6 col-md-12">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" name="password" required id="password"
                                            class="form-control" required placeholder="Masukkan Password">
                                        <input type="password" name="password_confirmation" required
                                            id="password_confirmation" class="form-control" required
                                            placeholder="Konfirmasi password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <div class="form-check">
                                        <input type="checkbox" name="role" value="admin" class="form-check-input"
                                            id="role-admin">
                                        <label class="form-check-label" for="role-admin">Set as Admin</label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div> <!-- end preview--><!-- end highlight-->
                </div> <!-- end preview code-->
            </div> <!-- end tab-content-->

        </div> <!-- end card-body-->
    </div> <!-- end card-->
@endsection
