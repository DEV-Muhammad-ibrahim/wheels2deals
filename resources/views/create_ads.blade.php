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




                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-4">
                                    <div class="form-group">
                                        <label class="form-label">Type
                                            <span>*</span>
                                        </label>
                                        <select class="form-select" name="type_id" required>
                                            <option selected>---</option>
                                            @foreach ($type as $type)
                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('type')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-4">
                                    <div class="form-group">
                                        <label class="form-label">Company
                                            <span>*</span>
                                        </label>
                                        <select class="form-select" name="company_id" required>
                                            <option selected>---</option>
                                            @foreach ($company as $company)
                                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('company_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-4">
                                    <div class="form-group">
                                        <label class="form-label">Model
                                            <span>*</span>
                                        </label>
                                        <select class="form-select" name="model_id" required>
                                            <option selected>---</option>
                                            @foreach ($models as $model)
                                                <option value="{{ $model->id }}">{{ $model->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('model_id')
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
                                        <label class="form-label">Seating capacity
                                            <span>*</span>
                                        </label>
                                        <select class="form-select" name="seating_capacity" required>
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
                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-4">
                                    <div class="form-group">
                                        <label class="form-label">year
                                            <span>*</span>
                                        </label>
                                        <select class="form-select" name="year" required>
                                            <option selected>---</option>
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
                                        <label class="form-label">Interior Colour
                                            <span>*</span>
                                        </label>
                                        <input type="text" class="form-control" name="interior_color" required
                                            value="{{ old('interior_color') }}">
                                        @error('interior_color')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-4">
                                    <div class="form-group">
                                        <label class="form-label">Transmission
                                            <span>*</span>
                                        </label>
                                        <select class="form-select" name="transmission" required>
                                            <option selected value="---">---</option>
                                            <option value="manual">Manual</option>
                                            <option value="automatic">Automatic</option>
                                        </select>
                                        @error('transmission')
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
                                                            name="p_image" required>
                                                        <label for="preview"
                                                            class="file-icon material-icons">file_present</label>
                                                        <button type="button"
                                                            class="file-cancel material-icons">cancel</button>
                                                        @error('p_image')
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
