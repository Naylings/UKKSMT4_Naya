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


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Student Table</h4>
                    <div class="row">
                        <div class="col-auto ms-auto">
                            <div class="btn-group mb-2 ">
                                <a role="button" href="/dashboard/student/add" class="btn btn-success">Add Student</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="alt-pagination-preview">
                            <table id="alternative-page-datatable" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>NISN/NIS</th>
                                        <th>Name</th>
                                        <th>Sex</th>
                                        <th>place and date of birth</th>
                                        <th>Saldo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @forelse ($student as $item)
                                    <tr>
                                        <td>{{optional($item->reference)->nisn}} / {{optional($item->reference)->nis}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->sex}}</td>
                                        <td>{{$item->pob}} -- {{$item->dob}}</td>
                                        <td>Rp {{ number_format($item->reference->saldo->saldo ?? 0, 0, ',', '.')}}</td>
                                        <td>...</td>
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
