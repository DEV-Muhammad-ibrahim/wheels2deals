@include('layouts.head')

<body class="auth-body">
    <section class="auth-part">
        <div class="auth-banner"><img class="auth-banner-bg" src="{{ asset('assets/images/bg/auth.jpg') }}" alt="auth">
            <div class="auth-banner-overlay">
                <div class="auth-content"><a class="auth-logo" href="index.html"><img
                            src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>
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
        <!-- Display validation errors for the entire form -->

        <form class="auth-form" action="{{ Route('register_user') }}" method="POST">
            @csrf
            @method('POST')

            <div class="auth-form-content">
                <h3 class="auth-form-title">Register a new account.</h3>
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <div class="form-group">
                    <input type="text" class="form-control" required placeholder="enter full name" name="name"
                        value="{{ old('name') }}">
                </div>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <input type="email" required class="form-control" placeholder="enter email address"name="email"
                        value="{{ old('email') }}">
                </div>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <input required type="password" class="form-control" placeholder="enter strong password"
                        name="password">
                </div>

                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                {{-- <div class="form-group"><input type="password" class="form-control" placeholder="enter reapet password"
                        name="confirmed">
                </div> --}}
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="checkAgree"><label class="form-check-label"
                        for="checkAgree">I agree to the <a href="#">Terms </a> and <a href="#">Privacy
                            Policy</a>.</label>
                </div>

                <button type="submit" class="form-btn">register</button>
                <div class="auth-form-or"><span>or</span></div>

                <p class="auth-form-text">Already have an account? <a href="login.html">Login here</a></p>
            </div>
        </form>
    </section>
    @include('layouts.script')
</body>


</html>
