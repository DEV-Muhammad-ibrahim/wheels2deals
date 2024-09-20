<div class="app-sidebar">
    <!-- ***** Logo Start ***** -->
    <div class="sidebar-logo d-flex justify-content-center">
        <a href="index.html">
            <img src="{{ asset('assets/images/logo.png') }}" height="30" alt="logo" />
        </a>
    </div>
    <!-- ***** Logo End ***** -->

    <!-- ***** Sidebar Menu Start ***** -->

    <div class="sidebar-menu custom-scroll pt-4">
        <!-- ***** Dashboards Menu Start ***** -->
        <ul class="menu-group m-0 px-4 mb-4">
            <li class="sub-menu active">
                <a href="{{ Route('admin_dashboard') }}" class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <i data-feather="home" stroke-width="1.5" height="20" class="me2"></i>
                        <span>Dashboard</span>
                    </div>

                </a>

            </li>
        </ul>
        <!-- ***** Dashboards Menu End ***** -->

        <!-- ***** Projects Menu Start ***** -->
        <div class="menu-title mb-2">
            <small>PROJECTS</small>
        </div>
        <ul class="menu-group m-0 px-4 mb-4">
            <li class="sub-menu">
                <a href="javascript:;" class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <i data-feather="monitor" stroke-width="1.5" height="18" class="me2"></i>
                        <span>Car Dealership</span>
                    </div>
                    <i class="arrow" data-feather="chevron-right" height="14"></i>
                </a>
                <ul class="sub-menu-group">
                    <li><a href="{{ Route('car_list') }}"><span>Car List</span></a></li>
                    <li><a href="{{ Route('car_details') }}"><span>Car Details</span></a></li>
                    <li><a href="{{ Route('car_approval') }}"><span>Approvals</span></a></li>
                    <li><a href="{{ Route('car_approval_details') }}"><span>Approval
                                Details</span></a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <i data-feather="user" stroke-width="1.5" height="18" class="me2"></i>
                        <span>Users</span>
                    </div>
                    <i class="arrow" data-feather="chevron-right" height="14"></i>
                </a>
                <ul class="sub-menu-group">
                    <li><a href="{{ Route('admin_account') }}"><span>Simple Users</span></a></li>
                    <li><a href="{{ Route('admin_settings') }}"><span>Vendors</span></a></li>

                </ul>
            </li>



        </ul>
        <!-- ***** Projects Menu End ***** -->

        <!-- ***** Apps Menu Start ***** -->
        <div class="menu-title mb-2">
            <small>APPS</small>
        </div>
        <ul class="menu-group m-0 px-4 mb-4">

            <li class="sub-menu">
                <a href="{{ Route('admin_chat') }}" class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <i data-feather="message-circle" stroke-width="1.5" height="18" class="me2"></i>
                        <span>Chat</span>
                    </div>

                </a>

            </li>









        </ul>
        <!-- ***** Apps Menu End ***** -->

        <!-- ***** Pages Menu Start ***** -->
        <div class="menu-title mb-2">
            <small>PAGES</small>
        </div>
        <ul class="menu-group m-0 px-4 mb-4">
            <li class="sub-menu">
                <a href="javascript:;" class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <i data-feather="user" stroke-width="1.5" height="18" class="me2"></i>
                        <span>Account & User</span>
                    </div>
                    <i class="arrow" data-feather="chevron-right" height="14"></i>
                </a>
                <ul class="sub-menu-group">
                    <li><a href="{{ Route('admin_account') }}"><span>Overview</span></a></li>
                    <li><a href="{{ Route('admin_settings') }}"><span>Settings</span></a></li>

                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <i data-feather="key" stroke-width="1.5" height="18" class="me2"></i>
                        <span>Authentication</span>
                    </div>
                    <i class="arrow" data-feather="chevron-right" height="14"></i>
                </a>
                <ul class="sub-menu-group">
                    <li><a href="{{ Route('admin_login') }}"><span>Sign-in</span></a></li>
                    <li><a href="{{ Route('admin_signup') }}"><span>Sign-up</span></a></li>
                    <li><a href="{{ Route('admin_reset_password') }}"><span>Reset Password</span></a></li>
                    <li><a href="{{ Route('admin_new_password') }}"><span>New Password</span></a></li>
                </ul>
            </li>






            <li class="single-menu">
                <a href="{{ Route('404') }}" class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <i data-feather="alert-circle" stroke-width="1.5" height="18" class="me2"></i>
                        <span>404 Error</span>
                    </div>
                </a>
            </li>
        </ul>
        <!-- ***** Pages Menu End ***** -->





    </div>
    <!-- ***** Sidebar Menu End ***** -->

    <!-- ***** Sidebar Footer Start ***** -->

    <!-- ***** Sidebar Footer End ***** -->
</div>
