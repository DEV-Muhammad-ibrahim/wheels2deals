@include('layouts.head')

<body>
    <div class="backdrop"></div>
    @include('layouts.header')
    @include('layouts.navbar')
    @include('layouts.widget')
    <section class="section-gap-100">
        <div style="background: url(../images/banner/single/01.jpg) no-repeat center / cover;">
            <div class="single-banner">
                <div class="container">
                    <h2>blog grid page</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">blog-grid</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="section-gap-100">
        <div class="container">
            <div class="row content-reverse">
                <div class="col-lg-4 col-xl-4">
                    <div class="blog-widget">
                        <h5 class="blog-widget-title">Find blogs</h5>
                        <form class="blog-widget-form"><input type="text" placeholder="Search blogs"><button
                                type="submit" class="material-icons">search</button></form>
                    </div>
                    <div class="blog-widget">
                        <h5 class="blog-widget-title">popular feeds</h5>
                        <ul class="blog-widget-feed">
                            <li><a class="blog-widget-media" href="blog-single.html"><img src="../images/blog/01.jpg"
                                        alt="blog"></a>
                                <h5 class="blog-widget-text"><a href="blog-single.html">Lorem ipsum dolor sit amet
                                        consectetur</a><span>february 02, 2021</span></h5>
                            </li>
                            <li><a class="blog-widget-media" href="blog-single.html"><img src="../images/blog/02.jpg"
                                        alt="blog"></a>
                                <h5 class="blog-widget-text"><a href="blog-single.html">Lorem ipsum dolor sit amet
                                        consectetur</a><span>february 02, 2021</span></h5>
                            </li>
                            <li><a class="blog-widget-media" href="blog-single.html"><img src="../images/blog/03.jpg"
                                        alt="blog"></a>
                                <h5 class="blog-widget-text"><a href="blog-single.html">Lorem ipsum dolor sit amet
                                        consectetur</a><span>february 02, 2021</span></h5>
                            </li>
                            <li><a class="blog-widget-media" href="blog-single.html"><img src="../images/blog/04.jpg"
                                        alt="blog"></a>
                                <h5 class="blog-widget-text"><a href="blog-single.html">Lorem ipsum dolor sit amet
                                        consectetur</a><span>february 02, 2021</span></h5>
                            </li>
                            <li><a class="blog-widget-media" href="blog-single.html"><img src="../images/blog/05.jpg"
                                        alt="blog"></a>
                                <h5 class="blog-widget-text"><a href="blog-single.html">Lorem ipsum dolor sit amet
                                        consectetur</a><span>february 02, 2021</span></h5>
                            </li>
                        </ul>
                    </div>
                    <div class="blog-widget">
                        <h5 class="blog-widget-title">top categories</h5>
                        <ul class="blog-widget-category">
                            <li><a href="#">car parking <span>22</span></a></li>
                            <li><a href="#">lamborgini <span>14</span></a></li>
                            <li><a href="#">repaire car <span>35</span></a></li>
                            <li><a href="#">car dealership <span>67</span></a></li>
                            <li><a href="#">mercedez benz <span>89</span></a></li>
                        </ul>
                    </div>
                    <div class="blog-widget">
                        <h5 class="blog-widget-title">popular tags</h5>
                        <ul class="blog-widget-tag">
                            <li><a href="#">parking</a></li>
                            <li><a href="#">dealership</a></li>
                            <li><a href="#">car racing</a></li>
                            <li><a href="#">automotive</a></li>
                            <li><a href="#">petrol</a></li>
                            <li><a href="#">electric car</a></li>
                            <li><a href="#">transport</a></li>
                            <li><a href="#">lamborgini</a></li>
                            <li><a href="#">audi</a></li>
                        </ul>
                    </div>
                    <div class="blog-widget">
                        <h5 class="blog-widget-title">follow us</h5>
                        <ul class="blog-widget-social">
                            <li><a href="#" class="facebook icofont-facebook"></a></li>
                            <li><a href="#" class="twitter icofont-twitter"></a></li>
                            <li><a href="#" class="linkedin icofont-linkedin"></a></li>
                            <li><a href="#" class="pinterest icofont-pinterest"></a></li>
                            <li><a href="#" class="instagram icofont-instagram"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-8">
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
                                <div class="filter-action"><a href="blog-grid.html" title="Grid View"
                                        class="material-icons active">grid_view</a><a href="blog-list.html"
                                        title="List View" class="material-icons">list_alt</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">
                        <div class="col">
                            <div class="blog-grid-card">
                                <div class="blog-grid-media"><img src="../images/blog/01.jpg" alt="blog">
                                    <ul class="blog-grid-widget">
                                        <li><i class="material-icons">forum</i><span>3</span></li>
                                        <li><i class="material-icons">send</i><span>2</span></li>
                                    </ul>
                                </div>
                                <div class="blog-grid-content">
                                    <ul class="blog-grid-meta">
                                        <li><i class="material-icons">person</i><span>post by <a
                                                    href="blog-single.html">admin</a></span></li>
                                        <li><i class="material-icons">event</i><span>februray 02, 2021</span></li>
                                    </ul>
                                    <h3 class="blog-grid-name"><a href="blog-single.html">Lorem ipsum dolorfect
                                            consectetur sitamet aborum adipisicing</a></h3>
                                    <p class="blog-grid-descrip">Adipisicing elitelit impedit laborum voluptate ad
                                        officia eius veritatis unde modi placeat obcaecati maxime...<a
                                            href="blog-single.html">read more</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="blog-grid-card">
                                <div class="blog-grid-media"><img src="../images/blog/02.jpg" alt="blog">
                                    <ul class="blog-grid-widget">
                                        <li><i class="material-icons">forum</i><span>3</span></li>
                                        <li><i class="material-icons">send</i><span>2</span></li>
                                    </ul>
                                </div>
                                <div class="blog-grid-content">
                                    <ul class="blog-grid-meta">
                                        <li><i class="material-icons">person</i><span>post by <a
                                                    href="blog-single.html">admin</a></span></li>
                                        <li><i class="material-icons">event</i><span>februray 02, 2021</span></li>
                                    </ul>
                                    <h3 class="blog-grid-name"><a href="blog-single.html">Lorem ipsum dolorfect
                                            consectetur sitamet aborum adipisicing</a></h3>
                                    <p class="blog-grid-descrip">Adipisicing elitelit impedit laborum voluptate ad
                                        officia eius veritatis unde modi placeat obcaecati maxime...<a
                                            href="blog-single.html">read more</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="blog-grid-card">
                                <div class="blog-grid-media"><img src="../images/blog/03.jpg" alt="blog">
                                    <ul class="blog-grid-widget">
                                        <li><i class="material-icons">forum</i><span>3</span></li>
                                        <li><i class="material-icons">send</i><span>2</span></li>
                                    </ul>
                                </div>
                                <div class="blog-grid-content">
                                    <ul class="blog-grid-meta">
                                        <li><i class="material-icons">person</i><span>post by <a
                                                    href="blog-single.html">admin</a></span></li>
                                        <li><i class="material-icons">event</i><span>februray 02, 2021</span></li>
                                    </ul>
                                    <h3 class="blog-grid-name"><a href="blog-single.html">Lorem ipsum dolorfect
                                            consectetur sitamet aborum adipisicing</a></h3>
                                    <p class="blog-grid-descrip">Adipisicing elitelit impedit laborum voluptate ad
                                        officia eius veritatis unde modi placeat obcaecati maxime...<a
                                            href="blog-single.html">read more</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="blog-grid-card">
                                <div class="blog-grid-media"><img src="../images/blog/04.jpg" alt="blog">
                                    <ul class="blog-grid-widget">
                                        <li><i class="material-icons">forum</i><span>3</span></li>
                                        <li><i class="material-icons">send</i><span>2</span></li>
                                    </ul>
                                </div>
                                <div class="blog-grid-content">
                                    <ul class="blog-grid-meta">
                                        <li><i class="material-icons">person</i><span>post by <a
                                                    href="blog-single.html">admin</a></span></li>
                                        <li><i class="material-icons">event</i><span>februray 02, 2021</span></li>
                                    </ul>
                                    <h3 class="blog-grid-name"><a href="blog-single.html">Lorem ipsum dolorfect
                                            consectetur sitamet aborum adipisicing</a></h3>
                                    <p class="blog-grid-descrip">Adipisicing elitelit impedit laborum voluptate ad
                                        officia eius veritatis unde modi placeat obcaecati maxime...<a
                                            href="blog-single.html">read more</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="blog-grid-card">
                                <div class="blog-grid-media"><img src="../images/blog/05.jpg" alt="blog">
                                    <ul class="blog-grid-widget">
                                        <li><i class="material-icons">forum</i><span>3</span></li>
                                        <li><i class="material-icons">send</i><span>2</span></li>
                                    </ul>
                                </div>
                                <div class="blog-grid-content">
                                    <ul class="blog-grid-meta">
                                        <li><i class="material-icons">person</i><span>post by <a
                                                    href="blog-single.html">admin</a></span></li>
                                        <li><i class="material-icons">event</i><span>februray 02, 2021</span></li>
                                    </ul>
                                    <h3 class="blog-grid-name"><a href="blog-single.html">Lorem ipsum dolorfect
                                            consectetur sitamet aborum adipisicing</a></h3>
                                    <p class="blog-grid-descrip">Adipisicing elitelit impedit laborum voluptate ad
                                        officia eius veritatis unde modi placeat obcaecati maxime...<a
                                            href="blog-single.html">read more</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="blog-grid-card">
                                <div class="blog-grid-media"><img src="../images/blog/06.jpg" alt="blog">
                                    <ul class="blog-grid-widget">
                                        <li><i class="material-icons">forum</i><span>3</span></li>
                                        <li><i class="material-icons">send</i><span>2</span></li>
                                    </ul>
                                </div>
                                <div class="blog-grid-content">
                                    <ul class="blog-grid-meta">
                                        <li><i class="material-icons">person</i><span>post by <a
                                                    href="blog-single.html">admin</a></span></li>
                                        <li><i class="material-icons">event</i><span>februray 02, 2021</span></li>
                                    </ul>
                                    <h3 class="blog-grid-name"><a href="blog-single.html">Lorem ipsum dolorfect
                                            consectetur sitamet aborum adipisicing</a></h3>
                                    <p class="blog-grid-descrip">Adipisicing elitelit impedit laborum voluptate ad
                                        officia eius veritatis unde modi placeat obcaecati maxime...<a
                                            href="blog-single.html">read more</a></p>
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
    <footer class="footer-part">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="footer-top"><a href="#"><img src="../images/logo.png" alt="logo"></a>
                        <ul>
                            <li><i
                                    class="material-icons">description</i><span>info@example.com<br>carrer@example.com</span>
                            </li>
                            <li><i class="material-icons">perm_phone_msg</i><span>+91 987-654-3210<br>+91
                                    987-654-5466</span></li>
                            <li><i class="material-icons">map</i><span>1Hd- 50, 010 Avenue, <br>NY 90001 United
                                    States</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="footer-widget">
                        <h3>about company</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt ullam repellat sit. Ipsa
                            saepe maiores placeat eligendi totam quisquam necessitatibus dignissimos</p>
                        <div class="footer-badge"><img src="../images/badge/01.png" alt="badge"><img
                                src="../images/badge/02.png" alt="badge"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="footer-group">
                        <div class="footer-widget">
                            <h3>importants</h3>
                            <ul class="footer-list">
                                <li><a href="#">sell vehicless</a></li>
                                <li><a href="#">privacy policy</a></li>
                                <li><a href="#">about company</a></li>
                                <li><a href="#">contact us</a></li>
                                <li><a href="#">career</a></li>
                            </ul>
                        </div>
                        <div class="footer-widget">
                            <h3>categories</h3>
                            <ul class="footer-list">
                                <li><a href="#">new vehicles</a></li>
                                <li><a href="#">used vehicles</a></li>
                                <li><a href="#">top searching</a></li>
                                <li><a href="#">top makes</a></li>
                                <li><a href="#">top types</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 col-xl-4">
                    <div class="footer-widget">
                        <h3>our newsletter</h3>
                        <p>Be the first to know about our offers and discounts by subscribing to the newsletter</p>
                        <form class="footer-form"><input type="email" placeholder="enter your email"><button
                                type="submit" class="material-icons">forward_to_inbox</button></form>
                        <ul class="footer-social">
                            <li><a href="#" class="icofont-facebook"></a></li>
                            <li><a href="#" class="icofont-twitter"></a></li>
                            <li><a href="#" class="icofont-linkedin"></a></li>
                            <li><a href="#" class="icofont-whatsapp"></a></li>
                            <li><a href="#" class="icofont-youtube-play"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-bottom">
        <div class="container">
            <p class="footer-text">&copy; 2022 all rights reserved by &hearts; <a href="#">mironcoder</a></p><a
                href="#" class="footer-backtop"><i class="material-icons">arrow_upward</i></a>
            <div class="footer-payment"><img src="../images/payment/01.jpg" alt="payment"><img
                    src="../images/payment/02.jpg" alt="payment"><img src="../images/payment/03.jpg"
                    alt="payment"><img src="../images/payment/04.jpg" alt="payment"><img
                    src="../images/payment/05.jpg" alt="payment"><img src="../images/payment/06.jpg"
                    alt="payment"></div>
        </div>
    </div>
    <script src="../vendor/jquery-3.5.0.min.js"></script>
    <script src="../vendor/bootstrap/popper.min.js"></script>
    <script src="../vendor/bootstrap/bootstrap.min.js"></script>
    <script src="../vendor/slickslider/slick.min.js"></script>
    <script src="../vendor/slickslider/ltr-slick-custom.js"></script>
    <script src="../vendor/venobox/venobox.min.js"></script>
    <script src="../vendor/venobox/venobox-custom.js"></script>
    <script src="../js/dropdown-menu.js"></script>
    <script src="../js/select-option.js"></script>
    <script src="../js/float-menu.js"></script>
    <script src="../js/custom.js"></script>
</body>
<!-- Mirrored from mironmahmud.com/ghurnek/assets/ltr/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 10:42:03 GMT -->

</html>
