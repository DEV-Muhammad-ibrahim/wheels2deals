@include('layouts.admin.head')

<body>
    <div class="app-root d-flex flex-column">
        <!-- ***** Sidebar Start ***** -->
        @include('layouts.admin.sidebar')

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
                            <h1 class="page-title mb2">Reservations</h1>
                            <nav class="breadcrumb-nav" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Reservations</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 text-start text-md-end">
                            <!-- Filter Dropdown Start-->
                            <div class="dropdown d-inline">
                                <button class="btn bg-white d-inline-flex align-items-center dropdown-toggle"
                                    data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i data-feather="filter" stroke-width="1.5" height="16"
                                        class="me2 text-body"></i>
                                    <span class="text-body">Filter</span>
                                </button>
                                <div class="dropdown-menu width-300 p0">
                                    <div class="border-bottom-dashed">
                                        <h6 class="mb0 p4 px-4">Filter Options</h6>
                                    </div>
                                    <div class="p5 px-4">
                                        <div class="row mb5">
                                            <div class="col-12 mb4">
                                                <label for="form-element-1" class="form-label">Status:</label>
                                                <select id="form-element-1" class="form-select js-choice">
                                                    <option value="">Select option</option>
                                                    <option value="1">New</option>
                                                    <option value="2">Accepted</option>
                                                    <option value="3">Canceled</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label for="form-element-2" class="form-label">Customer:</label>
                                                <input type="text" class="form-control" id="form-element-2"
                                                    placeholder="Customer Name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button class="btn btn-sm d-block w-100 btn-secondary btn-soft"
                                                    role="button">Reset</button>
                                            </div>
                                            <div class="col-6">
                                                <button class="btn btn-sm d-block w-100 btn-primary"
                                                    role="button">Apply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Filter Dropdown End-->
                        </div>
                    </div>
                    <!-- Page Top End -->

                    <!-- Mini Widgets Start -->
                    <div class="row mb2">
                        <!-- Widget 1 Start -->
                        <div class="col-xxl-4 mb5">
                            <div class="bg-primary rounded-3 pt2 pb5 text-center">
                                <h6 class="text-white mb0">Total Reservations</h6>
                            </div>
                            <div class="card shadow-card p5 text-center mtn4">
                                <h1 class="mb1">13,256</h1>
                                <span>Total number of bookings to date.</span>
                            </div>
                        </div>
                        <!-- Widget 1 End -->

                        <!-- Widget 2 Start -->
                        <div class="col-xxl-4 mb5">
                            <div class="bg-info rounded-3 pt2 pb5 text-center">
                                <h6 class="text-white mb0">New Reservations</h6>
                            </div>
                            <div class="card shadow-card p5 text-center mtn4">
                                <h1 class="mb1">48</h1>
                                <span>New incoming unchecked reservations.</span>
                            </div>
                        </div>
                        <!-- Widget 2 End -->

                        <!-- Widget 3 Start -->
                        <div class="col-xxl-4 mb5">
                            <div class="bg-success rounded-3 pt2 pb5 text-center">
                                <h6 class="text-white mb0">Canceled Reservations</h6>
                            </div>
                            <div class="card shadow-card p5 text-center mtn4">
                                <h1 class="mb1">27</h1>
                                <span>Bookings canceled by users.</span>
                            </div>
                        </div>
                        <!-- Widget 3 End -->
                    </div>
                    <!-- Mini Widgets End -->

                    <!-- Content Start -->
                    <div class="row mb5">
                        <div class="col-12">
                            <div class="card shadow-card p6 pt3">
                                <div class="table-responsive text-nowrap">
                                    <table class="table qd-table mb6 align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">CAR</th>
                                                <th scope="col">CUSTOMER</th>
                                                <th scope="col">PICK-UP</th>
                                                <th scope="col">DROP-OFF</th>
                                                <th scope="col">STATUS</th>
                                                <th scope="col">PRICE</th>
                                                <th scope="col" class="text-end">ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <strong class="text-heading">#2179</strong>
                                                </td>
                                                <td>
                                                    <strong>Volkswagen - Golf TSI 2017</strong>
                                                </td>
                                                <td>
                                                    <strong>Lance Bogrol</strong>
                                                </td>
                                                <td>
                                                    <strong class="d-block mb1">Apr 9, 2023</strong>
                                                    <small class="d-block">1308 Midway Road</small>
                                                </td>
                                                <td>
                                                    <strong class="d-block mb1">Apr 12, 2023</strong>
                                                    <small class="d-block">3532 Ward Road</small>
                                                </td>
                                                <td>
                                                    <span class="badge rounded-pill badge-soft text-bg-info">New</span>
                                                </td>
                                                <td>
                                                    <strong>$92,20</strong>
                                                </td>
                                                <td>
                                                    <div class="dropdown text-end">
                                                        <button type="button"
                                                            class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                            data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="text-heading">Actions</span>
                                                            <i data-feather="chevron-down" stroke-width="2"
                                                                height="16" class="text-heading"></i>
                                                        </button>
                                                        <ul class="dropdown-menu text-start">
                                                            <li><a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Details</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Delete <i data-feather="info" stroke-width="2"
                                                                        height="12" class="text-body me1"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="left"
                                                                        data-bs-custom-class="qd-tooltip"
                                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong class="text-heading">#2178</strong>
                                                </td>
                                                <td>
                                                    <strong>Mercedes - AMG GT 2019</strong>
                                                </td>
                                                <td>
                                                    <strong>Dylan Meringue</strong>
                                                </td>
                                                <td>
                                                    <strong class="d-block mb1">May 1, 2023</strong>
                                                    <small class="d-block">2647 Warner Street</small>
                                                </td>
                                                <td>
                                                    <strong class="d-block mb1">May 4, 2023</strong>
                                                    <small class="d-block">4717 Ray Court</small>
                                                </td>
                                                <td>
                                                    <span class="badge rounded-pill badge-soft text-bg-info">New</span>
                                                </td>
                                                <td>
                                                    <strong>$126,12</strong>
                                                </td>
                                                <td>
                                                    <div class="dropdown text-end">
                                                        <button type="button"
                                                            class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                            data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="text-heading">Actions</span>
                                                            <i data-feather="chevron-down" stroke-width="2"
                                                                height="16" class="text-heading"></i>
                                                        </button>
                                                        <ul class="dropdown-menu text-start">
                                                            <li><a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Details</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Delete <i data-feather="info" stroke-width="2"
                                                                        height="12" class="text-body me1"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="left"
                                                                        data-bs-custom-class="qd-tooltip"
                                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong class="text-heading">#2177</strong>
                                                </td>
                                                <td>
                                                    <strong>Toyota - 4Runner 2018</strong>
                                                </td>
                                                <td>
                                                    <strong>Phillip Anthropy</strong>
                                                </td>
                                                <td>
                                                    <strong class="d-block mb1">Jun 12, 2023</strong>
                                                    <small class="d-block">3246 Charter Street</small>
                                                </td>
                                                <td>
                                                    <strong class="d-block mb1">Jun 18, 2023</strong>
                                                    <small class="d-block">4674 Dale Avenue</small>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge rounded-pill badge-soft text-bg-success">Accepted</span>
                                                </td>
                                                <td>
                                                    <strong>$45,00</strong>
                                                </td>
                                                <td>
                                                    <div class="dropdown text-end">
                                                        <button type="button"
                                                            class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                            data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="text-heading">Actions</span>
                                                            <i data-feather="chevron-down" stroke-width="2"
                                                                height="16" class="text-heading"></i>
                                                        </button>
                                                        <ul class="dropdown-menu text-start">
                                                            <li><a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Details</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Delete <i data-feather="info" stroke-width="2"
                                                                        height="12" class="text-body me1"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="left"
                                                                        data-bs-custom-class="qd-tooltip"
                                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong class="text-heading">#2176</strong>
                                                </td>
                                                <td>
                                                    <strong>Nissan - Altima 2020</strong>
                                                </td>
                                                <td>
                                                    <strong>Eric Widget</strong>
                                                </td>
                                                <td>
                                                    <strong class="d-block mb1">May 8, 2023</strong>
                                                    <small class="d-block">4814 Griffin Street</small>
                                                </td>
                                                <td>
                                                    <strong class="d-block mb1">May 16, 2023</strong>
                                                    <small class="d-block">296 Kincheloe Road</small>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge rounded-pill badge-soft text-bg-success">Accepted</span>
                                                </td>
                                                <td>
                                                    <strong>$78,25</strong>
                                                </td>
                                                <td>
                                                    <div class="dropdown text-end">
                                                        <button type="button"
                                                            class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                            data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="text-heading">Actions</span>
                                                            <i data-feather="chevron-down" stroke-width="2"
                                                                height="16" class="text-heading"></i>
                                                        </button>
                                                        <ul class="dropdown-menu text-start">
                                                            <li><a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Details</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Delete <i data-feather="info" stroke-width="2"
                                                                        height="12" class="text-body me1"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="left"
                                                                        data-bs-custom-class="qd-tooltip"
                                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong class="text-heading">#2175</strong>
                                                </td>
                                                <td>
                                                    <strong>Subaru - Outback 2019</strong>
                                                </td>
                                                <td>
                                                    <strong>Douglas Lyphe</strong>
                                                </td>
                                                <td>
                                                    <strong class="d-block mb1">Jun 22, 2023</strong>
                                                    <small class="d-block">3190 Eagles Nest Drive</small>
                                                </td>
                                                <td>
                                                    <strong class="d-block mb1">Jun 28, 2023</strong>
                                                    <small class="d-block">3265 Morgan Street</small>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge rounded-pill badge-soft text-bg-success">Accepted</span>
                                                </td>
                                                <td>
                                                    <strong>$90,50</strong>
                                                </td>
                                                <td>
                                                    <div class="dropdown text-end">
                                                        <button type="button"
                                                            class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                            data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="text-heading">Actions</span>
                                                            <i data-feather="chevron-down" stroke-width="2"
                                                                height="16" class="text-heading"></i>
                                                        </button>
                                                        <ul class="dropdown-menu text-start">
                                                            <li><a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Details</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Delete <i data-feather="info" stroke-width="2"
                                                                        height="12" class="text-body me1"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="left"
                                                                        data-bs-custom-class="qd-tooltip"
                                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong class="text-heading">#2174</strong>
                                                </td>
                                                <td>
                                                    <strong>Volkswagen - Golf TSI 2017</strong>
                                                </td>
                                                <td>
                                                    <strong>Samuel Serif</strong>
                                                </td>
                                                <td>
                                                    <strong class="d-block mb1">Sep 1, 2023</strong>
                                                    <small class="d-block">263 Sunburst Drive</small>
                                                </td>
                                                <td>
                                                    <strong class="d-block mb1">Sep 7, 2023</strong>
                                                    <small class="d-block">3883 Traction Street</small>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge rounded-pill badge-soft text-bg-danger">Canceled</span>
                                                </td>
                                                <td>
                                                    <strong>$70,25</strong>
                                                </td>
                                                <td>
                                                    <div class="dropdown text-end">
                                                        <button type="button"
                                                            class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                            data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="text-heading">Actions</span>
                                                            <i data-feather="chevron-down" stroke-width="2"
                                                                height="16" class="text-heading"></i>
                                                        </button>
                                                        <ul class="dropdown-menu text-start">
                                                            <li><a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Details</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Delete <i data-feather="info" stroke-width="2"
                                                                        height="12" class="text-body me1"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="left"
                                                                        data-bs-custom-class="qd-tooltip"
                                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong class="text-heading">#2173</strong>
                                                </td>
                                                <td>
                                                    <strong>Toyota - 4Runner 2018</strong>
                                                </td>
                                                <td>
                                                    <strong>Bodrum Salvador</strong>
                                                </td>
                                                <td>
                                                    <strong class="d-block mb1">Sep 18, 2023</strong>
                                                    <small class="d-block">4327 Turnpike Drive</small>
                                                </td>
                                                <td>
                                                    <strong class="d-block mb1">Sep 26, 2023</strong>
                                                    <small class="d-block">2122 Kembery Drive</small>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge rounded-pill badge-soft text-bg-success">Accepted</span>
                                                </td>
                                                <td>
                                                    <strong>$146,50</strong>
                                                </td>
                                                <td>
                                                    <div class="dropdown text-end">
                                                        <button type="button"
                                                            class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                            data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="text-heading">Actions</span>
                                                            <i data-feather="chevron-down" stroke-width="2"
                                                                height="16" class="text-heading"></i>
                                                        </button>
                                                        <ul class="dropdown-menu text-start">
                                                            <li><a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Details</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Delete <i data-feather="info" stroke-width="2"
                                                                        height="12" class="text-body me1"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="left"
                                                                        data-bs-custom-class="qd-tooltip"
                                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong class="text-heading">#2172</strong>
                                                </td>
                                                <td>
                                                    <strong>Mercedes - AMG GT 2019</strong>
                                                </td>
                                                <td>
                                                    <strong>Elon Gated</strong>
                                                </td>
                                                <td>
                                                    <strong class="d-block mb1">May 16, 2023</strong>
                                                    <small class="d-block">3542 Bryan Avenue</small>
                                                </td>
                                                <td>
                                                    <strong class="d-block mb1">May 28, 2023</strong>
                                                    <small class="d-block">512 Lowes Alley</small>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge rounded-pill badge-soft text-bg-success">Accepted</span>
                                                </td>
                                                <td>
                                                    <strong>$256,32</strong>
                                                </td>
                                                <td>
                                                    <div class="dropdown text-end">
                                                        <button type="button"
                                                            class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                            data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="text-heading">Actions</span>
                                                            <i data-feather="chevron-down" stroke-width="2"
                                                                height="16" class="text-heading"></i>
                                                        </button>
                                                        <ul class="dropdown-menu text-start">
                                                            <li><a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Details</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Delete <i data-feather="info" stroke-width="2"
                                                                        height="12" class="text-body me1"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="left"
                                                                        data-bs-custom-class="qd-tooltip"
                                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong class="text-heading">#2171</strong>
                                                </td>
                                                <td>
                                                    <strong>Nissan - Altima 2020</strong>
                                                </td>
                                                <td>
                                                    <strong>Jake Weary</strong>
                                                </td>
                                                <td>
                                                    <strong class="d-block mb1">Jun 7, 2023</strong>
                                                    <small class="d-block">1134 Dovetail Drive</small>
                                                </td>
                                                <td>
                                                    <strong class="d-block mb1">Jun 16, 2023</strong>
                                                    <small class="d-block">1005 Coplin Avenue</small>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge rounded-pill badge-soft text-bg-success">Accepted</span>
                                                </td>
                                                <td>
                                                    <strong>$120,54</strong>
                                                </td>
                                                <td>
                                                    <div class="dropdown text-end">
                                                        <button type="button"
                                                            class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                            data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="text-heading">Actions</span>
                                                            <i data-feather="chevron-down" stroke-width="2"
                                                                height="16" class="text-heading"></i>
                                                        </button>
                                                        <ul class="dropdown-menu text-start">
                                                            <li><a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Details</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Delete <i data-feather="info" stroke-width="2"
                                                                        height="12" class="text-body me1"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="left"
                                                                        data-bs-custom-class="qd-tooltip"
                                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong class="text-heading">#2170</strong>
                                                </td>
                                                <td>
                                                    <strong>Volkswagen - Golf TSI 2017</strong>
                                                </td>
                                                <td>
                                                    <strong>Brian Cumin</strong>
                                                </td>
                                                <td>
                                                    <strong class="d-block mb1">Apr 9, 2023</strong>
                                                    <small class="d-block">4847 Alexander Drive</small>
                                                </td>
                                                <td>
                                                    <strong class="d-block mb1">Apr 12, 2023</strong>
                                                    <small class="d-block">2259 Timbercrest Road</small>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge rounded-pill badge-soft text-bg-danger">Canceled</span>
                                                </td>
                                                <td>
                                                    <strong>$60,30</strong>
                                                </td>
                                                <td>
                                                    <div class="dropdown text-end">
                                                        <button type="button"
                                                            class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                            data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="text-heading">Actions</span>
                                                            <i data-feather="chevron-down" stroke-width="2"
                                                                height="16" class="text-heading"></i>
                                                        </button>
                                                        <ul class="dropdown-menu text-start">
                                                            <li><a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Details</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                    href="#">
                                                                    Delete <i data-feather="info" stroke-width="2"
                                                                        height="12" class="text-body me1"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="left"
                                                                        data-bs-custom-class="qd-tooltip"
                                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center align-items-center">
                                        <li class="page-item">
                                            <a class="page-link">
                                                <i class="arrow" data-feather="chevron-left" width="14"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i class="arrow" data-feather="chevron-right" width="14"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Content End -->
                </div>
            </div>
            <!-- ***** Content End ***** -->

            <!-- ***** Footer Start ***** -->
            @include('layouts.admin.footer')
