@include('layouts.head')

<body>
    <div class="backdrop"></div>
    @include('layouts.header')
    @include('layouts.navbar')
    @include('layouts.widget')
    @include('layouts.dashboard')
    <section class="mc-breadcrumb">
        <div class="container">
            <div class="mc-breadcrumb-group">
                <h2 class="mc-breadcrumb-title">create your ads</h2>
                <ul class="mc-breadcrumb-list">
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="index.html">home</a></li>
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="dashboard.html">dashboard</a>
                    </li>
                    <li class="mc-breadcrumb-item">create-ads</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section-gap-75">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-xl-12">
                    <form class="create-ads-form" action="{{ Route('ad_create') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="common-card active">
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
                            <div class="common-card-header">
                                <h4 class="common-card-header-title">vehicle information</h4>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Title
                                            <span>*</span>
                                        </label>
                                        <input type="text" class="form-control" name="title"
                                            value="{{ old('title') }}">
                                        @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="form-group">
                                        <label class="form-label">Vehicle Registration Number
                                            <span>*</span>
                                        </label>
                                        <input type="text" class="form-control" name="vehicle_registration_no"
                                            value="{{ old('vehicle_registration_no') }}">
                                        @error('vehicle_registration_no')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="form-group">
                                        <label class="form-label">Registeration Plate Number
                                            <span>*</span>
                                        </label>
                                        <input type="text" class="form-control" name="registration_plate_no"
                                            value="{{ old('registration_plate_no') }}">
                                        @error('registration_plate_no')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="form-group">
                                        <label class="form-label">Date of issue
                                            <span>*</span>
                                        </label>
                                        <input type="date" class="form-control" name="doi"
                                            value="{{ old('doi') }}">
                                        @error('doi')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="form-group">
                                        <label class="form-label">Date of expire
                                            <span>*</span>
                                        </label>
                                        <input type="date" class="form-control" name="doe" required
                                            value="{{ old('doe') }}">
                                        @error('doe')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-4">
                                    <div class="form-group">
                                        <label class="form-label">Type
                                            <span>*</span>
                                        </label>
                                        <select class="form-select" name="type" required>
                                            <option selected>---</option>
                                            @foreach ($type as $type)
                                                <option value="{{ $type->name }}">{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('type')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-4">
                                    <div class="form-group">
                                        <label class="form-label">Category
                                            <span>*</span>
                                        </label>
                                        <select class="form-select" name="category" required>
                                            <option selected>---</option>
                                            @foreach ($category as $cat)
                                                <option value="{{ $cat->name }}">{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-4">
                                    <div class="form-group">
                                        <label class="form-label">Company
                                            <span>*</span>
                                        </label>
                                        <select class="form-select" name="company" required>
                                            <option selected>---</option>
                                            @foreach ($company as $company)
                                                <option value="{{ $company->name }}">{{ $company->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('company')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-4">
                                    <div class="form-group">
                                        <label class="form-label">fuel
                                            <span>*</span>
                                        </label>
                                        <select class="form-select" name="fuel" required>
                                            <option selected>---</option>
                                            <option value="diesel">Diesel</option>
                                            <option value="petrol">Petrol</option>
                                            <option value="electric">Electric</option>
                                        </select>
                                        @error('fuel')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-4">
                                    <div class="form-group">
                                        <label class="form-label">year
                                            <span>*</span>
                                        </label>
                                        <select class="form-select" name="year" required>
                                            <option selected>---</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                        </select>
                                        @error('year')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-4">
                                    <div class="form-group">
                                        <label class="form-label">Colour
                                            <span>*</span>
                                        </label>
                                        <input type="text" class="form-control" name="color" required
                                            value="{{ old('color') }}">
                                        @error('color')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-4">
                                    <div class="form-group">
                                        <label class="form-label">Mileage
                                            <span>* Km</span>
                                        </label>
                                        <input type="number" class="form-control" name="mileage" required
                                            value="{{ old('mileage') }}">
                                        @error('mileage')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-4">
                                    <div class="form-group">
                                        <label class="form-label">Price amount
                                            <span>*AED</span>
                                        </label>
                                        <input type="number" class="form-control" required name="price"
                                            value="{{ old('price') }}">
                                        @error('price')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-4">
                                    <div class="form-group">
                                        <label class="form-label">Price type
                                            <span>*</span>
                                        </label>
                                        <select class="form-select" name="price_type" required>
                                            <option selected>---</option>
                                            <option value="fixed">fixed</option>
                                            <option value="negotiable">negotiable</option>
                                        </select>
                                        @error('price_type')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-4">
                                    <div class="form-group">
                                        <label class="form-label">condition
                                            <span>*</span>
                                        </label>
                                        <select class="form-select" name="condition" required>
                                            <option selected>---</option>
                                            <option value="used">used</option>
                                            <option value="new">new</option>
                                        </select>
                                        @error('condition')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="common-card-header">
                                    <h4 class="common-card-header-title">Vehicle Features</h4>
                                </div>
                                <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-2 row-cols-xl-3">
                                    @foreach ($feature as $feature)
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="check1"
                                                    name="feature_ids[]" value="{{ $feature->id }}">
                                                <label class="form-check-label"
                                                    for="check1">{{ $feature->name }}</label>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="common-card-header">
                                    <h4 class="common-card-header-title">vehicle media</h4>
                                </div>
                                <div class="common-card-body">
                                    <div class="create-media">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label">Preview Image <span>*</span> </label>
                                                    <div class="file-form">
                                                        <input class="file-input" type="file" id="preview"
                                                            name="preview_image" required>
                                                        <label for="preview"
                                                            class="file-icon material-icons">file_present</label>
                                                        <button type="button"
                                                            class="file-cancel material-icons">cancel</button>
                                                        @error('preview_image')
                                                            <div class="alert alert-danger">
                                                                {{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label">gallery images file
                                                        <span>*</span>
                                                    </label>
                                                    <div class="file-form">
                                                        <input class="file-input" type="file" id="gallery"
                                                            multiple name="image[]" accept="image/*">
                                                        <label for="gallery"
                                                            class="file-icon material-icons">file_present</label>
                                                        <button type="button"
                                                            class="file-cancel material-icons">cancel</button>
                                                        @error('image')
                                                            <div class="alert alert-danger">
                                                                {{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group mb-0"><label class="form-label">Description
                                                        <span>*</span></label>
                                                    <textarea class="form-control" name="description" required value="{{ old('description') }}"></textarea>
                                                </div>
                                                @error('description')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div
                                                class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center mt-3">
                                                <button type="submit" class="form-btn mb-2">Create</button>
                                                <small>
                                                    You will receive an confirmation email <strong>If ad was approved by
                                                        admin</strong></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>







                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
    @include('layouts.script')
</body>


</html>
