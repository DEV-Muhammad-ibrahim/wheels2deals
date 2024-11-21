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
                    <h2>about our company</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ Route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('about') }}">about-us</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="section-gap-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-12">
                    {{-- <div class="about-media"><img src="../images/bg/video.jpg" alt="video">
                        <div class="about-overlay"><a href="https://youtu.be/TboWOSW7qCI" class="venobox material-icons"
                                data-autoplay="true" data-vbtype="video">play_arrow</a></div>
                    </div> --}}
                    <div class="about-content">
                        <h3>About Us

                        </h3>
                        <p>Welcome to wheels2deals, your premier destination for buying and selling cars online. Our
                            platform is designed to simplify the car-buying experience by offering a wide range of
                            vehicles and providing seamless, secure, and reliable services to buyers and sellers alike.

                            At wheels2deals, we believe that buying or selling a car should be a hassle-free process, no
                            matter where you are or what type of vehicle you’re looking for. Whether you’re a car
                            enthusiast, a first-time buyer, or someone looking to upgrade their ride, we’ve built our
                            platform with you in mind.
                            Our Mission

                            Our mission is simple: to make the car buying and selling process as easy, transparent, and
                            efficient as possible. We aim to connect buyers and sellers across the country by providing
                            a trusted online marketplace that prioritizes customer satisfaction and ensures quality
                            service.

                            We are committed to:
                        <ul>
                            <li> • Providing a vast selection of vehicles from top brands.</li>
                            <li> • Ensuring secure and smooth transactions for both buyers and sellers.</li>
                            <li> • Maintaining a trusted network of reputable dealers.</li>
                            <li> • Offering comprehensive vehicle information to help buyers make informed decisions.
                            </li>
                            <li> • Delivering exceptional customer service every step of the way.</li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    {{-- <div class="about-content">
                        <h3>Wheels2Deals has been standing on the trust of customers for the last 10 years</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, eligendi consectetur
                            laboriosam qui optio illo provident impedit, vero nisi commodi delectus pariatur eum
                            mollitia excepturi temporibus aspernatur, repudiandae animi. Quaerat sit rem doloremque
                            repellat tenetur mollitia quae, provident quasi voluptatibus ducimus velit excepturi?</p>
                    </div> --}}
                </div>
            </div>
            {{-- <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4">
                <div class="col">
                    <div class="funfactor-card"><i class="material-icons">drive_eta</i>
                        <h4><span class="funfactor-text">stock vehicles</span><span class="funfactor-data">2355</span>
                        </h4>
                    </div>
                </div>
                <div class="col">
                    <div class="funfactor-card"><i class="material-icons">flag</i>
                        <h4><span class="funfactor-text">sold vehicles</span><span class="funfactor-data">7895</span>
                        </h4>
                    </div>
                </div>
                <div class="col">
                    <div class="funfactor-card"><i class="material-icons">people</i>
                        <h4><span class="funfactor-text">happy clients</span><span class="funfactor-data">6567</span>
                        </h4>
                    </div>
                </div>
                <div class="col">
                    <div class="funfactor-card"><i class="material-icons">forum</i>
                        <h4><span class="funfactor-text">total reviews</span><span class="funfactor-data">5467</span>
                        </h4>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <section class="section-gap-75">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="section-center">
                        <h2>Why choose our service to sell or buy your favorite car</h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
                <div class="col">
                    <div class="feature-card"><i class="material-icons">fact_check</i>
                        <h3>Comprehensive Car Information

                        </h3>
                        <p>We provide detailed car specifications, history reports, and expert reviews, enabling you to
                            make informed decisions. Our commitment is to offer all the necessary information to help
                            you choose your dream car.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card"><i class="material-icons">verified_user</i>
                        <h3>Easy and Secure Transactions
                        </h3>
                        <p>Our platform ensures a smooth and secure buying or selling experience. With transparent
                            processes and trusted payment methods, we make it simple for you to purchase or list your
                            car with confidence.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card"><i class="material-icons">report_problem</i>
                        <h3>Trusted Dealer Network
                        </h3>
                        <p>Partnering with authorized and reputable dealers, we guarantee quality service and authentic
                            listings. Our dealers adhere to high standards of integrity, ensuring peace of mind when
                            buying or selling your vehicle.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card"><i class="material-icons">auto_stories</i>
                        <h3>Wide Selection of Cars
                        </h3>
                        <p>We offer an extensive range of vehicles from various brands, ensuring you find the perfect
                            car that meets your needs and budget. Whether you’re looking for a brand-new luxury model or
                            a reliable used car, we’ve got you covered.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card"><i class="material-icons">stars</i>
                        <h3>Customer Satisfaction Guaranteed
                        </h3>
                        <p>At wheels2deals, customer satisfaction is our top priority. Our support team is dedicated to
                            assisting you throughout the entire process, ensuring you have a hassle-free experience from
                            start to finish.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card"><i class="material-icons">rocket_launch</i>
                        <h3>Fast and Reliable Service
                        </h3>
                        <p>With cutting-edge technology and efficient service delivery, we strive to offer the fastest
                            response times in the industry. From listing your car to closing the deal, we make sure
                            everything happens quickly and efficiently.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="section-gap-100 review-part">
        <div class="container">
            <div class="row review-slider slider-arrow">
                <div class="col">
                    <div class="review-wrap">
                        <div class="review-wrap-image"><img src="{{ asset('assets/images/review/01.jpg') }}"
                                alt="review"></div>
                        <div class="review-wrap-content">
                            <div class="review-wrap-meta">
                                <div class="review-wrap-video"><a href="#" class="material-icons">play_arrow</a><i
                                        class="material-icons">format_quote</i></div>
                                <div class="review-wrap-item">
                                    <h4>mercedes-benz wagon</h4>
                                    <h5>see the full review</h5>
                                </div>
                            </div>
                            <p class="review-wrap-quote">" Lorem ipsum dolor sit amet consectetur adipisicing elit
                                Expedita ut porro beatae itaque accusantium nisi Asperiores reprehenderit "</p>
                            <h3 class="review-wrap-user">miron mahmud</h3>
                            <h5 class="review-wrap-type">buyer review</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="review-wrap">
                        <div class="review-wrap-image"><img src="../images/review/02.jpg" alt="review"></div>
                        <div class="review-wrap-content">
                            <div class="review-wrap-meta">
                                <div class="review-wrap-video"><a href="#" class="material-icons">play_arrow</a><i
                                        class="material-icons">format_quote</i></div>
                                <div class="review-wrap-item">
                                    <h4>lamborghini huracan</h4>
                                    <h5>see the full review</h5>
                                </div>
                            </div>
                            <p class="review-wrap-quote">" Lorem ipsum dolor sit amet consectetur adipisicing elit
                                Expedita ut porro beatae itaque accusantium nisi Asperiores reprehenderit "</p>
                            <h3 class="review-wrap-user">tahmina bonny</h3>
                            <h5 class="review-wrap-type">seller review</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- <section class="section-gap-75">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="section-center">
                        <h2>Some of our experienced people in Wheels2deals management</h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">
                <div class="col">
                    <div class="team-card">
                        <figure class="team-media"><img src="{{ asset('assets/images/team/04.jpg') }}" alt="team">
                            <div class="team-overlay"><a href="#" class="icofont-facebook facebook"></a><a
                                    href="#" class="icofont-twitter twitter"></a><a href="#"
                                    class="icofont-linkedin linkedin"></a></div>
                        </figure>
                        <div class="team-meta">
                            {{-- <h4><a href="#">Muhammad Ibrahim</a></h4>
                            <p>Website Developer</p> --}}
    {{-- </div>
    </div>
    </div>
    <div class="col">
        <div class="team-card">
            <figure class="team-media"><img src="../images/team/02.jpg" alt="team">
                <div class="team-overlay"><a href="#" class="icofont-facebook facebook"></a><a href="#"
                        class="icofont-twitter twitter"></a><a href="#" class="icofont-linkedin linkedin"></a>
                </div>
            </figure>
            <div class="team-meta">
                <h4><a href="#">managment name</a></h4>
                <p>designation</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="team-card">
            <figure class="team-media"><img src="../images/team/03.jpg" alt="team">
                <div class="team-overlay"><a href="#" class="icofont-facebook facebook"></a><a href="#"
                        class="icofont-twitter twitter"></a><a href="#" class="icofont-linkedin linkedin"></a>
                </div>
            </figure>
            <div class="team-meta">
                <h4><a href="#">managment name</a></h4>
                <p>designation</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="team-card">
            <figure class="team-media"><img src="../images/team/04.jpg" alt="team">
                <div class="team-overlay"><a href="#" class="icofont-facebook facebook"></a><a href="#"
                        class="icofont-twitter twitter"></a><a href="#" class="icofont-linkedin linkedin"></a>
                </div>
            </figure>
            <div class="team-meta">
                <h4><a href="#">managment name</a></h4>
                <p>designation</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="team-card">
            <figure class="team-media"><img src="../images/team/05.jpg" alt="team">
                <div class="team-overlay"><a href="#" class="icofont-facebook facebook"></a><a href="#"
                        class="icofont-twitter twitter"></a><a href="#" class="icofont-linkedin linkedin"></a>
                </div>
            </figure>
            <div class="team-meta">
                <h4><a href="#">managment name</a></h4>
                <p>designation</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="team-card">
            <figure class="team-media"><img src="../images/team/06.jpg" alt="team">
                <div class="team-overlay"><a href="#" class="icofont-facebook facebook"></a><a href="#"
                        class="icofont-twitter twitter"></a><a href="#" class="icofont-linkedin linkedin"></a>
                </div>
            </figure>
            <div class="team-meta">
                <h4><a href="#">managment name</a></h4>
                <p>designation</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="team-card">
            <figure class="team-media"><img src="../images/team/07.jpg" alt="team">
                <div class="team-overlay"><a href="#" class="icofont-facebook facebook"></a><a href="#"
                        class="icofont-twitter twitter"></a><a href="#" class="icofont-linkedin linkedin"></a>
                </div>
            </figure>
            <div class="team-meta">
                <h4><a href="#">managment name</a></h4>
                <p>designation</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="team-card">
            <figure class="team-media"><img src="../images/team/08.jpg" alt="team">
                <div class="team-overlay"><a href="#" class="icofont-facebook facebook"></a><a href="#"
                        class="icofont-twitter twitter"></a><a href="#" class="icofont-linkedin linkedin"></a>
                </div>
            </figure>
            <div class="team-meta">
                <h4><a href="#">managment name</a></h4>
                <p>designation</p>
            </div>
        </div>
    </div>
    </div>
    </div>
    </section> --}} --}}

    <section class="section-gap-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro-card"
                        style="background: url({{ asset('assets/images/bg/intro.jpg') }}) no-repeat center / cover;">
                        <div class="intro-overlay">
                            <div class="intro-content">
                                <h3>Want to sell your car quickly?</h3>
                                {{-- <p>Lorem ipsum dolor amet consectetur libero accusantium minima</p> --}}
                            </div><a href="{{ Route('create_ads') }}" class="btn btn-inline"><i
                                    class="material-icons">storefront</i><span>sell vehicless</span></a>
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
