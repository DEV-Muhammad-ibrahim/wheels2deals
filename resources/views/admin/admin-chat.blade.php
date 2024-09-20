@include('layouts.admin.head')

<body>
    <!-- Add Modal Start -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="post" action="#" id="addcar" class="needs-validation" novalidate>
                    <div class="modal-header px-4">
                        <h5 class="modal-title fs-5">Add Contact</h5>
                        <button type="button" class="outline-none border-0 p0 bg-transparent" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x" stroke-width="1.5" class="text-body"></i>
                        </button>
                    </div>
                    <div class="modal-body p6 px-3">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-sm-12 mb5">
                                            <label for="add-form-1" class="form-label">
                                                <span>Name, Surname</span>
                                                <span class="text-danger">*</span>
                                                <i data-feather="info" stroke-width="2" width="12" class="text-body"
                                                    data-bs-toggle="tooltip" data-bs-placement="right"
                                                    data-bs-custom-class="qd-tooltip" data-bs-title="Type a name."></i>
                                            </label>
                                            <input id="add-form-1" class="form-control" type="text"
                                                autocomplete="off" required>
                                            <div class="invalid-feedback">You need to fill this field.</div>
                                        </div>
                                        <div class="col-sm-12 mb5">
                                            <label for="add-form-2" class="form-label">
                                                <span>Email</span>
                                                <span class="text-danger">*</span>
                                                <i data-feather="info" stroke-width="2" width="12" class="text-body"
                                                    data-bs-toggle="tooltip" data-bs-placement="right"
                                                    data-bs-custom-class="qd-tooltip" data-bs-title="Type a email."></i>
                                            </label>
                                            <input id="add-form-2" class="form-control" type="text"
                                                autocomplete="off" required>
                                            <div class="invalid-feedback">You need to fill this field.</div>
                                        </div>
                                        <div class="col-sm-12 mb5">
                                            <label for="add-form-3" class="form-label">
                                                <span>Phone</span>
                                                <span class="text-danger">*</span>
                                                <i data-feather="info" stroke-width="2" width="12" class="text-body"
                                                    data-bs-toggle="tooltip" data-bs-placement="right"
                                                    data-bs-custom-class="qd-tooltip"
                                                    data-bs-title="Type a phone number."></i>
                                            </label>
                                            <input id="add-form-3" class="form-control" type="text"
                                                autocomplete="off" required>
                                            <div class="invalid-feedback">You need to fill this field.</div>
                                        </div>
                                        <div class="col-12">
                                            <label for="add-form-4" class="form-label">
                                                <span>Notes</span>
                                                <i data-feather="info" stroke-width="2" width="12" class="text-body"
                                                    data-bs-toggle="tooltip" data-bs-placement="right"
                                                    data-bs-custom-class="qd-tooltip"
                                                    data-bs-title="Type a notes (optional)."></i>
                                            </label>
                                            <textarea class="form-control" id="add-form-4" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="add-form-1" class="form-label">
                                        <span>Photo</span>
                                        <i data-feather="info" stroke-width="2" width="12" class="text-body"
                                            data-bs-toggle="tooltip" data-bs-placement="right"
                                            data-bs-custom-class="qd-tooltip"
                                            data-bs-title="Supports: *.png or *.jpg"></i>
                                    </label>
                                    <div id="drop-area"
                                        class="d-flex flex-column align-items-center bg-light height-350">
                                        <div
                                            class="width-120 height-120 border-dashed rounded bg-body-secondary position-relative overflow-hidden d-flex align-items-center justify-content-center mb4 mt4">
                                            <i data-feather="image" stroke-width="1.5" class="text-body"></i>
                                            <div class="img-fix width-120 height-120 position-absolute top-0 start-0">
                                                <img id="preview-img" class="">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-grow-1 align-items-center justify-content-center">
                                            <div class="d-flex flex-column justify-content-start align-items-center">
                                                <strong class="d-block mb2">Drag & Drop</strong>
                                                <span class="d-block mb2">OR</span>
                                                <label for="fileElem" id="fileSelect"
                                                    class="d-block mb3 text-primary">Browse Photo</label>
                                                <small>Supports: *.png, *.jpg and *.jpeg</small>
                                            </div>
                                        </div>
                                        <input type="file" id="fileElem" accept="image/*" class="d-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Add Modal End -->

    <div class="app-root d-flex flex-column">
        <!-- ***** Sidebar Start ***** -->
        @include('layouts.admin.sidebar')

        <!-- ***** Sidebar End ***** -->

        <!-- ***** Responsive Menu Backdrop Start ***** -->
        <div class="menu-backdrop"></div>
        <!-- ***** Responsive Menu Backdrop End ***** -->

        <!-- ***** Main Start ***** -->
        <main class="app-main">
            <!-- ***** Header Start ***** -->
            <header class="main-header d-flex justify-content-between">
                <!-- ***** Sidebar Menu Open Button Start ***** -->
                <a href="javascript:;" class="sidebar-menu-trigger"><span>Menu</span></a>
                <!-- ***** Sidebar Menu Open Button End ***** -->

                <!-- ***** Navbar Start ***** -->
                @include('layouts.admin.navbar')
                <!-- ***** Navbar End ***** -->


            </header>
            <!-- ***** Header End ***** -->

            <!-- ***** Content Start ***** -->
            <div class="app-content p6 pb2 smp1">
                <div class="container p0">
                    <!-- Page Top Start -->
                    <div class="row mb6 align-items-center">
                        <div class="col-md-6 mobile-bottom-fix">
                            <h1 class="page-title mb2">Single Chat</h1>
                            <nav class="breadcrumb-nav" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Single Chat</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 text-start text-md-end">
                            <!-- Add Button Start-->
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add
                                Contact</button>
                            <!-- Add Button End-->
                        </div>
                    </div>
                    <!-- Page Top End -->

                    <!-- Page Bottom Start -->
                    <div class="row">
                        <!-- Left Column Start -->
                        <div class="col-xxl-3">
                            <div class="row">
                                <!-- Contact List Start -->
                                <div class="col-12 mb6">
                                    <div class="card shadow-card p6 pb3">
                                        <input id="contact-search" class="form-control mb3" type="text"
                                            autocomplete="off" placeholder="Search...">
                                        <a href="#"
                                            class="border-bottom-dashed pb4 pt4 d-flex align-items-center justify-content-between text-decoration-none">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="img-fix width-40 height-40 rounded-circle me3">
                                                    <img src="assets/media/avatars/4.jpg" alt="">
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <strong class="text-heading">Norman Gordon</strong>
                                                    <span class="text-body">norman@example.com</span>
                                                </div>
                                            </div>
                                            <span class="badge rounded-pill badge-soft text-bg-danger">3</span>
                                        </a>
                                        <a href="#"
                                            class="border-bottom-dashed pb4 pt4 d-flex align-items-center justify-content-between text-decoration-none">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="img-fix width-40 height-40 rounded-circle me3">
                                                    <img src="assets/media/avatars/13.jpg" alt="">
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <strong class="text-heading">Fleece Marigold</strong>
                                                    <span class="text-body">fleece@example.com</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="border-bottom-dashed pb4 pt4 d-flex align-items-center justify-content-between text-decoration-none">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="img-fix width-40 height-40 rounded-circle me3">
                                                    <img src="assets/media/avatars/8.jpg" alt="">
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <strong class="text-heading">Thomas R. Toe</strong>
                                                    <span class="text-body">thomas@domain.com</span>
                                                </div>
                                            </div>
                                            <span class="badge rounded-pill badge-soft text-bg-danger">7</span>
                                        </a>
                                        <a href="#"
                                            class="border-bottom-dashed pb4 pt4 d-flex align-items-center justify-content-between text-decoration-none">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div
                                                    class="width-40 height-40 rounded-circle me3 bg-primary-subtle d-flex align-items-center justify-content-center">
                                                    <h6 class="mb0 text-primary">BE</h6>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <strong class="text-heading">Benjamin Evalent</strong>
                                                    <span class="text-body">benjamin@example.com</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="border-bottom-dashed pb4 pt4 d-flex align-items-center justify-content-between text-decoration-none">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="img-fix width-40 height-40 rounded-circle me3">
                                                    <img src="assets/media/avatars/3.jpg" alt="">
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <strong class="text-heading">Niles Peppertrout</strong>
                                                    <span class="text-body">niles@site.com</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="border-bottom-dashed pb4 pt4 d-flex align-items-center justify-content-between text-decoration-none">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="img-fix width-40 height-40 rounded-circle me3">
                                                    <img src="assets/media/avatars/10.jpg" alt="">
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <strong class="text-heading">Rodney Artichoke</strong>
                                                    <span class="text-body">rodney@example.com</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="border-bottom-dashed pb4 pt4 d-flex align-items-center justify-content-between text-decoration-none">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div
                                                    class="width-40 height-40 rounded-circle me3 bg-info-subtle d-flex align-items-center justify-content-center">
                                                    <h6 class="mb0 text-info">WR</h6>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <strong class="text-heading">Wisteria Ravenclaw</strong>
                                                    <span class="text-body">wisteria@revenc.com</span>
                                                </div>
                                            </div>
                                            <span class="badge rounded-pill badge-soft text-bg-danger">48</span>
                                        </a>
                                        <a href="#"
                                            class="border-bottom-dashed pb4 pt4 d-flex align-items-center justify-content-between text-decoration-none">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="img-fix width-40 height-40 rounded-circle me3">
                                                    <img src="assets/media/avatars/12.jpg" alt="">
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <strong class="text-heading">Justin Case</strong>
                                                    <span class="text-body">justin@yoursite.com</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="border-bottom-dashed pb4 pt4 d-flex align-items-center justify-content-between text-decoration-none">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div
                                                    class="width-40 height-40 rounded-circle me3 bg-success-subtle d-flex align-items-center justify-content-center">
                                                    <h6 class="mb0 text-success">ND</h6>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <strong class="text-heading">Nathaneal Down</strong>
                                                    <span class="text-body">nathaneal@sitename.com</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="border-bottom-dashed pb4 pt4 d-flex align-items-center justify-content-between text-decoration-none mb1">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div
                                                    class="width-40 height-40 rounded-circle me3 bg-warning-subtle d-flex align-items-center justify-content-center">
                                                    <h6 class="mb0 text-warning">PM</h6>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <strong class="text-heading">Parsley Montana</strong>
                                                    <span class="text-body">parsley@yourdomain.com</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- Contact List End -->
                            </div>
                        </div>
                        <!-- Left Column Start -->

                        <!-- Right Column Start -->
                        <div class="col-xxl-9 mb6">
                            <div class="card shadow-card overflow-hidden">
                                <div class="p6 d-flex align-items-center justify-content-between border-bottom">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <div class="position-relative">
                                                <div class="img-fix rounded-circle me3 height-40 width-40">
                                                    <img src="assets/media/avatars/12.jpg" alt="">
                                                </div>
                                                <span
                                                    class="badge rounded-pill text-bg-success position-absolute scale-70 bottom-0 end-0">&nbsp;</span>
                                            </div>
                                            <h6 class="mb0">Justin Case</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="dropdown">
                                            <button type="button"
                                                class="border-0 bg-transparent p0 outline-none me2 dropdown-toggle arrow-none"
                                                data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i data-feather="more-horizontal" stroke-width="2" height="22"
                                                    class="text-body"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <i data-feather="archive" stroke-width="1.5" height="14"
                                                            class="text-body me1"></i>
                                                        Archive
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <i data-feather="mic-off" stroke-width="1.5" height="16"
                                                            class="text-body me1"></i>
                                                        Muted
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                        href="#">
                                                        <div class="d-flex align-items-center">
                                                            <i data-feather="trash-2" stroke-width="1.5"
                                                                height="16" class="text-body me1"></i>
                                                            Delete
                                                        </div>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body me1" data-bs-toggle="tooltip"
                                                            data-bs-placement="left" data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="If you delete it, this action cannot be undone."></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="p6 pt3 pb3">
                                    <div class="chat-app-scroll ss-container height-600">
                                        <div class="d-flex flex-column align-items-start mb6">
                                            <div class="d-flex align-items-center mb3">
                                                <div class="img-fix rounded-circle me3 height-30 width-30 me3">
                                                    <img src="assets/media/avatars/12.jpg" alt="">
                                                </div>
                                                <span class="text-heading me3">Justin Case</span>
                                                <span>48 min.</span>
                                            </div>
                                            <div class="p4 bg-info-subtle rounded">
                                                <span class="text-heading">Hi, can you send me the files of the new
                                                    project by email?</span>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column align-items-end mb6">
                                            <div class="d-flex align-items-center mb3">
                                                <span>46 min.</span>
                                                <span class="text-heading ms3">You</span>
                                                <div class="img-fix rounded-circle me3 height-30 width-30 ms3">
                                                    <img src="assets/media/avatars/6.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="p4 bg-light rounded">
                                                <span class="text-heading">I don't have all the files. I can only send
                                                    documents.</span>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column align-items-start mb6">
                                            <div class="d-flex align-items-center mb3">
                                                <div class="img-fix rounded-circle me3 height-30 width-30 me3">
                                                    <img src="assets/media/avatars/12.jpg" alt="">
                                                </div>
                                                <span class="text-heading me3">Justin Case</span>
                                                <span>43 min.</span>
                                            </div>
                                            <div class="p4 bg-info-subtle rounded">
                                                <span class="text-heading">Okey send.</span>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column align-items-end mb6">
                                            <div class="d-flex align-items-center mb3">
                                                <span>40 min.</span>
                                                <span class="text-heading ms3">You</span>
                                                <div class="img-fix rounded-circle me3 height-30 width-30 ms3">
                                                    <img src="assets/media/avatars/6.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="p4 mb1 bg-light rounded">
                                                <a href="#"
                                                    class="text-heading d-flex align-items-center text-decoration-none">
                                                    <i data-feather="file" stroke-width="1.5" height="22"
                                                        class="text-heading me2"></i>
                                                    New Project.docx
                                                </a>
                                            </div>
                                            <div class="p4 bg-light rounded">
                                                <span class="text-heading">This file contains all the
                                                    information.</span>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column align-items-start">
                                            <div class="d-flex align-items-center mb3">
                                                <div class="img-fix rounded-circle me3 height-30 width-30 me3">
                                                    <img src="assets/media/avatars/12.jpg" alt="">
                                                </div>
                                                <span class="text-heading me3">Justin Case</span>
                                                <span>38 min.</span>
                                            </div>
                                            <div class="p4 bg-info-subtle rounded">
                                                <span class="text-heading">Thank you very much. I owe you lunch
                                                    😁</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p6 bg-light">
                                    <div
                                        class="bg-chat border p1 rounded d-flex align-items-center justify-content-between">
                                        <div>
                                            <a href="#"
                                                class="bg-light width-40 height-40 rounded d-flex align-items-center justify-content-center">
                                                <i data-feather="paperclip" stroke-width="1.5" height="18"
                                                    class="text-body"></i>
                                            </a>
                                        </div>
                                        <div class="w-100">
                                            <input type="text"
                                                class="form-control border-0 outline-none input-reset bg-transparent"
                                                placeholder="Type your message here">
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="width-40 height-40 d-flex align-items-center justify-content-center">
                                                <i data-feather="send" stroke-width="1.5" height="22"
                                                    class="text-body"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Right Column End -->
                    </div>
                    <!-- Page Bottom End -->
                </div>
            </div>
            <!-- ***** Content End ***** -->

            <!-- ***** Footer Start ***** -->
            <script src="{{ asset('adminAssets/js/pages/apps/chat/single-chat.js') }}" crossorigin="anonymous"></script>
            @include('layouts.admin.footer')
