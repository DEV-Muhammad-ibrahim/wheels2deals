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
                <h2 class="mc-breadcrumb-title">user favourites</h2>
                <ul class="mc-breadcrumb-list">
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="index.html">home</a></li>
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="dashboard.html">dashboard</a>
                    </li>
                    <li class="mc-breadcrumb-item">favorite</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section-gap-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="favorite-title">
                        <h6>vehicles</h6>
                        <h6>information</h6>
                        <h6>widgets</h6>
                        <h6>action</h6>
                    </div>
                    <ul class="favorite-list">
                        <li class="favorite-item">
                            <div class="favorite-media"><img src="../images/product/01.jpg" alt="product">
                                <div class="favorite-badge"><label class="badge new">new</label><label
                                        class="badge featured">featured</label></div>
                                <div class="favorite-hints"><i class="material-icons">collections</i><span>5</span>
                                </div>
                            </div>
                            <div class="favorite-info">
                                <h3><a href="inventory-single.html">Mercedez benz super mclaren</a></h3>
                                <ul>
                                    <li><i class="material-icons">store</i><a href="profile.html">by autoland</a></li>
                                    <li><i class="material-icons">watch_later</i><span>posted 25m ago</span></li>
                                    <li><i class="material-icons">bookmark_add</i><span>individual</span></li>
                                    <li><i class="material-icons">fmd_good</i><span>delpara, narayanganj</span></li>
                                    <li><i class="material-icons">stars</i><a href="review.html">4.9/18 reviews</a>
                                    </li>
                                </ul>
                                <h5>$18,759/- <small>negotiable</small></h5>
                            </div>
                            <div class="favorite-widget"><button type="button" title="Favorite"
                                    class="favorite active"><i class="material-icons">favorite</i></button><button
                                    type="button" title="Compare" class="compare"><i
                                        class="material-icons">compare</i></button><a href="inventory-single.html"
                                    title="Details"><i class="material-icons">visibility</i></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" title="Video" class="venobox"
                                    data-autoplay="true" data-vbtype="video"><i class="material-icons">videocam</i></a>
                            </div><a href="#" class="favorite-close"><i class="material-icons">close</i></a>
                        </li>
                        <li class="favorite-item">
                            <div class="favorite-media"><img src="../images/product/02.jpg" alt="product">
                                <div class="favorite-badge"><label class="badge used">used</label></div>
                                <div class="favorite-hints"><i class="material-icons">collections</i><span>5</span>
                                </div>
                            </div>
                            <div class="favorite-info">
                                <h3><a href="inventory-single.html">Mercedez benz super mclaren</a></h3>
                                <ul>
                                    <li><i class="material-icons">store</i><a href="profile.html">by autoland</a></li>
                                    <li><i class="material-icons">watch_later</i><span>posted 25m ago</span></li>
                                    <li><i class="material-icons">bookmark_add</i><span>dealership</span></li>
                                    <li><i class="material-icons">fmd_good</i><span>delpara, narayanganj</span></li>
                                    <li><i class="material-icons">stars</i><a href="review.html">4.9/18 reviews</a>
                                    </li>
                                </ul>
                                <h5>$18,759/- <small>fixed</small></h5>
                            </div>
                            <div class="favorite-widget"><button type="button" title="Favorite"
                                    class="favorite active"><i class="material-icons">favorite</i></button><button
                                    type="button" title="Compare" class="compare"><i
                                        class="material-icons">compare</i></button><a href="inventory-single.html"
                                    title="Details"><i class="material-icons">visibility</i></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" title="Video" class="venobox"
                                    data-autoplay="true" data-vbtype="video"><i class="material-icons">videocam</i></a>
                            </div><a href="#" class="favorite-close"><i class="material-icons">close</i></a>
                        </li>
                        <li class="favorite-item">
                            <div class="favorite-media"><img src="../images/product/03.jpg" alt="product">
                                <div class="favorite-badge"><label class="badge new">new</label><label
                                        class="badge recom">recom</label></div>
                                <div class="favorite-hints"><i class="material-icons">collections</i><span>5</span>
                                </div>
                            </div>
                            <div class="favorite-info">
                                <h3><a href="inventory-single.html">Mercedez benz super mclaren</a></h3>
                                <ul>
                                    <li><i class="material-icons">store</i><a href="profile.html">by autoland</a></li>
                                    <li><i class="material-icons">watch_later</i><span>posted 25m ago</span></li>
                                    <li><i class="material-icons">bookmark_add</i><span>individual</span></li>
                                    <li><i class="material-icons">fmd_good</i><span>delpara, narayanganj</span></li>
                                    <li><i class="material-icons">stars</i><a href="review.html">4.9/18 reviews</a>
                                    </li>
                                </ul>
                                <h5>$18,759/- <small>negotiable</small></h5>
                            </div>
                            <div class="favorite-widget"><button type="button" title="Favorite"
                                    class="favorite active"><i class="material-icons">favorite</i></button><button
                                    type="button" title="Compare" class="compare"><i
                                        class="material-icons">compare</i></button><a href="inventory-single.html"
                                    title="Details"><i class="material-icons">visibility</i></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" title="Video" class="venobox"
                                    data-autoplay="true" data-vbtype="video"><i
                                        class="material-icons">videocam</i></a></div><a href="#"
                                class="favorite-close"><i class="material-icons">close</i></a>
                        </li>
                        <li class="favorite-item">
                            <div class="favorite-media"><img src="../images/product/04.jpg" alt="product">
                                <div class="favorite-badge"><label class="badge used">used</label><label
                                        class="badge featured">featured</label></div>
                                <div class="favorite-hints"><i class="material-icons">collections</i><span>5</span>
                                </div>
                            </div>
                            <div class="favorite-info">
                                <h3><a href="inventory-single.html">Mercedez benz super mclaren</a></h3>
                                <ul>
                                    <li><i class="material-icons">store</i><a href="profile.html">by autoland</a></li>
                                    <li><i class="material-icons">watch_later</i><span>posted 25m ago</span></li>
                                    <li><i class="material-icons">bookmark_add</i><span>dealership</span></li>
                                    <li><i class="material-icons">fmd_good</i><span>delpara, narayanganj</span></li>
                                    <li><i class="material-icons">stars</i><a href="review.html">4.9/18 reviews</a>
                                    </li>
                                </ul>
                                <h5>$18,759/- <small>fixed</small></h5>
                            </div>
                            <div class="favorite-widget"><button type="button" title="Favorite"
                                    class="favorite active"><i class="material-icons">favorite</i></button><button
                                    type="button" title="Compare" class="compare"><i
                                        class="material-icons">compare</i></button><a href="inventory-single.html"
                                    title="Details"><i class="material-icons">visibility</i></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" title="Video" class="venobox"
                                    data-autoplay="true" data-vbtype="video"><i
                                        class="material-icons">videocam</i></a></div><a href="#"
                                class="favorite-close"><i class="material-icons">close</i></a>
                        </li>
                        <li class="favorite-item">
                            <div class="favorite-media"><img src="../images/product/05.jpg" alt="product">
                                <div class="favorite-badge"><label class="badge new">new</label></div>
                                <div class="favorite-hints"><i class="material-icons">collections</i><span>5</span>
                                </div>
                            </div>
                            <div class="favorite-info">
                                <h3><a href="inventory-single.html">Mercedez benz super mclaren</a></h3>
                                <ul>
                                    <li><i class="material-icons">store</i><a href="profile.html">by autoland</a></li>
                                    <li><i class="material-icons">watch_later</i><span>posted 25m ago</span></li>
                                    <li><i class="material-icons">bookmark_add</i><span>individual</span></li>
                                    <li><i class="material-icons">fmd_good</i><span>delpara, narayanganj</span></li>
                                    <li><i class="material-icons">stars</i><a href="review.html">4.9/18 reviews</a>
                                    </li>
                                </ul>
                                <h5>$18,759/- <small>negotiable</small></h5>
                            </div>
                            <div class="favorite-widget"><button type="button" title="Favorite"
                                    class="favorite active"><i class="material-icons">favorite</i></button><button
                                    type="button" title="Compare" class="compare"><i
                                        class="material-icons">compare</i></button><a href="inventory-single.html"
                                    title="Details"><i class="material-icons">visibility</i></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" title="Video" class="venobox"
                                    data-autoplay="true" data-vbtype="video"><i
                                        class="material-icons">videocam</i></a></div><a href="#"
                                class="favorite-close"><i class="material-icons">close</i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="bottom-paginate">
                        <p class="page-info">Showing 12 of 60 Results</p>
                        <ul class="pagination">
                            <li class="page-item"><a href="#" class="page-link material-icons">chevron_left</a>
                            </li>
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
    </section>
    @include('layouts.footer')
    @include('layouts.script')
</body>


</html>
