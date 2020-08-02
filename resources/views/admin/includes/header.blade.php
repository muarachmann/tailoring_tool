<!-- main-header opened -->
<div class="main-header nav nav-item hor-header">
    <div class="container">
        <div class="main-header-left ">
            <a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a><!-- sidebar-toggle-->
            <a class="header-brand" href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('files.admin/img/brand/logo-white.png') }}" class="logo-white">
                <img src="{{ asset('files.admin/img/brand/logo.png') }}" class="logo-default">  
                <img src="{{ asset('files.admin/img/brand/favicon-white.png') }}" class="icon-white">
                <img src="{{ asset('files.admin/img/brand/favicon.png') }}" class="icon-default">
            </a>
        </div><!-- search -->
        <div class="main-header-right">
            <div class="nav nav-item nav-link" id="bs-example-navbar-collapse-1">
                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
										<button type="reset" class="btn btn-default">
											<i class="fas fa-times"></i>
										</button>
										<button type="submit" class="btn btn-default nav-link">
											<i class="fe fe-search"></i>
										</button>
									</span>
                    </div>
                </form>
            </div>
            <div class="nav nav-item  navbar-nav-right ml-auto">
                <div class="nav-item full-screen fullscreen-button">
                    <a class="new nav-link full-screen-link" href="#"><i class="fe fe-maximize"></i></span></a>
                </div>
                <div class="dropdown  nav-item main-header-message ">
                    <a class="new nav-link" href="#" ><i class="fe fe-mail"></i><span class=" pulse-danger"></span></a>
                    <div class="dropdown-menu">
                        <div class="menu-header-content bg-primary-gradient text-left d-flex">
                            <div class="">
                                <h6 class="menu-header-title text-white mb-0">5 new Messages</h6>
                            </div>
                            <div class="my-auto ml-auto">
                                <a class="badge badge-pill badge-warning float-right" href="#">Mark All Read</a>
                            </div>
                        </div>
                        <div class="main-message-list chat-scroll">
                            <a href="#" class="p-3 d-flex border-bottom">
                                <div class="  drop-img  cover-image  " data-image-src="https://laravel.spruko.com/azira/horizontal_light/assets/img/faces/3.jpg">
                                    <span class="avatar-status bg-teal"></span>
                                </div>

                                <div class="wd-90p">
                                    <div class="d-flex">
                                        <h5 class="mb-1 name">Paul Molive</h5>
                                        <p class="time mb-0 text-right ml-auto float-right">10 min ago</p>
                                    </div>
                                    <p class="mb-0 desc">I'm sorry but i'm not sure how...</p>
                                </div>
                            </a>
                            <a href="#" class="p-3 d-flex border-bottom">
                                <div class="drop-img cover-image" data-image-src="https://laravel.spruko.com/azira/horizontal_light/assets/img/faces/2.jpg">
                                    <span class="avatar-status bg-teal"></span>
                                </div>
                                <div class="wd-90p">
                                    <div class="d-flex">
                                        <h5 class="mb-1 name">Sahar Dary</h5>
                                        <p class="time mb-0 text-right ml-auto float-right">13 min ago</p>
                                    </div>
                                    <p class="mb-0 desc">All set ! Now, time to get to you now......</p>
                                </div>
                            </a>
                            <a href="#" class="p-3 d-flex border-bottom">
                                <div class="drop-img cover-image" data-image-src="https://laravel.spruko.com/azira/horizontal_light/assets/img/faces/9.jpg">
                                    <span class="avatar-status bg-teal"></span>
                                </div>
                                <div class="wd-90p">
                                    <div class="d-flex">
                                        <h5 class="mb-1 name">Khadija Mehr</h5>
                                        <p class="time mb-0 text-right ml-auto float-right">20 min ago</p>
                                    </div>
                                    <p class="mb-0 desc">Are you ready to pickup your Delivery...</p>
                                </div>
                            </a>
                            <a href="#" class="p-3 d-flex border-bottom">
                                <div class="drop-img cover-image" data-image-src="https://laravel.spruko.com/azira/horizontal_light/assets/img/faces/12.jpg">
                                    <span class="avatar-status bg-danger"></span>
                                </div>
                                <div class="wd-90p">
                                    <div class="d-flex">
                                        <h5 class="mb-1 name">Barney Cull</h5>
                                        <p class="time mb-0 text-right ml-auto float-right">30 min ago</p>
                                    </div>
                                    <p class="mb-0 desc">Here are some products ...</p>
                                </div>
                            </a>
                            <a href="#" class="p-3 d-flex border-bottom">
                                <div class="drop-img cover-image" data-image-src="https://laravel.spruko.com/azira/horizontal_light/assets/img/faces/5.jpg">
                                    <span class="avatar-status bg-teal"></span>
                                </div>
                                <div class="wd-90p">
                                    <div class="d-flex">
                                        <h5 class="mb-1 name">Petey Cruiser</h5>
                                        <p class="time mb-0 text-right ml-auto float-right">35 min ago</p>
                                    </div>
                                    <p class="mb-0 desc">I'm sorry but i'm not sure how...</p>
                                </div>
                            </a>
                        </div>
                        <div class="text-center dropdown-footer">
                            <a href="#">VIEW ALL</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown nav-item main-header-notification">
                    <a class="new nav-link" href="#"><i class="fe fe-bell"></i><span class=" pulse"></span></a>
                    <div class="dropdown-menu">
                        <div class="menu-header-content bg-primary-gradient text-left d-flex">
                            <div class="">
                                <h6 class="menu-header-title text-white mb-0">7 new Notifications</h6>
                            </div>
                            <div class="my-auto ml-auto">
                                <a class="badge badge-pill badge-warning float-right" href="#">Mark All Read</a>
                            </div>
                        </div>
                        <div class="main-notification-list Notification-scroll">
                            <a class="d-flex p-3 border-bottom" href="#">
                                <div class="notifyimg bg-success-transparent">
                                    <i class="la la-shopping-basket text-success"></i>
                                </div>
                                <div class="ml-3">
                                    <h5 class="notification-label mb-1">New Order Received</h5>
                                    <div class="notification-subtext">1 hour ago</div>
                                </div>
                                <div class="ml-auto" >
                                    <i class="las la-angle-right text-right text-muted"></i>
                                </div>
                            </a>
                            <a class="d-flex p-3 border-bottom" href="#">
                                <div class="notifyimg bg-danger-transparent">
                                    <i class="la la-user-check text-danger"></i>
                                </div>
                                <div class="ml-3">
                                    <h5 class="notification-label mb-1">22 verified registrations</h5>
                                    <div class="notification-subtext">2 hour ago</div>
                                </div>
                                <div class="ml-auto" >
                                    <i class="las la-angle-right text-right text-muted"></i>
                                </div>
                            </a>
                            <a class="d-flex p-3 border-bottom" href="#">
                                <div class="notifyimg bg-primary-transparent">
                                    <i class="la la-check-circle text-primary"></i>
                                </div>
                                <div class="ml-3">
                                    <h5 class="notification-label mb-1">Project has been approved</h5>
                                    <div class="notification-subtext">4 hour ago</div>
                                </div>
                                <div class="ml-auto" >
                                    <i class="las la-angle-right text-right text-muted"></i>
                                </div>
                            </a>
                            <a class="d-flex p-3 border-bottom" href="#">
                                <div class="notifyimg bg-pink-transparent">
                                    <i class="la la-file-alt text-pink"></i>
                                </div>
                                <div class="ml-3">
                                    <h5 class="notification-label mb-1">New files available</h5>
                                    <div class="notification-subtext">10 hour ago</div>
                                </div>
                                <div class="ml-auto" >
                                    <i class="las la-angle-right text-right text-muted"></i>
                                </div>
                            </a>
                            <a class="d-flex p-3 border-bottom" href="#">
                                <div class="notifyimg bg-warning-transparent">
                                    <i class="la la-envelope-open text-warning"></i>
                                </div>
                                <div class="ml-3">
                                    <h5 class="notification-label mb-1">New review received</h5>
                                    <div class="notification-subtext">1 day ago</div>
                                </div>
                                <div class="ml-auto" >
                                    <i class="las la-angle-right text-right text-muted"></i>
                                </div>
                            </a>
                            <a class="d-flex p-3" href="#">
                                <div class="notifyimg bg-purple-transparent">
                                    <i class="la la-gem text-purple"></i>
                                </div>
                                <div class="ml-3">
                                    <h5 class="notification-label mb-1">Updates Available</h5>
                                    <div class="notification-subtext">2 days ago</div>
                                </div>
                                <div class="ml-auto" >
                                    <i class="las la-angle-right text-right text-muted"></i>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-footer">
                            <a href="#">VIEW ALL</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown main-profile-menu nav nav-item nav-link">
                    <a class="profile-user d-flex" href=""><img src="https://laravel.spruko.com/azira/horizontal_light/assets/img/faces/6.jpg" alt="user-img" class="rounded-circle mCS_img_loaded"><span></span></a>
                    <div class="dropdown-menu">
                        <div class="main-header-profile header-img">
                            <div class="main-img-user"><img alt="" src="https://laravel.spruko.com/azira/horizontal_light/assets/img/faces/6.jpg"></div>
                            <h6>Petey Cruiser</h6><span>Premium Member</span>
                        </div>
                        <a class="dropdown-item" href=""><i class="far fa-user"></i> My Profile</a>
                        <a class="dropdown-item" href=""><i class="far fa-edit"></i> Edit Profile</a>
                        <a class="dropdown-item" href=""><i class="far fa-clock"></i> Activity Logs</a>
                        <a class="dropdown-item" href=""><i class="fas fa-sliders-h"></i> Account Settings</a>
                        <a class="dropdown-item" href="https://laravel.spruko.com/azira/horizontal_light/signin"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
                    </div>
                </div>
                <div class="dropdown main-header-message right-toggle">
                    <a class="nav-link pr-0" data-toggle="sidebar-right" data-target=".sidebar-right">
                        <i class="ion ion-md-menu tx-20 bg-transparent"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- main-header closed -->

