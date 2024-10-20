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
                            <h1 class="page-title mb2">Vendor - #{{ $user->id }}</h1>
                            <nav class="breadcrumb-nav" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Vendors</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">#{{ $user->id }}</li>
                                </ol>
                            </nav>
                        </div>
                        {{-- <div class="col-md-6 text-start text-md-end">
                            <!-- Buttons Start-->
                            <button class="btn btn-danger btn-soft btn-sm me2">Decline</button>
                            <button class="btn btn-success btn-sm">Accept</button>
                            <!-- Buttons End-->
                        </div> --}}
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
                                                            <span>Vendor ID</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">#{{ $user->id }}</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span> Vendor Name</span>
                                                        </td>
                                                        <td>
                                                            <strong
                                                                class="text-heading">{{ $user->vendor_name }}</strong>
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

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- General Information End -->

                        <!-- Customer Address Start -->
                        <div class="col-xxl-4 mb6">
                            <div class="card shadow-card p6">
                                <div class="row align-items-center mb2">
                                    <div class="col d-flex flex-row justify-content-between align-items-center">
                                        <h6 class="mb0">Vendor Address</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive text-nowrap">
                                            <table class="table qd-table align-middle mb0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <span>City</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">{{ $user->city }}</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>State</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">{{ $user->state }}</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Website</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">{{ $user->website }}</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Phone Number</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">{{ $user->phone_no }}</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Zip code</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">{{ $user->zip }}</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Country</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">United Arab Emirates</strong>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Customer Address End -->

                        <!-- Billing Address Start -->
                        <div class="col-xxl-4 mb6">
                            <div class="card shadow-card p6">
                                <div class="row align-items-center mb2">
                                    <div class="col d-flex flex-row justify-content-between align-items-center">
                                        <h6 class="mb0">Vendor Details</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive text-nowrap">
                                            <table class="table qd-table align-middle mb0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <span>Account Type</span>
                                                        </td>
                                                        <td>
                                                            <strong
                                                                class="text-heading">{{ $user->account_type }}</strong>
                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td>
                                                            <span>Description</span>
                                                        </td>
                                                        <td>
                                                            <strong
                                                                class="text-heading">{{ $user->description }}</strong>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Billing Address End -->
                    </div>
                    <!-- Info Cards End -->

                    <!-- Map Start -->

                    <!-- Map End -->

                    <!-- Info Start -->
                    <div class="row">
                        <!-- Left Rows Start -->
                        <div class="col-xxl-8 mb6">
                            <!-- Info Card Start -->
                            <div class="card shadow-card p6">
                                <div class="row align-items-center">
                                    <div class="col-md-7 mobile-bottom-fix">
                                        <div class="w-100 height-280 img-fix rounded">
                                            <img src="{{ asset('public/storage/' . $user->profile_picture) }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Info Card End -->
                        </div>
                        <!-- Left Rows End -->

                        <!-- Documents Start -->

                        <!-- Documents End -->
                    </div>
                    <!-- Info End -->
                </div>
            </div>
            <!-- ***** Content End ***** -->

            <!-- ***** Footer Start ***** -->
            <script src="{{ asset('adminAssets/js/pages/projects/car-rental/reservation-details.js') }}" crossorigin="anonymous">
            </script>
            @include('layouts.admin.footer')
