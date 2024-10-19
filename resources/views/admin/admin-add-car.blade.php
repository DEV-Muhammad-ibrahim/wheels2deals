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
                    <form method="POST" action="{{ Route('create_car') }}" id="addcategory" class="needs-validation"
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
                                                        <span>Car Name</span>
                                                        <span class="text-danger">*</span>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right" data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Type a name for the product."></i>
                                                    </label>
                                                    <input id="add-form-1" class="form-control slug-target"
                                                        type="text" required name="title"
                                                        value="{{ old('title') }}">
                                                    <div class="invalid-feedback">Please fill out all fields.</div>
                                                </div>
                                                @error('title')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror


                                                <div class="col-6 mb5">
                                                    <div class="form-group"><label class="form-label">Company
                                                            <span>*</span></label>
                                                        <select class="form-select" name="company_id"
                                                            value="{{ old('company') }}">
                                                            <option selected>---</option>
                                                            @foreach ($company as $company)
                                                                <option value="{{ $company->id }}">
                                                                    {{ $company->name }}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                    @error('company_id')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-6 mb5">
                                                    <div class="form-group"><label class="form-label">Model
                                                            <span>*</span></label>
                                                        <select class="form-select" name="model_id"
                                                            value="{{ old('model') }}">
                                                            <option selected>---</option>
                                                            @foreach ($models as $model)
                                                                <option value="{{ $model->id }}">
                                                                    {{ $model->name }}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                    @error('model_id')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-6 mb-5">
                                                    <div class="form-group"><label class="form-label">Fuel
                                                            <span>*</span></label>
                                                        <select class="form-select" name="fuel"
                                                            value="{{ old('fuel') }}">
                                                            <option selected>---</option>
                                                            <option value="diesel">Disel</option>
                                                            <option value="petrol">Petrol</option>
                                                            <option value="electric">Electric</option>
                                                        </select>
                                                        @error('fuel')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Year <span>*</span></label>
                                                        <select class="form-select" name="year"
                                                            value="{{ old('year') }}">
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
                                                        @error('year')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Transmission <span>*</span></label>
                                                        <select class="form-select" name="transmission"
                                                            value="{{ old('transmission') }}">
                                                            <option selected>---</option>
                                                            <option value="manual">Manual</option>
                                                            <option value="automatic">Automatic</option>
                                                        </select>
                                                        @error('transmission')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Seating Capacity
                                                            <span>*</span></label>
                                                        <select class="form-select" name="seating_capacity"
                                                            value="{{ old('seating_capacity') }}">
                                                            <option selected>---</option>
                                                            <option value="2">2</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="12">12</option>
                                                            <option value="15">15</option>
                                                        </select>
                                                        @error('seating_capacity')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-f">
                                                    <div class="form-group"><label class="form-label">Colour
                                                            <span>*</span></label><input id="add-form-1"
                                                            class="form-control slug-target" type="text" required
                                                            name="color" value="{{ old('color') }}">
                                                    </div>
                                                    @error('color')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-6 mb-f">
                                                    <div class="form-group"><label class="form-label"> Interior Colour
                                                            <span>*</span></label><input id="add-form-1"
                                                            class="form-control slug-target" type="text" required
                                                            name="interior_color"
                                                            value="{{ old('interior_color') }}">
                                                    </div>
                                                    @error('interior_color')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
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
                                                            placeholder="0,00" required name="mileage"
                                                            value="{{ old('mileage') }}">
                                                        <span class="input-group-text">Km</span>
                                                    </div>
                                                    <div class="invalid-feedback">Please fill out all
                                                        fields.</div>
                                                </div>
                                                @error('mileage')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror


                                                <div class="col-6 mb-5">
                                                    <div class="form-group"><label class="form-label">Price type
                                                            <span>*</span></label>
                                                        <select class="form-select " name="price_type"
                                                            value="{{ old('price_type') }}">
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
                                                <div class="col-6 mb-5">
                                                    <div class="form-group"><label class="form-label">Condition
                                                            <span>*</span></label>
                                                        <select class="form-select" name="condition"
                                                            value="{{ old('condition') }}">
                                                            <option selected>---</option>
                                                            <option value="used">Used</option>
                                                            <option value="new">New</option>
                                                        </select>
                                                        @error('condition')
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
                                                            placeholder="0,00" required name="price"
                                                            value="{{ old('price') }}">
                                                        <span class="input-group-text">UAE</span>
                                                    </div>
                                                    @error('price')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
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
                                                    <select id="add-form-6" class="form-select js-choice" required
                                                        name="category_id" value="{{ old('category') }}">
                                                        <option value="">Select Category</option>
                                                        @foreach ($category as $cat)
                                                            <option value="{{ $cat->id }}">
                                                                {{ $cat->name }}
                                                            </option>
                                                        @endforeach

                                                    </select>
                                                    @error('category_id')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-6 mb5">
                                                    <label for="add-form-6" class="form-label">
                                                        <span>Type</span>
                                                        <span class="text-danger">*</span>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Select if the type will be a subtype of another type."></i>
                                                    </label>
                                                    <select id="add-form-6" class="form-select js-choice" required
                                                        name="type_id" value="{{ old('type') }}">
                                                        <option value="">Select type</option>
                                                        @foreach ($type as $type)
                                                            <option value="{{ $type->id }}">
                                                                {{ $type->name }}
                                                            </option>
                                                        @endforeach

                                                    </select>
                                                    @error('type_id')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group mb-0"><label class="form-label">Description
                                                            <span class="text-danger">*</span></label>
                                                        <textarea class="form-control" name="description" value="{{ old('description') }}"></textarea>
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
                                    <div class="col-12 mb6">
                                        <div class="card shadow-card p6">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h6 class="mb4">Features </h6>
                                                </div>
                                                @foreach ($feature as $feature)
                                                    <div class="col-3 mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="check1" name="feature_ids[]"
                                                                value="{{ $feature->id }}"
                                                                id="feature{{ $feature->id }}">
                                                            <label class="form-check-label"
                                                                for="check1">{{ $feature->name }}</label>
                                                        </div>
                                                    </div>
                                                @endforeach



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
                                                <div class="common-card">
                                                    <div class="common-card-header">
                                                        <h4 class="common-card-header-title">Vehicle media</h4>
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
                                                                                name="p_image" id="preview">
                                                                            <label for="preview"
                                                                                class="file-icon material-icons">file_present</label><button
                                                                                type="button"
                                                                                class="file-cancel material-icons">cancel</button>
                                                                        </div>
                                                                    </div>
                                                                    @error('p_image')
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
                                                                                name="image[]" multiple
                                                                                accept="image/*">
                                                                            <label for="gallery"
                                                                                class="file-icon material-icons">file_present</label><button
                                                                                type="button"
                                                                                class="file-cancel material-icons">cancel</button>
                                                                        </div>
                                                                        @error('image')
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
                                                            required name="status">
                                                            <option value="">Select Status</option>
                                                            <option value="active">Published</option>
                                                            <option value="inactive">Inactive</option>

                                                        </select>
                                                        @error('status')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
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
