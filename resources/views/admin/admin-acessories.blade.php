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
                            <h1 class="page-title mb2">Accessory List</h1>
                            <nav class="breadcrumb-nav" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Accessory List</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 text-start text-md-end">
                            <!-- Filter Dropdown Start-->

                            <!-- Filter Dropdown End-->

                            <!-- Add Button Start-->

                            <a href="{{ Route('add_acessory') }}" class="btn btn-primary">Add
                                Accessory</a>

                            <!-- Add Button End-->
                        </div>
                    </div>

                    <!-- Mini Widgets End -->
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Content Start -->
                    <div class="row mb5">
                        <div class="col-12">
                            <div class="card shadow-card p6 pt3">
                                <div class="table-responsive text-nowrap">
                                    <table class="table qd-table mb6 align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Company</th>
                                                <th scope="col">Compatibility</th>
                                                <th scope="col">Price</th>
                                                <th scope="col" class="text-end">ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($accessories as $accessory)
                                                <tr>
                                                    <td>
                                                        <div class="d-inline-flex flex-row align-items-center">
                                                            <div class="width-120 height-80 img-fix rounded me4">
                                                                <img src="{{ asset('storage/' . $accessory->image) }}"
                                                                    alt="">
                                                            </div>
                                                            <strong>{{ $accessory->name }}</strong>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading">{{ $accessory->company }}</strong>
                                                    </td>
                                                    <td>
                                                        <strong
                                                            class="text-heading">{{ $accessory->compatibility }}</strong>
                                                    </td>

                                                    <td>

                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-success">{{ $accessory->price, $accessory->price_type }}
                                                        </span>



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

                                                                <li><a class="dropdown-item" href="#">Details</a>
                                                                </li>
                                                                <li>
                                                                    <form
                                                                        action="{{ route('delete_accessory', $accessory->id) }}"
                                                                        method="GET">

                                                                        @method('GET')
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
                                        <span class="text-heading">{{ $accessories->firstItem() }} to
                                            {{ $accessories->lastItem() }} of {{ $accessories->total() }}</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <nav aria-label="Page navigation example">
                                            <ul
                                                class="pagination justify-content-center justify-content-lg-end align-items-center">
                                                {{-- Previous Page Link --}}
                                                @if ($accessories->onFirstPage())
                                                    <li class="page-item disabled">
                                                        <a class="page-link" tabindex="-1">
                                                            <i class="arrow" data-feather="chevron-left"
                                                                width="14"></i>
                                                        </a>
                                                    </li>
                                                @else
                                                    <li class="page-item">
                                                        <a class="page-link"
                                                            href="{{ $accessories->previousPageUrl() }}">
                                                            <i class="arrow" data-feather="chevron-left"
                                                                width="14"></i>
                                                        </a>
                                                    </li>
                                                @endif

                                                {{-- Pagination Elements --}}
                                                @for ($i = 1; $i <= $accessories->lastPage(); $i++)
                                                    @if ($i == $accessories->currentPage())
                                                        <li class="page-item active"><a class="page-link"
                                                                href="#">{{ $i }}</a></li>
                                                    @else
                                                        <li class="page-item"><a class="page-link"
                                                                href="{{ $accessories->url($i) }}">{{ $i }}</a>
                                                        </li>
                                                    @endif
                                                @endfor

                                                {{-- Next Page Link --}}
                                                @if ($accessories->hasMorePages())
                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ $accessories->nextPageUrl() }}">
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
                    <!-- Content End -->
                </div>
            </div>
            <!-- ***** Content End ***** -->

            <!-- ***** Footer Start ***** -->

            <!-- ***** End Start ***** -->
        </main>
        <!-- ***** Main End ***** -->
    </div>

    <!-- Plugin Bundle -->
    <script src="{{ asset('adminAssets/js/plugins.bundle.js') }}" crossorigin="anonymous"></script>
    <!-- Common Javascript -->
    <script src="{{ asset('adminAssets/js/app.js') }}" crossorigin=" anonymous"></script>
</body>


</html>