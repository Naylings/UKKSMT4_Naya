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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">People</a></li>
                        <li class="breadcrumb-item active">Product</li>
                    </ol>
                </div>
                <h4 class="page-title">Product</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="col">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Add Product</h4>

                <div class="tab-content">
                    <div class="tab-pane show active" id="basic-form-preview">
                        <form method="POST" action="{{ route('product.store') }}">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-lg-3 col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>

                                <div class="mb-3 col-lg-3 col-md-6">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="text" id="number" name="price" class="form-control">
                                </div>

                                <div class="mb-3 col-lg-3 col-md-6">
                                    <label for="Room" class="form-label">Room / Store</label>
                                    <select class="form-select" id="Room" name="ruangan_id">
                                        <option value="">-- Choose The Store --</option>
                                        @forelse ($rooms as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->no . ' - ' . $item->name ?? 'Nama Tidak Ditemukan' }}
                                            </option>
                                        @empty
                                            <option value="">-- Store Not Found --</option>
                                        @endforelse
                                    </select>
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
