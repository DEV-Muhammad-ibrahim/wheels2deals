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
                                <h1 class="mb1">{{ $totalCar }}</h1>

                            </div>
                        </div>
                        <!-- Widget 1 End -->

                        <!-- Widget 2 Start -->
                        <div class="col-xxl-3 col-md-6 mb5">
                            <div class="bg-info rounded-3 pt2 pb5 text-center">
                                <h6 class="text-white mb0">Active Cars</h6>
                            </div>
                            <div class="card shadow-card p5 text-center mtn4">
                                <h1 class="mb1">{{ $activeCar }}</h1>

                            </div>
                        </div>
                        <!-- Widget 2 End -->

                        <!-- Widget 3 Start -->
                        <div class="col-xxl-3 col-md-6 mb5">
                            <div class="bg-success rounded-3 pt2 pb5 text-center">
                                <h6 class="text-white mb0">In Active Cars</h6>
                            </div>
                            <div class="card shadow-card p5 text-center mtn4">
                                <h1 class="mb1">{{ $inActiveCar }}</h1>
                                <span></span>
                            </div>
                        </div>
                        <!-- Widget 3 End -->

                        <!-- Widget 4 Start -->
                        {{-- Acessories --}}
                        {{-- <div class="col-xxl-3 col-md-6 mb5">
                            <div class="bg-secondary rounded-3 pt2 pb5 text-center">
                                <h6 class="text-white mb0">Active Car</h6>
                            </div>
                            <div class="card shadow-card p5 text-center mtn4">
                                <h1 class="mb1">27</h1>
                                <span>Rented, unused cars</span>
                            </div>
                        </div> --}}
                        <!-- Widget 4 End -->
                    </div>
                    <!-- Mini Widgets End -->

                    <!-- Analytics Row Start -->

                    <!-- Analytics Row End -->

                    <!-- Map & Table Row Start -->
                    <!-- Map & Table Row Start -->
                    <div class="row mb5">
                        <div class="col-12">
                            <div class="card shadow-card p6 pt3">
                                <div class="table-responsive text-nowrap">
                                    <table class="table qd-table mb6 align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">Title</th>
                                                <th scope="col">Company</th>
                                                <th scope="col">YEAR</th>
                                                <th scope="col">LICENSE PLATE</th>
                                                <th scope="col">STATUS</th>
                                                <th scope="col" class="text-end">ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cars as $car)
                                                <tr>
                                                    <td>
                                                        <div class="d-inline-flex flex-row align-items-center">
                                                            <div class="width-120 height-80 img-fix rounded me4">
                                                                <img src="{{ asset('public/storage/' . $car->image) }}"
                                                                    alt="">
                                                            </div>
                                                            <strong>{{ $car->title }}</strong>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading">{{ $car->company->name }}</strong>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading">{{ $car->year }}</strong>
                                                    </td>
                                                    <td>
                                                        <div class="border border-dark width-160 rounded overflow-hidden d-flex flex-column bg-white"
                                                            dir="ltr">
                                                            <div class="text-heading text-center">
                                                                <small class="text-dark">UAE</small>
                                                            </div>
                                                            <div
                                                                class="w-100 d-flex align-items-center justify-content-center">
                                                                <h6 class="mb0 text-dark">
                                                                    {{ $car->registration_plate_no }}</h6>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td>
                                                        @if ($car->status == true)
                                                            <span
                                                                class="badge rounded-pill badge-soft text-bg-success">Active
                                                            </span>
                                                        @else
                                                            <span
                                                                class="badge rounded-pill badge-soft text-bg-danger">Inactive
                                                            </span>
                                                        @endif

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

                                                                <li><a class="dropdown-item"
                                                                        href="{{ Route('car_approve_details', $car->id) }}">Details</a>
                                                                </li>
                                                                <li>
                                                                    <form
                                                                        action="{{ route('delete_vehicle', $car->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('POST')
                                                                        <button type="submit"
                                                                            class="dropdown-item text-danger">Delete</button>

                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-lg-6 mobile-bottom-fix text-center text-lg-start">
                                        <span class="me1">Showing:</span>
                                        <span class="text-heading">{{ $cars->firstItem() }} to
                                            {{ $cars->lastItem() }} of {{ $cars->total() }}</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <nav aria-label="Page navigation example">
                                            <ul
                                                class="pagination justify-content-center justify-content-lg-end align-items-center">
                                                {{-- Previous Page Link --}}
                                                @if ($cars->onFirstPage())
                                                    <li class="page-item disabled">
                                                        <a class="page-link" tabindex="-1">
                                                            <i class="arrow" data-feather="chevron-left"
                                                                width="14"></i>
                                                        </a>
                                                    </li>
                                                @else
                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ $cars->previousPageUrl() }}">
                                                            <i class="arrow" data-feather="chevron-left"
                                                                width="14"></i>
                                                        </a>
                                                    </li>
                                                @endif

                                                {{-- Pagination Elements --}}
                                                @for ($i = 1; $i <= $cars->lastPage(); $i++)
                                                    @if ($i == $cars->currentPage())
                                                        <li class="page-item active"><a class="page-link"
                                                                href="#">{{ $i }}</a></li>
                                                    @else
                                                        <li class="page-item"><a class="page-link"
                                                                href="{{ $cars->url($i) }}">{{ $i }}</a>
                                                        </li>
                                                    @endif
                                                @endfor

                                                {{-- Next Page Link --}}
                                                @if ($cars->hasMorePages())
                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ $cars->nextPageUrl() }}">
                                                            <i class="arrow" data-feather="chevron-right"
                                                                width="14"></i>
                                                        </a>
                                                    </li>
                                                @else
                                                    <li class="page-item disabled">
                                                        <a class="page-link" tabindex="-1">
                                                            <i class="arrow" data-feather="chevron-right"
                                                                width="14"></i>
                                                        </a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Rental Calendar Start -->

                    <!-- Rental Calendar End -->
                </div>
            </div>
            <!-- ***** Content End ***** -->

            <!-- ***** Footer Start ***** -->
            <!-- Page Specific Javascript -->
            <script src="{{ asset('adminAssets/js/pages/dashboards/dashboard-06.js') }}" crossorigin="anonymous"></script>

            @include('layouts.admin.footer')
