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
                <div class="container-fluid p0">
                    <!-- Mini Widgets Start -->
                    <div class="row">
                        <!-- Widget 1 Start -->
                        <div class="col-xxl-3 col-md-6 mb5">
                            <div class="bg-primary rounded-3 pt2 pb5 text-center">
                                <h6 class="text-white mb0">Total Car</h6>
                            </div>
                            <div class="card shadow-card p5 text-center mtn4">
                                <h1 class="mb1">48</h1>
                                <span>Vehicles available for rental</span>
                            </div>
                        </div>
                        <!-- Widget 1 End -->

                        <!-- Widget 2 Start -->
                        <div class="col-xxl-3 col-md-6 mb5">
                            <div class="bg-info rounded-3 pt2 pb5 text-center">
                                <h6 class="text-white mb0">Reservation</h6>
                            </div>
                            <div class="card shadow-card p5 text-center mtn4">
                                <h1 class="mb1">16</h1>
                                <span>New incoming reservations</span>
                            </div>
                        </div>
                        <!-- Widget 2 End -->

                        <!-- Widget 3 Start -->
                        <div class="col-xxl-3 col-md-6 mb5">
                            <div class="bg-success rounded-3 pt2 pb5 text-center">
                                <h6 class="text-white mb0">Faulty Vehicle</h6>
                            </div>
                            <div class="card shadow-card p5 text-center mtn4">
                                <h1 class="mb1">7</h1>
                                <span>Vehicles in maintenance</span>
                            </div>
                        </div>
                        <!-- Widget 3 End -->

                        <!-- Widget 4 Start -->
                        <div class="col-xxl-3 col-md-6 mb5">
                            <div class="bg-secondary rounded-3 pt2 pb5 text-center">
                                <h6 class="text-white mb0">Active Car</h6>
                            </div>
                            <div class="card shadow-card p5 text-center mtn4">
                                <h1 class="mb1">27</h1>
                                <span>Rented, unused cars</span>
                            </div>
                        </div>
                        <!-- Widget 4 End -->
                    </div>
                    <!-- Mini Widgets End -->

                    <!-- Analytics Row Start -->
                    <div class="row">
                        <!-- Chart Start -->
                        <div class="col-xxl-9 mb5">
                            <div class="card shadow-card">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4">
                                        <div class="bg-light h-100 p6 d-flex align-items-center">
                                            <div class="d-flex flex-column justify-content-start">
                                                <div class="border-bottom-dashed pb5 mb5">
                                                    <span class="d-block mb4">REVENUE</span>
                                                    <h4>$7.367,56</h4>
                                                </div>
                                                <div class="border-bottom-dashed pb5 mb5">
                                                    <span class="d-block mb4">ORDERS</span>
                                                    <h4>27</h4>
                                                </div>
                                                <div>
                                                    <span class="d-block mb4">AVG. ORDER VAL.</span>
                                                    <h4 class="mb0">$272,87</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-8 p6 pb4">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="mb0">Orders</h6>
                                            </div>
                                            <div class="col d-flex flex-row justify-content-end">
                                                <div class="dropdown">
                                                    <button type="button"
                                                        class="bg-transparent p0 outline-none dropdown-toggle arrow-none border height-30 rounded ps3"
                                                        data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <span class="text-body">Monthly</span>
                                                        <i data-feather="chevron-down" stroke-width="2" height="16"
                                                            class="text-heading"></i>
                                                    </button>
                                                    <ul class="dropdown-menu text-start">
                                                        <li><a class="dropdown-item" href="#">Today</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Last
                                                                Week</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Last
                                                                Month</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                href="#">
                                                                Current Year <i data-feather="info" stroke-width="2"
                                                                    height="12" class="text-body me1"
                                                                    data-bs-toggle="tooltip" data-bs-placement="left"
                                                                    data-bs-custom-class="qd-tooltip"
                                                                    data-bs-title="Only data from the beginning of the year to this time are shown."></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div id="chart26" class="chart26"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Chart End -->

                        <!-- Recent Activity Start -->
                        <div class="col-xxl-3 mb5">
                            <div class="card shadow-card p6">
                                <div class="row align-items-center mb5">
                                    <div class="col d-flex flex-row justify-content-between align-items-center">
                                        <h6 class="mb0 d-inline me3">Recent Activity</h6>
                                        <div class="dropdown">
                                            <button type="button"
                                                class="border-0 bg-transparent p0 outline-none dropdown-toggle arrow-none"
                                                data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i data-feather="more-horizontal" stroke-width="2" height="22"
                                                    class="text-body"></i>
                                            </button>
                                            <ul class="dropdown-menu text-start">
                                                <li><a class="dropdown-item" href="#">Today</a></li>
                                                <li><a class="dropdown-item" href="#">Last Week</a></li>
                                                <li><a class="dropdown-item" href="#">Last Month</a></li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                        href="#">
                                                        Current Year <i data-feather="info" stroke-width="2"
                                                            height="12" class="text-body me1"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Only data from the beginning of the year to this time are shown."></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div
                                            class="d-flex justify-content-start text-decoration-none border-bottom-dashed pb4 mb4">
                                            <div class="me3">
                                                <div
                                                    class="rounded-circle bg-primary-subtle width-40 height-40 d-flex align-items-center justify-content-center">
                                                    <i data-feather="map-pin" stroke-width="2" height="22"
                                                        class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-start">
                                                <strong class="text-heading me1">Arrived Customer</strong>
                                                <span class="mb1 text-body">#348 has been arrived</span>
                                                <span class="badge rounded-pill badge-soft text-bg-primary">3
                                                    minutes
                                                    ago</span>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex justify-content-start text-decoration-none border-bottom-dashed pb4 mb4">
                                            <div class="me3">
                                                <div
                                                    class="rounded-circle bg-info-subtle width-40 height-40 d-flex align-items-center justify-content-center">
                                                    <i data-feather="file-text" stroke-width="2" height="22"
                                                        class="text-info"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-start">
                                                <strong class="text-heading me1">Arrived New Car</strong>
                                                <span class="mb1 text-body">Car #27 has been arrived</span>
                                                <span class="badge rounded-pill badge-soft text-bg-info">7 minutes
                                                    ago</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start text-decoration-none">
                                            <div class="me3">
                                                <div
                                                    class="rounded-circle bg-success-subtle width-40 height-40 d-flex align-items-center justify-content-center">
                                                    <i data-feather="dollar-sign" stroke-width="2" height="22"
                                                        class="text-success"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-start">
                                                <strong class="text-heading me1">Arrived Passenger</strong>
                                                <span class="mb1 text-body">Customer #16 has been</span>
                                                <span class="badge rounded-pill badge-soft text-bg-success">12
                                                    minutes
                                                    ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Recent Activity End -->
                    </div>
                    <!-- Analytics Row End -->

                    <!-- Map & Table Row Start -->
                    <div class="row">
                        <!-- Map Start -->
                        <div class="col-xxl-6 mb5">
                            <div class="card shadow-card p5">
                                <div id="car-map" class="w-100 height-610 rounded"></div>
                            </div>
                        </div>
                        <!-- Map End -->

                        <!-- Table Start -->
                        <div class="col-xxl-6 mb5">
                            <div class="card shadow-card p6">
                                <div class="row align-items-center mb1">
                                    <div class="col d-flex flex-row justify-content-between align-items-center">
                                        <h6 class="mb0 d-inline me3">Last Reservations</h6>
                                        <div class="dropdown">
                                            <button type="button"
                                                class="border-0 bg-transparent p0 outline-none dropdown-toggle arrow-none"
                                                data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i data-feather="more-horizontal" stroke-width="2" height="22"
                                                    class="text-body"></i>
                                            </button>
                                            <ul class="dropdown-menu text-start">
                                                <li><a class="dropdown-item" href="#">Today</a></li>
                                                <li><a class="dropdown-item" href="#">Last Week</a></li>
                                                <li><a class="dropdown-item" href="#">Last Month</a></li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                        href="#">
                                                        Current Year <i data-feather="info" stroke-width="2"
                                                            height="12" class="text-body me1"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Only data from the beginning of the year to this time are shown."></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive text-nowrap">
                                            <table class="table qd-table mb0 align-middle">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="width-120 height-80 img-fix rounded">
                                                                <img src="assets/media/cars/1.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">VOLKSWAGEN</span>
                                                            <strong class="text-heading">Golf TSI 2017</strong>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">START</span>
                                                            <strong class="text-heading">Apr 9, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">END</span>
                                                            <strong class="text-heading">Apr 12, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge badge-soft text-bg-success">Active</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="width-120 height-80 img-fix rounded">
                                                                <img src="assets/media/cars/2.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">MERCEDES</span>
                                                            <strong class="text-heading">AMG GT 2019</strong>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">START</span>
                                                            <strong class="text-heading">Apr 5, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">END</span>
                                                            <strong class="text-heading">Apr 11, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-soft text-bg-danger">Cancel</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="width-120 height-80 img-fix rounded">
                                                                <img src="assets/media/cars/3.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">TOYOTA</span>
                                                            <strong class="text-heading">4Runner 2018</strong>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">START</span>
                                                            <strong class="text-heading">Apr 4, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">END</span>
                                                            <strong class="text-heading">Apr 9, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge badge-soft text-bg-success">Active</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="width-120 height-80 img-fix rounded">
                                                                <img src="assets/media/cars/4.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">NISSAN</span>
                                                            <strong class="text-heading">Altima 2020</strong>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">START</span>
                                                            <strong class="text-heading">Apr 3, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">END</span>
                                                            <strong class="text-heading">Apr 7, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge badge-soft text-bg-success">Active</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="width-120 height-80 img-fix rounded">
                                                                <img src="assets/media/cars/1.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">SUBARU</span>
                                                            <strong class="text-heading">Outback 2019</strong>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">START</span>
                                                            <strong class="text-heading">Apr 1, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">END</span>
                                                            <strong class="text-heading">Apr 10, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-soft text-bg-danger">Cancel</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Table End -->
                    </div>
                    <!-- Map & Table Row Start -->

                    <!-- Rental Calendar Start -->
                    <div class="row mb5">
                        <div class="col-12">
                            <div class="card shadow-card p6">
                                <div class="row mb4 align-items-center">
                                    <div class="col">
                                        <h6 class="mb0">Rental Calendar</h6>
                                    </div>
                                    <div class="col d-flex flex-row justify-content-end">
                                        <div class="dropdown">
                                            <button type="button"
                                                class="bg-transparent p0 outline-none dropdown-toggle arrow-none border height-30 rounded ps3"
                                                data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <span class="text-body">Last 3 Month</span>
                                                <i data-feather="chevron-down" stroke-width="2" height="16"
                                                    class="text-heading"></i>
                                            </button>
                                            <ul class="dropdown-menu text-start">
                                                <li><a class="dropdown-item" href="#">Last 6 Month</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Last 9 Month</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Last 12 Month</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                        href="#">
                                                        Current Year <i data-feather="info" stroke-width="2"
                                                            height="12" class="text-body me1"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Only data from the beginning of the year to this time are shown."></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="overflow-x-scroll">
                                                <div class="col-12 mb5">
                                                    <strong class="d-block mb2">April 2023</strong>
                                                    <div class="d-flex">
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            01</div>
                                                        <div
                                                            class="bg-warning-subtle text-warning p3 px-3 rounded me1">
                                                            02</div>
                                                        <div
                                                            class="bg-warning-subtle text-warning p3 px-3 rounded me1">
                                                            03</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            04</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            05</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            06</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            07</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            08</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            09</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            10</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            11</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            12</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            13</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            14</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            15</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            16</div>
                                                        <div
                                                            class="bg-primary-subtle text-primary p3 px-3 rounded me1">
                                                            17</div>
                                                        <div
                                                            class="bg-primary-subtle text-primary p3 px-3 rounded me1">
                                                            18</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            19</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            20</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            21</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            22</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            23</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            24</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            25</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            26</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            27</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            28</div>
                                                        <div class="bg-danger-subtle text-danger p3 px-3 rounded me1">
                                                            29</div>
                                                        <div class="bg-danger-subtle text-danger p3 px-3 rounded me1">
                                                            30</div>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb5">
                                                    <strong class="d-block mb2">May 2023</strong>
                                                    <div class="d-flex">
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            01</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            02</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            03</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            04</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            05</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            06</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            07</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            08</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            09</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            10</div>
                                                        <div
                                                            class="bg-warning-subtle text-warning p3 px-3 rounded me1">
                                                            11</div>
                                                        <div
                                                            class="bg-warning-subtle text-warning p3 px-3 rounded me1">
                                                            12</div>
                                                        <div
                                                            class="bg-warning-subtle text-warning p3 px-3 rounded me1">
                                                            13</div>
                                                        <div
                                                            class="bg-warning-subtle text-warning p3 px-3 rounded me1">
                                                            14</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            15</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            16</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            17</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            18</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            19</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            20</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            21</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            22</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            23</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            24</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            25</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            26</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            27</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            28</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            29</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            30</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            31</div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <strong class="d-block mb2">June 2023</strong>
                                                    <div class="d-flex">
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            01</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            02</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            03</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            04</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            05</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            06</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            07</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            08</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            09</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            10</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            11</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            12</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            13</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            14</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            15</div>
                                                        <div class="bg-danger-subtle text-danger p3 px-3 rounded me1">
                                                            16</div>
                                                        <div class="bg-danger-subtle text-danger p3 px-3 rounded me1">
                                                            17</div>
                                                        <div class="bg-danger-subtle text-danger p3 px-3 rounded me1">
                                                            18</div>
                                                        <div class="bg-light text-heading p3 px-3 rounded me1">19
                                                        </div>
                                                        <div
                                                            class="bg-primary-subtle text-primary p3 px-3 rounded me1">
                                                            20</div>
                                                        <div
                                                            class="bg-primary-subtle text-primary p3 px-3 rounded me1">
                                                            21</div>
                                                        <div
                                                            class="bg-primary-subtle text-primary p3 px-3 rounded me1">
                                                            22</div>
                                                        <div class="bg-light text-heading p3 px-3 rounded me1">23
                                                        </div>
                                                        <div class="bg-light text-heading p3 px-3 rounded me1">24
                                                        </div>
                                                        <div class="bg-light text-heading p3 px-3 rounded me1">25
                                                        </div>
                                                        <div class="bg-light text-heading p3 px-3 rounded me1">26
                                                        </div>
                                                        <div class="bg-light text-heading p3 px-3 rounded me1">27
                                                        </div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            28</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            29</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            30</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Rental Calendar End -->
                </div>
            </div>
            <!-- ***** Content End ***** -->

            <!-- ***** Footer Start ***** -->
            <!-- Page Specific Javascript -->
            <script src="{{ asset('adminAssets/js/pages/dashboards/dashboard-06.js') }}" crossorigin="anonymous"></script>

            @include('layouts.admin.footer')
