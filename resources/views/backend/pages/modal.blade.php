@extends('backend.master')

@section('title')
    <title>Table | Aplikasi</title>
@endsection

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="index.php">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Master</a></li>
                        <li class="breadcrumb-item active">Modal</li>
                    </ol>
                </div>
                <h4 class="page-title">Modal</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Bootstrap Modals</h4>
                    <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="bs-modals-preview">

                            <!-- Standard modal content -->
                            <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog"
                                aria-labelledby="standard-modalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="standard-modalLabel">Modal Heading</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="mt-0">Text in a modal</h6>
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                            <hr>
                                            <h6>Overflowing text to show scroll behavior</h6>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                                facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                                vestibulum at eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                                sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                            <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio
                                                dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                            <!--  Modal content for the Large example -->
                            <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog"
                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                            <div class="modal fade" id="bs-example-modal-sm" tabindex="-1" role="dialog"
                                aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                            <!-- Full width modal content -->
                            <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog"
                                aria-labelledby="fullWidthModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-full-width">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="fullWidthModalLabel">Modal Heading</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="mt-0">Text in a modal</h6>
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                            <hr>
                                            <h6>Overflowing text to show scroll behavior</h6>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                                facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                                vestibulum at eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                                sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                            <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio
                                                dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                            <!-- Long Content Scroll Modal -->
                            <div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog"
                                aria-labelledby="scrollableModalTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="scrollableModalTitle">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                                facilisis in, egestas
                                                eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                                sagittis lacus vel augue
                                                laoreet rutrum faucibus dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna,
                                                vel scelerisque nisl
                                                consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                                fringilla.</p>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                                facilisis in, egestas
                                                eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                                sagittis lacus vel augue
                                                laoreet rutrum faucibus dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna,
                                                vel scelerisque nisl
                                                consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                                fringilla.</p>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                                facilisis in, egestas
                                                eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                                sagittis lacus vel augue
                                                laoreet rutrum faucibus dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna,
                                                vel scelerisque nisl
                                                consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                                fringilla.</p>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                                facilisis in, egestas
                                                eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                                sagittis lacus vel augue
                                                laoreet rutrum faucibus dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna,
                                                vel scelerisque nisl
                                                consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                                fringilla.</p>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                                facilisis in, egestas
                                                eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                                sagittis lacus vel augue
                                                laoreet rutrum faucibus dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna,
                                                vel scelerisque nisl
                                                consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                                fringilla.</p>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                                facilisis in, egestas
                                                eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus
                                                sagittis lacus vel augue
                                                laoreet rutrum faucibus dolor auctor.</p>
                                            <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur. Praesent
                                                commodo cursus magna, vel scelerisque nisl
                                                consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                                fringilla.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                            <div class="d-flex flex-wrap gap-2">
                                <!-- Standard  modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#standard-modal">Standard Modal</button>
                                <!-- Large modal -->
                                <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                    data-bs-target="#bs-example-modal-lg">Large Modal</button>
                                <!-- Small modal -->
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#bs-example-modal-sm">Small Modal</button>
                                <!-- Full width modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#full-width-modal">Full Width Modal</button>
                                <!-- Scrollable modal -->
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                    data-bs-target="#scrollable-modal">Scrollable Modal</button>
                            </div>

                        </div> <!-- end preview-->


                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

    </div>
    <!-- end row -->
@endsection
