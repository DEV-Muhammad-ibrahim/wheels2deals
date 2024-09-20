@include('layouts.head')

<body>
    <div class="backdrop"></div>
    @include('layouts.header')
    @include('layouts.navbar')
    @include('layouts.dashboard')
    <section class="mc-breadcrumb">
        <div class="container">
            <div class="mc-breadcrumb-group">
                <h2 class="mc-breadcrumb-title">all settings</h2>
                <ul class="mc-breadcrumb-list">
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="index.html">home</a></li>
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="dashboard.html">dashboard</a>
                    </li>
                    <li class="mc-breadcrumb-item">setting</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section-gap-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-4">
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">settings nav</h4>
                        </div>
                        <div class="nav nav-pills setting-nav">
                            <button type="button" data-bs-toggle="pill" data-bs-target="#account"
                                class="nav-link active"><i class="material-icons">account_circle</i><span>account
                                    details</span>
                            </button>
                            {{-- <button type="button" data-bs-toggle="pill" data-bs-target="#billing" class="nav-link"><i
                                    class="material-icons">shopping_bag</i><span>billing
                                    information</span>
                            </button> --}}
                            {{-- <button type="button" data-bs-toggle="pill" data-bs-target="#social" class="nav-link"><i
                                    class="material-icons">interests</i><span>social networks</span>
                            </button> --}}
                            <button type="button" data-bs-toggle="pill" data-bs-target="#password" class="nav-link"><i
                                    class="material-icons">https</i><span>change password</span>
                            </button>
                            {{-- <button type="button" data-bs-toggle="pill" data-bs-target="#notify" class="nav-link"><i
                                    class="material-icons">notifications_active</i><span>notifications</span>
                            </button> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-8">
                    <div class="tab-pane fade show active" id="account">
                        <form action="{{ Route('register_vendor') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="common-card">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="common-card-header">
                                    <h4 class="common-card-header-title">account media</h4>
                                </div>
                                <div class="common-card-body">
                                    <div class="row row-cols-1">
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="form-label">profile Image
                                                    <span>*</span>
                                                </label>
                                                <div class="file-form">
                                                    <input class="file-input" type="file" id="profile"
                                                        name="profile_image">
                                                    <label for="profile"
                                                        class="file-icon material-icons">file_present</label>
                                                    <button type="button"
                                                        class="file-cancel material-icons">cancel</button>
                                                </div>
                                                @error('profile_image')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label class="form-label">covar Image
                                                    <span>*</span></label>
                                                <div class="file-form">
                                                    <input class="file-input" type="file" id="covar"
                                                        name="cover_image">
                                                    <label for="covar" class="file-icon material-icons">file_present
                                                    </label>
                                                    <button type="button"
                                                        class="file-cancel material-icons">cancel</button>
                                                </div>
                                                @error('cover_image')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="common-card">
                                <div class="common-card-header">
                                    <h4 class="common-card-header-title">account details</h4>
                                </div>
                                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-1 row-cols-xl-2">
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="form-label">account name
                                                <span>*</span>
                                            </label>
                                            <input type="text" class="form-control" name="vendor_name"
                                                value="{{ auth()->check() ? auth()->user()->vendor_name : old('vendor_name', '') }}">
                                        </div>
                                        @error('vendor_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label class="form-label">account type
                                                <span>*</span></label>
                                            <select class="form-select" name="account_type">
                                                <option selected>---</option>
                                                <option value="individual">individual</option>
                                                <option value="dealership">dealership</option>
                                            </select>
                                            @error('account_type')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="form-label">phone number
                                                <span>*</span>
                                            </label>
                                            <input type="tel" class="form-control" name="phone_no"
                                                value="{{ auth()->check() ? auth()->user()->vendor_name : old('phone_no', '') }}">
                                            @error('phone_no')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="form-label">email address
                                                <span>*</span>
                                            </label>
                                            <input disabled ="email" class="form-control" name="email"
                                                value="{{ auth()->check() ? auth()->user()->email : '' }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="form-label">website
                                                <span>*</span>
                                            </label>
                                            <input type="url" class="form-control" name="website"
                                                value="{{ auth()->check() ? auth()->user()->vendor_name : old('website', '') }}">
                                            @error('website')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="form-label">city
                                                <span>*</span>
                                            </label>
                                            <input type="text" class="form-control" name="city"
                                                value="{{ auth()->check() ? auth()->user()->vendor_name : old('city', '') }}">
                                            @error('city')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="form-label">state
                                                <span>*</span>
                                            </label>
                                            <input type="text" class="form-control" name="state"
                                                value="{{ auth()->check() ? auth()->user()->vendor_name : old('state', '') }}">
                                            @error('state')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="form-label">zip
                                                <span>*</span>
                                            </label>
                                            <input type="text" class="form-control" name="zip"
                                                value="{{ auth()->check() ? auth()->user()->vendor_name : old('zip', '') }}">
                                            @error('zip')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="form-group">
                                            <label class="form-label">about vendor
                                                <span>*</span>
                                            </label>
                                            <textarea class="form-control" name="description"
                                                value="{{ auth()->check() ? auth()->user()->descriptiom : old('description', '') }}"></textarea>
                                            @error('description')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <button type="submit" class="form-btn">save changes</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- <div class="tab-pane fade" id="billing">
                        <form>
                            <div class="common-card">
                                <div class="common-card-header">
                                    <h4 class="common-card-header-title">billing information</h4>
                                </div>
                                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-1 row-cols-xl-2">
                                    <div class="col">
                                        <div class="form-group"><label class="form-label">first name
                                                <span>*</span></label><input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label class="form-label">last name
                                                <span>*</span></label><input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label class="form-label">company name
                                                <span>*</span></label><input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label class="form-label">account name
                                                <span>*</span></label><input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label class="form-label">email address
                                                <span>*</span></label><input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label class="form-label">phone number
                                                <span>*</span></label><input type="tel" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label class="form-label">country
                                                <span>*</span></label><input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label class="form-label">city
                                                <span>*</span></label><input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label class="form-label">state
                                                <span>*</span></label><input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label class="form-label">zip
                                                <span>*</span></label><input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="form-group"><label class="form-label">address details</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><button type="submit"
                                            class="form-btn">save changes</button></div>
                                </div>
                            </div>
                        </form>
                    </div> --}}
                    {{-- <div class="tab-pane fade" id="social">
                        <form>
                            <div class="common-card">
                                <div class="common-card-header">
                                    <h4 class="common-card-header-title">social networks</h4>
                                </div>
                                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-1 row-cols-xl-2">
                                    <div class="col">
                                        <div class="form-group"><label class="form-label">facebook</label><input
                                                type="url" class="form-control"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label class="form-label">twitter</label><input
                                                type="url" class="form-control"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label class="form-label">instagram</label><input
                                                type="url" class="form-control"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label class="form-label">whatsapp</label><input
                                                type="url" class="form-control"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label class="form-label">youtube</label><input
                                                type="url" class="form-control"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label class="form-label">pinterest</label><input
                                                type="url" class="form-control"></div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><button type="submit"
                                            class="form-btn">save changes</button></div>
                                </div>
                            </div>
                        </form>
                    </div> --}}
                    <div class="tab-pane fade" id="password">
                        <form>
                            <div class="common-card">
                                <div class="common-card-header">
                                    <h4 class="common-card-header-title">change password</h4>
                                </div>
                                <div class="row row-cols-1">
                                    <div class="col">
                                        <div class="form-group"><label class="form-label">current
                                                password</label><input type="password" class="form-control"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label class="form-label">change
                                                password</label><input type="password" class="form-control"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label class="form-label">confirm
                                                password</label><input type="password" class="form-control"></div>
                                    </div>
                                    <div class="col"><button type="submit" class="form-btn">save changes</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- <div class="tab-pane fade" id="notify">
                        <form>
                            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-1 row-cols-xl-2">
                                <div class="col">
                                    <div class="common-card">
                                        <div class="common-card-header">
                                            <h5 class="common-card-header-title">favorites alert</h5>
                                        </div>
                                        <div class="common-card-body">
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="check1"><label class="form-check-label"
                                                    for="check1">Lorem ipsum dolor consectetur adipisicing delectus
                                                    nemo!</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="check2"><label class="form-check-label"
                                                    for="check2">Lorem ipsum dolor consectetur adipisicing delectus
                                                    nemo!</label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="common-card">
                                        <div class="common-card-header">
                                            <h5 class="common-card-header-title">compares alert</h5>
                                        </div>
                                        <div class="common-card-body">
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="check3"><label class="form-check-label"
                                                    for="check3">Lorem ipsum dolor consectetur adipisicing delectus
                                                    nemo!</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="check4"><label class="form-check-label"
                                                    for="check4">Lorem ipsum dolor consectetur adipisicing delectus
                                                    nemo!</label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="common-card">
                                        <div class="common-card-header">
                                            <h5 class="common-card-header-title">reviews alert</h5>
                                        </div>
                                        <div class="common-card-body">
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="check5"><label class="form-check-label"
                                                    for="check5">Lorem ipsum dolor consectetur adipisicing delectus
                                                    nemo!</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="check6"><label class="form-check-label"
                                                    for="check6">Lorem ipsum dolor consectetur adipisicing delectus
                                                    nemo!</label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="common-card">
                                        <div class="common-card-header">
                                            <h5 class="common-card-header-title">comment alert</h5>
                                        </div>
                                        <div class="common-card-body">
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="check7"><label class="form-check-label"
                                                    for="check7">Lorem ipsum dolor consectetur adipisicing delectus
                                                    nemo!</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="check8"><label class="form-check-label"
                                                    for="check8">Lorem ipsum dolor consectetur adipisicing delectus
                                                    nemo!</label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="common-card">
                                        <div class="common-card-header">
                                            <h5 class="common-card-header-title">announcement alert</h5>
                                        </div>
                                        <div class="common-card-body">
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="check9"><label class="form-check-label"
                                                    for="check9">Lorem ipsum dolor consectetur adipisicing delectus
                                                    nemo!</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="check10"><label class="form-check-label"
                                                    for="check10">Lorem ipsum dolor consectetur adipisicing delectus
                                                    nemo!</label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="common-card">
                                        <div class="common-card-header">
                                            <h5 class="common-card-header-title">email alert</h5>
                                        </div>
                                        <div class="common-card-body">
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="check11"><label class="form-check-label"
                                                    for="check11">Lorem ipsum dolor consectetur adipisicing delectus
                                                    nemo!</label></div>
                                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                                    id="check12"><label class="form-check-label"
                                                    for="check12">Lorem ipsum dolor consectetur adipisicing delectus
                                                    nemo!</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
    @include('layouts.script')
</body>


</html>
