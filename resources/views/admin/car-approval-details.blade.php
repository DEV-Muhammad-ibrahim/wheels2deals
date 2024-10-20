@include('layouts.head')

<body data-bs-spy="scroll" data-bs-target="#scrollspy">
    <div class="backdrop"></div>



    <section class="section-gap-100">
        <div style="background: url({{ asset('assets/images/banner/single/01.jpg') }}) no-repeat center / cover;">
            <div class="single-banner">
                <div class="container">
                    <h2>{{ $car->title }}</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ Route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ Route('cars') }}">Cars</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $car->title }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="section-gap-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="product-single-meta-group"><span
                            class="product-single-meta-price">AED{{ $car->price }}/-
                            <small>{{ $car->price_type }}</small></span>
                        <h2 class="product-single-meta-title">{{ $car->title }} {{ $car->company->name }}</h2>
                        <ul class="product-single-meta-list">
                            <li><i class="material-icons">account_circle</i><a
                                    href="{{ Route('vendor_details_users', $car->user->id) }}">{{ $car->user->vendor_name }}</a>
                            </li>
                            <li><i class="material-icons">watch_later</i><span>{{ $car->created_at }}</span></li>

                            <li><i class="material-icons">fmd_good</i><span>{{ $car->user->city }},
                                    {{ $car->user->state }}</span></li>
                        </ul>
                    </div>
                </div>


                <div class="col-xl-12">
                    <div class="product-single-slider slider-arrow slider-dots">
                        @foreach ($car->images as $image)
                            <div>
                                <img src="{{ asset('public/storage/' . $image->path) }}" alt="product">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="product-single-scrollspy-btns">
                        <a href="#overview" class="nav-link" title="Overview">
                            <i class="material-icons">visibility</i>
                            <span>overview</span>
                        </a>

                        <a href="#features" class="nav-link" title="Features">
                            <i class="material-icons">fact_check</i>
                            <span>features</span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="common-card" id="overview">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">Vehicle Description</h4>
                        </div>
                        <div class="common-card-body">
                            <p>
                                {{ $car->description }}
                            </p>
                        </div>
                    </div>

                    <div class="common-card" id="features">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">vehicle features</h4>
                        </div>
                        <div class="product-single-feature-group">
                            <ul class="product-single-feature-list">
                                <li><span>condition:</span><span>{{ $car->condition }}</span></li>
                                <li><span>mileage:</span><span>{{ $car->mileage }} km</span></li>

                                <li><span>body type:</span><span>{{ $car->type->name }}</span></li>
                                <li><span>brand name:</span><span>{{ $car->company->name }}</span></li>
                                <li><span>colour:</span><span>{{ $car->color }}</span></li>
                                <li><span>interior colour:</span><span>{{ $car->interior_color }}</span></li>
                                <li><span>fuel type:</span><span>{{ $car->fuel }}</span></li>
                            </ul>
                            <ul class="product-single-feature-list">
                                @foreach ($car->features as $feature)
                                    <li><span>{{ $feature->name }}:</span><i
                                            class="material-icons check">check_circle</i></li>
                                @endforeach

                            </ul>
                        </div>
                        @if ($car->status == 0)
                            <div class="common-card-header">
                                <form action="{{ Route('car_approve', $car->id) }}" method="POST">
                                    @method('POST')
                                    @csrf
                                    <button class="btn btn-success mt-3">Approve</button>
                                </form>
                            </div>
                        @else
                            <div class="common-card-header">
                                <form action="{{ Route('car_disaprove', $car->id) }}" method="POST">
                                    @method('POST')
                                    @csrf
                                    <button class="btn btn-danger mt-2">Disable
                                        Car</button>
                                </form>
                            </div>
                        @endif
                    </div>


                </div>
                <div class="col-xl-4">
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">vendor information</h4>
                        </div>
                        <div class="common-card-body">
                            <div class="product-single-vendor">
                                <a class="vendor-grid-cover" href="profile.html">
                                    <img src="{{ asset('public/storage/' . $car->user->cover_picture) }}"
                                        alt="cover">
                                </a>
                                <a class="vendor-grid-avatar" href="profile.html">
                                    <img src="{{ asset('public/storage/' . $car->user->profile_picture) }}"
                                        alt="avatar">
                                </a>
                                <ul class="vendor-grid-meta">
                                    <li class="profile"><i class="material-icons">account_circle</i><a
                                            href="profile.html">{{ $car->user->vendor_name }}</a></li>
                                    <li class="location"><i class="material-icons">map</i><span>{{ $car->user->city }},
                                        </span></li>

                                    <div class="vendor-grid-action">
                                        <a href="profile.html">visit profile</a>

                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    @include('layouts.footer')
    @include('layouts.script')
</body>


</html>
