<!-- login/register modal-->
<div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center mt-2 mb-4">
                    <a href="index.php" class="text-success">
                        <span><img src="assets/images/logo-dark.png" alt="" height="18"></span>
                    </a>
                </div>
                <form action="#" class="ps-3 pe-3">
                    <div class="mb-3">
                        <label for="emailaddress1" class="form-label">Email address</label>
                        <input class="form-control" type="email" id="emailaddress1" required="" placeholder="john@deo.com">
                    </div>
                    <div class="mb-3">
                        <label for="password1" class="form-label">Password</label>
                        <input class="form-control" type="password" required="" id="password1" placeholder="Enter your password">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="customCheck2">
                            <label class="form-check-label" for="customCheck2">Remember me</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <a data-bs-target="#register" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn">Don't Have Account?</a>
                    </div>
                    <div class="mb-3 text-center">
                        <button class="btn rounded-pill btn-primary" type="submit">Sign In</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div id="register" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <div class="text-center mt-2 mb-4">
                    <a href="index.php" class="text-success">
                        <span><img src="assets/images/logo-dark.png" alt="" height="18"></span>
                    </a>
                </div>

                <form class="ps-3 pe-3" action="#">

                    <div class="mb-3">
                        <label for="username" class="form-label">Name</label>
                        <input class="form-control" type="email" id="username" required="" placeholder="Michael Zenaty">
                    </div>

                    <div class="mb-3">
                        <label for="emailaddress" class="form-label">Email address</label>
                        <input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="customCheck1">
                            <label class="form-check-label" for="customCheck1">I accept <a href="#">Terms and Conditions</a></label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <a data-bs-target="#login-modal" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn">Already Have Account?</a>
                    </div>

                    <div class="mb-3 text-center">
                        <button class="btn btn-primary" type="submit">Sign Up Free</button>
                    </div>

                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->