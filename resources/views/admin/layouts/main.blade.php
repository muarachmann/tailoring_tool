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
    <title> Tailoring Tool | @yield('title') </title>

    <!--- Favicon -->
    <link rel="icon" href="#" type="image/x-icon"/>

    <!--- Icons css -->
    <link href="{{ asset('files.admin/css/icons.css') }}" rel="stylesheet">

    <!-- Owl-carousel css-->
    <link href="{{ asset('files.admin/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet"/>

    <!--- Right-sidemenu css -->
    <link href="{{ asset('files.admin/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

    <!--- Custom Scroll bar -->
    <link href="{{ asset('files.admin/plugins/mscrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet"/>

    <!--- Style css -->
    <link href="{{ asset('files.admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('files.admin/css/skin-modes.css') }}" rel="stylesheet">

    <!--- Sidemenu css -->
    <link href="{{ asset('files.admin/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

    <!--- Animations css -->
    <link href="{{ asset('files.admin/css/animate.css') }}" rel="stylesheet">

<body class="main-body app">

@include('admin.includes.header')

<!-- main-content opened -->
<div class="main-content horizontal-content">

    <!-- container opened -->
    <div class="container">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div>
                <h4 class="content-title mb-2">Hi, welcome back!</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Project</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex my-auto">
                <div class=" d-flex right-page">
                    <div class="d-flex justify-content-center mr-5">
                        <div class="">
									<span class="d-block">
										<span class="label ">EXPENSES</span>
									</span>
                            <span class="value">
										$53,000
									</span>
                        </div>
                        <div class="ml-3 mt-2">
                            <span class="sparkline_bar"></span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="">
									<span class="d-block">
										<span class="label">PROFIT</span>
									</span>
                            <span class="value">
										$34,000
									</span>
                        </div>
                        <div class="ml-3 mt-2">
                            <span class="sparkline_bar31"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /breadcrumb -->

        <!-- main-content-body -->
        <div class="main-content-body">

            @yield('content')

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /main-content -->

@include('admin.includes.right_sidebar')

@include('admin.includes.footer')


<!--- JQuery min js -->
<script src="{{ asset('files.admin/plugins/jquery/jquery.min.js') }}"></script>

<!--- Datepicker js -->
<script src="{{ asset('files.admin/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>

<!--- Bootstrap Bundle js -->
<script src="{{ asset('files.admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!--- Ionicons js -->
<script src="{{ asset('files.admin/plugins/ionicons/ionicons.js') }}"></script>

<!--- Chart bundle min js -->
<script src="{{ asset('files.admin/plugins/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('files.admin/plugins/chart.js/excanvas.js') }}"></script>
<script src="{{ asset('files.admin/plugins/chart.js/utils.js') }}"></script>
<!--- Index js -->
<script src="{{ asset('files.admin/js/index.js') }}"></script>

<!--- Moment js -->
<script src="{{ asset('files.admin/plugins/moment/moment.js') }}"></script>

<!--- JQuery sparkline js -->
<script src="{{ asset('files.admin/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

<!--- Sticky js -->
<script src="{{ asset('files.admin/js/sticky.js') }}"></script>

<!--- Perfect-scrollbar js -->
<script src="{{ asset('files.admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('files.admin/plugins/perfect-scrollbar/p-scroll.js') }}"></script>

<!--- Rating js -->
<script src="https://laravel.spruko.com/azira/horizontal_light/assets/plugins/rating/jquery.rating-stars.js"></script>
<script src="https://laravel.spruko.com/azira/horizontal_light/assets/plugins/rating/jquery.barrating.js"></script>

<!--- Custom Scroll bar Js -->
<script src="{{ asset('files.admin/plugins/custom-scroll/jquery.mCustomScrollbar.css') }}"></script>


<!--- Horizontalmenu js -->
<script src="{{ asset('files.admin/plugins/horizontal-menu/horizontal-menu.js') }}"></script>


<!--- Right-sidebar js -->
<script src="{{ asset('files.admin/plugins/sidebar/sidebar.js') }}"></script>
<script src="{{ asset('files.admin/plugins/sidebar/sidebar-custom.js') }}"></script>

<!--- Eva-icons js -->
<script src="{{ asset('files.admin/js/eva-icons.min.js') }}"></script>

<!--- Scripts js -->
<script src="{{ asset('files.admin/js/script.js') }}"></script>

<!--- Custom js -->
<script src="{{ asset('files.admin/js/custom.js') }}"></script>

</body>
</html>
