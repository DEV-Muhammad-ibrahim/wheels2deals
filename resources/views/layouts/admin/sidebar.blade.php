<div class="app-sidebar ">
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
        <ul class="menu-group m-0 px-4 mb-2">
            <li class="sub-menu {{ request()->routeIs('admin_dashboard') ? 'active' : '' }}">
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

        <ul class="menu-group m-0 px-2 mb-2">
            <li
                class="sub-menu {{ request()->routeIs(['car_list', 'car_details', 'categories', 'add_category', 'features', 'add_feature', 'company', 'add_company', 'car_approval', 'car_approval_details', 'add_car', 'type', 'add_type', 'acessories', 'add_acessory']) ? 'active' : '' }} ">
                <a href="javascript:;" class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <i data-feather="monitor" stroke-width="1.5" height="18" class="me2"></i>
                        <span>Car Dealership</span>
                    </div>
                    <i class="arrow" data-feather="chevron-right" height="14"></i>
                </a>
                <ul class="sub-menu-group">
                    <li class="{{ request()->routeIs('car_list') ? 'active' : '' }}">
                        <a href="{{ Route('car_list') }}">
                            <span>Car List</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('add_car') ? 'active' : '' }}">
                        <a href="{{ Route('add_car') }}">
                            <span>Add Car</span>
                        </a>
                    </li>
                    {{-- <li class="{{ request()->routeIs('car_details') ? 'active' : '' }}">
                        <a href="{{ Route('car_details') }}">
                            <span>Car Details</span>
                        </a>
                    </li> --}}
                    <li class="{{ request()->routeIs('categories') ? 'active' : '' }}">
                        <a href="{{ Route('categories') }}">
                            <span>Categories</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('add_category') ? 'active' : '' }}">
                        <a href="{{ Route('add_category') }}">
                            <span>Add Category</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('features') ? 'active' : '' }}">
                        <a href="{{ Route('features') }}">
                            <span>Feature</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('add_feature') ? 'active' : '' }}">
                        <a href="{{ Route('add_feature') }}">
                            <span>Add Feature</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('company') ? 'active' : '' }}">
                        <a href="{{ Route('company') }}">
                            <span>Company</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('add_company') ? 'active' : '' }}">
                        <a href="{{ Route('add_company') }}">
                            <span>Add Company</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('type') ? 'active' : '' }}">
                        <a href="{{ Route('type') }}">
                            <span>Type</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('add_type') ? 'active' : '' }}">
                        <a href="{{ Route('add_type') }}">
                            <span>Add Type</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('car_approval') ? 'active' : '' }}">
                        <a href="{{ Route('car_approval') }}">
                            <span>Approvals</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('acessories') ? 'active' : '' }}">
                        <a href="{{ Route('acessories') }}">
                            <span>Accessories</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('add_acessory') ? 'active' : '' }}">
                        <a href="{{ Route('add_acessory') }}">
                            <span>Add Accessory</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="sub-menu {{ request()->routeIs(['all_users', 'all_vendors']) ? 'active' : '' }}">
                <a href="javascript:;" class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <i data-feather="user" stroke-width="1.5" height="18" class="me2"></i>
                        <span>Users</span>
                    </div>
                    <i class="arrow" data-feather="chevron-right" height="14"></i>
                </a>
                <ul class="sub-menu-group
                    {{ request()->routeIs('all_users') ? 'active' : '' }}">
                    <li class=" {{ request()->routeIs('all_users') ? 'active' : '' }}">
                        <a href="{{ Route('all_users') }}">
                            <span>Simple Users</span>
                        </a>
                    </li>
                    <li class=" {{ request()->routeIs('all_vendors') ? 'active' : '' }}">
                        <a href="{{ Route('all_vendors') }}">
                            <span>Vendors</span>
                        </a>
                    </li>

                </ul>
            </li>



        </ul>
        <!-- ***** Projects Menu End ***** -->

        <!-- ***** Apps Menu Start ***** -->

        <!-- ***** Apps Menu End ***** -->

        <!-- ***** Pages Menu Start ***** -->

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








        </ul>
        <!-- ***** Pages Menu End ***** -->





    </div>
    <!-- ***** Sidebar Menu End ***** -->

    <!-- ***** Sidebar Footer Start ***** -->

    <!-- ***** Sidebar Footer End ***** -->
</div>
