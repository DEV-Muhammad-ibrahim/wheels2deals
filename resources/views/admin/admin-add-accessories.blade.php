@include('layouts.admin.head')
<link rel="stylesheet" href="{{ asset('assets/fonts/typography/jost.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/fonts/icofont/icofont.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/fonts/material/icon.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/venobox/venobox.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/slickslider/slick.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/ltr.min.css') }}" />

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
                            <h1 class="page-title mb2">Add Acessory</h1>
                            <nav class="breadcrumb-nav" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="projects-ecommerce-products.html">Cars</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Acessory</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Top End -->

                    <!-- Content Start -->
                    <form method="POST" action="{{ Route('add_acessory') }}" id="addcategory" class="needs-validation"
                        enctype="multipart/form-data">
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
                                                <div class="col-6 mb5">
                                                    <label for="add-form-1" class="form-label">
                                                        <span>Accessory Name</span>
                                                        <span class="text-danger">*</span>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right" data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Type a name for the product."></i>
                                                    </label>
                                                    <input id="add-form-1" class="form-control slug-target"
                                                        type="text" required name="name">
                                                    <div class="invalid-feedback">Please fill out all fields.</div>
                                                </div>
                                                @error('name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="col-6 mb5">
                                                    <label for="add-form-1" class="form-label">
                                                        <span>Accessory Company</span>
                                                        <span class="text-danger">*</span>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right" data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Type a name for the product."></i>
                                                    </label>
                                                    <input id="add-form-1" class="form-control slug-target"
                                                        type="text" required name="company">
                                                    <div class="invalid-feedback">Please fill out all fields.</div>
                                                </div>
                                                @error('company')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                                <div class="col-6 mb5">
                                                    <label for="add-form-1" class="form-label">
                                                        <span>compatibility</span>
                                                        <span class="text-danger">*</span>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right" data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Type a name for the product."></i>
                                                    </label>
                                                    <input id="add-form-1" class="form-control slug-target"
                                                        type="text" required name="compatibility">
                                                    <div class="invalid-feedback">Please fill out all fields.</div>
                                                </div>
                                                @error('compatibility')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror













                                                <div class="col-6 mb-5">
                                                    <div class="form-group"><label class="form-label">Price type
                                                            <span>*</span></label>
                                                        <select class="form-select " name="price_type">
                                                            <option selected>---</option>
                                                            <option value="fixed">Fixed</option>
                                                            <option value="negotiable">Negotiable
                                                            </option>
                                                        </select>
                                                        @error('price_type')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="col-6 mb5">
                                                    <label for="add-form-5" class="form-label">
                                                        <span>Price</span>
                                                        <span class="text-danger">*</span>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Write the price of the product excluding taxes."></i>
                                                    </label>
                                                    <div class="input-group">
                                                        <input type="number" id="add-form-5" class="form-control"
                                                            placeholder="0,00" required name="price">
                                                        <span class="input-group-text">UAE</span>
                                                    </div>
                                                    @error('price')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>


                                                <div class="col-12">
                                                    <div class="form-group mb-0"><label class="form-label">Description
                                                            <span class="text-danger">*</span></label>
                                                        <textarea class="form-control" name="description" placeholder="Please Provide Detailed Description"></textarea>
                                                    </div>
                                                    @error('description')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- General End -->

                                    <!-- Meta Options Start -->

                                    <!-- Meta Options End -->
                                </div>
                            </div>
                            <!-- Left Column End -->

                            <!-- Right Column Start -->
                            <div class="col-xxl-4">
                                <div class="sticky-top">
                                    <div class="row">
                                        <!-- Media Start -->
                                        <div class="col-12 mb6">
                                            <div class="card shadow-card p6">
                                                <div class="common-card">
                                                    <div class="common-card-header">
                                                        <h4 class="common-card-header-title">Acessory media</h4>
                                                    </div>
                                                    <div class="common-card-body">
                                                        <div class="create-media">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group"><label
                                                                            class="form-label">Preview Image
                                                                            <span>*</span></label>
                                                                        <div class="file-form">
                                                                            <input class="file-input" type="file"
                                                                                name="image" id="preview">
                                                                            <label for="preview"
                                                                                class="file-icon material-icons">file_present</label><button
                                                                                type="button"
                                                                                class="file-cancel material-icons">cancel</button>
                                                                        </div>
                                                                    </div>
                                                                    @error('image')
                                                                        <div class="alert alert-danger">
                                                                            {{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group"><label
                                                                            class="form-label">gallery images file
                                                                            <span>*</span></label>
                                                                        <div class="file-form">
                                                                            <input class="file-input"
                                                                                type="file"id="gallery"
                                                                                name="accessory_images[]" multiple
                                                                                accept="accessory_images/*">
                                                                            <label for="gallery"
                                                                                class="file-icon material-icons">file_present</label><button
                                                                                type="button"
                                                                                class="file-cancel material-icons">cancel</button>
                                                                        </div>
                                                                        @error('accessory_images')
                                                                            <div class="alert alert-danger">
                                                                                {{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
            <script src="{{ asset('adminAssets/js/pages/projects/ecommerce/add-product.js') }}" crossorigin="anonymous"></script>
</body>


</html>
