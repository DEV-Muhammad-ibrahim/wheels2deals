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
                        <div class="col-md-12 mobile-bottom-fix">
                            <h1 class="page-title mb2">Add Model</h1>
                            <nav class="breadcrumb-nav" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="projects-ecommerce-categories.html">Model</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Model</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Top End -->

                    <!-- Content Start -->
                    <form method="POST" action="{{ Route('model.add') }}" id="addcategory" class="needs-validation">
                        @csrf
                        @method('POST')
                        <div class="row mb5">
                            <!-- Left Column Start -->
                            <div class="col-xxl-8">
                                <div class="row">
                                    <!-- General Start -->
                                    <div class="col-12 mb6">
                                        <div class="card shadow-card p6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h6 class="mb4">General</h6>
                                                </div>
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
                                                <div class="col-12 mb5">
                                                    <label for="add-form-6" class="form-label">
                                                        <span>Model Name</span>
                                                        <span class="text-danger">*</span>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right" data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Type a name for the category."></i>
                                                    </label>
                                                    <input id="add-form-6" class="form-control slug-target"
                                                        type="text" required name="name"
                                                        value="{{ old('name') }}">
                                                    @error('name')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="invalid-feedback">Please fill out all fields.</div>
                                                </div>
                                                <div class="col-6 mb5">
                                                    <div class="form-group"><label class="form-label">Type
                                                            <span>*</span></label>
                                                        <select class="form-select" name="type">
                                                            <option selected>---</option>
                                                            @foreach ($type as $type)
                                                                <option value="{{ $type->id }}">
                                                                    {{ $type->name }}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                    @error('company')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-6 mb5">
                                                    <div class="form-group"><label class="form-label">Company
                                                            <span>*</span></label>
                                                        <select class="form-select" name="company">
                                                            <option selected>---</option>
                                                            @foreach ($company as $company)
                                                                <option value="{{ $company->id }}">
                                                                    {{ $company->name }}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                    @error('company')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                    <!-- General End -->

                                    <!-- Meta Options Start -->


                                    <!-- Media End -->

                                    <!-- Settings Start -->

                                    <!-- Settings End -->
                                </div>
                            </div>
                        </div>
                        <!-- Right Column End -->

                        <!-- Buttons Start -->
                        <div class="col-12 text-end">

                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        <!-- Buttons End -->
                </div>
                </form>
                <!-- Content End -->
            </div>
    </div>
    <!-- ***** Content End ***** -->

    <!-- ***** Footer Start ***** -->
    @include('layouts.admin.footer')
    <!-- Page Specific Javascript -->
    <script src="{{ asset('adminAssets/js/pages/projects/ecommerce/add-category.js') }}" crossorigin="anonymous"></script>

</body>



</html>
