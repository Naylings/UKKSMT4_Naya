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
                        <li class="breadcrumb-item active">Room</li>
                    </ol>
                </div>
                <h4 class="page-title">Room</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="col">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Add Room</h4>

                <div class="tab-content">
                    <div class="tab-pane show active" id="basic-form-preview">
                        <form method="POST" action="{{ route('employeeToRoom.store',[]) }}">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col">
                                    <input type="hidden" name="ruangan_id" value="{{ request()->ruangan_id }}">

                                    <label for="employee" class="form-label">Employee</label>
                                    
                                    <select class="form-select" id="employee" name="employee_id">
                                        <option value="">-- Choose The Employee --</option>
                                        @forelse ($employee as $item)
                                            <option value="{{ $item->reference_id }}">{{ $item->name ?? 'Nama Tidak Ditemukan' }}</option>
                                        @empty
                                        <option value="">-- Employee Not Found  --</option>

                                        @endforelse
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
