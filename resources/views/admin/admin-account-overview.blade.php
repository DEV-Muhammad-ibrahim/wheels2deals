@include('layouts.admin.head')

<body>
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
                        <div class="col-12">
                            <h1 class="page-title mb2">Overview</h1>
                            <nav class="breadcrumb-nav" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Account & User</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Overview</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Page Top End -->

                    <!-- User Card & Menu Start -->
                    <div class="row mb6">
                        <div class="col-12">
                            <!-- Nav Start -->
                            <div class="card shadow-card overflow-hidden">
                                <div class="border-bottom p6 position-relative">
                                    <div
                                        class="position-absolute bg-gradient w-100 height-100 border top-0 start-0 z-1">
                                    </div>
                                    <div class="row position-relative z-2">
                                        <div class="col-xxl-2 col-md-3 col-sm-5 col-12 mobile-bottom-fix">
                                            <img src="assets/media/avatars/man.jpg" class="img-fluid rounded"
                                                alt="">
                                        </div>
                                        <div class="col-xxl-10 col-md-9 col-sm-7 col-12">
                                            <div class="row mb7 pb2">
                                                <div class="col-12 text-end">
                                                    <div
                                                        class="d-block flex-row align-items-center justify-content-start">
                                                        <button class="btn btn-light me2">Hire Me</button>
                                                        <button class="btn btn-light me2">Follow</button>
                                                        <div class="dropdown d-inline">
                                                            <button type="button"
                                                                class="btn p1 btn-light dropdown-toggle arrow-none"
                                                                data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i data-feather="more-horizontal" stroke-width="2"
                                                                    width="20" class="text-body ms1"></i>
                                                            </button>
                                                            <ul class="dropdown-menu text-start">
                                                                <li><a class="dropdown-item" href="#">Settings</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Create
                                                                        Invoice</a></li>
                                                                <li><a class="dropdown-item" href="#">Block
                                                                        User</a></li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                        href="#">
                                                                        Message <i data-feather="info" stroke-width="2"
                                                                            height="12" class="text-body me1"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="left"
                                                                            data-bs-custom-class="qd-tooltip"
                                                                            data-bs-title="Quickly send a message to the user."></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-xxl-8 mobile-bottom-fix">
                                                    <div
                                                        class="d-flex flex-row align-items-center justify-content-start mb1">
                                                        <h5 class="mb0 me3">Barry Tone</h5>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-success">Pro</span>
                                                    </div>
                                                    <small class="d-block mb5">@BarryTone</small>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <i data-feather="map-pin" stroke-width="2" width="14"
                                                                class="text-heading me1"></i>
                                                            <span>Florida, United States</span>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <i data-feather="link" stroke-width="2" width="14"
                                                                class="text-heading me1"></i>
                                                            <a href="#"
                                                                class="text-decoration-none text-body hover-primary">examplesite.com</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 text-end">
                                                    <div class="d-flex align-items-center justify-content-between mb2">
                                                        <span>Complete Your Profile</span>
                                                        <span>60%</span>
                                                    </div>
                                                    <div class="progress w-100 height-5" role="progressbar"
                                                        aria-label="Basic example" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <div class="progress-bar bg-success" style="width: 60%">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="horizontal-menu ss-container">
                                    <li class="active"><a href="pages-account-user-overview.html">Overview</a></li>
                                    <li><a href="pages-account-user-settings.html">Settings</a></li>
                                    <li><a href="pages-account-user-security.html">Security</a></li>
                                    <li><a href="pages-account-user-activity.html">Activity</a></li>
                                    <li><a href="pages-account-user-billing.html">Billing</a></li>
                                    <li><a href="pages-account-user-statements.html">Statements</a></li>
                                    <li><a href="pages-account-user-referrals.html">Referrals</a></li>
                                    <li><a href="pages-account-user-project.html">Project</a></li>
                                    <li><a href="pages-account-user-documents.html">Documents</a></li>
                                    <li><a href="pages-account-user-followers.html">Followers</a></li>
                                    <li><a href="pages-account-user-api-keys.html">API Keys</a></li>
                                    <li><a href="pages-account-user-logs.html">Logs</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </div>
                    <!-- User Card & Menu End -->

                    <!-- Page Content Start -->
                    <div class="row">
                        <!-- Left Column Start -->
                        <div class="col-xxl-4">
                            <!-- Info Card Start -->
                            <div class="card shadow-card p6 mb6">
                                <div class="row align-items-center mb2">
                                    <div class="col d-flex flex-row justify-content-between align-items-center">
                                        <h6 class="mb0">Info</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive text-nowrap">
                                            <table class="table qd-table align-middle mb0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <span>Full Name</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">Barry Tone</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Mobile</span>
                                                        </td>
                                                        <td>
                                                            <div
                                                                class="d-flex align-items-center justify-content-start">
                                                                <strong
                                                                    class="text-heading me3">+1-202-555-0116</strong>
                                                                <span
                                                                    class="badge rounded-pill badge-soft text-bg-success">Verified</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Email</span>
                                                        </td>
                                                        <td>
                                                            <div
                                                                class="d-flex align-items-center justify-content-start">
                                                                <strong class="me3"><a href="#"
                                                                        class="text-decoration-none text-heading hover-primary">barry@domain.com</a></strong>
                                                                <span
                                                                    class="badge rounded-pill badge-soft text-bg-danger">Not
                                                                    Verified</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Location</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">Florida, United
                                                                States</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Web Site</span>
                                                        </td>
                                                        <td>
                                                            <strong><a href="#"
                                                                    class="text-decoration-none text-heading hover-primary">examplesite.com</a></strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>Company</span>
                                                        </td>
                                                        <td>
                                                            <strong class="text-heading">Tempload Themes</strong>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Info Card End -->

                            <!-- Skills Card Start -->
                            <div class="card shadow-card p6 mb6">
                                <div class="row align-items-center mb2">
                                    <div class="col d-flex flex-row justify-content-between align-items-center">
                                        <h6 class="mb0">Skills</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <a href="#"><span
                                                class="badge badge-soft text-bg-primary me3 mb2">HTML5</span></a>
                                        <a href="#"><span
                                                class="badge badge-soft text-bg-primary me3 mb2">React</span></a>
                                        <a href="#"><span
                                                class="badge badge-soft text-bg-primary me3 mb2">Vue.js</span></a>
                                        <a href="#"><span class="badge badge-soft text-bg-primary me3 mb2">React
                                                Native</span></a>
                                        <a href="#"><span class="badge badge-soft text-bg-primary me3 mb2">GO
                                                Lang</span></a>
                                        <a href="#"><span class="badge badge-soft text-bg-primary me3 mb2">OOP
                                                Programming</span></a>
                                        <a href="#"><span class="badge badge-soft text-bg-primary me3 mb2">UI/UX
                                                Design</span></a>
                                        <a href="#"><span class="badge badge-soft text-bg-primary me3 mb2">Basic
                                                SEO</span></a>
                                        <a href="#"><span
                                                class="badge badge-soft text-bg-primary me3 mb2">Responsive
                                                Design</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Skills Card End -->

                            <!-- Suggestions Start -->
                            <div class="card shadow-card p6 mb6">
                                <h6 class="mb4">Suggestions</h6>
                                <div
                                    class="border-bottom-dashed d-flex align-items-center justify-content-between pb4 mb4">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="img-fix width-40 height-40 rounded-circle me3">
                                            <img src="assets/media/avatars/4.jpg" alt="">
                                        </div>
                                        <div class="d-flex flex-column align-items-start justify-content-start">
                                            <strong class="text-heading mb1">Norman Gordon</strong>
                                            <span>@NormanG</span>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-outline-primary">Follow</button>
                                </div>
                                <div
                                    class="border-bottom-dashed d-flex align-items-center justify-content-between pb4 mb4">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="img-fix width-40 height-40 rounded-circle me3">
                                            <img src="assets/media/avatars/11.jpg" alt="">
                                        </div>
                                        <div class="d-flex flex-column align-items-start justify-content-start">
                                            <strong class="text-heading mb1">Fleece Marigold</strong>
                                            <span>@FMarigold</span>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-outline-primary">Follow</button>
                                </div>
                                <div
                                    class="border-bottom-dashed d-flex align-items-center justify-content-between pb4 mb4">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="img-fix width-40 height-40 rounded-circle me3">
                                            <img src="assets/media/avatars/12.jpg" alt="">
                                        </div>
                                        <div class="d-flex flex-column align-items-start justify-content-start">
                                            <strong class="text-heading mb1">Thomas R. Toe</strong>
                                            <span>@thomas_r_t</span>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-outline-primary">Follow</button>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb3">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div
                                            class="width-40 height-40 rounded-circle me3 d-flex align-items-center justify-content-center bg-primary-subtle">
                                            <h6 class="text-primary m0">BE</h6>
                                        </div>
                                        <div class="d-flex flex-column align-items-start justify-content-start">
                                            <strong class="text-heading mb1">Benjamin Evalent</strong>
                                            <span>@BenjEvlent</span>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-outline-primary">Follow</button>
                                </div>
                            </div>
                            <!-- Suggestions End -->
                        </div>
                        <!-- Left Column End -->

                        <!-- Right Column Start -->
                        <div class="col-xxl-8">
                            <!-- About Card Start -->
                            <div class="card shadow-card p6 pb0 mb6">
                                <div class="row">
                                    <div class="col-12 mb3">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb3">About</h6>
                                            <p>Barry Tone is an exceptional computer programmer with a passion for
                                                creating innovative solutions to complex problems. His expertise in
                                                programming languages such as Python, Java, and C++ is matched by his
                                                ability to think creatively and outside the box. Barry's attention to
                                                detail and love of debugging makes him an invaluable member of any team,
                                                and his ability to work efficiently under pressure has made him a
                                                sought-after asset in the industry.</p>
                                            <p>In his free time, Barry can often be found tinkering with new
                                                technologies, experimenting with different programming languages, and
                                                attending tech conferences to stay up-to-date with the latest industry
                                                trends. His drive for excellence and his commitment to his work make him
                                                a standout in the field of computer programming, and we can't wait to
                                                see what innovative solutions he creates in the future.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mb3">
                                        <h6 class="m0">Photos</h6>
                                    </div>
                                    <div class="col-sm-3 col-6 mb6">
                                        <a href="assets/media/man/1.jpg" class="d-block height-130 img-fix rounded"
                                            data-fslightbox="gallery">
                                            <img src="assets/media/man/1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-6 mb6">
                                        <a href="assets/media/man/2.jpg" class="d-block height-130 img-fix rounded"
                                            data-fslightbox="gallery">
                                            <img src="assets/media/man/2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-6 mb6">
                                        <a href="assets/media/man/3.jpg" class="d-block height-130 img-fix rounded"
                                            data-fslightbox="gallery">
                                            <img src="assets/media/man/3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-6 mb6">
                                        <a href="assets/media/man/4.jpg" class="d-block height-130 img-fix rounded"
                                            data-fslightbox="gallery">
                                            <img src="assets/media/man/4.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- About Card End -->

                            <!-- All Tasks Start -->
                            <div class="card shadow-card p6 mb6">
                                <div class="row align-items-center mb4">
                                    <div class="col d-flex flex-row justify-content-between align-items-center">
                                        <h6 class="mb0 d-inline">All Tasks</h6>
                                        <div class="dropdown">
                                            <button type="button"
                                                class="border-0 bg-transparent p0 outline-none dropdown-toggle arrow-none"
                                                data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i data-feather="more-horizontal" stroke-width="2" height="22"
                                                    class="text-body"></i>
                                            </button>
                                            <ul class="dropdown-menu text-start">
                                                <li><a class="dropdown-item" href="#">Today</a></li>
                                                <li><a class="dropdown-item" href="#">Last Week</a></li>
                                                <li><a class="dropdown-item" href="#">Last Month</a></li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                        href="#">
                                                        Current Year <i data-feather="info" stroke-width="2"
                                                            height="12" class="text-body me1"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Only data from the beginning of the year to this time are shown."></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Task Item 1 Start -->
                                    <div class="col-12 mb2">
                                        <div class="border border-dashed rounded overflow-hidden">
                                            <div class="row">
                                                <div class="col-xxl-3 mb-4 mb-xxl-0">
                                                    <div
                                                        class="bg-light p4 d-flex align-items-center justify-content-center">
                                                        <div class="d-flex">
                                                            <div
                                                                class="width-50 height-50 rounded-circle bg-primary d-flex align-items-center justify-content-center me2">
                                                                <i data-feather="play" stroke-width="2"
                                                                    height="22" class="text-white"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <div>
                                                                <strong class="text-heading ps1">Start from</strong>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <i data-feather="clock" stroke-width="2"
                                                                    height="16" class="me1"></i>
                                                                <span>09:00 am</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-xxl-4 mb-4 mb-xxl-0 d-flex align-items-center justify-content-center justify-content-xxl-start">
                                                    <div class="d-flex flex-column justify-content-start">
                                                        <h6 class="ps1">iOS Development Project</h6>
                                                        <div class="d-flex align-items-center">
                                                            <i data-feather="message-circle" stroke-width="2"
                                                                height="18" class="me1"></i>
                                                            <span>7 comments</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-xxl-3 mb-4 mb-xxl-0 d-flex align-items-center justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="d-flex align-items-center mb4">
                                                            <h6 class="mb0 me1">48%</h6>
                                                            <span class="text-heading">complete</span>
                                                        </div>
                                                        <div class="progress width-200 height-5" role="progressbar"
                                                            aria-label="Basic example" aria-valuenow="48"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-info" style="width: 48%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-xxl-2 mb-4 mb-xxl-0 d-flex align-items-center justify-content-center">
                                                    <a class="btn btn-primary btn-soft d-block"
                                                        href="#">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Task Item 1 End -->

                                    <!-- Task Item 2 Start -->
                                    <div class="col-12 mb2">
                                        <div class="border border-dashed rounded overflow-hidden">
                                            <div class="row">
                                                <div class="col-xxl-3 mb-4 mb-xxl-0">
                                                    <div
                                                        class="bg-light p4 d-flex align-items-center justify-content-center">
                                                        <div class="d-flex">
                                                            <div
                                                                class="width-50 height-50 rounded-circle bg-primary d-flex align-items-center justify-content-center me2">
                                                                <i data-feather="play" stroke-width="2"
                                                                    height="22" class="text-white"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <div>
                                                                <strong class="text-heading ps1">Start from</strong>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <i data-feather="clock" stroke-width="2"
                                                                    height="16" class="me1"></i>
                                                                <span>11:00 am</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-xxl-4 mb-4 mb-xxl-0 d-flex align-items-center justify-content-center justify-content-xxl-start">
                                                    <div class="d-flex flex-column justify-content-start">
                                                        <h6 class="ps1">Web Design Project</h6>
                                                        <div class="d-flex align-items-center">
                                                            <i data-feather="message-circle" stroke-width="2"
                                                                height="18" class="me1"></i>
                                                            <span>3 comments</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-xxl-3 mb-4 mb-xxl-0 d-flex align-items-center justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="d-flex align-items-center mb4">
                                                            <h6 class="mb0 me1">22%</h6>
                                                            <span class="text-heading">complete</span>
                                                        </div>
                                                        <div class="progress width-200 height-5" role="progressbar"
                                                            aria-label="Basic example" aria-valuenow="22"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-primary" style="width: 22%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-xxl-2 mb-4 mb-xxl-0 d-flex align-items-center justify-content-center">
                                                    <a class="btn btn-primary btn-soft d-block"
                                                        href="#">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Task Item 2 End -->

                                    <!-- Task Item 3 Start -->
                                    <div class="col-12 mb2">
                                        <div class="border border-dashed rounded overflow-hidden">
                                            <div class="row">
                                                <div class="col-xxl-3 mb-4 mb-xxl-0">
                                                    <div
                                                        class="bg-light p4 d-flex align-items-center justify-content-center">
                                                        <div class="d-flex">
                                                            <div
                                                                class="width-50 height-50 rounded-circle bg-primary d-flex align-items-center justify-content-center me2">
                                                                <i data-feather="play" stroke-width="2"
                                                                    height="22" class="text-white"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <div>
                                                                <strong class="text-heading ps1">Start from</strong>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <i data-feather="clock" stroke-width="2"
                                                                    height="16" class="me1"></i>
                                                                <span>16:00 pm</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-xxl-4 mb-4 mb-xxl-0 d-flex align-items-center justify-content-center justify-content-xxl-start">
                                                    <div class="d-flex flex-column justify-content-start">
                                                        <h6 class="ps1">SEO Research Project</h6>
                                                        <div class="d-flex align-items-center">
                                                            <i data-feather="message-circle" stroke-width="2"
                                                                height="18" class="me1"></i>
                                                            <span>5 comments</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-xxl-3 mb-4 mb-xxl-0 d-flex align-items-center justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="d-flex align-items-center mb4">
                                                            <h6 class="mb0 me1">38%</h6>
                                                            <span class="text-heading">complete</span>
                                                        </div>
                                                        <div class="progress width-200 height-5" role="progressbar"
                                                            aria-label="Basic example" aria-valuenow="38"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-success" style="width: 38%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-xxl-2 mb-4 mb-xxl-0 d-flex align-items-center justify-content-center">
                                                    <a class="btn btn-primary btn-soft d-block"
                                                        href="#">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Task Item 3 End -->

                                    <!-- Task Item 4 Start -->
                                    <div class="col-12 mb2">
                                        <div class="border border-dashed rounded overflow-hidden">
                                            <div class="row">
                                                <div class="col-xxl-3 mb-4 mb-xxl-0">
                                                    <div
                                                        class="bg-light p4 d-flex align-items-center justify-content-center">
                                                        <div class="d-flex">
                                                            <div
                                                                class="width-50 height-50 rounded-circle bg-primary d-flex align-items-center justify-content-center me2">
                                                                <i data-feather="play" stroke-width="2"
                                                                    height="22" class="text-white"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <div>
                                                                <strong class="text-heading ps1">Start from</strong>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <i data-feather="clock" stroke-width="2"
                                                                    height="16" class="me1"></i>
                                                                <span>16:00 pm</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-xxl-4 mb-4 mb-xxl-0 d-flex align-items-center justify-content-center justify-content-xxl-start">
                                                    <div class="d-flex flex-column justify-content-start">
                                                        <h6 class="ps1">Prototype Project</h6>
                                                        <div class="d-flex align-items-center">
                                                            <i data-feather="message-circle" stroke-width="2"
                                                                height="18" class="me1"></i>
                                                            <span>4 comments</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-xxl-3 mb-4 mb-xxl-0 d-flex align-items-center justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="d-flex align-items-center mb4">
                                                            <h6 class="mb0 me1">63%</h6>
                                                            <span class="text-heading">complete</span>
                                                        </div>
                                                        <div class="progress width-200 height-5" role="progressbar"
                                                            aria-label="Basic example" aria-valuenow="63"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-warning" style="width: 63%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-xxl-2 mb-4 mb-xxl-0 d-flex align-items-center justify-content-center">
                                                    <a class="btn btn-primary btn-soft d-block"
                                                        href="#">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Task Item 4 End -->

                                    <!-- Task Item 5 Start -->
                                    <div class="col-12">
                                        <div class="border border-dashed rounded overflow-hidden">
                                            <div class="row">
                                                <div class="col-xxl-3 mb-4 mb-xxl-0">
                                                    <div
                                                        class="bg-light p4 d-flex align-items-center justify-content-center">
                                                        <div class="d-flex">
                                                            <div
                                                                class="width-50 height-50 rounded-circle bg-primary d-flex align-items-center justify-content-center me2">
                                                                <i data-feather="play" stroke-width="2"
                                                                    height="22" class="text-white"></i>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <div>
                                                                <strong class="text-heading ps1">Start from</strong>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <i data-feather="clock" stroke-width="2"
                                                                    height="16" class="me1"></i>
                                                                <span>16:00 pm</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-xxl-4 mb-4 mb-xxl-0 d-flex align-items-center justify-content-center justify-content-xxl-start">
                                                    <div class="d-flex flex-column justify-content-start">
                                                        <h6 class="ps1">Mobile UX Project</h6>
                                                        <div class="d-flex align-items-center">
                                                            <i data-feather="message-circle" stroke-width="2"
                                                                height="18" class="me1"></i>
                                                            <span>4 comments</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-xxl-3 mb-4 mb-xxl-0 d-flex align-items-center justify-content-center">
                                                    <div class="d-flex flex-column">
                                                        <div class="d-flex align-items-center mb4">
                                                            <h6 class="mb0 me1">28%</h6>
                                                            <span class="text-heading">complete</span>
                                                        </div>
                                                        <div class="progress width-200 height-5" role="progressbar"
                                                            aria-label="Basic example" aria-valuenow="28"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-secondary" style="width: 28%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-xxl-2 mb-4 mb-xxl-0 d-flex align-items-center justify-content-center">
                                                    <a class="btn btn-primary btn-soft d-block"
                                                        href="#">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Task Item 5 End -->
                                </div>
                            </div>
                            <!-- All Tasks End -->
                        </div>
                        <!-- Right Column End -->
                    </div>
                    <!-- Page Content End -->
                </div>
            </div>
            <!-- ***** Content End ***** -->

            <!-- ***** Footer Start ***** -->
            @include('layouts.admin.footer')
