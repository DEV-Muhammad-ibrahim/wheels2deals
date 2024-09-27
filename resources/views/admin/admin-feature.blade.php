<!DOCTYPE html>
<html lang="en" data-bs-theme="light">



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
                            <h1 class="page-title mb2">Features</h1>
                            <nav class="breadcrumb-nav" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Features</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 text-start text-md-end">
                            <!-- Filter Dropdown Start-->
                            <!-- Filter Dropdown End-->

                            <!-- Add Button Start-->
                            <a href="{{ Route('add_feature') }}" class="btn btn-primary">Add
                                Feature</a>
                            <!-- Add Button End-->
                        </div>
                    </div>
                    <!-- Page Top End -->

                    <!-- Content Start -->
                    <div class="row mb5">
                        <div class="col-12">
                            <div class="card shadow-card p6 pt3">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <div class="table-responsive text-nowrap">
                                    <table class="table qd-table mb6 align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">FEATURE NAME</th>
                                                <th scope="col">STATUS</th>
                                                <th scope="col" class="text-end">ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($feature as $features)
                                                <tr>
                                                    <td>
                                                        <div class="d-inline-flex flex-row align-items-center">

                                                            <strong class="text-heading">{{ $features->name }}</strong>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-success">Published</span>
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


                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                        href="#">
                                                                        <form
                                                                            action="{{ route('delete_feature', $features->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('POST')
                                                                            <button type="submit"
                                                                                class="dropdown-item text-danger">Delete</button>
                                                                        </form>

                                                                        <i data-feather="info" stroke-width="2"
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
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                {{-- <nav aria-label="Page navigation example">
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
                                </nav> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Content End -->
                </div>
            </div>
            <!-- ***** Content End ***** -->

            <!-- ***** Footer Start ***** -->
            @include('layouts.admin.footer')
</body>



</html>
