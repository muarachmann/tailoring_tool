
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Tailoring Tool admin Dashboard">
    <meta name="Author" content="Mua Rachmann">
    <meta name="Keywords" content="tailoring tool, tailors, tailor made, coat, trousers, suits, shirts, admin, admin dashboard, admin template"/>
    <!-- Title -->
    <title> {{ env('APP_NAME') }} | Login</title>

    <!--- Favicon TODO favicon icon -->
    <link rel="icon" href="" type="image/x-icon"/>

    <!--- Style css -->
    <link href="{{ asset('files.admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('files.admin/css/skin-modes.css') }}" rel="stylesheet">

    <!--- Animations css -->
    <link href="{{ asset('files.admin/css/animate.css') }}" rel="stylesheet">

<body class="main-body">

<!-- Loader -->
<div id="global-loader">
    <img src="https://laravel.spruko.com/azira/horizontal_light/assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
</div>
<!-- /Loader -->
<!-- main-signin-wrapper -->
<div class="my-auto page page-h">
    <div class="main-signin-wrapper">
        <div class="main-card-signin d-md-flex wd-100p">
            <div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" >
                <div class="my-auto authentication-pages">
                    <div>
                        <img src="https://laravel.spruko.com/azira/horizontal_light/assets/img/brand/logo-white.png" class=" m-0 mb-4" alt="logo">
                        <h4 class="mb-4">Tailoring Tool</h4>
                        <p class="mb-5">Tailoring made easy and simple. Manage your inventory and worry not about the stitches</p>
                        <a href="https://laravel.spruko.com/azira/horizontal_light/index" class="btn btn-success">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="p-5 wd-md-50p">
                <div class="main-signin-header">
                    <h2>Welcome back!</h2>
                    <h4>Please sign in to continue</h4>
                    @if (session()->has('error'))
                        <div class="alert alert-danger alert-styled-left alert-bordered">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span>
                                <span class="sr-only">Close</span></button>
                            <span class="text-semibold">Ooops!</span> {{ session()->get("error") }}.
                        </div>
                    @endif
                    <form action="{{ route('admin.login.post') }}" method="post">
                        {{ @csrf_field() }}
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" placeholder="Enter your email" name="email"
                                   type="text" value="{{ old('email') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" id="password" placeholder="Enter your password" name="password"
                                   type="password" required>
                        </div><button class="btn btn-main-primary btn-block">Sign In</button>
                    </form>
                </div>
                <div class="main-signin-footer mt-3 mg-t-5">
                    <p>Forgot password? <a href="#">Click here.</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /main-sing_in-wrapper -->

<!--- JQuery min js -->
<script src="{{ asset('files.admin/plugins/jquery/jquery.min.js') }}"></script>

<!--- Bootstrap Bundle js -->
<script src="{{ asset('files.admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!--- Custom js -->
<script src="{{ asset('files.admin/js/custom.js') }}"></script>

</body>
</html>
