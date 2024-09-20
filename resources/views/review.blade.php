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
                <h2 class="mc-breadcrumb-title">user reviews</h2>
                <ul class="mc-breadcrumb-list">
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="index.html">home</a></li>
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="dashboard.html">dashboard</a>
                    </li>
                    <li class="mc-breadcrumb-item">review</li>
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
                            <h4 class="common-card-header-title">average ratings</h4>
                        </div>
                        <div class="common-card-body">
                            <h4 class="rating-average-score">4.9</h4>
                            <h5 class="rating-average-total">38 total ratings</h5>
                            <ul class="rating-average-list">
                                <li class="rating-average-item"><span class="rating-average-count">5 star</span>
                                    <div class="rating-average-graphline"><span style="width: 90%;"></span></div><span
                                        class="rating-average-user">(22)</span>
                                </li>
                                <li class="rating-average-item"><span class="rating-average-count">4 star</span>
                                    <div class="rating-average-graphline"><span style="width: 75%;"></span></div><span
                                        class="rating-average-user">(06)</span>
                                </li>
                                <li class="rating-average-item"><span class="rating-average-count">3 star</span>
                                    <div class="rating-average-graphline"><span style="width: 30%;"></span></div><span
                                        class="rating-average-user">(05)</span>
                                </li>
                                <li class="rating-average-item"><span class="rating-average-count">2 star</span>
                                    <div class="rating-average-graphline"><span style="width: 15%;"></span></div><span
                                        class="rating-average-user">(03)</span>
                                </li>
                                <li class="rating-average-item"><span class="rating-average-count">1 star</span>
                                    <div class="rating-average-graphline"><span style="width: 5%;"></span></div><span
                                        class="rating-average-user">(02)</span>
                                </li>
                            </ul>
                            <div class="rating-average-star"><i class="material-icons active">star</i><i
                                    class="material-icons active">star</i><i class="material-icons active">star</i><i
                                    class="material-icons active">star</i><i class="material-icons">star</i></div>
                            <p class="rating-average-text">your average rating star</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-8">
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">clients review</h4><select
                                class="form-select common-card-header-select">
                                <option value="new" selected>newest review</option>
                                <option value="heigh">heighest rating</option>
                                <option value="low">lowest rating</option>
                            </select>
                        </div>
                        <div class="common-card-body review">
                            <ul class="review-list">
                                <li class="review-item">
                                    <div class="review-group">
                                        <div class="review-head">
                                            <div class="review-user"><a class="review-media" href="#"><img
                                                        src="../images/avatar/01.jpg" alt="avatar"></a>
                                                <div class="review-meta">
                                                    <h5>mahmudul hasan</h5><span>02 february 2022</span>
                                                </div>
                                            </div>
                                            <div class="review-widget"><a class="review-reply" href="#reviewForm"><i
                                                        class="material-icons">reply</i><span>reply</span></a>
                                                <div class="review-action"><button type="button"
                                                        class="review-action-btn"><i
                                                            class="material-icons">more_vert</i></button>
                                                    <div class="review-action-list"><a href="#"><i
                                                                class="material-icons">delete</i><span>delete</span></a><a
                                                            href="#"><i
                                                                class="material-icons">report</i><span>report</span></a><a
                                                            href="#"><i
                                                                class="material-icons">gpp_bad</i><span>block</span></a><a
                                                            href="#"><i
                                                                class="material-icons">edit</i><span>edit</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-body">
                                            <div class="review-star"><i class="material-icons active">star</i><i
                                                    class="material-icons active">star</i><i
                                                    class="material-icons active">star</i><i
                                                    class="material-icons active">star</i><i
                                                    class="material-icons active">star</i></div>
                                            <h6>review on - <a href="inventory-single.html">Mercedez Benz Super
                                                    Mclaren</a></h6>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quo
                                                nostrum dolore fugiat ducimus labore debitis unde autem recusandae? Eius
                                                harum tempora quis minima, adipisci natus quod magni omnis quas.</p>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="review-group">
                                                <div class="review-head">
                                                    <div class="review-user"><a class="review-media"
                                                            href="#"><img src="../images/avatar/02.jpg"
                                                                alt="avatar"></a>
                                                        <div class="review-meta">
                                                            <h5>tahmina bonny</h5><span><b>vendor</b>02 february
                                                                2022</span>
                                                        </div>
                                                    </div>
                                                    <div class="review-widget"><a class="review-reply"
                                                            href="#reviewForm"><i
                                                                class="material-icons">reply</i><span>reply</span></a>
                                                        <div class="review-action"><button type="button"
                                                                class="review-action-btn"><i
                                                                    class="material-icons">more_vert</i></button>
                                                            <div class="review-action-list"><a href="#"><i
                                                                        class="material-icons">delete</i><span>delete</span></a><a
                                                                    href="#"><i
                                                                        class="material-icons">report</i><span>report</span></a><a
                                                                    href="#"><i
                                                                        class="material-icons">gpp_bad</i><span>block</span></a><a
                                                                    href="#"><i
                                                                        class="material-icons">edit</i><span>edit</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis
                                                        quo nostrum dolore fugiat ducimus labore debitis unde autem
                                                        recusandae? Eius harum tempora quis minima, adipisci natus quod
                                                        magni omnis quas.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="review-item">
                                    <div class="review-head">
                                        <div class="review-user"><a class="review-media" href="#"><img
                                                    src="../images/avatar/04.jpg" alt="avatar"></a>
                                            <div class="review-meta">
                                                <h5>khadija labonno</h5><span>02 february 2022</span>
                                            </div>
                                        </div>
                                        <div class="review-widget"><a class="review-reply" href="#reviewForm"><i
                                                    class="material-icons">reply</i><span>reply</span></a>
                                            <div class="review-action"><button type="button"
                                                    class="review-action-btn"><i
                                                        class="material-icons">more_vert</i></button>
                                                <div class="review-action-list"><a href="#"><i
                                                            class="material-icons">delete</i><span>delete</span></a><a
                                                        href="#"><i
                                                            class="material-icons">report</i><span>report</span></a><a
                                                        href="#"><i
                                                            class="material-icons">gpp_bad</i><span>block</span></a><a
                                                        href="#"><i
                                                            class="material-icons">edit</i><span>edit</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <div class="review-star"><i class="material-icons active">star</i><i
                                                class="material-icons active">star</i><i
                                                class="material-icons active">star</i><i
                                                class="material-icons active">star</i><i
                                                class="material-icons">star</i></div>
                                        <h6>review on - <a href="inventory-single.html">delux audi family car</a></h6>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quo nostrum
                                            dolore fugiat ducimus labore debitis unde autem recusandae? Eius harum
                                            tempora quis minima, adipisci natus quod magni omnis quas.</p>
                                    </div>
                                </li>
                            </ul>
                            <form class="form-container" id="reviewForm">
                                <h3 class="form-title">reply your review</h3>
                                <div class="row">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Write something here!"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-12"><button class="form-btn" type="submit">drop
                                            your replies</button></div>
                                </div>
                            </form>
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
<!-- Mirrored from mironmahmud.com/ghurnek/assets/ltr/review.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Apr 2024 10:42:03 GMT -->

</html>
