@extends('backend.master')

@section('title')
    <title>Room | Aplikasi</title>
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


    <div class="col">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Add Student</h4>

                <div class="tab-content">
                    <div class="tab-pane show active" id="basic-form-preview">
                        <form method="POST" action="{{ route('room_management.room.employeeToRoom') }}">
                            @csrf
                            <input type="hidden" name="ruangan_id" value="{{request()->ruangan_id}}">
                            <div class="row">
                                <div class="mb-3 col-lg-3 col-md-4 col-sm-6">
                                    <select name="employee_id">
                                        <option value="">Silangkan Pilih Pegawai</option>
                                        @foreach(
                                            $employees as $employee
                                        )
                                        <option  value="{{$employee->id}}">{{$employee->name?? 'Nama Tidak Ditemukan'}}</option>
                                        @endforeach
                                    </select>
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
