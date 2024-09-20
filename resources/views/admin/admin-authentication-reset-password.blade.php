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
                        <h3 class="mb4 text-white">Fast, Easy to Use and <br>Expandable</h3>
                        <p class="text-white-50 m0">Have a flexible infrastructure with Qoduby.</p>
                        <p class="text-white-50 m0">Coming every day for easy use...</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="vh-100 d-flex align-items-center justify-content-center">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex flex-column align-items-center justify-content-center">
                                <h5 class="mb3">Forgot your password?</h5>
                                <p class="mb7">Enter your email address below and we'll get you back on track.</p>
                                <form action="#" class="needs-validation mb5" novalidate>
                                    <div class="row">
                                        <div class="col-12 mb4">
                                            <input class="form-control form-control-lg w-100" type="email"
                                                placeholder="Email">
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100">Reset Password</button>
                                        </div>
                                    </div>
                                </form>
                                <a href="{{ Route('admin_login') }}" class="text-decoration-none">Back to sign in</a>
                            </div>
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
