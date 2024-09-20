<nav class="top-nav">
    <ul class="menu-group">
        <!-- ***** Dashboards Menu Start ***** -->
        <li class="sub-menu open-mega-menu">
            <a class="menu-link" href="{{ Route('admin_dashboard') }}">
                Dashboard

            </a>

        </li>
        <!-- ***** Dashboards Menu End ***** -->

        <!-- ***** Projects Menu Start ***** -->
        <li class="sub-menu open-mega-menu">
            <a class="menu-link" href="javascript:;">
                Projects
                <i class="arrow" data-feather="chevron-down" width="14"></i>
            </a>
            <div class="mega-menu-wrapper large-menu">
                <div class="mega-menu">
                    <div class="container-fluid">
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="menu-content">
                                    <div class="row">


                                        <div class="col-sm-3 mb-sm-1">
                                            <strong class="text-heading d-block mb-2">Car Dealership</strong>
                                            <ul class="mega-sub-menu">
                                                <li><a class="hover-primary" href="{{ Route('car_list') }}">Car
                                                        List</a></li>

                                                <li><a class="hover-primary" href="{{ Route('car_approval') }}"> Car
                                                        Aprrovals</a>
                                                </li>

                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <!-- ***** Projects Menu End ***** -->

        <!-- ***** Apps Menu Start ***** -->
        <li class="sub-menu open-sub-menu">
            <a class="menu-link" href="javascript:;">
                Apps
                <i class="arrow" data-feather="chevron-down" width="14"></i>
            </a>
            <div class="top-menu-group-wrapper">
                <ul class="top-menu-group">

                    <li class="top-sub-menu">
                        <a href="{{ Route('admin_chat') }}" class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <i data-feather="message-circle" stroke-width="1.5" height="18" class="me2"></i>
                                <span>Chat</span>
                            </div>

                        </a>
                    </li>









                </ul>
            </div>
        </li>
        <!-- ***** Apps Menu End ***** -->

        <!-- ***** Pages Menu Start ***** -->
        <li class="sub-menu open-sub-menu">
            <a class="menu-link" href="javascript:;">
                Pages
                <i class="arrow" data-feather="chevron-down" width="14"></i>
            </a>
            <div class="top-menu-group-wrapper">
                <ul class="top-menu-group">
                    <li class="top-sub-menu">
                        <a href="javascript:;" class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <i data-feather="user" stroke-width="1.5" height="18" class="me2"></i>
                                <span>Account & User</span>
                            </div>
                            <i class="arrow" data-feather="chevron-right" height="14"></i>
                        </a>
                        <div class="top-level-menu-wrapper">
                            <ul class="top-sub-menu-group">
                                <li><a class="d-flex align-items-center justify-content-between"
                                        href="{{ Route('admin_account') }}"><span>Account</span></a>
                                </li>
                                <li><a class="d-flex align-items-center justify-content-between"
                                        href="{{ Route('admin_settings') }}"><span>Settings</span></a>
                                </li>


                            </ul>
                        </div>
                    </li>
                    <li class="top-sub-menu">
                        <a href="javascript:;" class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <i data-feather="key" stroke-width="1.5" height="18" class="me2"></i>
                                <span>Authentication</span>
                            </div>
                            <i class="arrow" data-feather="chevron-right" height="14"></i>
                        </a>
                        <div class="top-level-menu-wrapper">
                            <ul class="top-sub-menu-group">
                                <li><a class="d-flex align-items-center justify-content-between"
                                        href="{{ Route('admin_login') }}"><span>Sign-in</span></a>
                                </li>
                                <li><a class="d-flex align-items-center justify-content-between"
                                        href="{{ Route('admin_signup') }}"><span>Sign-up</span></a>
                                </li>
                                <li><a class="d-flex align-items-center justify-content-between"
                                        href="{{ Route('admin_reset_password') }}"><span>Reset
                                            Password</span></a></li>
                                <li><a class="d-flex align-items-center justify-content-between"
                                        href="{{ Route('admin_new_password') }}"><span>New
                                            Password</span></a></li>
                            </ul>
                        </div>
                    </li>





                    <li>
                        <a href="{{ Route('admin_404') }}" class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <i data-feather="alert-circle" stroke-width="1.5" height="18" class="me2"></i>
                                <span>404 Error</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <!-- ***** Pages Menu End ***** -->

        <!-- ***** Help Menu Start ***** -->

        <!-- ***** Help Menu End ***** -->
    </ul>
</nav>
