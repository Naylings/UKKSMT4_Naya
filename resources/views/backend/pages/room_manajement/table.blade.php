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


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Room Table</h4>
                    <div class="row">
                        <div class="col-auto ms-auto">
                            <div class="btn-group mb-2 ">
                                <a role="button" href="{{ route('room.add')}}" class="btn btn-success">Add Room</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="alt-pagination-preview">
                            <table id="alternative-page-datatable" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Employee</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @forelse ($rooms as $item)
                                        <tr>
                                            <td>{{ $item->no }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                @if(isset($item->employeeHasRoom))
                                                {{ $item->employeeHasRoom->employee->people->name }}
                                            @else
                                                <a role="button" href="{{ route('employeeToRoom.add' ,[ "ruangan_id" => $item->id ]) }}" class="btn btn-primary">Assign
                                                    Employee</a>
                                                
                                            @endif 
                                            </td>
                                        </tr>
                                    @empty
                                    
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
