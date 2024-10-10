@include('layouts.admin.head')

<body>
    <div class="app-root d-flex flex-column">
        <!-- ***** Sidebar Start ***** -->
        @include('layouts.admin.sidebar')
        <!-- ***** Sidebar End ***** -->

        <!-- ***** Responsive Menu Backdrop Start ***** -->
        <div class="menu-backdrop"></div>
        <!-- ***** Responsive Menu Backdrop End ***** -->

        <!-- ***** Main Start ***** -->
        <main class="app-main">
            <!-- ***** Header Start ***** -->
            <header class="main-header d-flex justify-content-between">
                <!-- ***** Sidebar Menu Open Button Start ***** -->
                <a href="javascript:;" class="sidebar-menu-trigger"><span>Menu</span></a>
                <!-- ***** Sidebar Menu Open Button End ***** -->

                <!-- ***** Navbar Start ***** -->
                @include('layouts.admin.navbar')
                <!-- ***** Navbar End ***** -->


            </header>
            <!-- ***** Header End ***** -->

            <!-- ***** Content Start ***** -->
            <div class="app-content p6 pb2 smp1">
                <div class="container p0">
                    <!-- Page Top Start -->
                    <div class="row mb6 align-items-center">
                        <div class="col-md-6 mobile-bottom-fix">
                            <h1 class="page-title mb2">User - #{{ $user->id }}</h1>
                            <nav class="breadcrumb-nav" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">User</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">#{{ $user->id }}</li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                    <!-- Page Top End -->

                    <!-- Info Cards Start -->
                    <div class="row">
                        <!-- General Information Start -->
                        <div class="col-xxl-4 mb6">
                            <div class="card shadow-card p6">
                                <div class="row align-items-center mb2">
                                    <div class="col d-flex flex-row justify-content-between align-items-center">
                                        <h6 class="mb0">General Information</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive text-nowrap">
                                            <table class="table qd-table align-middle mb0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <span> ID</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">#{{ $user->id }}</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Customer</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">{{ $user->name }}</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Email</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">{{ $user->email }}</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Verified</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">
                                                                @if ($user->verified === 1)
                                                                    <div class="text-success">Verified</div>
                                                                @else
                                                                    <div class="text-danger">Not Verified</div>
                                                                @endif
                                                            </strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Account Type</span>
                                                        </td>
                                                        <td>
                                                            <strong
                                                                class="text-heading">{{ $user->account_type }}</strong>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- General Information End -->

                        <!-- Customer Address Start -->

                        <!-- Customer Address End -->

                        <!-- Billing Address Start -->

                        <!-- Billing Address End -->
                    </div>
                    <!-- Info Cards End -->

                    <!-- Map Start -->

                    <!-- Map End -->

                    <!-- Info Start -->

                    <!-- Info End -->
                </div>
            </div>
            <!-- ***** Content End ***** -->

            <!-- ***** Footer Start ***** -->
            <script src="{{ asset('adminAssets/js/pages/projects/car-rental/reservation-details.js') }}" crossorigin="anonymous">
            </script>
            @include('layouts.admin.footer')
