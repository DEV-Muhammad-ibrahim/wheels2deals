@include('layouts.admin.head')

<body>
    <div class="container-fluid p0 overflow-hidden">
        <div class="row">
            <div class="col-lg-6 overflow-hidden">
                <div class="vh-100 bg-primary">
                    <div class="p7 pb6">
                        <div class="d-block mb6">
                            <a href="index.html">
                                <img src="{{ asset('assets/images/logo.png') }}" class="height-30 mb6" alt="">
                            </a>
                        </div>
                        <h3 class="mb4 text-white justify-center">Welcome to the<br>Admin Dashboard.</h3>

                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="vh-100 d-flex align-items-center justify-content-center">
                    <div class="w-60">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h5 class="mb3">Sign In</h5>
                            {{-- <p>Start managing your project faster and better</p> --}}
                            {{-- <div class="d-flex mb6"> --}}
                            {{-- <a href="#"
                                    class="text-decoration-none d-flex align-items-center justify-content-center border rounded height-50 me2">
                                    <img src="assets/media/logos/google.svg" height="22" class="ps4 me3"
                                        alt="">
                                    <span class="text-heading pe4">Sign in with Google</span>
                                </a>
                                <a href="#"
                                    class="text-decoration-none d-flex align-items-center justify-content-center border rounded width-50 height-50 me2">
                                    <img src="assets/media/logos/apple.svg" height="22" alt="">
                                </a>
                                <a href="#"
                                    class="text-decoration-none d-flex align-items-center justify-content-center border rounded width-50 height-50 me2">
                                    <img src="assets/media/logos/facebook.svg" height="22" alt="">
                                </a>
                                <a href="#"
                                    class="text-decoration-none d-flex align-items-center justify-content-center border rounded width-50 height-50">
                                    <img src="assets/media/logos/twitter.svg" height="22" alt="">
                                </a> --}}
                            {{-- </div> --}}
                            <div class="position-relative w-100 d-flex align-items-center justify-content-center mb5">
                                <div class="position-absolute border-bottom w-100 z-1"></div>
                                <span class="position-relative z-2 bg-body p3">OR</span>
                            </div>
                            <form action="#" class="needs-validation mb7" novalidate>
                                <div class="row">
                                    <div class="col-12 mb4">
                                        <input class="form-control form-control-lg w-100" type="email"
                                            placeholder="Email">
                                    </div>
                                    <div class="col-12 mb4">
                                        <input class="form-control form-control-lg w-100" type="password"
                                            placeholder="Password">
                                    </div>
                                    <div class="col-12 mb4 text-end">
                                        <a href="{{ Route('admin_reset_password') }}"
                                            class="text-primary text-decoration-none">Forgot Password?</a>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100">Sign In</button>
                                    </div>
                                </div>
                            </form>
                            <p>Don’t have account? <a href="{{ Route('admin_signup') }}"
                                    class="text-decoration-none">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Plugin Bundle -->
    <script src="{{ asset('adminAssets/js/plugins.bundle.js') }}" crossorigin="anonymous"></script>
    <!-- Common Javascript -->
    <script src="{{ asset('adminAssets/js/app.js') }}" crossorigin="anonymous"></script>
</body>



</html>
