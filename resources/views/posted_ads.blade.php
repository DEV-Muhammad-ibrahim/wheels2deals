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
                <h2 class="mc-breadcrumb-title">user posted ads</h2>
                <ul class="mc-breadcrumb-list">
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="index.html">home</a></li>
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="dashboard.html">dashboard</a>
                    </li>
                    <li class="mc-breadcrumb-item">posted-ads</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section-gap-75">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image"><img src="../images/product/01.jpg" alt="product">
                            <div class="product-grid-badge"><span class="badge used">used</span><span
                                    class="badge featured">featured</span></div>
                            <div class="product-grid-hints"><i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="posted-widget"><a href="#" title="Edit"
                                    class="material-icons edit">edit</a><a href="#" title="Delete"
                                    class="material-icons delete">delete</a></div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor"><i class="material-icons">person</i><a
                                        href="profile.html">by autoland</a></div>
                                <div class="product-grid-rating"><i class="material-icons">star</i><a
                                        href="review.html">28 review</a></div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price"><span>$18,759/-</span><small>negotiable</small></div>
                                <div class="product-grid-action"><button type="button" title="Compare"
                                        class="compare material-icons">compare</button><button type="button"
                                        title="Favorite" class="favorite material-icons">favorite</button></div>
                            </div>
                            <div class="product-grid-meta">
                                <h4><a href="inventory-single.html">Mercedez benz super mclaren</a></h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li><i class="material-icons">construction</i><span>manual</span></li>
                                <li><i class="material-icons">settings</i><span>2000 km</span></li>
                                <li><i class="material-icons">local_gas_station</i><span>diesel</span></li>
                            </ul>
                            <div class="product-grid-btn"><a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image"><img src="../images/product/02.jpg" alt="product">
                            <div class="product-grid-badge"><span class="badge new">new</span></div>
                            <div class="product-grid-hints"><i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="posted-widget"><a href="#" title="Edit"
                                    class="material-icons edit">edit</a><a href="#" title="Delete"
                                    class="material-icons delete">delete</a></div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor"><i class="material-icons">person</i><a
                                        href="profile.html">by autoland</a></div>
                                <div class="product-grid-rating"><i class="material-icons">star</i><a
                                        href="review.html">28 review</a></div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price"><span>$18,759/-</span><small>negotiable</small></div>
                                <div class="product-grid-action"><button type="button" title="Compare"
                                        class="compare material-icons">compare</button><button type="button"
                                        title="Favorite" class="favorite material-icons">favorite</button></div>
                            </div>
                            <div class="product-grid-meta">
                                <h4><a href="inventory-single.html">Mercedez benz super mclaren</a></h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li><i class="material-icons">construction</i><span>manual</span></li>
                                <li><i class="material-icons">settings</i><span>2000 km</span></li>
                                <li><i class="material-icons">local_gas_station</i><span>diesel</span></li>
                            </ul>
                            <div class="product-grid-btn"><a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image"><img src="../images/product/03.jpg" alt="product">
                            <div class="product-grid-badge"><span class="badge new">new</span><span
                                    class="badge recom">recom</span></div>
                            <div class="product-grid-hints"><i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="posted-widget"><a href="#" title="Edit"
                                    class="material-icons edit">edit</a><a href="#" title="Delete"
                                    class="material-icons delete">delete</a></div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor"><i class="material-icons">person</i><a
                                        href="profile.html">by autoland</a></div>
                                <div class="product-grid-rating"><i class="material-icons">star</i><a
                                        href="review.html">28 review</a></div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price"><span>$18,759/-</span><small>negotiable</small></div>
                                <div class="product-grid-action"><button type="button" title="Compare"
                                        class="compare material-icons">compare</button><button type="button"
                                        title="Favorite" class="favorite material-icons">favorite</button></div>
                            </div>
                            <div class="product-grid-meta">
                                <h4><a href="inventory-single.html">Mercedez benz super mclaren</a></h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li><i class="material-icons">construction</i><span>manual</span></li>
                                <li><i class="material-icons">settings</i><span>2000 km</span></li>
                                <li><i class="material-icons">local_gas_station</i><span>diesel</span></li>
                            </ul>
                            <div class="product-grid-btn"><a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image"><img src="../images/product/04.jpg" alt="product">
                            <div class="product-grid-badge"><span class="badge new">new</span></div>
                            <div class="product-grid-hints"><i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="posted-widget"><a href="#" title="Edit"
                                    class="material-icons edit">edit</a><a href="#" title="Delete"
                                    class="material-icons delete">delete</a></div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor"><i class="material-icons">person</i><a
                                        href="profile.html">by autoland</a></div>
                                <div class="product-grid-rating"><i class="material-icons">star</i><a
                                        href="review.html">28 review</a></div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price"><span>$18,759/-</span><small>negotiable</small></div>
                                <div class="product-grid-action"><button type="button" title="Compare"
                                        class="compare material-icons">compare</button><button type="button"
                                        title="Favorite" class="favorite material-icons">favorite</button></div>
                            </div>
                            <div class="product-grid-meta">
                                <h4><a href="inventory-single.html">Mercedez benz super mclaren</a></h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li><i class="material-icons">construction</i><span>manual</span></li>
                                <li><i class="material-icons">settings</i><span>2000 km</span></li>
                                <li><i class="material-icons">local_gas_station</i><span>diesel</span></li>
                            </ul>
                            <div class="product-grid-btn"><a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image"><img src="../images/product/05.jpg" alt="product">
                            <div class="product-grid-badge"><span class="badge used">used</span></div>
                            <div class="product-grid-hints"><i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="posted-widget"><a href="#" title="Edit"
                                    class="material-icons edit">edit</a><a href="#" title="Delete"
                                    class="material-icons delete">delete</a></div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor"><i class="material-icons">person</i><a
                                        href="profile.html">by autoland</a></div>
                                <div class="product-grid-rating"><i class="material-icons">star</i><a
                                        href="review.html">28 review</a></div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price"><span>$18,759/-</span><small>negotiable</small></div>
                                <div class="product-grid-action"><button type="button" title="Compare"
                                        class="compare material-icons">compare</button><button type="button"
                                        title="Favorite" class="favorite material-icons">favorite</button></div>
                            </div>
                            <div class="product-grid-meta">
                                <h4><a href="inventory-single.html">Mercedez benz super mclaren</a></h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li><i class="material-icons">construction</i><span>manual</span></li>
                                <li><i class="material-icons">settings</i><span>2000 km</span></li>
                                <li><i class="material-icons">local_gas_station</i><span>diesel</span></li>
                            </ul>
                            <div class="product-grid-btn"><a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image"><img src="../images/product/06.jpg" alt="product">
                            <div class="product-grid-badge"><span class="badge new">new</span></div>
                            <div class="product-grid-hints"><i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="posted-widget"><a href="#" title="Edit"
                                    class="material-icons edit">edit</a><a href="#" title="Delete"
                                    class="material-icons delete">delete</a></div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor"><i class="material-icons">person</i><a
                                        href="profile.html">by autoland</a></div>
                                <div class="product-grid-rating"><i class="material-icons">star</i><a
                                        href="review.html">28 review</a></div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price"><span>$18,759/-</span><small>negotiable</small></div>
                                <div class="product-grid-action"><button type="button" title="Compare"
                                        class="compare material-icons">compare</button><button type="button"
                                        title="Favorite" class="favorite material-icons">favorite</button></div>
                            </div>
                            <div class="product-grid-meta">
                                <h4><a href="inventory-single.html">Mercedez benz super mclaren</a></h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li><i class="material-icons">construction</i><span>manual</span></li>
                                <li><i class="material-icons">settings</i><span>2000 km</span></li>
                                <li><i class="material-icons">local_gas_station</i><span>diesel</span></li>
                            </ul>
                            <div class="product-grid-btn"><a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image"><img src="../images/product/07.jpg" alt="product">
                            <div class="product-grid-badge"><span class="badge used">used</span><span
                                    class="badge featured">featured</span></div>
                            <div class="product-grid-hints"><i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="posted-widget"><a href="#" title="Edit"
                                    class="material-icons edit">edit</a><a href="#" title="Delete"
                                    class="material-icons delete">delete</a></div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor"><i class="material-icons">person</i><a
                                        href="profile.html">by autoland</a></div>
                                <div class="product-grid-rating"><i class="material-icons">star</i><a
                                        href="review.html">28 review</a></div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price"><span>$18,759/-</span><small>negotiable</small></div>
                                <div class="product-grid-action"><button type="button" title="Compare"
                                        class="compare material-icons">compare</button><button type="button"
                                        title="Favorite" class="favorite material-icons">favorite</button></div>
                            </div>
                            <div class="product-grid-meta">
                                <h4><a href="inventory-single.html">Mercedez benz super mclaren</a></h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li><i class="material-icons">construction</i><span>manual</span></li>
                                <li><i class="material-icons">settings</i><span>2000 km</span></li>
                                <li><i class="material-icons">local_gas_station</i><span>diesel</span></li>
                            </ul>
                            <div class="product-grid-btn"><a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image"><img src="../images/product/08.jpg" alt="product">
                            <div class="product-grid-badge"><span class="badge new">new</span></div>
                            <div class="product-grid-hints"><i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="posted-widget"><a href="#" title="Edit"
                                    class="material-icons edit">edit</a><a href="#" title="Delete"
                                    class="material-icons delete">delete</a></div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor"><i class="material-icons">person</i><a
                                        href="profile.html">by autoland</a></div>
                                <div class="product-grid-rating"><i class="material-icons">star</i><a
                                        href="review.html">28 review</a></div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price"><span>$18,759/-</span><small>negotiable</small></div>
                                <div class="product-grid-action"><button type="button" title="Compare"
                                        class="compare material-icons">compare</button><button type="button"
                                        title="Favorite" class="favorite material-icons">favorite</button></div>
                            </div>
                            <div class="product-grid-meta">
                                <h4><a href="inventory-single.html">Mercedez benz super mclaren</a></h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li><i class="material-icons">construction</i><span>manual</span></li>
                                <li><i class="material-icons">settings</i><span>2000 km</span></li>
                                <li><i class="material-icons">local_gas_station</i><span>diesel</span></li>
                            </ul>
                            <div class="product-grid-btn"><a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image"><img src="../images/product/09.jpg" alt="product">
                            <div class="product-grid-badge"><span class="badge used">used</span></div>
                            <div class="product-grid-hints"><i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="posted-widget"><a href="#" title="Edit"
                                    class="material-icons edit">edit</a><a href="#" title="Delete"
                                    class="material-icons delete">delete</a></div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor"><i class="material-icons">person</i><a
                                        href="profile.html">by autoland</a></div>
                                <div class="product-grid-rating"><i class="material-icons">star</i><a
                                        href="review.html">28 review</a></div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price"><span>$18,759/-</span><small>negotiable</small></div>
                                <div class="product-grid-action"><button type="button" title="Compare"
                                        class="compare material-icons">compare</button><button type="button"
                                        title="Favorite" class="favorite material-icons">favorite</button></div>
                            </div>
                            <div class="product-grid-meta">
                                <h4><a href="inventory-single.html">Mercedez benz super mclaren</a></h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li><i class="material-icons">construction</i><span>manual</span></li>
                                <li><i class="material-icons">settings</i><span>2000 km</span></li>
                                <li><i class="material-icons">local_gas_station</i><span>diesel</span></li>
                            </ul>
                            <div class="product-grid-btn"><a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image"><img src="../images/product/10.jpg" alt="product">
                            <div class="product-grid-badge"><span class="badge new">new</span></div>
                            <div class="product-grid-hints"><i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="posted-widget"><a href="#" title="Edit"
                                    class="material-icons edit">edit</a><a href="#" title="Delete"
                                    class="material-icons delete">delete</a></div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor"><i class="material-icons">person</i><a
                                        href="profile.html">by autoland</a></div>
                                <div class="product-grid-rating"><i class="material-icons">star</i><a
                                        href="review.html">28 review</a></div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price"><span>$18,759/-</span><small>negotiable</small></div>
                                <div class="product-grid-action"><button type="button" title="Compare"
                                        class="compare material-icons">compare</button><button type="button"
                                        title="Favorite" class="favorite material-icons">favorite</button></div>
                            </div>
                            <div class="product-grid-meta">
                                <h4><a href="inventory-single.html">Mercedez benz super mclaren</a></h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li><i class="material-icons">construction</i><span>manual</span></li>
                                <li><i class="material-icons">settings</i><span>2000 km</span></li>
                                <li><i class="material-icons">local_gas_station</i><span>diesel</span></li>
                            </ul>
                            <div class="product-grid-btn"><a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image"><img src="../images/product/11.jpg" alt="product">
                            <div class="product-grid-badge"><span class="badge used">used</span><span
                                    class="badge recom">recom</span></div>
                            <div class="product-grid-hints"><i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="posted-widget"><a href="#" title="Edit"
                                    class="material-icons edit">edit</a><a href="#" title="Delete"
                                    class="material-icons delete">delete</a></div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor"><i class="material-icons">person</i><a
                                        href="profile.html">by autoland</a></div>
                                <div class="product-grid-rating"><i class="material-icons">star</i><a
                                        href="review.html">28 review</a></div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price"><span>$18,759/-</span><small>negotiable</small></div>
                                <div class="product-grid-action"><button type="button" title="Compare"
                                        class="compare material-icons">compare</button><button type="button"
                                        title="Favorite" class="favorite material-icons">favorite</button></div>
                            </div>
                            <div class="product-grid-meta">
                                <h4><a href="inventory-single.html">Mercedez benz super mclaren</a></h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li><i class="material-icons">construction</i><span>manual</span></li>
                                <li><i class="material-icons">settings</i><span>2000 km</span></li>
                                <li><i class="material-icons">local_gas_station</i><span>diesel</span></li>
                            </ul>
                            <div class="product-grid-btn"><a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image"><img src="../images/product/12.jpg" alt="product">
                            <div class="product-grid-badge"><span class="badge new">new</span></div>
                            <div class="product-grid-hints"><i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="posted-widget"><a href="#" title="Edit"
                                    class="material-icons edit">edit</a><a href="#" title="Delete"
                                    class="material-icons delete">delete</a></div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor"><i class="material-icons">person</i><a
                                        href="profile.html">by autoland</a></div>
                                <div class="product-grid-rating"><i class="material-icons">star</i><a
                                        href="review.html">28 review</a></div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price"><span>$18,759/-</span><small>negotiable</small></div>
                                <div class="product-grid-action"><button type="button" title="Compare"
                                        class="compare material-icons">compare</button><button type="button"
                                        title="Favorite" class="favorite material-icons">favorite</button></div>
                            </div>
                            <div class="product-grid-meta">
                                <h4><a href="inventory-single.html">Mercedez benz super mclaren</a></h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li><i class="material-icons">construction</i><span>manual</span></li>
                                <li><i class="material-icons">settings</i><span>2000 km</span></li>
                                <li><i class="material-icons">local_gas_station</i><span>diesel</span></li>
                            </ul>
                            <div class="product-grid-btn"><a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image"><img src="../images/product/13.jpg" alt="product">
                            <div class="product-grid-badge"><span class="badge used">used</span></div>
                            <div class="product-grid-hints"><i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="posted-widget"><a href="#" title="Edit"
                                    class="material-icons edit">edit</a><a href="#" title="Delete"
                                    class="material-icons delete">delete</a></div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor"><i class="material-icons">person</i><a
                                        href="profile.html">by autoland</a></div>
                                <div class="product-grid-rating"><i class="material-icons">star</i><a
                                        href="review.html">28 review</a></div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price"><span>$18,759/-</span><small>negotiable</small></div>
                                <div class="product-grid-action"><button type="button" title="Compare"
                                        class="compare material-icons">compare</button><button type="button"
                                        title="Favorite" class="favorite material-icons">favorite</button></div>
                            </div>
                            <div class="product-grid-meta">
                                <h4><a href="inventory-single.html">Mercedez benz super mclaren</a></h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li><i class="material-icons">construction</i><span>manual</span></li>
                                <li><i class="material-icons">settings</i><span>2000 km</span></li>
                                <li><i class="material-icons">local_gas_station</i><span>diesel</span></li>
                            </ul>
                            <div class="product-grid-btn"><a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image"><img src="../images/product/14.jpg" alt="product">
                            <div class="product-grid-badge"><span class="badge new">new</span></div>
                            <div class="product-grid-hints"><i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="posted-widget"><a href="#" title="Edit"
                                    class="material-icons edit">edit</a><a href="#" title="Delete"
                                    class="material-icons delete">delete</a></div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor"><i class="material-icons">person</i><a
                                        href="profile.html">by autoland</a></div>
                                <div class="product-grid-rating"><i class="material-icons">star</i><a
                                        href="review.html">28 review</a></div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price"><span>$18,759/-</span><small>negotiable</small></div>
                                <div class="product-grid-action"><button type="button" title="Compare"
                                        class="compare material-icons">compare</button><button type="button"
                                        title="Favorite" class="favorite material-icons">favorite</button></div>
                            </div>
                            <div class="product-grid-meta">
                                <h4><a href="inventory-single.html">Mercedez benz super mclaren</a></h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li><i class="material-icons">construction</i><span>manual</span></li>
                                <li><i class="material-icons">settings</i><span>2000 km</span></li>
                                <li><i class="material-icons">local_gas_station</i><span>diesel</span></li>
                            </ul>
                            <div class="product-grid-btn"><a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image"><img src="../images/product/15.jpg" alt="product">
                            <div class="product-grid-badge"><span class="badge used">used</span></div>
                            <div class="product-grid-hints"><i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="posted-widget"><a href="#" title="Edit"
                                    class="material-icons edit">edit</a><a href="#" title="Delete"
                                    class="material-icons delete">delete</a></div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor"><i class="material-icons">person</i><a
                                        href="profile.html">by autoland</a></div>
                                <div class="product-grid-rating"><i class="material-icons">star</i><a
                                        href="review.html">28 review</a></div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price"><span>$18,759/-</span><small>negotiable</small></div>
                                <div class="product-grid-action"><button type="button" title="Compare"
                                        class="compare material-icons">compare</button><button type="button"
                                        title="Favorite" class="favorite material-icons">favorite</button></div>
                            </div>
                            <div class="product-grid-meta">
                                <h4><a href="inventory-single.html">Mercedez benz super mclaren</a></h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li><i class="material-icons">construction</i><span>manual</span></li>
                                <li><i class="material-icons">settings</i><span>2000 km</span></li>
                                <li><i class="material-icons">local_gas_station</i><span>diesel</span></li>
                            </ul>
                            <div class="product-grid-btn"><a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-grid-card">
                        <div class="product-grid-image"><img src="../images/product/16.jpg" alt="product">
                            <div class="product-grid-badge"><span class="badge featured">featured</span></div>
                            <div class="product-grid-hints"><i class="material-icons">collections</i><span>4</span>
                            </div>
                            <div class="posted-widget"><a href="#" title="Edit"
                                    class="material-icons edit">edit</a><a href="#" title="Delete"
                                    class="material-icons delete">delete</a></div>
                            <div class="product-grid-overlay">
                                <div class="product-grid-vendor"><i class="material-icons">person</i><a
                                        href="profile.html">by autoland</a></div>
                                <div class="product-grid-rating"><i class="material-icons">star</i><a
                                        href="review.html">28 review</a></div>
                            </div>
                        </div>
                        <div class="product-grid-content">
                            <div class="product-grid-group">
                                <div class="product-grid-price"><span>$18,759/-</span><small>negotiable</small></div>
                                <div class="product-grid-action"><button type="button" title="Compare"
                                        class="compare material-icons">compare</button><button type="button"
                                        title="Favorite" class="favorite material-icons">favorite</button></div>
                            </div>
                            <div class="product-grid-meta">
                                <h4><a href="inventory-single.html">Mercedez benz super mclaren</a></h4>
                                <ul>
                                    <li>delpara, narayanganj</li>
                                    <li>23h ago!</li>
                                </ul>
                            </div>
                            <ul class="product-grid-extra">
                                <li><i class="material-icons">construction</i><span>manual</span></li>
                                <li><i class="material-icons">settings</i><span>2000 km</span></li>
                                <li><i class="material-icons">local_gas_station</i><span>diesel</span></li>
                            </ul>
                            <div class="product-grid-btn"><a href="inventory-single.html"><i
                                        class="material-icons">visibility</i><span>details</span></a><a
                                    href="https://youtu.be/VWrJkx6O0L8" class="venobox" data-autoplay="true"
                                    data-vbtype="video"><i class="material-icons">videocam</i><span>video</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="bottom-paginate mb-50">
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
