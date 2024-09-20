@include('layouts.admin.head')

<body>
    <!-- Terms and Conditions Start -->
    <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header px-4">
                    <h5 class="modal-title fs-5">Terms and Conditions</h5>
                    <button type="button" class="outline-none border-0 p0 bg-transparent" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i data-feather="x" stroke-width="1.5" class="text-body"></i>
                    </button>
                </div>
                <div class="modal-body p6 px-3">
                    <p>Donec eget dapibus tellus. Cras pharetra velit massa, vitae auctor velit rhoncus ac. Mauris
                        lobortis tortor et porttitor mollis. Cras et luctus lectus, in sollicitudin urna. Nam lorem
                        turpis, rutrum commodo diam a, luctus imperdiet velit. Cras erat neque, efficitur in tempus
                        feugiat, interdum sit amet libero. Curabitur feugiat facilisis elit non mattis.</p>

                    <p>Nam auctor est sodales velit dapibus semper. Sed dictum, nisl quis consequat imperdiet, dui ante
                        pretium ante, ac tincidunt dolor mi in sapien. Maecenas viverra augue ligula, eu suscipit augue
                        fermentum in. Quisque sollicitudin aliquet pretium. Maecenas suscipit, libero vitae bibendum
                        sollicitudin, lectus nisi ultricies nisi, eget convallis dui odio et justo. Cras blandit quis
                        est ut euismod. Praesent fringilla nibh dapibus, convallis libero quis, cursus sapien.</p>

                    <p>Aenean condimentum fermentum fringilla. Morbi ultricies est lorem, vel ornare ante tempus at.
                        Maecenas sollicitudin, magna ut ullamcorper tincidunt, urna nisl condimentum leo, ac placerat
                        urna lorem id nibh. Proin dapibus nisi urna, id ultricies libero ultrices non. Cras scelerisque
                        luctus felis sed lobortis. Nulla vel sapien neque. Praesent accumsan condimentum urna, eget
                        auctor felis ornare sed. Maecenas rhoncus orci nec massa suscipit consectetur. Mauris mattis,
                        augue non egestas feugiat, neque mauris condimentum lorem, volutpat consectetur urna dolor sit
                        amet felis. Duis ornare ipsum non dictum placerat. Praesent pellentesque diam sed lacus
                        vulputate tempor. Morbi ultrices sit amet sem sed tristique. Fusce in ullamcorper orci.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <!-- Terms and Conditions End -->

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
                    <div class="w-60">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h5 class="mb3">Sign Up</h5>
                            {{-- <p>Start managing your project faster and better</p> --}}

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
                                        <input id="password" class="form-control form-control-lg w-100" type="password"
                                            placeholder="Password">
                                    </div>
                                    <div class="col-12 mb3">
                                        <div class="d-flex" id="meter">
                                            <div class="meter-item bg-body-secondary rounded height-5 w-25 me3"></div>
                                            <div class="meter-item bg-body-secondary rounded height-5 w-25 me3"></div>
                                            <div class="meter-item bg-body-secondary rounded height-5 w-25 me3"></div>
                                            <div class="meter-item bg-body-secondary rounded height-5 w-25"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb5">
                                        <small>Use 8 or more characters with a mix of letters, numbers &
                                            symbols.</small>
                                    </div>
                                    <div class="col-12 mb5">
                                        <input class="form-control form-control-lg w-100" type="password"
                                            placeholder="Repeat Password">
                                    </div>
                                    <div class="col-12 mb5">
                                        <div class="checkbox checkbox-primary me1">
                                            <input type="checkbox" name="check1" id="check1">
                                            <label for="check1">I agree to the <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#termsModal"
                                                    class="text-primary text-decoration-none">Terms and
                                                    Conditions</a></label>
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100">Sign Up</button>
                                    </div>
                                </div>
                            </form>
                            <p>Already have an account? <a href="{{ Route('admin_login') }}"
                                    class="text-decoration-none">Sign In</a></p>
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
    <!-- Page Specific Javascript -->
    <script src="{{ asset('adminAssets/js/pages/pages/authentication/sign-up.js') }}" crossorigin="anonymous"></script>
</body>



</html>
