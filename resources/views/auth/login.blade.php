<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Invoicer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg">

<div class="account-pages my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-6 p-5">
                                <div class="mx-auto mb-5">
                                    <a href="{{route('login')}}">
                                        <img src="assets/images/logo.png" alt="" height="24" />
                                        <h3 class="d-inline align-middle ml-1 text-logo">Invoicer</h3>
                                    </a>
                                </div>

                                <h6 class="h5 mb-0 mt-4">Welcome back!</h6>
                                <p class="text-muted mt-1 mb-4">Enter your username and password to
                                    access panel.</p>
                                @if(isset($error))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <i class=" fa fa-heart-broken" aria-hidden="true"></i>
                                        Error! {{$error}}
                                        <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                @if($errors->any())
                                    @foreach($errors->all() as $error)
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <i class=" fa fa-heart-broken" aria-hidden="true"></i>
                                            Error! {{$error}}
                                            <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endforeach
                                @endif

                                <form action="{{route('doLogin')}}" method="post" class="authentication-form">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">Username</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="user"></i>
                                                        </span>
                                            </div>
                                            <input type="text" class="form-control" name="username" value="{{old("username")}}">
                                        </div>
                                    </div>

                                    <div class="form-group mt-4">
                                        <label class="form-control-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="lock"></i>
                                                        </span>
                                            </div>
                                            <input type="password" class="form-control" name="password"
                                                   placeholder="Enter your password">
                                        </div>
                                    </div>


                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Log In
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6 d-none d-md-inline-block">
                                <img src="assets/images/lock.jpg" height="600px" width="500px">
                            </div>
                        </div>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->

<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>

</body>
</html>