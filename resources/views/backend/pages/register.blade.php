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
                        <li class="breadcrumb-item active">Register</li>
                    </ol>
                </div>
                <h4 class="page-title">Register form</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="col">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Basic Register</h4>

                <div class="tab-content">
                    <div class="tab-pane show active" id="basic-form-preview">
                        <form>
                            <div class="mb-3">
                                <label for="username" class="form-label">Name</label>
                                <input class="form-control" type="email" id="username" required=""
                                    placeholder="Michael Zenaty">
                            </div>

                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Email address</label>
                                <input class="form-control" type="email" id="emailaddress" required=""
                                    placeholder="john@deo.com">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input class="form-control" type="password" required="" id="password"
                                    placeholder="Enter your password">
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                    <label class="form-check-label" for="customCheck1">I accept <a href="#">Terms and
                                            Conditions</a></label>
                                </div>
                            </div>

                            <div class="mb-3 text-center">
                                <button class="btn btn-primary" type="submit">Sign Up Free</button>
                            </div>

                        </form>
                    </div> <!-- end preview-->

                    <div class="tab-pane code" id="basic-form-code">
                        <button class="btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                        <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;form&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label for=&quot;exampleInputEmail1&quot; class=&quot;form-label&quot;&gt;Email address&lt;/label&gt;
                                                                &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleInputEmail1&quot; aria-describedby=&quot;emailHelp&quot; placeholder=&quot;Enter email&quot;&gt;
                                                                &lt;small id=&quot;emailHelp&quot; class=&quot;form-text text-muted&quot;&gt;We'll never share your email with anyone else.&lt;/small&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label for=&quot;exampleInputPassword1&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
                                                                &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;exampleInputPassword1&quot; placeholder=&quot;Password&quot;&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;div class=&quot;form-check&quot;&gt;
                                                                    &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;checkmeout0&quot;&gt;
                                                                    &lt;label class=&quot;form-check-label&quot; for=&quot;checkmeout0&quot;&gt;Check me out !&lt;/label&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
                                                        &lt;/form&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                    </div> <!-- end preview code-->
                </div> <!-- end tab-content-->

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
@endsection
