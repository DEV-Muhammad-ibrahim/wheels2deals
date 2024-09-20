@include('layouts.head')

<body class="auth-body">
    <section class="auth-part">
        <div class="auth-banner"><img class="auth-banner-bg" src="../images/bg/auth.jpg" alt="auth">
            <div class="auth-banner-overlay">
                <div class="auth-content"><a class="auth-logo" href="index.html"><img src="../images/logo.png"
                            alt="logo"></a>
                    <h1 class="auth-headline">Lorem ipsum dolor sit amet consectetur adipisicing</h1>
                    <p class="auth-details">Elit Iusto dolore libero recusandae dolor dolores explicabo ullam cum
                        facilis aperiam alias odio quam excepturi molestiae omnis inventore. Repudiandae officia placeat
                        amet consectetur dicta dolorem quo.</p>
                    <div class="auth-social">
                        <h5>follow on</h5>
                        <ul>
                            <li><a href="#" class="facebook icofont-facebook"></a></li>
                            <li><a href="#" class="twitter icofont-twitter"></a></li>
                            <li><a href="#" class="linkedin icofont-linkedin"></a></li>
                            <li><a href="#" class="instagram icofont-instagram"></a></li>
                            <li><a href="#" class="youtube icofont-youtube-play"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <form class="auth-form">
            <div class="auth-form-content">
                <h3 class="auth-form-title">Dont't be worried about it!</h3>
                <div class="form-group"><input type="email" class="form-control" placeholder="enter your email"></div>
                <button type="submit" class="form-btn">get reset link</button>
                <div class="auth-form-or"><span>or</span></div>
                <ul class="auth-form-continue">
                    <li><a class="facebook" href="#"><i class="icofont-facebook"></i><span>Continue with
                                Facebook</span></a></li>
                    <li><a class="instagram" href="#"><i class="icofont-instagram"></i><span>Continue with
                                Instagram</span></a></li>
                </ul>
                <p class="auth-form-text">Go back to <a href="login.html">login here</a></p>
            </div>
        </form>
    </section>
    @include('layouts.script')
</body>

</html>
