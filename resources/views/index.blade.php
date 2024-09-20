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
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Molestiae unde, eos porro ipsa ullam aliquid aspernatur
                            reiciendis totam facilis quibusdam explicabo maiores consectetur
                            ex architecto recusandae
                        </p>
                        <ul>
                            <li>
                                <i class="material-icons">email</i><span><small>contact
                                        email</small>info@example.com</span>
                            </li>
                            <li>
                                <i class="material-icons">phone</i><span><small>contact number</small>934 7273
                                    2392</span>
                            </li>
                        </ul>
                        <a href="inventory-list.html" class="btn btn-inline"><i
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
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Molestiae unde, eos porro ipsa ullam aliquid aspernatur
                            reiciendis totam facilis quibusdam explicabo maiores consectetur
                            ex architecto recusandae
                        </p>
                        <ul>
                            <li>
                                <i class="material-icons">email</i><span><small>contact
                                        email</small>info@example.com</span>
                            </li>
                            <li>
                                <i class="material-icons">phone</i><span><small>contact number</small>934 7273
                                    2392</span>
                            </li>
                        </ul>
                        <a href="inventory-list.html" class="btn btn-inline"><i
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
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Molestiae unde, eos porro ipsa ullam aliquid aspernatur
                            reiciendis totam facilis quibusdam explicabo maiores consectetur
                            ex architecto recusandae
                        </p>
                        <ul>
                            <li>
                                <i class="material-icons">email</i><span><small>contact
                                        email</small>info@example.com</span>
                            </li>
                            <li>
                                <i class="material-icons">phone</i><span><small>contact number</small>934 7273
                                    2392</span>
                            </li>
                        </ul>
                        <a href="inventory-list.html" class="btn btn-inline"><i
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
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                        </div>
                        <a href="inventory-list.html" class="btn btn-inline"><i
                                class="material-icons">travel_explore</i><span>browse all</span></a>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-5">
                <div class="col">
                    <a href="inventory-list.html" class="category-card"><img
                            src="{{ asset('assets/images/category/minivan.png') }}" alt="category" /><span>minivan
                            (24)</span></a>
                </div>
                <div class="col">
                    <a href="inventory-list.html" class="category-card"><img
                            src="{{ asset('assets/images/category/convertible.png') }}"
                            alt="category" /><span>convertible (24)</span></a>
                </div>
                <div class="col">
                    <a href="inventory-list.html" class="category-card"><img
                            src="{{ asset('assets/images/category/coupe.png') }}" alt="category" /><span>coupe
                            (24)</span></a>
                </div>
                <div class="col">
                    <a href="inventory-list.html" class="category-card"><img
                            src="{{ asset('assets/images/category/pickup.png') }}" alt="category" /><span>pickup
                            (24)</span></a>
                </div>
                <div class="col">
                    <a href="inventory-list.html" class="category-card"><img
                            src="{{ asset('assets/images/category/sedan.png') }}" alt="category" /><span>sedan
                            (24)</span></a>
                </div>
                <div class="col">
                    <a href="inventory-list.html" class="category-card"><img
                            src="{{ asset('assets/images/category/sports.png') }}" alt="category" /><span>sports
                            (24)</span></a>
                </div>
                <div class="col">
                    <a href="inventory-list.html" class="category-card"><img
                            src="{{ asset('assets/images/category/suv.png') }}" alt="category" /><span>suv/muv
                            (24)</span></a>
                </div>
                <div class="col">
                    <a href="inventory-list.html" class="category-card"><img
                            src="{{ asset('assets/images/category/wagon.png') }}" alt="category" /><span>wagon
                            (24)</span></a>
                </div>
                <div class="col">
                    <a href="inventory-list.html" class="category-card"><img
                            src="{{ asset('assets/images/category/jeep.png') }}" alt="category" /><span>jeep
                            (24)</span></a>
                </div>
                {{-- <div class="col">
                    <a href="inventory-list.html" class="category-card"><img src="{{asset('assets/images/category/Hatchback.png')}}"
                            alt="category" /><span>Hatchback (24)</span></a>
                </div> --}}
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
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                        </div>
                        <a href="inventory-list.html" class="btn btn-inline"><i
                                class="material-icons">travel_explore</i><span>browse all</span></a>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image">
                            <img src="{{ asset('assets/images/product/01.jpg') }}" alt="feature" />
                            <div class="product-grid-badge">
                                <span class="badge new">new</span>
                            </div>
                            <div class="product-grid-hints">
                                <i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor">
                                    <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                </div>
                                <div class="product-grid-rating">
                                    <i class="material-icons">star</i><a href="review.html">28 review</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price">
                                    <span>$18,759/-</span><small>fixed</small>
                                </div>
                                <div class="product-grid-action">
                                    <button type="button" title="Compare" class="compare material-icons">
                                        compare</button><button type="button" title="Favorite"
                                        class="favorite material-icons">
                                        favorite
                                    </button>
                                </div>
                            </div>
                            <div class="product-grid-meta">
                                <h4>
                                    <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                </h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li>
                                    <i class="material-icons">construction</i><span>manual</span>
                                </li>
                                <li>
                                    <i class="material-icons">settings</i><span>2000 km</span>
                                </li>
                                <li>
                                    <i class="material-icons">local_gas_station</i><span>diesel</span>
                                </li>
                            </ul>
                            <div class="product-grid-btn">
                                <a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image">
                            <img src="{{ asset('assets/images/product/02.jpg') }}" alt="feature" />
                            <div class="product-grid-badge">
                                <span class="badge new">new</span>
                            </div>
                            <div class="product-grid-hints">
                                <i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor">
                                    <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                </div>
                                <div class="product-grid-rating">
                                    <i class="material-icons">star</i><a href="review.html">28 review</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price">
                                    <span>$18,759/-</span><small>negotiable</small>
                                </div>
                                <div class="product-grid-action">
                                    <button type="button" title="Compare" class="compare material-icons">
                                        compare</button><button type="button" title="Favorite"
                                        class="favorite material-icons">
                                        favorite
                                    </button>
                                </div>
                            </div>
                            <div class="product-grid-meta">
                                <h4>
                                    <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                </h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li>
                                    <i class="material-icons">construction</i><span>manual</span>
                                </li>
                                <li>
                                    <i class="material-icons">settings</i><span>2000 km</span>
                                </li>
                                <li>
                                    <i class="material-icons">local_gas_station</i><span>diesel</span>
                                </li>
                            </ul>
                            <div class="product-grid-btn">
                                <a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image">
                            <img src="{{ asset('assets/images/product/03.jpg') }}" alt="feature" />
                            <div class="product-grid-badge">
                                <span class="badge used">used</span>
                            </div>
                            <div class="product-grid-hints">
                                <i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor">
                                    <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                </div>
                                <div class="product-grid-rating">
                                    <i class="material-icons">star</i><a href="review.html">28 review</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price">
                                    <span>$18,759/-</span><small>negotiable</small>
                                </div>
                                <div class="product-grid-action">
                                    <button type="button" title="Compare" class="compare material-icons">
                                        compare</button><button type="button" title="Favorite"
                                        class="favorite material-icons">
                                        favorite
                                    </button>
                                </div>
                            </div>
                            <div class="product-grid-meta">
                                <h4>
                                    <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                </h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li>
                                    <i class="material-icons">construction</i><span>manual</span>
                                </li>
                                <li>
                                    <i class="material-icons">settings</i><span>2000 km</span>
                                </li>
                                <li>
                                    <i class="material-icons">local_gas_station</i><span>diesel</span>
                                </li>
                            </ul>
                            <div class="product-grid-btn">
                                <a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image">
                            <img src="{{ asset('assets/images/product/04.jpg') }}" alt="feature" />
                            <div class="product-grid-badge">
                                <span class="badge new">new</span>
                            </div>
                            <div class="product-grid-hints">
                                <i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor">
                                    <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                </div>
                                <div class="product-grid-rating">
                                    <i class="material-icons">star</i><a href="review.html">28 review</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price">
                                    <span>$18,759/-</span><small>negotiable</small>
                                </div>
                                <div class="product-grid-action">
                                    <button type="button" title="Compare" class="compare material-icons">
                                        compare</button><button type="button" title="Favorite"
                                        class="favorite material-icons">
                                        favorite
                                    </button>
                                </div>
                            </div>
                            <div class="product-grid-meta">
                                <h4>
                                    <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                </h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li>
                                    <i class="material-icons">construction</i><span>manual</span>
                                </li>
                                <li>
                                    <i class="material-icons">settings</i><span>2000 km</span>
                                </li>
                                <li>
                                    <i class="material-icons">local_gas_station</i><span>diesel</span>
                                </li>
                            </ul>
                            <div class="product-grid-btn">
                                <a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image">
                            <img src="{{ asset('assets/images/product/05.jpg') }}" alt="feature" />
                            <div class="product-grid-badge">
                                <span class="badge used">used</span>
                            </div>
                            <div class="product-grid-hints">
                                <i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor">
                                    <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                </div>
                                <div class="product-grid-rating">
                                    <i class="material-icons">star</i><a href="review.html">28 review</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price">
                                    <span>$18,759/-</span><small>negotiable</small>
                                </div>
                                <div class="product-grid-action">
                                    <button type="button" title="Compare" class="compare material-icons">
                                        compare</button><button type="button" title="Favorite"
                                        class="favorite material-icons">
                                        favorite
                                    </button>
                                </div>
                            </div>
                            <div class="product-grid-meta">
                                <h4>
                                    <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                </h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li>
                                    <i class="material-icons">construction</i><span>manual</span>
                                </li>
                                <li>
                                    <i class="material-icons">settings</i><span>2000 km</span>
                                </li>
                                <li>
                                    <i class="material-icons">local_gas_station</i><span>diesel</span>
                                </li>
                            </ul>
                            <div class="product-grid-btn">
                                <a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image">
                            <img src="{{ asset('assets/images/product/06.jpg') }}" alt="feature" />
                            <div class="product-grid-badge">
                                <span class="badge new">new</span>
                            </div>
                            <div class="product-grid-hints">
                                <i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor">
                                    <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                </div>
                                <div class="product-grid-rating">
                                    <i class="material-icons">star</i><a href="review.html">28 review</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price">
                                    <span>$18,759/-</span><small>negotiable</small>
                                </div>
                                <div class="product-grid-action">
                                    <button type="button" title="Compare" class="compare material-icons">
                                        compare</button><button type="button" title="Favorite"
                                        class="favorite material-icons">
                                        favorite
                                    </button>
                                </div>
                            </div>
                            <div class="product-grid-meta">
                                <h4>
                                    <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                </h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li>
                                    <i class="material-icons">construction</i><span>manual</span>
                                </li>
                                <li>
                                    <i class="material-icons">settings</i><span>2000 km</span>
                                </li>
                                <li>
                                    <i class="material-icons">local_gas_station</i><span>diesel</span>
                                </li>
                            </ul>
                            <div class="product-grid-btn">
                                <a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image">
                            <img src="{{ asset('assets/images/product/07.jpg') }}" alt="feature" />
                            <div class="product-grid-badge">
                                <span class="badge new">new</span>
                            </div>
                            <div class="product-grid-hints">
                                <i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor">
                                    <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                </div>
                                <div class="product-grid-rating">
                                    <i class="material-icons">star</i><a href="review.html">28 review</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price">
                                    <span>$18,759/-</span><small>negotiable</small>
                                </div>
                                <div class="product-grid-action">
                                    <button type="button" title="Compare" class="compare material-icons">
                                        compare</button><button type="button" title="Favorite"
                                        class="favorite material-icons">
                                        favorite
                                    </button>
                                </div>
                            </div>
                            <div class="product-grid-meta">
                                <h4>
                                    <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                </h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li>
                                    <i class="material-icons">construction</i><span>manual</span>
                                </li>
                                <li>
                                    <i class="material-icons">settings</i><span>2000 km</span>
                                </li>
                                <li>
                                    <i class="material-icons">local_gas_station</i><span>diesel</span>
                                </li>
                            </ul>
                            <div class="product-grid-btn">
                                <a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image">
                            <img src="{{ asset('assets/images/product/08.jpg') }}" alt="feature" />
                            <div class="product-grid-badge">
                                <span class="badge used">used</span>
                            </div>
                            <div class="product-grid-hints">
                                <i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor">
                                    <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                </div>
                                <div class="product-grid-rating">
                                    <i class="material-icons">star</i><a href="review.html">28 review</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price">
                                    <span>$18,759/-</span><small>negotiable</small>
                                </div>
                                <div class="product-grid-action">
                                    <button type="button" title="Compare" class="compare material-icons">
                                        compare</button><button type="button" title="Favorite"
                                        class="favorite material-icons">
                                        favorite
                                    </button>
                                </div>
                            </div>
                            <div class="product-grid-meta">
                                <h4>
                                    <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                </h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li>
                                    <i class="material-icons">construction</i><span>manual</span>
                                </li>
                                <li>
                                    <i class="material-icons">settings</i><span>2000 km</span>
                                </li>
                                <li>
                                    <i class="material-icons">local_gas_station</i><span>diesel</span>
                                </li>
                            </ul>
                            <div class="product-grid-btn">
                                <a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                        </div>
                        <a href="inventory-list.html" class="btn btn-inline"><i
                                class="material-icons">travel_explore</i><span>browse all</span></a>
                    </div>
                </div>
            </div>
            <div class="row product-feature-slider slider-arrow">
                <div class="col">
                    <div class="product-feature-card">
                        <div class="product-feature-image">
                            <img src="{{ asset('assets/images/product/19.jpg') }}" alt="product" /><a
                                href="inventory-single.html" class="product-feature-btn badge-hover"><i
                                    class="material-icons">add</i><span class="badge arrow-right">more
                                    details</span></a>
                            <div class="product-feature-badge">
                                <span class="badge new">new</span><span class="badge featured">featured</span>
                            </div>
                        </div>
                        <div class="product-feature-meta">
                            <h3>
                                <a href="inventory-single.html">Mercedez benz super mclaren</a>
                            </h3>
                            <h4>$45,658/- <span>negotiable</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-feature-card">
                        <div class="product-feature-image">
                            <img src="{{ asset('assets/images/product/18.jpg') }}" alt="product" /><a
                                href="inventory-single.html" class="product-feature-btn badge-hover"><i
                                    class="material-icons">add</i><span class="badge arrow-right">more
                                    details</span></a>
                            <div class="product-feature-badge">
                                <span class="badge new">new</span><span class="badge featured">featured</span>
                            </div>
                        </div>
                        <div class="product-feature-meta">
                            <h3>
                                <a href="inventory-single.html">Mercedez benz super mclaren</a>
                            </h3>
                            <h4>$45,658/- <span>negotiable</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-feature-card">
                        <div class="product-feature-image">
                            <img src="{{ asset('assets/images/product/17.jpg') }}" alt="product" /><a
                                href="inventory-single.html" class="product-feature-btn badge-hover"><i
                                    class="material-icons">add</i><span class="badge arrow-right">more
                                    details</span></a>
                            <div class="product-feature-badge">
                                <span class="badge new">new</span><span class="badge featured">featured</span>
                            </div>
                        </div>
                        <div class="product-feature-meta">
                            <h3>
                                <a href="inventory-single.html">Mercedez benz super mclaren</a>
                            </h3>
                            <h4>$45,658/- <span>negotiable</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-feature-card">
                        <div class="product-feature-image">
                            <img src="{{ asset('assets/images/product/16.jpg') }}" alt="product" /><a
                                href="inventory-single.html" class="product-feature-btn badge-hover"><i
                                    class="material-icons">add</i><span class="badge arrow-right">more
                                    details</span></a>
                            <div class="product-feature-badge">
                                <span class="badge new">new</span><span class="badge featured">featured</span>
                            </div>
                        </div>
                        <div class="product-feature-meta">
                            <h3>
                                <a href="inventory-single.html">Mercedez benz super mclaren</a>
                            </h3>
                            <h4>$45,658/- <span>negotiable</span></h4>
                        </div>
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
                            <h2>browse our top listing</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                        </div>
                        <a href="inventory-list.html" class="btn btn-inline"><i
                                class="material-icons">travel_explore</i><span>browse all</span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="nav nav-pills browse-nav">
                        <button type="button" data-bs-toggle="pill" data-bs-target="#vendor"
                            class="nav-link active">
                            <i class="material-icons">store</i><span>top vendor</span></button><button type="button"
                            data-bs-toggle="pill" data-bs-target="#ratings" class="nav-link">
                            <i class="material-icons">star</i><span>top ratings</span></button><button type="button"
                            data-bs-toggle="pill" data-bs-target="#engaged" class="nav-link">
                            <i class="material-icons">perm_phone_msg</i><span>top engaged</span></button><button
                            type="button" data-bs-toggle="pill" data-bs-target="#clicks" class="nav-link">
                            <i class="material-icons">mouse</i><span>top clicks</span></button><button type="button"
                            data-bs-toggle="pill" data-bs-target="#views" class="nav-link">
                            <i class="material-icons">visibility</i><span>top views</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show active" id="vendor">
                <div class="row row-cols-xl-4">
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="{{ asset('assets/images/product/13.jpg') }}" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>fixed</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="{{ asset('assets/images/product/14.jpg') }}" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge used">used</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="{{ asset('assets/images/product/15.jpg') }}" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="{{ asset('assets/images/product/16.jpg') }}" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="{{ asset('assets/images/product/17.jpg') }}" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge used">used</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="{{ asset('assets/images/product/18.jpg') }}" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="{{ asset('assets/images/product/19.jpg') }}" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="{{ asset('assets/images/product/20.jpg') }}" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge used">used</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="ratings">
                <div class="row row-cols-xl-4">
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="{{ asset('assets/images/product/20.jpg') }}" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>fixed</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="{{ asset('assets/images/product/19.jpg') }}" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge used">used</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="{{ asset('assets/images/product/18.jpg') }}" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="{{ asset('assets/images/product/17.jpg') }}" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="{{ asset('assets/images/product/16.jpg') }}" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge used">used</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/15.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/14.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/13.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge used">used</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="engaged">
                <div class="row row-cols-xl-4">
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/15.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>fixed</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/16.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge used">used</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/18.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/20.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/17.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge used">used</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/10.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/19.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/20.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge used">used</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="clicks">
                <div class="row row-cols-xl-4">
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/13.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>fixed</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/20.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge used">used</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/12.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/13.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/15.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge used">used</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/14.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/16.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/19.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge used">used</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="views">
                <div class="row row-cols-xl-4">
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/11.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>fixed</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/12.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge used">used</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/13.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/14.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/15.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge used">used</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/16.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/17.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge new">new</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="../images/product/18.jpg" alt="feature" />
                                <div class="product-grid-badge">
                                    <span class="badge used">used</span>
                                </div>
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>4</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a href="profile.html">by autoland</a>
                                    </div>
                                    <div class="product-grid-rating">
                                        <i class="material-icons">star</i><a href="review.html">28 review</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>$18,759/-</span><small>negotiable</small>
                                    </div>
                                    <div class="product-grid-action">
                                        <button type="button" title="Compare" class="compare material-icons">
                                            compare</button><button type="button" title="Favorite"
                                            class="favorite material-icons">
                                            favorite
                                        </button>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="inventory-single.html">Mercedez benz super mclaren</a>
                                    </h4>
                                    <ul>
                                        <li>delpara, narayanganj</li>
                                        <li>23h ago!</li>
                                    </ul>
                                </div>
                                <ul class="product-grid-extra">
                                    <li>
                                        <i class="material-icons">construction</i><span>manual</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">settings</i><span>2000 km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>diesel</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="inventory-single.html"><i
                                            class="material-icons">visibility</i><span>details</span></a><a
                                        href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                        data-vbtype="video"><i
                                            class="material-icons">videocam</i><span>video</span></a>
                                </div>
                            </div>
                        </div>
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
                            <h2>browse by top brands</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                        </div>
                        <a href="inventory-list.html" class="btn btn-inline"><i
                                class="material-icons">travel_explore</i><span>browse all</span></a>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-5">
                <div class="col">
                    <a class="brand-card" href="inventory-list.html"><img src="../images/brand/01.png"
                            alt="brand" />
                        <h6>tesla</h6>
                        <p>(24) vehicles</p>
                    </a>
                </div>
                <div class="col">
                    <a class="brand-card" href="inventory-list.html"><img src="../images/brand/02.png"
                            alt="brand" />
                        <h6>nissan</h6>
                        <p>(24) vehicles</p>
                    </a>
                </div>
                <div class="col">
                    <a class="brand-card" href="inventory-list.html"><img src="../images/brand/03.png"
                            alt="brand" />
                        <h6>mercedes</h6>
                        <p>(24) vehicles</p>
                    </a>
                </div>
                <div class="col">
                    <a class="brand-card" href="inventory-list.html"><img src="../images/brand/04.png"
                            alt="brand" />
                        <h6>toyota</h6>
                        <p>(24) vehicles</p>
                    </a>
                </div>
                <div class="col">
                    <a class="brand-card" href="inventory-list.html"><img src="../images/brand/05.png"
                            alt="brand" />
                        <h6>audi</h6>
                        <p>(24) vehicles</p>
                    </a>
                </div>
                <div class="col">
                    <a class="brand-card" href="inventory-list.html"><img src="../images/brand/06.png"
                            alt="brand" />
                        <h6>lamborghini</h6>
                        <p>(24) vehicles</p>
                    </a>
                </div>
                <div class="col">
                    <a class="brand-card" href="inventory-list.html"><img src="../images/brand/07.png"
                            alt="brand" />
                        <h6>bugatti</h6>
                        <p>(24) vehicles</p>
                    </a>
                </div>
                <div class="col">
                    <a class="brand-card" href="inventory-list.html"><img src="../images/brand/08.png"
                            alt="brand" />
                        <h6>ferrari</h6>
                        <p>(24) vehicles</p>
                    </a>
                </div>
                <div class="col">
                    <a class="brand-card" href="inventory-list.html"><img src="../images/brand/09.png"
                            alt="brand" />
                        <h6>bmw</h6>
                        <p>(24) vehicles</p>
                    </a>
                </div>
                <div class="col">
                    <a class="brand-card" href="inventory-list.html"><img src="../images/brand/10.png"
                            alt="brand" />
                        <h6>porsche</h6>
                        <p>(24) vehicles</p>
                    </a>
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
                            <h2>find in nearest cities</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                        </div>
                        <a href="inventory-list.html" class="btn btn-inline"><i
                                class="material-icons">travel_explore</i><span>browse all</span></a>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 city-card-group">
                <div class="col">
                    <div class="city-card">
                        <img src="../images/city/newyork.jpg" alt="city" />
                        <div class="city-overlay">
                            <a href="inventory-list.html" class="material-icons">add</a>
                            <h3><a href="inventory-list.html">new york</a></h3>
                            <p>35 vehicles</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="city-card">
                        <img src="../images/city/losangeles.jpg" alt="city" />
                        <div class="city-overlay">
                            <a href="inventory-list.html" class="material-icons">add</a>
                            <h3><a href="inventory-list.html">los angeles</a></h3>
                            <p>76 vehicles</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="city-card">
                        <img src="../images/city/chicago.jpg" alt="city" />
                        <div class="city-overlay">
                            <a href="inventory-list.html" class="material-icons">add</a>
                            <h3><a href="inventory-list.html">chicago</a></h3>
                            <p>28 vehicles</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="city-card">
                        <img src="../images/city/houston.jpg" alt="city" />
                        <div class="city-overlay">
                            <a href="inventory-list.html" class="material-icons">add</a>
                            <h3><a href="inventory-list.html">houston</a></h3>
                            <p>14 vehicles</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="city-card">
                        <img src="../images/city/dallas.jpg" alt="city" />
                        <div class="city-overlay">
                            <a href="inventory-list.html" class="material-icons">add</a>
                            <h3><a href="inventory-list.html">dallas</a></h3>
                            <p>42 vehicles</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="city-card">
                        <img src="../images/city/columbus.jpg" alt="city" />
                        <div class="city-overlay">
                            <a href="inventory-list.html" class="material-icons">add</a>
                            <h3><a href="inventory-list.html">columbus</a></h3>
                            <p>73 vehicles</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="city-card">
                        <img src="../images/city/phoenix.jpg" alt="city" />
                        <div class="city-overlay">
                            <a href="inventory-list.html" class="material-icons">add</a>
                            <h3><a href="inventory-list.html">phoenix</a></h3>
                            <p>59 vehicles</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="city-card">
                        <img src="../images/city/sandiego.jpg" alt="city" />
                        <div class="city-overlay">
                            <a href="inventory-list.html" class="material-icons">add</a>
                            <h3><a href="inventory-list.html">sandiego</a></h3>
                            <p>84 vehicles</p>
                        </div>
                    </div>
                </div>
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
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                        </div>
                        <a href="about-us.html" class="btn btn-inline"><i
                                class="material-icons">details</i><span>more details</span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="about-media">
                        <img src="../images/bg/video.jpg" alt="video" />
                        <div class="about-overlay">
                            <a href="https://youtu.be/TboWOSW7qCI" class="venobox material-icons"
                                data-autoplay="true" data-vbtype="video">play_arrow</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="about-content">
                        <h3>
                            Ghurnek has been standing on the trust of customers for the last
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
            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4">
                <div class="col">
                    <div class="funfactor-card">
                        <i class="material-icons">drive_eta</i>
                        <h4>
                            <span class="funfactor-text">stock vehicles</span><span
                                class="funfactor-data">2355</span>
                        </h4>
                    </div>
                </div>
                <div class="col">
                    <div class="funfactor-card">
                        <i class="material-icons">flag</i>
                        <h4>
                            <span class="funfactor-text">sold vehicles</span><span
                                class="funfactor-data">7895</span>
                        </h4>
                    </div>
                </div>
                <div class="col">
                    <div class="funfactor-card">
                        <i class="material-icons">people</i>
                        <h4>
                            <span class="funfactor-text">happy clients</span><span
                                class="funfactor-data">6567</span>
                        </h4>
                    </div>
                </div>
                <div class="col">
                    <div class="funfactor-card">
                        <i class="material-icons">forum</i>
                        <h4>
                            <span class="funfactor-text">total reviews</span><span
                                class="funfactor-data">5467</span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-gap-120 review-part">
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
    </section>


    @include('layouts.footer')
    @include('layouts.script')
</body>


</html>
