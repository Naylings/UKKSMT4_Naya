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


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Room Table</h4>
                    <div class="row">
                        <div class="col-auto ms-auto">
                            <div class="btn-group mb-2 ">
                                <a role="button" href="{{ route('room_management.room.create')}}" class="btn btn-success">Add Room</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="alt-pagination-preview">
                            <table id="alternative-page-datatable" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                    </tr>
                                </thead>


                                <tbody>
                                        
                                    @forelse ($rooms as $item)
                                    <tr>
                                        <td>{{$item->no}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>
                                            <div class="btn-group mb-2 ">
                                                @if(isset($item->employeeHasRoom))
                                                <td>{{$item->employeeHasRoom->employee->people->name}}</td>
                                                @else
                                                <a role="button" href="{{ route('room_management.room.viewEmployeeToRoom',
                                                [
                                                'ruangan_id' => $item->id
                                                ])}}" class="btn btn-success">Pilih Pegawai</a>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6">Tidak ada data karyawan.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div> <!-- end preview-->

                    </div> <!-- end tab-content-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->
@endsection
