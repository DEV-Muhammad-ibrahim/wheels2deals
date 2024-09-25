@include('layouts.head')

<body>
    <div class="backdrop"></div>
    @include('layouts.header')
    @include('layouts.navbar')
    @include('layouts.widget')
    <section class="section-gap-100">
        <div style="background: url({{ asset('assets/images/banner/single/01.jpg') }}) no-repeat center / cover;">
            <div class="single-banner">
                <div class="container">
                    <h2>Inventory List View</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ Route('index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{ Route('cars') }}">Cars</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="section-gap-100">
        <div class="container">
            <div class="row content-reverse">
                <div class="col-lg-4 col-xl-3">
                    <div class="product-widget">
                        <h6 class="product-widget-title">Filter by Price</h6>
                        <form>
                            <div class="product-widget-group"><input type="text" placeholder="Min - 00"><input
                                    type="text" placeholder="Max - 100K"></div><button class="product-widget-btn"><i
                                    class="material-icons">search</i><span>search</span></button>
                        </form>
                    </div>
                    <div class="product-widget">
                        <h6 class="product-widget-title">Filter by Rating</h6>
                        <form>
                            <ul class="product-widget-list">
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="feat1"><label
                                            for="feat1"><i class="material-icons active">star</i><i
                                                class="material-icons active">star</i><i
                                                class="material-icons active">star</i><i
                                                class="material-icons active">star</i><i
                                                class="material-icons active">star</i></label></div><span
                                        class="product-widget-number">(13)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="feat2"><label
                                            for="feat2"><i class="material-icons active">star</i><i
                                                class="material-icons active">star</i><i
                                                class="material-icons active">star</i><i
                                                class="material-icons active">star</i><i
                                                class="material-icons">star</i></label></div><span
                                        class="product-widget-number">(28)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="feat3"><label
                                            for="feat3"><i class="material-icons active">star</i><i
                                                class="material-icons active">star</i><i
                                                class="material-icons active">star</i><i
                                                class="material-icons">star</i><i
                                                class="material-icons">star</i></label></div><span
                                        class="product-widget-number">(35)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="feat4"><label
                                            for="feat4"><i class="material-icons active">star</i><i
                                                class="material-icons active">star</i><i
                                                class="material-icons">star</i><i class="material-icons">star</i><i
                                                class="material-icons">star</i></label></div><span
                                        class="product-widget-number">(47)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="feat5"><label
                                            for="feat5"><i class="material-icons active">star</i><i
                                                class="material-icons">star</i><i class="material-icons">star</i><i
                                                class="material-icons">star</i><i
                                                class="material-icons">star</i></label></div><span
                                        class="product-widget-number">(59)</span>
                                </li>
                            </ul><button class="product-widget-btn"><i class="material-icons">delete</i><span>clear
                                    filter</span></button>
                        </form>
                    </div>
                    <div class="product-widget">
                        <h6 class="product-widget-title">Filter by colour</h6>
                        <form>
                            <ul class="product-widget-list">
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="clr1"><label
                                            for="clr1" class="product-widget-color green">green</label></div><span
                                        class="product-widget-number">(13)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="clr2"><label
                                            for="clr2" class="product-widget-color yellow">yellow</label></div>
                                    <span class="product-widget-number">(65)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="clr3"><label
                                            for="clr3" class="product-widget-color orange">orange</label></div>
                                    <span class="product-widget-number">(34)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="clr4"><label
                                            for="clr4" class="product-widget-color red">red</label></div><span
                                        class="product-widget-number">(67)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="clr5"><label
                                            for="clr5" class="product-widget-color black">black</label></div><span
                                        class="product-widget-number">(45)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="clr6"><label
                                            for="clr6" class="product-widget-color purple">purple</label></div>
                                    <span class="product-widget-number">(52)</span>
                                </li>
                            </ul><button class="product-widget-btn"><i class="material-icons">delete</i><span>clear
                                    filter</span></button>
                        </form>
                    </div>
                    <div class="product-widget">
                        <h6 class="product-widget-title">Filter by Tag</h6>
                        <form>
                            <ul class="product-widget-list">
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="tag1"><label
                                            for="tag1">new items</label></div><span
                                        class="product-widget-number">(13)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="tag2"><label
                                            for="tag2">sale items</label></div><span
                                        class="product-widget-number">(28)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="tag3"><label
                                            for="tag3">rating items</label></div><span
                                        class="product-widget-number">(35)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="tag4"><label
                                            for="tag4">feature items</label></div><span
                                        class="product-widget-number">(47)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="tag5"><label
                                            for="tag5">discount items</label></div><span
                                        class="product-widget-number">(59)</span>
                                </li>
                            </ul><button class="product-widget-btn"><i class="material-icons">delete</i><span>clear
                                    filter</span></button>
                        </form>
                    </div>
                    <div class="product-widget">
                        <h6 class="product-widget-title">Filter by Brand</h6>
                        <form><input class="product-widget-search" type="text" placeholder="Search...">
                            <ul class="product-widget-list product-widget-scroll">
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="brand1"><label
                                            for="brand1">tesla</label></div><span
                                        class="product-widget-number">(13)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="brand2"><label
                                            for="brand2">nissan</label></div><span
                                        class="product-widget-number">(28)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="brand3"><label
                                            for="brand3">mercedez</label></div><span
                                        class="product-widget-number">(35)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="brand4"><label
                                            for="brand4">audi</label></div><span
                                        class="product-widget-number">(35)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="brand5"><label
                                            for="brand5">toyota</label></div><span
                                        class="product-widget-number">(47)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="brand6"><label
                                            for="brand6">lamborghini</label></div><span
                                        class="product-widget-number">(59)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="brand7"><label
                                            for="brand7">bugatti</label></div><span
                                        class="product-widget-number">(64)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="brand8"><label
                                            for="brand8">ferrari</label></div><span
                                        class="product-widget-number">(77)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="brand9"><label
                                            for="brand9">porsche</label></div><span
                                        class="product-widget-number">(85)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="brand10"><label
                                            for="brand10">bmw</label></div><span
                                        class="product-widget-number">(85)</span>
                                </li>
                            </ul><button class="product-widget-btn"><i class="material-icons">delete</i><span>clear
                                    filter</span></button>
                        </form>
                    </div>
                    <div class="product-widget">
                        <h6 class="product-widget-title">Filter by Category</h6>
                        <form><input class="product-widget-search" type="text" placeholder="Search...">
                            <ul class="product-widget-list product-widget-scroll">
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="cate1"><label
                                            for="cate1">convertible</label></div><span
                                        class="product-widget-number">(13)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="cate2"><label
                                            for="cate2">pickup</label></div><span
                                        class="product-widget-number">(28)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="cate3"><label
                                            for="cate3">sedan</label></div><span
                                        class="product-widget-number">(35)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="cate4"><label
                                            for="cate4">wagon</label></div><span
                                        class="product-widget-number">(47)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="cate5"><label
                                            for="cate5">Hatchback</label></div><span
                                        class="product-widget-number">(59)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="cate6"><label
                                            for="cate6">jeep</label></div><span
                                        class="product-widget-number">(64)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="cate7"><label
                                            for="cate7">sports</label></div><span
                                        class="product-widget-number">(77)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="cate8"><label
                                            for="cate8">minivan</label></div><span
                                        class="product-widget-number">(77)</span>
                                </li>
                                <li>
                                    <div class="product-widget-content"><input type="checkbox" id="cate9"><label
                                            for="cate9">suv/muv</label></div><span
                                        class="product-widget-number">(77)</span>
                                </li>
                            </ul><button class="product-widget-btn"><i class="material-icons">delete</i><span>clear
                                    filter</span></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="top-filter">
                                <div class="filter-show"><label class="filter-label">Show :</label><select
                                        class="form-select filter-select">
                                        <option value="1">12</option>
                                        <option value="2">24</option>
                                        <option value="3">36</option>
                                    </select></div>
                                <div class="filter-short"><label class="filter-label">Short by :</label><select
                                        class="form-select filter-select">
                                        <option selected>default</option>
                                        <option value="3">trending</option>
                                        <option value="1">featured</option>
                                        <option value="2">recommend</option>
                                    </select></div>
                                <div class="filter-action"><a href="inventory-grid.html" title="Grid View"
                                        class="material-icons">grid_view</a><a href="inventory-list.html"
                                        title="List View" class="material-icons active">list_alt</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="inventory-feature">
                        <div class="row inventory-feature-slider slider-arrow">
                            <div class="col">
                                <div class="product-feature-card">
                                    <div class="product-feature-image"><img src="../images/product/08.jpg"
                                            alt="product"><a href="inventory-single.html"
                                            class="product-feature-btn badge-hover"><i
                                                class="material-icons">add</i><span class="badge arrow-right">more
                                                details</span></a>
                                        <div class="product-feature-badge"><span class="badge new">new</span><span
                                                class="badge featured">featured</span></div>
                                    </div>
                                    <div class="product-feature-meta">
                                        <h3><a href="inventory-single.html">Mercedez benz super mclaren</a></h3>
                                        <h4>$45,658/- <span>negotiable</span></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="product-feature-card">
                                    <div class="product-feature-image"><img src="../images/product/06.jpg"
                                            alt="product"><a href="inventory-single.html"
                                            class="product-feature-btn badge-hover"><i
                                                class="material-icons">add</i><span class="badge arrow-right">more
                                                details</span></a>
                                        <div class="product-feature-badge"><span class="badge used">used</span><span
                                                class="badge featured">featured</span></div>
                                    </div>
                                    <div class="product-feature-meta">
                                        <h3><a href="inventory-single.html">Mercedez benz super mclaren</a></h3>
                                        <h4>$45,658/- <span>negotiable</span></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="product-feature-card">
                                    <div class="product-feature-image"><img src="../images/product/10.jpg"
                                            alt="product"><a href="inventory-single.html"
                                            class="product-feature-btn badge-hover"><i
                                                class="material-icons">add</i><span class="badge arrow-right">more
                                                details</span></a>
                                        <div class="product-feature-badge"><span class="badge new">new</span><span
                                                class="badge featured">featured</span></div>
                                    </div>
                                    <div class="product-feature-meta">
                                        <h3><a href="inventory-single.html">Mercedez benz super mclaren</a></h3>
                                        <h4>$45,658/- <span>negotiable</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-1">
                        <div class="col">
                            <div class="product-list-card">
                                <div class="product-list-image"><img src="../images/product/01.jpg" alt="product">
                                    <div class="product-list-badge"><label class="badge new">new</label></div>
                                    <div class="product-list-hints"><i
                                            class="material-icons">collections</i><span>4</span></div>
                                    <div class="product-list-overlay">
                                        <div class="product-list-vendor"><i class="material-icons">person</i><a
                                                href="profile.html">by autoland</a></div>
                                        <div class="product-list-rating"><i class="material-icons">star</i><a
                                                href="review.html">28 review</a></div>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-list-group">
                                        <div class="product-list-meta">
                                            <h3><a href="inventory-single.html">Mercedez benz super mclaren</a></h3>
                                            <ul>
                                                <li>delpara, narayanganj</li>
                                                <li>45 minute ago!</li>
                                            </ul>
                                        </div>
                                        <div class="product-list-price">
                                            <h3>$18,759/-</h3><span>negotiable</span>
                                        </div>
                                    </div>
                                    <ul class="product-list-info">
                                        <li><span>type:</span><span>wagon</span></li>
                                        <li><span>make:</span><span>mercedez</span></li>
                                        <li><span>fuel:</span><span>Diesel</span></li>
                                        <li><span>year:</span><span>2022</span></li>
                                        <li><span>price:</span><span>negotiable</span></li>
                                        <li><span>colour:</span><span>brown</span></li>
                                        <li><span>mileage:</span><span>17.20 kmpl</span></li>
                                    </ul>
                                    <div class="product-list-action"><a href="inventory-single.html"><i
                                                class="material-icons">visibility</i><span>details</span></a><a
                                            href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                            data-vbtype="video"><i
                                                class="material-icons">videocam</i><span>video</span></a><button
                                            type="button" class="compare"><i
                                                class="material-icons">compare</i><span>compare</span></button><button
                                            type="button" class="favorite"><i
                                                class="material-icons">favorite</i><span>favorite</span></button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-list-card">
                                <div class="product-list-image"><img src="../images/product/02.jpg" alt="product">
                                    <div class="product-list-badge"><label class="badge new">new</label><label
                                            class="badge featured">featured</label></div>
                                    <div class="product-list-hints"><i
                                            class="material-icons">collections</i><span>4</span></div>
                                    <div class="product-list-overlay">
                                        <div class="product-list-vendor"><i class="material-icons">person</i><a
                                                href="profile.html">by autoland</a></div>
                                        <div class="product-list-rating"><i class="material-icons">star</i><a
                                                href="review.html">28 review</a></div>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-list-group">
                                        <div class="product-list-meta">
                                            <h3><a href="inventory-single.html">Mercedez benz super mclaren</a></h3>
                                            <ul>
                                                <li>delpara, narayanganj</li>
                                                <li>45 minute ago!</li>
                                            </ul>
                                        </div>
                                        <div class="product-list-price">
                                            <h3>$18,759/-</h3><span>negotiable</span>
                                        </div>
                                    </div>
                                    <ul class="product-list-info">
                                        <li><span>type:</span><span>wagon</span></li>
                                        <li><span>make:</span><span>mercedez</span></li>
                                        <li><span>fuel:</span><span>Diesel</span></li>
                                        <li><span>year:</span><span>2022</span></li>
                                        <li><span>price:</span><span>negotiable</span></li>
                                        <li><span>colour:</span><span>brown</span></li>
                                        <li><span>mileage:</span><span>17.20 kmpl</span></li>
                                    </ul>
                                    <div class="product-list-action"><a href="inventory-single.html"><i
                                                class="material-icons">visibility</i><span>details</span></a><a
                                            href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                            data-vbtype="video"><i
                                                class="material-icons">videocam</i><span>video</span></a><button
                                            type="button" class="compare"><i
                                                class="material-icons">compare</i><span>compare</span></button><button
                                            type="button" class="favorite"><i
                                                class="material-icons">favorite</i><span>favorite</span></button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-list-card">
                                <div class="product-list-image"><img src="../images/product/03.jpg" alt="product">
                                    <div class="product-list-badge"><label class="badge new">new</label></div>
                                    <div class="product-list-hints"><i
                                            class="material-icons">collections</i><span>4</span></div>
                                    <div class="product-list-overlay">
                                        <div class="product-list-vendor"><i class="material-icons">person</i><a
                                                href="profile.html">by autoland</a></div>
                                        <div class="product-list-rating"><i class="material-icons">star</i><a
                                                href="review.html">28 review</a></div>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-list-group">
                                        <div class="product-list-meta">
                                            <h3><a href="inventory-single.html">Mercedez benz super mclaren</a></h3>
                                            <ul>
                                                <li>delpara, narayanganj</li>
                                                <li>45 minute ago!</li>
                                            </ul>
                                        </div>
                                        <div class="product-list-price">
                                            <h3>$18,759/-</h3><span>negotiable</span>
                                        </div>
                                    </div>
                                    <ul class="product-list-info">
                                        <li><span>type:</span><span>wagon</span></li>
                                        <li><span>make:</span><span>mercedez</span></li>
                                        <li><span>fuel:</span><span>Diesel</span></li>
                                        <li><span>year:</span><span>2022</span></li>
                                        <li><span>price:</span><span>negotiable</span></li>
                                        <li><span>colour:</span><span>brown</span></li>
                                        <li><span>mileage:</span><span>17.20 kmpl</span></li>
                                    </ul>
                                    <div class="product-list-action"><a href="inventory-single.html"><i
                                                class="material-icons">visibility</i><span>details</span></a><a
                                            href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                            data-vbtype="video"><i
                                                class="material-icons">videocam</i><span>video</span></a><button
                                            type="button" class="compare"><i
                                                class="material-icons">compare</i><span>compare</span></button><button
                                            type="button" class="favorite"><i
                                                class="material-icons">favorite</i><span>favorite</span></button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-list-card">
                                <div class="product-list-image"><img src="../images/product/04.jpg" alt="product">
                                    <div class="product-list-badge"><label class="badge used">used</label></div>
                                    <div class="product-list-hints"><i
                                            class="material-icons">collections</i><span>4</span></div>
                                    <div class="product-list-overlay">
                                        <div class="product-list-vendor"><i class="material-icons">person</i><a
                                                href="profile.html">by autoland</a></div>
                                        <div class="product-list-rating"><i class="material-icons">star</i><a
                                                href="review.html">28 review</a></div>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-list-group">
                                        <div class="product-list-meta">
                                            <h3><a href="inventory-single.html">Mercedez benz super mclaren</a></h3>
                                            <ul>
                                                <li>delpara, narayanganj</li>
                                                <li>45 minute ago!</li>
                                            </ul>
                                        </div>
                                        <div class="product-list-price">
                                            <h3>$18,759/-</h3><span>negotiable</span>
                                        </div>
                                    </div>
                                    <ul class="product-list-info">
                                        <li><span>type:</span><span>wagon</span></li>
                                        <li><span>make:</span><span>mercedez</span></li>
                                        <li><span>fuel:</span><span>Diesel</span></li>
                                        <li><span>year:</span><span>2022</span></li>
                                        <li><span>price:</span><span>negotiable</span></li>
                                        <li><span>colour:</span><span>brown</span></li>
                                        <li><span>mileage:</span><span>17.20 kmpl</span></li>
                                    </ul>
                                    <div class="product-list-action"><a href="inventory-single.html"><i
                                                class="material-icons">visibility</i><span>details</span></a><a
                                            href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                            data-vbtype="video"><i
                                                class="material-icons">videocam</i><span>video</span></a><button
                                            type="button" class="compare"><i
                                                class="material-icons">compare</i><span>compare</span></button><button
                                            type="button" class="favorite"><i
                                                class="material-icons">favorite</i><span>favorite</span></button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-list-card">
                                <div class="product-list-image"><img src="../images/product/05.jpg" alt="product">
                                    <div class="product-list-badge"><label class="badge new">new</label></div>
                                    <div class="product-list-hints"><i
                                            class="material-icons">collections</i><span>4</span></div>
                                    <div class="product-list-overlay">
                                        <div class="product-list-vendor"><i class="material-icons">person</i><a
                                                href="profile.html">by autoland</a></div>
                                        <div class="product-list-rating"><i class="material-icons">star</i><a
                                                href="review.html">28 review</a></div>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-list-group">
                                        <div class="product-list-meta">
                                            <h3><a href="inventory-single.html">Mercedez benz super mclaren</a></h3>
                                            <ul>
                                                <li>delpara, narayanganj</li>
                                                <li>45 minute ago!</li>
                                            </ul>
                                        </div>
                                        <div class="product-list-price">
                                            <h3>$18,759/-</h3><span>negotiable</span>
                                        </div>
                                    </div>
                                    <ul class="product-list-info">
                                        <li><span>type:</span><span>wagon</span></li>
                                        <li><span>make:</span><span>mercedez</span></li>
                                        <li><span>fuel:</span><span>Diesel</span></li>
                                        <li><span>year:</span><span>2022</span></li>
                                        <li><span>price:</span><span>negotiable</span></li>
                                        <li><span>colour:</span><span>brown</span></li>
                                        <li><span>mileage:</span><span>17.20 kmpl</span></li>
                                    </ul>
                                    <div class="product-list-action"><a href="inventory-single.html"><i
                                                class="material-icons">visibility</i><span>details</span></a><a
                                            href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                            data-vbtype="video"><i
                                                class="material-icons">videocam</i><span>video</span></a><button
                                            type="button" class="compare"><i
                                                class="material-icons">compare</i><span>compare</span></button><button
                                            type="button" class="favorite"><i
                                                class="material-icons">favorite</i><span>favorite</span></button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-list-card">
                                <div class="product-list-image"><img src="../images/product/06.jpg" alt="product">
                                    <div class="product-list-badge"><label class="badge new">new</label><label
                                            class="badge featured">featured</label></div>
                                    <div class="product-list-hints"><i
                                            class="material-icons">collections</i><span>4</span></div>
                                    <div class="product-list-overlay">
                                        <div class="product-list-vendor"><i class="material-icons">person</i><a
                                                href="profile.html">by autoland</a></div>
                                        <div class="product-list-rating"><i class="material-icons">star</i><a
                                                href="review.html">28 review</a></div>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="product-list-group">
                                        <div class="product-list-meta">
                                            <h3><a href="inventory-single.html">Mercedez benz super mclaren</a></h3>
                                            <ul>
                                                <li>delpara, narayanganj</li>
                                                <li>45 minute ago!</li>
                                            </ul>
                                        </div>
                                        <div class="product-list-price">
                                            <h3>$18,759/-</h3><span>negotiable</span>
                                        </div>
                                    </div>
                                    <ul class="product-list-info">
                                        <li><span>type:</span><span>wagon</span></li>
                                        <li><span>make:</span><span>mercedez</span></li>
                                        <li><span>fuel:</span><span>Diesel</span></li>
                                        <li><span>year:</span><span>2022</span></li>
                                        <li><span>price:</span><span>negotiable</span></li>
                                        <li><span>colour:</span><span>brown</span></li>
                                        <li><span>mileage:</span><span>17.20 kmpl</span></li>
                                    </ul>
                                    <div class="product-list-action"><a href="inventory-single.html"><i
                                                class="material-icons">visibility</i><span>details</span></a><a
                                            href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                            data-vbtype="video"><i
                                                class="material-icons">videocam</i><span>video</span></a><button
                                            type="button" class="compare"><i
                                                class="material-icons">compare</i><span>compare</span></button><button
                                            type="button" class="favorite"><i
                                                class="material-icons">favorite</i><span>favorite</span></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bottom-paginate mb-50">
                                <p class="page-info">Showing 12 of 60 Results</p>
                                <ul class="pagination">
                                    <li class="page-item"><a href="#"
                                            class="page-link material-icons">chevron_left</a></li>
                                    <li class="page-item"><a href="#" class="page-link active">01</a></li>
                                    <li class="page-item"><a href="#" class="page-link">02</a></li>
                                    <li class="page-item"><a href="#" class="page-link">03</a></li>
                                    <li class="page-item">...</li>
                                    <li class="page-item"><a href="#" class="page-link">45</a></li>
                                    <li class="page-item"><a href="#"
                                            class="page-link material-icons">chevron_right</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-gap-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-head">
                        <div class="section-text">
                            <h2>top search keywords</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <ul class="keyword-list">
                        <li><a href="inventory-list.html">tesla model 3</a></li>
                        <li><a href="inventory-list.html">lamborghini</a></li>
                        <li><a href="inventory-list.html">mercedes-benz</a></li>
                        <li><a href="inventory-list.html">nissan qashqai</a></li>
                        <li><a href="inventory-list.html">bmw 3 series</a></li>
                        <li><a href="inventory-list.html">toyota supra</a></li>
                        <li><a href="inventory-list.html">ferrari 488</a></li>
                        <li><a href="inventory-list.html">bugatti chiron</a></li>
                        <li><a href="inventory-list.html">audi rs7</a></li>
                        <li><a href="inventory-list.html">porsche taycan</a></li>
                        <li><a href="inventory-list.html">toyota chr</a></li>
                        <li><a href="inventory-list.html">tesla roadster</a></li>
                        <li><a href="inventory-list.html">nissan</a></li>
                        <li><a href="inventory-list.html">minibus toyota</a></li>
                        <li><a href="inventory-list.html">tata tiago</a></li>
                        <li><a href="inventory-list.html">lamborghini aventador</a></li>
                        <li><a href="inventory-list.html">ferrari 812 superfast</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
    @include('layouts.script')
</body>


</html>
