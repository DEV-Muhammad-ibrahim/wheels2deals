@include('layouts.head')

<body>
    <div class="backdrop"></div>
    @include('layouts.header')
    @include('layouts.navbar')
    @include('layouts.widget')

    <section class="section-gap-120 banner-slider slider-count">
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
                            Welcome to Wheels2Deals, your one-stop destination for buying and selling cars with ease and
                            confidence! Whether you're looking to purchase your dream car or sell your vehicle quickly,
                            we’ve got you covered.
                        </p>
                        <ul>
                            <li>
                                <i class="material-icons">email</i><span><small>contact
                                        email</small>info@wheels2deals.com</span>
                            </li>
                            <li>
                                <i class="material-icons">phone</i><span><small>contact number</small>934 7273
                                    2392</span>
                            </li>
                        </ul>
                        <a href="{{ Route('cars') }}" class="btn btn-inline"><i
                                class="material-icons">visibility</i><span>show listing</span></a>
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
                            Welcome to Wheels2Deals, your one-stop destination for buying and selling cars with ease and
                            confidence! Whether you're looking to purchase your dream car or sell your vehicle quickly,
                            we’ve got you covered.
                        </p>
                        <ul>
                            <li>
                                <i class="material-icons">email</i><span><small>contact
                                        email</small>info@wheels2deals.com</span>
                            </li>
                            <li>
                                <i class="material-icons">phone</i><span><small>contact number</small>934 7273
                                    2392</span>
                            </li>
                        </ul>
                        <a href="{{ Route('cars') }}" class="btn btn-inline"><i
                                class="material-icons">visibility</i><span>show listing</span></a>
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
                            Welcome to Wheels2Deals, your one-stop destination for buying and selling cars with ease and
                            confidence! Whether you're looking to purchase your dream car or sell your vehicle quickly,
                            we’ve got you covered.
                        </p>
                        <ul>
                            <li>
                                <i class="material-icons">email</i><span><small>contact
                                        email</small>info@wheels2deals.com</span>
                            </li>
                            <li>
                                <i class="material-icons">phone</i><span><small>contact number</small>934 7273
                                    2392</span>
                            </li>
                        </ul>
                        <a href="{{ Route('cars') }}" class="btn btn-inline"><i
                                class="material-icons">visibility</i><span>show listing</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-gap-95">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-head">
                        <div class="section-text">
                            <h2>find top categories</h2>

                        </div>
                        <a href="{{ Route('cars') }}" class="btn btn-inline"><i
                                class="material-icons">travel_explore</i><span>browse all</span></a>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-5">
                @foreach ($types as $type)
                    <div class="col">
                        <a href="" class="category-card">
                            <img src="{{ asset('storage/' . $type->image) }}" alt="category" /><span>{{ $type->name }}
                            </span>
                        </a>
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
                                <img src="{{ asset('storage/' . $car->image) }}" alt="feature" />
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
                                <img src="{{ asset('storage/' . $car->image) }}" alt="product" />
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



    <section class="section-gap-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-head">
                        <div class="section-text">
                            <h2>how we best for you</h2>

                        </div>
                        <a href="{{ Route('about') }}" class="btn btn-inline"><i
                                class="material-icons"></i><span>more details</span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="about-media">
                        <img src="{{ asset('assets/images/bg/video.jpg') }}" alt="video" />

                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="about-content">
                        <h3>
                            Wheels2deals has been standing on the trust of customers for the last
                            10 years
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Officia, eligendi consectetur laboriosam qui optio illo
                            provident impedit, vero nisi commodi delectus pariatur eum
                            mollitia excepturi temporibus aspernatur, repudiandae animi.
                            Quaerat sit rem doloremque repellat tenetur mollitia quae,
                            provident quasi voluptatibus ducimus velit excepturi?
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- <section class="section-gap-120 review-part">
        <div class="container">
            <div class="row review-slider slider-arrow">
                <div class="col">
                    <div class="review-wrap">
                        <div class="review-wrap-image">
                            <img src="../images/review/01.jpg" alt="review" />
                        </div>
                        <div class="review-wrap-content">
                            <div class="review-wrap-meta">
                                <div class="review-wrap-ideo">
                                    <a href="#" class="material-icons">play_arrow</a><i
                                        class="material-icons">format_quote</i>
                                </div>
                                <div class="review-wrap-item">
                                    <h4>mercedes-benz wagon</h4>
                                    <h5>see the full review</h5>
                                </div>
                            </div>
                            <p class="review-wrap-quote">
                                " Lorem ipsum dolor sit amet consectetur adipisicing elit
                                Expedita ut porro beatae itaque accusantium nisi Asperiores
                                reprehenderit "
                            </p>
                            <h3 class="review-wrap-user">miron mahmud</h3>
                            <h5 class="review-wrap-type">buyer review</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="review-wrap">
                        <div class="review-wrap-image">
                            <img src="../images/review/02.jpg" alt="review" />
                        </div>
                        <div class="review-wrap-content">
                            <div class="review-wrap-meta">
                                <div class="review-wrap-video">
                                    <a href="#" class="material-icons">play_arrow</a><i
                                        class="material-icons">format_quote</i>
                                </div>
                                <div class="review-wrap-item">
                                    <h4>lamborghini huracan</h4>
                                    <h5>see the full review</h5>
                                </div>
                            </div>
                            <p class="review-wrap-quote">
                                " Lorem ipsum dolor sit amet consectetur adipisicing elit
                                Expedita ut porro beatae itaque accusantium nisi Asperiores
                                reprehenderit "
                            </p>
                            <h3 class="review-wrap-user">tahmina bonny</h3>
                            <h5 class="review-wrap-type">seller review</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    @include('layouts.footer')
    @include('layouts.script')

</body>


</html>
