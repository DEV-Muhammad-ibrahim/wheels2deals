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
                            <h1 class="page-title mb2">Reservation - #2179</h1>
                            <nav class="breadcrumb-nav" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Reservations</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">#2179</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 text-start text-md-end">
                            <!-- Buttons Start-->
                            <button class="btn btn-danger btn-soft btn-sm me2">Decline</button>
                            <button class="btn btn-success btn-sm">Accept</button>
                            <!-- Buttons End-->
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
                                                            <span>Reservation ID</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">#2179</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Customer</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">Dylan Meringue</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Car</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">Volkswagen - Golf TSI
                                                                2017</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Pick-Up</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">Apr 9, 2023 -
                                                                13:00pm</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Drop-Off</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">Apr 12, 2023 -
                                                                14:00pm</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Price</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-primary">$256,32</strong>
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
                                        <h6 class="mb0">Customer Address</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive text-nowrap">
                                            <table class="table qd-table align-middle mb0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <span>Street</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">3542 Bryan Avenue</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>City</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">Eagan</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>State</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">Minnesota</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Phone Number</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">+1 651-406-5337</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Zip code</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">55121</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Country</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">United States</strong>
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
                                        <h6 class="mb0">Billing Address</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive text-nowrap">
                                            <table class="table qd-table align-middle mb0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <span>Street</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">512 Lowes Alley</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>City</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">Rio Grande</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>State</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">Ohio</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Phone Number</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">+1 740-245-8779</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Zip code</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">45674</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Country</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">United States</strong>
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
                    <div class="row mb6">
                        <div class="col-12">
                            <div class="card shadow-card p6">
                                <div id="map" class="w-100 height-400 rounded"></div>
                            </div>
                        </div>
                    </div>
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
                                            <img src="assets/media/cars/1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="row mb6">
                                            <div class="col-5">
                                                <span>Brand</span>
                                            </div>
                                            <div class="col-7">
                                                <strong class="text-heading">Volkswagen</strong>
                                            </div>
                                        </div>
                                        <div class="row mb6">
                                            <div class="col-5">
                                                <span>Model</span>
                                            </div>
                                            <div class="col-7">
                                                <strong class="text-heading">Golf TSI 2017</strong>
                                            </div>
                                        </div>
                                        <div class="row mb6">
                                            <div class="col-5">
                                                <span>Year</span>
                                            </div>
                                            <div class="col-7">
                                                <strong class="text-heading">2017</strong>
                                            </div>
                                        </div>
                                        <div class="row mb6">
                                            <div class="col-5">
                                                <span>License Plate</span>
                                            </div>
                                            <div class="col-7">
                                                <div class="border border-dark width-160 rounded overflow-hidden d-flex"
                                                    dir="ltr">
                                                    <div
                                                        class="bg-primary width-40 height-30 d-flex align-items-center justify-content-center text-white">
                                                        D</div>
                                                    <div
                                                        class="w-100 d-flex align-items-center justify-content-center bg-white">
                                                        <h6 class="mb0 text-dark">KA PA 777</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5">
                                                <span>Status</span>
                                            </div>
                                            <div class="col-7">
                                                <span
                                                    class="badge rounded-pill badge-soft text-bg-success">Published</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Info Card End -->
                        </div>
                        <!-- Left Rows End -->

                        <!-- Documents Start -->
                        <div class="col-xxl-4 mb6">
                            <div class="card shadow-card p6">
                                <div class="row align-items-center mb4">
                                    <div class="col d-flex flex-row justify-content-between align-items-center">
                                        <h6 class="mb0">Documents</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mb3">
                                        <a href="#"
                                            class="border border-dashed rounded overflow-hidden d-flex align-items-center justify-content-between text-decoration-none pe4">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <div
                                                    class="height-50 width-50 d-flex align-items-center justify-content-center bg-light me4">
                                                    <i data-feather="file" stroke-width="2" height="22"
                                                        class="text-body"></i>
                                                </div>
                                                <span class="text-heading">Reservation agreement</span>
                                            </div>
                                            <span class="badge rounded-pill badge-soft text-bg-info">PDF</span>
                                        </a>
                                    </div>
                                    <div class="col-12 mb3">
                                        <a href="#"
                                            class="border border-dashed rounded overflow-hidden d-flex align-items-center justify-content-between text-decoration-none pe4">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <div
                                                    class="height-50 width-50 d-flex align-items-center justify-content-center bg-light me4">
                                                    <i data-feather="file" stroke-width="2" height="22"
                                                        class="text-body"></i>
                                                </div>
                                                <span class="text-heading">Travel insurance</span>
                                            </div>
                                            <span class="badge rounded-pill badge-soft text-bg-info">PDF</span>
                                        </a>
                                    </div>
                                    <div class="col-12 mb3">
                                        <a href="#"
                                            class="border border-dashed rounded overflow-hidden d-flex align-items-center justify-content-between text-decoration-none pe4">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <div
                                                    class="height-50 width-50 d-flex align-items-center justify-content-center bg-light me4">
                                                    <i data-feather="image" stroke-width="2" height="22"
                                                        class="text-body"></i>
                                                </div>
                                                <span class="text-heading">Driver's license</span>
                                            </div>
                                            <span class="badge rounded-pill badge-soft text-bg-info">JPG</span>
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <a href="#"
                                            class="border border-dashed rounded overflow-hidden d-flex align-items-center justify-content-between text-decoration-none pe4">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <div
                                                    class="height-50 width-50 d-flex align-items-center justify-content-center bg-light me4">
                                                    <i data-feather="file-text" stroke-width="2" height="22"
                                                        class="text-body"></i>
                                                </div>
                                                <span class="text-heading">Car driving instructions</span>
                                            </div>
                                            <span class="badge rounded-pill badge-soft text-bg-info">PDF</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
