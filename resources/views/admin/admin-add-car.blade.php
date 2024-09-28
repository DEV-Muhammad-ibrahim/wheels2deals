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
                            <h1 class="page-title mb2">Add Car</h1>
                            <nav class="breadcrumb-nav" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="projects-ecommerce-products.html">Cars</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Car</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Top End -->

                    <!-- Content Start -->
                    <form method="POST" action="#" id="addcategory" class="needs-validation">
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
                                                <div class="col-6 mb5">
                                                    <label for="add-form-1" class="form-label">
                                                        <span>Car Name</span>
                                                        <span class="text-danger">*</span>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right" data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Type a name for the product."></i>
                                                    </label>
                                                    <input id="add-form-1" class="form-control slug-target"
                                                        type="text" required>
                                                    <div class="invalid-feedback">Please fill out all fields.</div>
                                                </div>
                                                <div class="col-6 mb5">
                                                    <label for="add-form-1" class="form-label">
                                                        <span>Vehicle Registration Number</span>
                                                        <span class="text-danger">*</span>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right" data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Type a name for the product."></i>
                                                    </label>
                                                    <input id="add-form-1" class="form-control slug-target"
                                                        type="text" required>
                                                    <div class="invalid-feedback">Please fill out all fields.</div>
                                                </div>
                                                <div class="col-6 mb5">
                                                    <label for="add-form-1" class="form-label">
                                                        <span>Registeration Plate Number</span>
                                                        <span class="text-danger">*</span>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right" data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Type a name for the product."></i>
                                                    </label>
                                                    <input id="add-form-1" class="form-control slug-target"
                                                        type="text" required>
                                                    <div class="invalid-feedback">Please fill out all fields.</div>
                                                </div>
                                                <div class="col-6 mb5">
                                                    <label for="add-form-1" class="form-label">
                                                        <span>Date of issue</span>
                                                        <span class="text-danger">*</span>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right" data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Type a name for the product."></i>
                                                    </label>
                                                    <input id="add-form-1" class="form-control slug-target"
                                                        type="date" required>
                                                    <div class="invalid-feedback">Please fill out all fields.</div>
                                                </div>
                                                <div class="col-6 mb5">
                                                    <label for="add-form-1" class="form-label">
                                                        <span>Date of expiry</span>
                                                        <span class="text-danger">*</span>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Type a name for the product."></i>
                                                    </label>
                                                    <input id="add-form-1" class="form-control slug-target"
                                                        type="date" required>
                                                    <div class="invalid-feedback">Please fill out all fields.</div>
                                                </div>
                                                <div class="col-6 mb5">
                                                    <div class="form-group"><label class="form-label">Company
                                                            <span>*</span></label>
                                                        <select class="form-select" name="company">
                                                            <option selected>---</option>
                                                            @foreach ($company as $company)
                                                                <option value="{{ $company->name }}">
                                                                    {{ $company->name }}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-5">
                                                    <div class="form-group"><label class="form-label">Fuel
                                                            <span>*</span></label>
                                                        <select class="form-select" name="fuel">
                                                            <option selected>---</option>
                                                            <option value="disel">Disel</option>
                                                            <option value="petrol">Petrol</option>
                                                            <option value="electric">Electric</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Year <span>*</span></label>
                                                        <select class="form-select">
                                                            <option selected>---</option>
                                                            <!-- Dynamically generated options for the last 50 years -->
                                                            <option value="2024">2024</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1974">1974</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-f">
                                                    <div class="form-group"><label class="form-label">Colour
                                                            <span>*</span></label><input id="add-form-1"
                                                            class="form-control slug-target" type="text" required>
                                                    </div>
                                                </div>
                                                <div class="col-6 mb5">
                                                    <label for="add-form-5" class="form-label">
                                                        <span>Mileage</span>
                                                        <span class="text-danger">*</span>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Write the price of the product excluding taxes."></i>
                                                    </label>
                                                    <div class="input-group">
                                                        <input type="number" id="add-form-5" class="form-control"
                                                            placeholder="0,00" required>
                                                        <span class="input-group-text">Km</span>
                                                    </div>
                                                    <div class="invalid-feedback">Please fill out all
                                                        fields.</div>
                                                </div>


                                                <div class="col-6 mb-5">
                                                    <div class="form-group"><label class="form-label">Price type
                                                            <span>*</span></label><select class="form-select">
                                                            <option selected>---</option>
                                                            <option value="fixed">Fixed</option>
                                                            <option value="negotiable">Negotiable
                                                            </option>
                                                        </select></div>
                                                </div>
                                                <div class="col-6 mb-5">
                                                    <div class="form-group"><label class="form-label">Condition
                                                            <span>*</span></label><select class="form-select">
                                                            <option selected>---</option>
                                                            <option value="used">Used</option>
                                                            <option value="new">New</option>
                                                        </select></div>
                                                </div>
                                                {{-- <div class="col-6 mb5">
                                                    <label for="add-form-2" class="form-label">
                                                        <span>URL Slug</span>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="The URL slug is automatically populated when you type the title."></i>
                                                    </label>
                                                    <input id="add-form-2" class="form-control slug-url"
                                                        type="text">
                                                </div> --}}
                                                {{-- <div class="col-6 mb5">
                                                    <label for="add-form-3" class="form-label">
                                                        <span>SKU</span>
                                                        <span class="text-danger">*</span>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Type a SKU code for the product."></i>
                                                    </label>
                                                    <input id="add-form-3" class="form-control" type="text"
                                                        required>
                                                    <div class="invalid-feedback">Please fill out all fields.</div>
                                                </div> --}}
                                                {{-- <div class="col-6 mb5">
                                                    <label for="add-form-4" class="form-label">
                                                        <span>Piece</span>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Please write stock information."></i>
                                                    </label>
                                                    <div class="input-group">
                                                        <input type="text" id="add-form-4" class="form-control">
                                                        <span class="input-group-text">Piece</span>
                                                    </div>
                                                </div> --}}
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
                                                            placeholder="0,00" required>
                                                        <span class="input-group-text">UAE</span>
                                                    </div>
                                                    <div class="invalid-feedback">Please fill out all
                                                        fields.</div>
                                                </div>
                                                <div class="col-6 mb5">
                                                    <label for="add-form-6" class="form-label">
                                                        <span>Category</span>
                                                        <span class="text-danger">*</span>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Select if the category will be a subcategory of another category."></i>
                                                    </label>
                                                    <select id="add-form-6" class="form-select js-choice" required>
                                                        <option value="">Select Category</option>
                                                        @foreach ($category as $cat)
                                                            <option value="{{ $cat->name }}">
                                                                {{ $cat->name }}
                                                            </option>
                                                        @endforeach
                                                        {{-- <option value="2">Smart Phone</option>
                                                        <option value="3">Toys & Video Games</option>
                                                        <option value="4">Furniture</option>
                                                        <option value="5">Jewelry & Accessories</option>
                                                        <option value="6">Baby & Toddler</option>
                                                        <option value="7">Kitchen & Dining</option>
                                                        <option value="8">Kid's Rooms</option>
                                                        <option value="9">Sports & Outdoors</option>
                                                        <option value="10">Office & School Supplies</option> --}}
                                                    </select>
                                                    <div class="invalid-feedback">Please select a
                                                        category.</div>
                                                </div>
                                                <div class="col-12">
                                                    <label for="add-form-7" class="form-label">
                                                        <span>Description</span>
                                                        <small class="text-body">(Optional)</small>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Description is optional."></i>
                                                    </label>
                                                    <div class="height-300 pb7">
                                                        <div id="general-description-editor"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- General End -->

                                    <!-- Meta Options Start -->
                                    <div class="col-12 mb6">
                                        <div class="card shadow-card p6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h6 class="mb4">Features </h6>
                                                </div>
                                                <div class="col-12 mb5">
                                                    <label for="add-form-8" class="form-label">
                                                        <span>Page Title</span>
                                                        <span class="text-danger">*</span>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="The text to display in search results."></i>
                                                    </label>
                                                    <input id="add-form-8" class="form-control" type="text"
                                                        required>
                                                    <div class="invalid-feedback">Please fill out all fields.
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label for="add-form-9" class="form-label">
                                                        <span>Description</span>
                                                        <small class="text-body">(Optional)</small>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Description is optional."></i>
                                                    </label>
                                                    <div class="height-300 pb7 mb4">
                                                        <div id="meta-description-editor"></div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label for="add-form-10" class="form-label">
                                                        <span>Keywords</span>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Description is optional."></i>
                                                    </label>
                                                    <input id="add-form-10" class="form-control tagify"
                                                        type="text" value="fps game, online">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                                <label for="add-form-1" class="form-label">
                                                    <span>Media Files</span>
                                                    <span class="text-danger">*</span>
                                                    <i data-feather="info" stroke-width="2" width="12"
                                                        class="text-body" data-bs-toggle="tooltip"
                                                        data-bs-placement="right" data-bs-custom-class="qd-tooltip"
                                                        data-bs-title="Supports: *.png or *.jpg"></i>
                                                </label>
                                                <div id="drop-area"
                                                    class="d-flex flex-column align-items-center bg-light">
                                                    <div
                                                        class="width-120 height-120 border-dashed rounded bg-body-secondary position-relative overflow-hidden d-flex align-items-center justify-content-center mb4">
                                                        <i data-feather="image" stroke-width="1.5"
                                                            class="text-body"></i>
                                                        <div
                                                            class="img-fix width-120 height-120 position-absolute top-0 start-0">
                                                            <img id="preview-img" class="">
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="d-flex flex-grow-1 align-items-center justify-content-center">
                                                        <div
                                                            class="d-flex flex-column justify-content-start align-items-center">
                                                            <strong class="d-block mb2">Drag & Drop</strong>
                                                            <span class="d-block mb2">OR</span>
                                                            <label for="fileElem" id="fileSelect"
                                                                class="d-block mb3 text-primary">Browse
                                                                Photo</label>
                                                            <small>Supports: *.png, *.jpg and *.jpeg</small>
                                                        </div>
                                                    </div>
                                                    <input type="file" id="fileElem" accept="image/*"
                                                        class="d-none">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Media End -->

                                        <!-- Settings Start -->
                                        <div class="col-12 mb6">
                                            <div class="card shadow-card p6">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h6 class="mb4">Settings</h6>
                                                    </div>
                                                    <div class="col-12 mb5">
                                                        <label for="add-form-11" class="form-label">
                                                            <span>Status</span>
                                                            <span class="text-danger">*</span>
                                                            <i data-feather="info" stroke-width="2" width="12"
                                                                class="text-body" data-bs-toggle="tooltip"
                                                                data-bs-placement="right"
                                                                data-bs-custom-class="qd-tooltip"
                                                                data-bs-title="Choose a status from the list."></i>
                                                        </label>
                                                        <select id="add-form-11" class="form-select js-choice"
                                                            required>
                                                            <option value="">Select Status</option>
                                                            <option value="1">Published</option>
                                                            <option value="2">Inactive</option>
                                                            <option value="3">Scheduled</option>
                                                        </select>
                                                        <div class="invalid-feedback">Please select a status.
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb5">
                                                        <label for="add-form-12" class="form-label">
                                                            <span>Vendor</span>
                                                            <i data-feather="info" stroke-width="2" width="12"
                                                                class="text-body" data-bs-toggle="tooltip"
                                                                data-bs-placement="right"
                                                                data-bs-custom-class="qd-tooltip"
                                                                data-bs-title="Choose a template from the list."></i>
                                                        </label>
                                                        <select id="add-form-12" class="form-select js-choice">
                                                            <option value="">Select Template</option>
                                                            <option value="1">Vendor 1</option>
                                                            <option value="2">Vendor 1</option>
                                                            <option value="3">Vendor 1</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 mb5">
                                                        <label for="add-form-4" class="form-label d-block">
                                                            <span>Discussion</span>
                                                        </label>
                                                        <div class="d-flex align-items-center mb4">
                                                            <label class="qd-switch switch-primary me3">
                                                                <input type="checkbox" checked>
                                                                <span class="slider"></span>
                                                            </label>
                                                            <small>Allow comments</small>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <label class="qd-switch switch-primary me3">
                                                                <input type="checkbox">
                                                                <span class="slider"></span>
                                                            </label>
                                                            <small>Allow pingbacks & trackbacks</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb5">
                                                        <label for="add-form-5" class="form-label d-block">
                                                            <span>Mobile App</span>
                                                        </label>
                                                        <div class="d-flex align-items-center">
                                                            <label class="qd-switch switch-primary me3">
                                                                <input type="checkbox" checked>
                                                                <span class="slider"></span>
                                                            </label>
                                                            <small>Show mobile app</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="add-form-13" class="form-label d-block">
                                                            <span>Discount</span>
                                                        </label>
                                                        <div class="d-flex align-items-center">
                                                            <div class="checkbox checkbox-primary me2">
                                                                <input type="checkbox" name="check1" id="check1"
                                                                    checked>
                                                                <label for="check1"></label>
                                                            </div>
                                                            <input class="form-control" id="add-form-13"
                                                                type="text" placeholder="20%">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
