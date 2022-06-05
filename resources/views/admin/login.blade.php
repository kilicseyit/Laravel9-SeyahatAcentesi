
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>

    <link rel="stylesheet" href="/assets/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/admin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/assets/admin/assets/css/style.css">
    <link rel="shortcut icon" href="/assets/admin/assets/images/favicon.png" />


</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                <div class="card col-lg-4 mx-auto">
                    <div class="card-body px-5 py-5">
                        <h3 class="card-title text-left mb-3">Login</h3>
                        @include('home.messages')
                        <form action="{{route('loginadmincheck')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label> E-mail </label>
                                <input type="text" name="email" class="form-control p_input">
                            </div>
                            <div class="form-group">
                                <label>Password *</label>
                                <input type="text" name="password" class="form-control p_input">
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Remember me </label>
                                </div>
                                <a href="#" class="forgot-pass">Forgot password</a>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-facebook mr-2 col">
                                    <i class="mdi mdi-facebook"></i> Facebook </button>
                                <button class="btn btn-google col">
                                    <i class="mdi mdi-google-plus"></i> Google plus </button>
                            </div>
                            <p class="sign-up">Don't have an Account?<a href="/registeruser"> Sign Up</a></p>
                        </form>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<script src="/assets/admin/assets/vendors/js/vendor.bundle.base.js"></script>
<script src="/assets/admin/assets/js/off-canvas.js"></script>
<script src="/assets/admin/assets/js/hoverable-collapse.js"></script>
<script src="/assets/admin/assets/js/misc.js"></script>
<script src="/assets/admin/assets/js/settings.js"></script>
<script src="/assets/admin/assets/js/todolist.js"></script>
<!-- endinject -->
</body>
</html>