<!--Horizontal-main -->
<div class="sticky">
    <div class="horizontal-main hor-menu clearfix side-header">
        <div class="horizontal-mainwrapper container clearfix">
            <!--Nav-->
            <nav class="horizontalMenu clearfix">
                <ul class="horizontalMenu-list">
                    <li aria-haspopup="true"><a href="{{ route('admin.dashboard') }}" class=""><i class="fe fe-airplay  menu-icon"></i> Dashboard</a></li>
                    <li aria-haspopup="true">
                        <a href="{{ route('admin.inventory.index') }}">
                            <i class="fe fe-scissors"></i> Inventory
                        </a>
                    </li>
                    <li aria-haspopup="true">
                        <a href="{{ route('admin.inventory.index') }}">
                            <i class="fe fe-users"></i> Customers
                        </a>
                    </li>
                    <li aria-haspopup="true">
                        <a href="{{ route('admin.inventory.index') }}">
                            <i class="fe fe-users"></i> Employees
                        </a>
                    </li>
                    <li aria-haspopup="true">
                        <a href="#">
                            <i class="fe fe-calendar"></i> My Calendar
                        </a>
                    </li>
                    <li aria-haspopup="true"><a href="https://laravel.spruko.com/azira/horizontal_light/#" class="sub-icon"><i class="fe fe-shopping-cart"></i> Products <span class="badge badge-warning horizontal-badge">hot</span><i class="fe fe-chevron-down horizontal-icon"></i></a>
                        <ul class="sub-menu">
                            <li aria-haspopup="true"><a href="#" class="slide-item"> Shirts</a></li>
                            <li aria-haspopup="true"><a href="#" class="slide-item">Trousers</a></li>
                            <li aria-haspopup="true"><a href="#" class="slide-item">Coat</a></li>
                        </ul>
                    </li>
                    <li aria-haspopup="true">
                        <a href="#" class="sub-icon"><i class="fe fe-bar-chart-2"></i> Statistics <span class="badge badge-success-gradient horizontal-badge">new</span><i class="fe fe-chevron-down horizontal-icon"></i></a>
                    </li>
                </ul>
            </nav>
            <!--Nav-->
        </div>
    </div>
</div>
<!--Horizontal-main -->
