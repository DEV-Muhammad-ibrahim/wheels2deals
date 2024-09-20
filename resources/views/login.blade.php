@include('layouts.head')

<body class="auth-body">
    <section class="auth-part">
        <div class="auth-banner"><img class="auth-banner-bg" src="../images/bg/auth.jpg" alt="auth">
            <div class="auth-banner-overlay">
                <div class="auth-content"><a class="auth-logo" href="index.html"><img
                            src="{{ asset('assets/images/logo.png') }}../images/logo.png" alt="logo"></a>
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
        <form class="auth-form" method="POST" action="{{ Route('login_all') }}">
            @csrf
            @method('POST')
            <div class="auth-form-content">
                <h3 class="auth-form-title">Login with your credentials.</h3>
                @if ($errors->has('login_error'))
                    <div class="alert alert-danger">
                        {{ $errors->first('login_error') }}
                    </div>
                @endif
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="enter your email" name="email">
                </div>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="enter your password" name="password">
                </div>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group-content">
                    <div class="form-check mb-0">
                        <input class="form-check-input" type="checkbox" id="checkAgree"><label class="form-check-label"
                            for="checkAgree">Remember me.</label>
                    </div><a class="auth-forgot" href="forgot-password.html">forgot password?</a>
                </div>
                <button type="submit" class="form-btn">login</button>
                <div class="auth-form-or"><span>or</span></div>

                <p class="auth-form-text">Don't have any account? <a href="{{ Route('register') }}">Register here</a>
                </p>
            </div>
        </form>
    </section>

    @include('layouts.script')
</body>

</html>
