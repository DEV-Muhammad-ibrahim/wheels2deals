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
                    <h2>blog author page</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="blog-grid.html">blog-grid</a></li>
                        <li class="breadcrumb-item active" aria-current="page">blog-author</li>
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
                            <div class="blog-author">
                                <div class="blog-author-group">
                                    <div class="blog-author-info"><img src="../images/avatar/01.jpg" alt="author">
                                        <h4><a href="blog-author.html">Miron Mahmud</a></h4>
                                        <h6><a href="#">www.mironmahmud.com</a></h6>
                                    </div>
                                    <div class="blog-author-content">
                                        <ul>
                                            <li><a href="#" class="facebook icofont-facebook"></a></li>
                                            <li><a href="#" class="twitter icofont-twitter"></a></li>
                                            <li><a href="#" class="linkedin icofont-linkedin"></a></li>
                                            <li><a href="#" class="pinterest icofont-pinterest"></a></li>
                                            <li><a href="#" class="instagram icofont-instagram"></a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate temporibus
                                            harum laborum quaerat blanditiis iste mollitia aperiam aut voluptates quidem
                                            nois aliquam incidunt expedita odit id repellat dicta Odio consectetur.</p>
                                    </div>
                                </div>
                                <ul class="blog-author-meta-list">
                                    <li><i class="material-icons">feed</i><span>Total Blog (25)</span></li>
                                    <li><i class="material-icons">forum</i><span>Total Comment (130)</span></li>
                                    <li><i class="material-icons">public</i><span>Total Share (45)</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">
                        <div class="col">
                            <div class="blog-grid-card">
                                <div class="blog-grid-media"><a href="blog-single.html"><img
                                            src="../images/blog/01.jpg" alt="blog"></a>
                                    <ul class="blog-grid-widget">
                                        <li><i class="material-icons">forum</i><span>3</span></li>
                                        <li><i class="material-icons">send</i><span>2</span></li>
                                    </ul>
                                </div>
                                <div class="blog-grid-content">
                                    <ul class="blog-grid-meta">
                                        <li><i class="material-icons">person</i><span>post by admin</span></li>
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
                                <div class="blog-grid-media"><a href="blog-single.html"><img
                                            src="../images/blog/02.jpg" alt="blog"></a>
                                    <ul class="blog-grid-widget">
                                        <li><i class="material-icons">forum</i><span>3</span></li>
                                        <li><i class="material-icons">send</i><span>2</span></li>
                                    </ul>
                                </div>
                                <div class="blog-grid-content">
                                    <ul class="blog-grid-meta">
                                        <li><i class="material-icons">person</i><span>post by admin</span></li>
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
                                <div class="blog-grid-media"><a href="blog-single.html"><img
                                            src="../images/blog/03.jpg" alt="blog"></a>
                                    <ul class="blog-grid-widget">
                                        <li><i class="material-icons">forum</i><span>3</span></li>
                                        <li><i class="material-icons">send</i><span>2</span></li>
                                    </ul>
                                </div>
                                <div class="blog-grid-content">
                                    <ul class="blog-grid-meta">
                                        <li><i class="material-icons">person</i><span>post by admin</span></li>
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
                                <div class="blog-grid-media"><a href="blog-single.html"><img
                                            src="../images/blog/04.jpg" alt="blog"></a>
                                    <ul class="blog-grid-widget">
                                        <li><i class="material-icons">forum</i><span>3</span></li>
                                        <li><i class="material-icons">send</i><span>2</span></li>
                                    </ul>
                                </div>
                                <div class="blog-grid-content">
                                    <ul class="blog-grid-meta">
                                        <li><i class="material-icons">person</i><span>post by admin</span></li>
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
                                <div class="blog-grid-media"><a href="blog-single.html"><img
                                            src="../images/blog/05.jpg" alt="blog"></a>
                                    <ul class="blog-grid-widget">
                                        <li><i class="material-icons">forum</i><span>3</span></li>
                                        <li><i class="material-icons">send</i><span>2</span></li>
                                    </ul>
                                </div>
                                <div class="blog-grid-content">
                                    <ul class="blog-grid-meta">
                                        <li><i class="material-icons">person</i><span>post by admin</span></li>
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
                                <div class="blog-grid-media"><a href="blog-single.html"><img
                                            src="../images/blog/06.jpg" alt="blog"></a>
                                    <ul class="blog-grid-widget">
                                        <li><i class="material-icons">forum</i><span>3</span></li>
                                        <li><i class="material-icons">send</i><span>2</span></li>
                                    </ul>
                                </div>
                                <div class="blog-grid-content">
                                    <ul class="blog-grid-meta">
                                        <li><i class="material-icons">person</i><span>post by admin</span></li>
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
    @include('layouts.footer')
    @include('layouts.script')
</body>


</html>
