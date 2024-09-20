@include('layouts.admin.head')

<body>
    <div class="container-fluid p0 overflow-hidden">
        <div class="row">
            <div class="col-lg-5 overflow-hidden">
                <div class="vh-100 position-relative">
                    <div class="position-absolute img-fix w-100 h-100 z-1">
                        <img src="assets/media/coming-soon/1.jpg" alt="">
                    </div>
                    <div class="position-absolute w-100 h-100 z-2 bg-gradient opacity-90"></div>
                    <div class="p7 position-relative z-3">
                        <div class="d-block">
                            <a href="index.html">
                                <img src="assets/media/logo/logo-white.svg" class="height-30 mb6" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="p7 position-absolute bottom-0 z-3">
                        <h3 class="mb4 text-white">Launch digital experiences</h3>
                        <p class="text-white-50 m0">Have a flexible infrastructure with Qoduby.</p>
                        <p class="text-white-50 mb6">Coming every day for easy use...</p>
                        <button class="btn btn-success">Contact Us</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="vh-100 d-flex align-items-center justify-content-center">
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <div class="position-relative d-flex align-items-end justify-content-center mb7">
                            <img src="assets/media/illustration/5.svg" alt="">
                            <div class="display-1 text-primary position-absolute bottom-0">404</div>
                        </div>
                        <p class="mb4">OOPPS! THE PAGE YOU WERE LOOKING FOR, COULDN'T BE FOUND.</p>
                        <p class="text-primary mb6">Try the search below to find matching pages:</p>
                        <div class="position-relative w-100 height-50 overflow-hidden rounded">
                            <input class="form-control h-100" type="text" placeholder="Search...">
                            <button class="btn btn-primary position-absolute top-0 end-0 height-50 rounded-start-0"
                                role="button">
                                <i data-feather="search" stroke-width="1.5" width="24" class="text-white"></i>
                            </button>
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
