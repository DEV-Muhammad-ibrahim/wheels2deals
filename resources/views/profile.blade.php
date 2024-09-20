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
                <h2 class="mc-breadcrumb-title">user profile</h2>
                <ul class="mc-breadcrumb-list">
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="index.html">home</a></li>
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="dashboard.html">dashboard</a>
                    </li>
                    <li class="mc-breadcrumb-item">profile</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section-gap-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    <div class="profile-cover-image"><img src="../images/bg/cover.jpg" alt="cover"></div>
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">about this vendor</h4>
                        </div>
                        <div class="common-card-body">
                            <div class="profile-article">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae modi tempora
                                    odit explicabo dicta qui, blanditiis incidunt possimus natus a adipisci laborum
                                    fugit quaerat perspiciatis reprehenderit expedita magni rerum voluptatum numquam?
                                    Unde eius consectetur quaerat expedita deserunt quis blanditiis ipsa, corporis
                                    mollitia vero modi adipisci ratione voluptate enim voluptas, numquam totam
                                    perspiciatis iure? Necessitatibus voluptates quod, velit in voluptas possimus
                                    accusamus. <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                                        laborum nisi minus, modi facere, recusandae non animi porro assumenda dolorem
                                        nemo. Commodi expedita ratione officia voluptate, vel ipsum nam, voluptatibus
                                        nulla doloremque iure sed quas repudiandae atque beatae. Eligendi quaerat fugit
                                        dolores laboriosam voluptatem nisi obcaecati, beatae eum alias? Temporibus eius
                                        laudantium necessitatibus? Doloribus dolor officia nulla accusantium facere
                                        minima</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">vendor location</h4>
                        </div>
                        <div class="common-card-body">
                            <div class="profile-location"><iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.3406974350205!2d90.48469931445422!3d23.663771197998262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b0d5983f048d%3A0x754f30c82bcad3cd!2sJalkuri%20Bus%20Stop!5e0!3m2!1sen!2sbd!4v1605354966349!5m2!1sen!2sbd"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">Membership status</h4>
                        </div>
                        <div class="common-card-body">
                            <ul class="profile-specify-list">
                                <li><span>Joined:</span><span>02 February 2022</span></li>
                                <li><span>type:</span><span>individual</span></li>
                                <li><span>plan:</span><span>business</span></li>
                                <li><span>Spand:</span><span>$4,587</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">contact address</h4>
                        </div>
                        <div class="common-card-body">
                            <ul class="profile-specify-list">
                                <li><span>country:</span><span>united state</span></li>
                                <li><span>city:</span><span>Chicago</span></li>
                                <li><span>state:</span><span>west jalkuri</span></li>
                                <li><span>post code:</span><span>1420</span></li>
                                <li><span>road no:</span><span>09</span></li>
                                <li><span>house no:</span><span>17/a</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">email this vendor</h4>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12">
                                    <div class="form-group"><input type="text" class="form-control"
                                            placeholder="enter your name"></div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12">
                                    <div class="form-group"><input type="email" class="form-control"
                                            placeholder="enter your email"></div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="describe your message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><button class="form-btn"
                                        type="submit">send email</button></div>
                            </div>
                        </form>
                    </div>
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">social media</h4>
                        </div>
                        <div class="common-card-body">
                            <ul class="profile-social-list">
                                <li><a href="#" class="icofont-facebook facebook"></a></li>
                                <li><a href="#" class="icofont-twitter twitter"></a></li>
                                <li><a href="#" class="icofont-linkedin linkedin"></a></li>
                                <li><a href="#" class="icofont-instagram instagram"></a></li>
                                <li><a href="#" class="icofont-pinterest pinterest"></a></li>
                            </ul>
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
