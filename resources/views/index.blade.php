@include('layouts.head')

<body>
    <div class="backdrop"></div>
    @include('layouts.header')
    @include('layouts.navbar')
    @include('layouts.widget')

    <section class="section-gap-95 banner-slider slider-count">
        <div
            style="
          background: url({{ asset('assets/images/banner/landing/ltr/01.jpg') }}) no-repeat center /
            cover;
        ">
            <div class="banner-overlay">
                <div class="container">
                    <div class="banner-content">
                        <h1>best place to sell and buy a car</h1>
                        <p>
                            A platform to buy and sell cars easily and quickly.
                        </p>
                        {{-- <ul>
                            <li>
                                <i class="material-icons">email</i><span><small>contact
                                        email</small>info@wheels2deals.com</span>
                            </li>
                            <li>
                                <i class="material-icons">phone</i><span><small>contact number</small>934 7273
                                    2392</span>
                            </li>
                        </ul> --}}
                        <a href="{{ Route('cars') }}" class="btn btn-inline"><i
                                class="material-icons">visibility</i><span>Buy Cars</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div
            style="
          background: url({{ asset('assets/images/banner/landing/ltr/02.jpg') }}) no-repeat center /
            cover;
        ">
            <div class="banner-overlay">
                <div class="container">
                    <div class="banner-content">
                        <h1>best place to sell and buy a car</h1>
                        <p>
                            A platform to buy and sell cars easily and quickly.
                        </p>
                        {{-- <ul>
                            <li>
                                <i class="material-icons">email</i><span><small>contact
                                        email</small>info@wheels2deals.com</span>
                            </li>
                            <li>
                                <i class="material-icons">phone</i><span><small>contact number</small>934 7273
                                    2392</span>
                            </li>
                        </ul> --}}
                        <a href="{{ Route('cars') }}" class="btn btn-inline"><i
                                class="material-icons">visibility</i><span>Buy Cars</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div
            style="
          background: url({{ asset('assets/images/banner/landing/ltr/03.jpg') }}) no-repeat center /
            cover;
        ">
            <div class="banner-overlay">
                <div class="container">
                    <div class="banner-content">
                        <h1>best place to sell and buy a car</h1>
                        <p>
                            A platform to buy and sell cars easily and quickly.
                        </p>
                        {{-- <ul>
                            <li>
                                <i class="material-icons">email</i><span><small>contact
                                        email</small>info@wheels2deals.com</span>
                            </li>
                            <li>
                                <i class="material-icons">phone</i><span><small>contact number</small>934 7273
                                    2392</span>
                            </li>
                        </ul> --}}
                        <a href="{{ Route('cars') }}" class="btn btn-inline"><i
                                class="material-icons">visibility</i><span>Buy Cars</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="section-gap-95">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-head">
                        <div class="section-text">
                            <h2>recent add vehicles</h2>

                        </div>
                        <a href="{{ Route('cars') }}" class="btn btn-inline"><i
                                class="material-icons">travel_explore</i><span>browse all</span></a>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                @foreach ($cars as $car)
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="{{ asset('public/storage/' . $car->image) }}" alt="feature" />
                                @if ($car->condition === 'new')
                                    <div class="product-grid-badge">
                                        <span class="badge new">{{ $car->condition }}</span>
                                    </div>
                                @else
                                    <div class="product-grid-badge">
                                        <span class="badge used">{{ $car->condition }}</span>
                                    </div>
                                @endif
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>{{ $car->images->count() }}</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a
                                            href="{{ Route('vendor_details_users', $car->user->id) }}">by
                                            {{ $car->user->name }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>AED{{ number_format($car->price, 2, '.', ',') }}/-</span><small>{{ $car->price_type }}</small>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="{{ Route('inventory_single', $car->id) }}">{{ $car->title }}</a>
                                    </h4>
                                </div>
                                <ul class="product-grid-extra">

                                    <li>
                                        <i class="material-icons">settings</i><span>{{ $car->mileage }} km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>{{ $car->fuel }}</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="{{ Route('inventory_single', $car->id) }}">
                                        <i class="material-icons">visibility</i>
                                        <span>details</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section> --}}
    <section class="section-gap-95">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-head">
                        <div class="section-text">
                            <h2>find by Types</h2>

                        </div>
                        <a href="{{ Route('cars') }}" class="btn btn-inline"><i
                                class="material-icons">travel_explore</i><span>browse all</span></a>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-5">
                @foreach ($types as $type)
                    <div class="col">
                        <a href="{{ route('vehicles.search', ['type' => $type->id]) }}" class="category-card">
                            <img src="{{ asset('public/storage/' . $type->image) }}"
                                alt="category" /><span>{{ $type->name }}
                            </span>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="section-gap-120 feature-part">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-head">
                        <div class="section-text">
                            <h2>our featured listing</h2>

                        </div>
                        <a href="{{ Route('cars') }}" class="btn btn-inline"><i
                                class="material-icons">travel_explore</i><span>browse all</span></a>
                    </div>
                </div>
            </div>
            <div class="row product-feature-slider slider-arrow">

                @foreach ($randomCars as $car)
                    <div class="col">
                        <div class="product-feature-card">
                            <div class="product-feature-image">
                                <img src="{{ asset('public/storage/' . $car->image) }}" alt="product" />
                                <a href="{{ Route('inventory_single', $car->id) }}"
                                    class="product-feature-btn badge-hover"><i class="material-icons">add</i><span
                                        class="badge arrow-right">more
                                        details</span></a>
                                @if ($car->condition === 'new')
                                    <div class="product-grid-badge">
                                        <span class="badge new">{{ $car->condition }}</span>
                                    </div>
                                @else
                                    <div class="product-grid-badge">
                                        <span class="badge used">{{ $car->condition }}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="product-feature-meta">
                                <h3>
                                    <a href="{{ Route('inventory_single', $car->id) }}">{{ $car->title }}</a>
                                </h3>
                                <h4>AED {{ number_format($car->price, 2, '.', ',') }}/-
                                    <span>{{ $car->price_type }}</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>
    <section class="section-gap-95">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-head">
                        <div class="section-text">
                            <h2>browse by Companies</h2>

                        </div>
                        <a href="{{ Route('cars') }}" class="btn btn-inline"><i
                                class="material-icons">travel_explore</i><span>browse all</span></a>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-5">
                @foreach ($brands as $comp)
                    <div class="col">
                        <a class="brand-card" href="{{ route('vehicles.search', ['company' => $comp->id]) }}">
                            <img src="{{ asset('public/storage/' . $comp->image) }}" alt="brand"
                                class="img-fluid" />
                            <h6>{{ $comp->name }}</h6>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- <div class="row">
        <div class="col-xl-12">
            <div class="section-head">
                <div class="section-text">
                    <h2>Why Wheels2deals</h2>

                </div>
                <a href="{{ Route('about') }}" class="btn btn-inline"><i class="material-icons"></i><span>more
                        details</span></a>
            </div>
        </div>
    </div> --}}
    <section class="section-gap-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-head">
                        <div class="section-text">
                            <h2>Why Wheels2deals</h2>

                        </div>
                        <a href="{{ Route('about') }}" class="btn btn-inline"><i class="material-icons"></i><span>more
                                details</span></a>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">
                <div class="col">
                    <div class="feature-card"><i class="material-icons">fact_check</i>
                        <h3>Quick Ad Posting</h3>

                    </div>
                </div>
                <div class="col">
                    <div class="feature-card"><i class="material-icons">verified_user</i>
                        <h3>Fast Selling Process</h3>

                    </div>
                </div>

                <div class="col">
                    <div class="feature-card"><i class="material-icons">stars</i>
                        <h3>Start Selling just from AED 49</h3>

                    </div>
                </div>
                <div class="col">
                    <div class="feature-card"><i class="material-icons">rocket_launch</i>
                        <h3>Vast Buyer Network</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>




    @include('layouts.footer')
    @include('layouts.script')

</body>


</html>
