@extends('backend.master')

@section('title')
    <title>Order | Aplikasi</title>
@endsection

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="index.php">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Product</a></li>
                        <li class="breadcrumb-item active">Queue</li>
                    </ol>
                </div>
                <h4 class="page-title">Queue</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Queue Table</h4>
                    <div class="row">
                        <div class="col-auto ms-auto">
                            <div class="btn-group mb-2 ">
                                 <a role="button" href="{{ route('queue.history') }}" class="btn btn-success">Completed Order</a> 
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="alt-pagination-preview">
                            <table id="alternative-page-datatable" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Customer</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @forelse ($orders as $i => $item)
                                        <tr>
                                            <td>{{ $i + 1 }}</td>
                                            <td>{{ $item->student->people->name }}</td>
                                            <td>{{ $item->product->name }}</td>
                                            <td>Rp {{ number_format($item->product->price ?? 0, 0, ',', '.') }}</td>
                                            @php
                                                switch ($item->status) {
                                                    
                                                        case 0 : $status = 'PENDING'; break;
                                                        case 1 : $status = 'PROGRESS'; break;
                                                        case 2 : $status = 'COMPLETE'; break;
                                                    
                                                }
                                            @endphp
                                            <td>
                                                
                                                <div class="btn-group mb-2 ">
                                                    <a role="button"
                                                        href=""
                                                        class="btn btn-success">  
                                                        Accept
                                                    </a>
                                                    <a role="button"
                                                        href=""
                                                        class="btn btn-danger">Decline</a>
                                                </div>
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
