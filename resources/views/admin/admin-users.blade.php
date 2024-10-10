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
                            <h1 class="page-title mb2">Users</h1>
                            <nav class="breadcrumb-nav" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 text-start text-md-end">
                            <!-- Filter Dropdown Start-->

                            <!-- Filter Dropdown End-->

                            <!-- Add Button Start-->

                            <!-- Add Button End-->
                        </div>
                    </div>
                    <!-- Page Top End -->

                    <!-- Content Start -->
                    <div class="row mb5">
                        <div class="col-12">
                            <div class="card shadow-card">
                                {{-- <div class="border-bottom">
                                    <div class="p6">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 mobile-bottom-fix">
                                                <input class="form-control" type="text" placeholder="Search...">
                                            </div>
                                            <div class="col-md-9 text-end d-flex justify-content-end">
                                                <input class="form-control width-220 qd-datepicker me3" type="text"
                                                    placeholder="Pick Date Range">
                                                <div class="dropdown">
                                                    <button type="button"
                                                        class="bg-transparent p0 outline-none dropdown-toggle arrow-none border height-40 rounded ps3"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <span class="text-body">Status</span>
                                                        <i data-feather="chevron-down" stroke-width="2" height="16"
                                                            class="text-heading"></i>
                                                    </button>
                                                    <ul class="dropdown-menu text-start">
                                                        <li><a class="dropdown-item" href="#">Processing</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Shipped</a></li>
                                                        <li><a class="dropdown-item" href="#">Cancelled</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Delivered</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="p6 pt3">
                                    <div class="table-responsive text-nowrap">
                                        <table class="table qd-table mb6 align-middle">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">User</th>
                                                    <th scope="col">DATE</th>
                                                    <th scope="col">Verfication</th>
                                                    {{-- <th scope="col">TOTAL</th>
                                                    <th scope="col">PAYMENT METHOD</th>
                                                    <th scope="col">ORDER STATUS</th> --}}
                                                    <th scope="col" class="text-end">ACTIONS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td>
                                                            <strong class="text-heading">#{{ $user->id }}</strong>
                                                        </td>
                                                        <td>
                                                            <strong
                                                                class="text-heading d-block mb1">{{ $user->name }}</strong>
                                                            <a href="#"
                                                                class="text-decoration-none text-body hover-primary">{{ $user->email }}</a>
                                                        </td>
                                                        <td>
                                                            <strong
                                                                class="text-heading d-block mb1">{{ $user->created_at }}</strong>
                                                            {{-- <small>11:38PM</small> --}}
                                                        </td>
                                                        <td>
                                                            @if ($user->verified === 1)
                                                                <span
                                                                    class="badge rounded-pill badge-soft text-bg-success">Verified
                                                                </span>
                                                            @else
                                                                <span
                                                                    class="badge rounded-pill badge-soft text-bg-danger">
                                                                    Not Verified
                                                                </span>
                                                            @endif
                                                        </td>
                                                        {{-- <td>
                                                            <strong class="text-heading">$126,45</strong>
                                                        </td>
                                                        <td>
                                                            <span>Mastercard</span>
                                                        </td> --}}
                                                        {{-- <td>
                                                            <span
                                                                class="badge rounded-pill badge-soft text-bg-warning">Processing</span>
                                                        </td> --}}
                                                        <td>
                                                            <div class="dropdown text-end">
                                                                <button type="button"
                                                                    class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                                    data-bs-auto-close="outside"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <span class="text-heading">Actions</span>
                                                                    <i data-feather="chevron-down" stroke-width="2"
                                                                        height="16" class="text-heading"></i>
                                                                </button>
                                                                <ul class="dropdown-menu text-start">

                                                                    <li><a class="dropdown-item"
                                                                            href="{{ Route('user_details', $user->id) }}">Details</a>
                                                                    </li>
                                                                    <li>
                                                                        <form
                                                                            action="{{ Route('delete_user', $user->id) }}"
                                                                            method="POST">
                                                                            @method('POST')
                                                                            @csrf

                                                                            <button type="submit"
                                                                                class="btn btn-danger">Delete</button>
                                                                            </a>
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
                                            <span class="text-heading">{{ $users->firstItem() }} to
                                                {{ $users->lastItem() }} of {{ $users->total() }}</span>
                                        </div>
                                        <div class="col-lg-6">
                                            <nav aria-label="Page navigation example">
                                                <ul
                                                    class="pagination justify-content-center justify-content-lg-end align-items-center">
                                                    {{-- Previous Page Link --}}
                                                    @if ($users->onFirstPage())
                                                        <li class="page-item disabled">
                                                            <a class="page-link" tabindex="-1">
                                                                <i class="arrow" data-feather="chevron-left"
                                                                    width="14"></i>
                                                            </a>
                                                        </li>
                                                    @else
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $users->previousPageUrl() }}">
                                                                <i class="arrow" data-feather="chevron-left"
                                                                    width="14"></i>
                                                            </a>
                                                        </li>
                                                    @endif

                                                    {{-- Pagination Elements --}}
                                                    @for ($i = 1; $i <= $users->lastPage(); $i++)
                                                        @if ($i == $users->currentPage())
                                                            <li class="page-item active"><a class="page-link"
                                                                    href="#">{{ $i }}</a></li>
                                                        @else
                                                            <li class="page-item"><a class="page-link"
                                                                    href="{{ $users->url($i) }}">{{ $i }}</a>
                                                            </li>
                                                        @endif
                                                    @endfor

                                                    {{-- Next Page Link --}}
                                                    @if ($users->hasMorePages())
                                                        <li class="page-item">
                                                            <a class="page-link" href="{{ $users->nextPageUrl() }}">
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
                    </div>
                    <!-- Content End -->
                </div>
            </div>
            <!-- ***** Content End ***** -->

            <!-- ***** Footer Start ***** -->
            @include('layouts.admin.footer')
