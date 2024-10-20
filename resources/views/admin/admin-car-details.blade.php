@include('layouts.admin.head')

<body>
    <!-- Add Modal Start -->

    <!-- Add Modal End -->

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
                            <h1 class="page-title mb2">{{ $car->company->name }} - {{ $car->title }} -
                                {{ $car->year }}
                            </h1>
                            <nav class="breadcrumb-nav" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Car Details</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $car->company->name }} -
                                        {{ $car->title }} - {{ $car->year }}</li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                    <!-- Page Top End -->

                    <!-- Info Start -->
                    <div class="row">
                        <!-- Left Rows Start -->
                        <div class="col-xxl-8">
                            <!-- Info Card Start -->
                            <div class="row">
                                <div class="col-12 mb6">
                                    <div class="card shadow-card p6">
                                        <div class="row align-items-center">
                                            <div class="col-md-7 mobile-bottom-fix">
                                                <div class="w-100 height-280 img-fix rounded">
                                                    <img src="{{ asset('public/storage/' . $car->image) }}"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="row mb6">
                                                    <div class="col-5">
                                                        <span>Brand</span>
                                                    </div>
                                                    <div class="col-7">
                                                        <strong class="text-heading">{{ $car->company->name }}</strong>
                                                    </div>
                                                </div>
                                                <div class="row mb6">
                                                    <div class="col-5">
                                                        <span>Model</span>
                                                    </div>
                                                    <div class="col-7">
                                                        <strong class="text-heading">{{ $car->title }}</strong>
                                                    </div>
                                                </div>
                                                <div class="row mb6">
                                                    <div class="col-5">
                                                        <span>Year</span>
                                                    </div>
                                                    <div class="col-7">
                                                        <strong class="text-heading">{{ $car->year }}</strong>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-5">
                                                        <span>Status</span>
                                                    </div>
                                                    <div class="col-7">
                                                        @if ($car->status == true)
                                                            <span
                                                                class="badge rounded-pill badge-soft text-bg-success">Active
                                                            </span>
                                                        @else
                                                            <span
                                                                class="badge rounded-pill badge-soft text-bg-danger">Inactive
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-5">
                                                        <span>Action</span>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="col-md-6 text-start text-md-end">
                                                            <!-- Add Button Start-->
                                                            <form action="{{ Route('car_disaprove', $car->id) }}"
                                                                method="POST">
                                                                @method('POST')
                                                                @csrf
                                                                <button class="btn btn-danger ">Disable
                                                                    Car</button>
                                                            </form>
                                                            <!-- Add Button End-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Info Card End -->

                            <!-- Prices Start -->
                            <div class="row">
                                <div class="col-lg-6 mb6">
                                    <div class="card shadow-card p2">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="position-relative">
                                                    <div
                                                        class="z-2 position-relative p5 d-flex flex-row align-items-center justify-content-center">
                                                        <h6 class="m0 text-body">Price</h6>
                                                    </div>
                                                    <div
                                                        class="position-absolute w-100 h-100 start-0 bottom-0 bg-light rounded-top z-1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center p5">
                                            <div class="col-12 d-flex align-items-center justify-content-center">
                                                <h3 class="m0">{{ $car->price }}AED</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb6">
                                    <div class="card shadow-card p2">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="position-relative">
                                                    <div
                                                        class="z-2 position-relative p5 d-flex flex-row align-items-center justify-content-center">
                                                        <h6 class="m0 text-body">Mileage (KM)</h6>
                                                    </div>
                                                    <div
                                                        class="position-absolute w-100 h-100 start-0 bottom-0 bg-light rounded-top z-1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center p5">
                                            <div class="col-12 d-flex align-items-center justify-content-center">
                                                <h3 class="m0">{{ $car->mileage }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb6">
                                    <div class="card shadow-card p2">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="position-relative">
                                                    <div
                                                        class="z-2 position-relative p5 d-flex flex-row align-items-center justify-content-center">
                                                        <h6 class="m0 text-body">Price</h6>
                                                    </div>
                                                    <div
                                                        class="position-absolute w-100 h-100 start-0 bottom-0 bg-light rounded-top z-1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center p5">
                                            <div class="col-12 d-flex align-items-center justify-content-center">
                                                <h3 class="m0">{{ $car->price }}AED</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb6">
                                    <div class="card shadow-card p2">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="position-relative">
                                                    <div
                                                        class="z-2 position-relative p5 d-flex flex-row align-items-center justify-content-center">
                                                        <h6 class="m0 text-body">Mileage (KM)</h6>
                                                    </div>
                                                    <div
                                                        class="position-absolute w-100 h-100 start-0 bottom-0 bg-light rounded-top z-1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center p5">
                                            <div class="col-12 d-flex align-items-center justify-content-center">
                                                <h3 class="m0">{{ $car->mileage }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Prices End -->
                        </div>
                        <!-- Left Rows End -->

                        <!-- Map Start -->
                        {{-- <div class="col-xxl-4 mb6">
                            <div class="card shadow-card p6">
                                <div id="car-map" class="w-100 height-490 rounded"></div>
                            </div>
                        </div> --}}
                        <!-- Map End -->
                    </div>
                    <!-- Info End -->

                    <!-- Table & Calendar Start -->
                    {{-- <div class="row">
                        <!-- Table Start -->
                        <div class="col-xxl-8 mb6">
                            <div class="card shadow-card p6">
                                <div class="row align-items-center">
                                    <div class="col d-flex flex-row justify-content-between align-items-center">
                                        <h6 class="mb0">Prices</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive text-nowrap">
                                            <table class="table qd-table align-middle">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">SEASON</th>
                                                        <th scope="col">START</th>
                                                        <th scope="col">END</th>
                                                        <th scope="col" class="text-end">PRICE</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <strong class="text-heading">Season 1</strong>
                                                        </td>
                                                        <td>
                                                            <strong>Apr 1, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <strong>Apr 30, 2023</strong>
                                                        </td>
                                                        <td class="text-end">
                                                            <span
                                                                class="badge rounded-pill badge-soft text-bg-primary">$10,00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong class="text-heading">Season 2</strong>
                                                        </td>
                                                        <td>
                                                            <strong>May 1, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <strong>May 30, 2023</strong>
                                                        </td>
                                                        <td class="text-end">
                                                            <span
                                                                class="badge rounded-pill badge-soft text-bg-primary">$12,00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong class="text-heading">Season 3</strong>
                                                        </td>
                                                        <td>
                                                            <strong>Jun 1, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <strong>Aug 30, 2023</strong>
                                                        </td>
                                                        <td class="text-end">
                                                            <span
                                                                class="badge rounded-pill badge-soft text-bg-primary">$15,00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong class="text-heading">Season 4</strong>
                                                        </td>
                                                        <td>
                                                            <strong>Sep 1, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <strong>Oct 30, 2023</strong>
                                                        </td>
                                                        <td class="text-end">
                                                            <span
                                                                class="badge rounded-pill badge-soft text-bg-primary">$8,00</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    <!-- Table End -->

                    <!-- Calendar Start -->

                    <!-- Calendar End -->
                </div>
                <!-- Table & Calendar End -->

                <!-- Last Reservations Start -->
                {{-- <div class="row mb6">
                        <div class="col-12">
                            <div class="card shadow-card p6">
                                <div class="row align-items-center mb4">
                                    <div class="col d-flex flex-row justify-content-between align-items-center">
                                        <h6 class="mb0 d-inline">Last Reservations</h6>
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
                                            <table class="table qd-table mb6 align-middle">
                                                <thead>
                                                    <tr>
                                                        <th>CUSTOMER</th>
                                                        <th>PICK-UP</th>
                                                        <th>DROP-OFF</th>
                                                        <th>PAYMENT METHOD</th>
                                                        <th>EARNINGS</th>
                                                        <th class="text-end"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><strong class="text-heading">Weir Doe</strong></td>
                                                        <td>
                                                            <strong class="d-block mb1">Apr 9, 2023</strong>
                                                            <small class="d-block">1308 Midway Road</small>
                                                        </td>
                                                        <td>
                                                            <strong class="d-block mb1">Apr 12, 2023</strong>
                                                            <small class="d-block">3532 Ward Road</small>
                                                        </td>
                                                        <td><span
                                                                class="badge badge-soft rounded-pill text-bg-success">Cash</span>
                                                        </td>
                                                        <td><strong>$35,45</strong></td>
                                                        <td class="text-end">
                                                            <a class="btn btn-primary btn-soft"
                                                                href="projects-car-rental-reservation-details.html"><i
                                                                    data-feather="arrow-right" stroke-width="2"
                                                                    height="22" class="text-primary"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong class="text-heading">Quiche Hollandaise</strong>
                                                        </td>
                                                        <td>
                                                            <strong class="d-block mb1">Apr 5, 2023</strong>
                                                            <small class="d-block">4876 Emily Renzelli
                                                                Boulevard</small>
                                                        </td>
                                                        <td>
                                                            <strong class="d-block mb1">Apr 11, 2023</strong>
                                                            <small class="d-block">1607 Braxton Street</small>
                                                        </td>
                                                        <td><span
                                                                class="badge badge-soft rounded-pill text-bg-info">Credit
                                                                Card</span></td>
                                                        <td><strong>$26,45</strong></td>
                                                        <td class="text-end">
                                                            <a class="btn btn-primary btn-soft"
                                                                href="projects-car-rental-reservation-details.html"><i
                                                                    data-feather="arrow-right" stroke-width="2"
                                                                    height="22" class="text-primary"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong class="text-heading">Eric Widget</strong></td>
                                                        <td>
                                                            <strong class="d-block mb1">Apr 4, 2023</strong>
                                                            <small class="d-block">4115 Nancy Street</small>
                                                        </td>
                                                        <td>
                                                            <strong class="d-block mb1">Apr 9, 2023</strong>
                                                            <small class="d-block">4772 Roy Alley</small>
                                                        </td>
                                                        <td><span
                                                                class="badge badge-soft rounded-pill text-bg-success">Cash</span>
                                                        </td>
                                                        <td><strong>$120,45</strong></td>
                                                        <td class="text-end">
                                                            <a class="btn btn-primary btn-soft"
                                                                href="projects-car-rental-reservation-details.html"><i
                                                                    data-feather="arrow-right" stroke-width="2"
                                                                    height="22" class="text-primary"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong class="text-heading">Thomas R. Toe</strong></td>
                                                        <td>
                                                            <strong class="d-block mb1">Apr 3, 2023</strong>
                                                            <small class="d-block">4812 Heritage Road</small>
                                                        </td>
                                                        <td>
                                                            <strong class="d-block mb1">Apr 7, 2023</strong>
                                                            <small class="d-block">4366 Copperhead Road</small>
                                                        </td>
                                                        <td><span
                                                                class="badge badge-soft rounded-pill text-bg-info">Credit
                                                                Card</span></td>
                                                        <td><strong>$83,12</strong></td>
                                                        <td class="text-end">
                                                            <a class="btn btn-primary btn-soft"
                                                                href="projects-car-rental-reservation-details.html"><i
                                                                    data-feather="arrow-right" stroke-width="2"
                                                                    height="22" class="text-primary"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong class="text-heading">Samuel Serif</strong></td>
                                                        <td>
                                                            <strong class="d-block mb1">Apr 1, 2023</strong>
                                                            <small class="d-block">4904 Hershell Hollow Road</small>
                                                        </td>
                                                        <td>
                                                            <strong class="d-block mb1">Apr 10, 2023</strong>
                                                            <small class="d-block">673 Burnside Avenue</small>
                                                        </td>
                                                        <td><span
                                                                class="badge badge-soft rounded-pill text-bg-info">Credit
                                                                Card</span></td>
                                                        <td><strong>$247,67</strong></td>
                                                        <td class="text-end">
                                                            <a class="btn btn-primary btn-soft"
                                                                href="projects-car-rental-reservation-details.html"><i
                                                                    data-feather="arrow-right" stroke-width="2"
                                                                    height="22" class="text-primary"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center align-items-center">
                                                <li class="page-item">
                                                    <a class="page-link">
                                                        <i class="arrow" data-feather="chevron-left"
                                                            width="14"></i>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a>
                                                </li>
                                                <li class="page-item active"><a class="page-link"
                                                        href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">4</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">5</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">6</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">
                                                        <i class="arrow" data-feather="chevron-right"
                                                            width="14"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                <!-- Last Reservations End -->
            </div>
    </div>
    <!-- ***** Content End ***** -->

    <!-- ***** Footer Start ***** -->
    <script src="{{ asset('adminAssets/js/pages/projects/car-rental/car-details.js') }}" crossorigin="anonymous"></script>
    @include('layouts.admin.footer')
</body>



</html>
