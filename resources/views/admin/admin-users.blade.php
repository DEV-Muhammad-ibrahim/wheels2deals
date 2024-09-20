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

                <div class="header-tools d-flex align-items-center">
                    <!-- ***** Search Dropdown Start ***** -->
                    <div class="dropdown me3">
                        <!-- ***** Icon Start ***** -->
                        <a href="javascript:;"
                            class="dropdown-toggle header-dropdown bg-secondary-subtle rounded d-flex align-items-center justify-content-center overflow-auto outline-none"
                            data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                            <i data-feather="search" stroke-width="2" height="22" class="text-secondary"></i>
                        </a>
                        <!-- ***** Icon End ***** -->

                        <!-- ***** Dropdown Content Start ***** -->
                        <div class="dropdown-menu width-350 p0">
                            <!-- ***** Content Start ***** -->
                            <div class="p3">
                                <div class="w-100 position-relative d-flex align-items-center">
                                    <i data-feather="search" stroke-width="2" height="22"
                                        class="text-body-tertiary position-absolute"></i>
                                    <input type="text"
                                        class="form-control border-0 outline-none input-reset ps6 bg-transparent"
                                        placeholder="Search...">
                                </div>
                            </div>
                            <hr class="opacity-20 m0">
                            <div class="p5 d-flex flex-row justify-content-between">
                                <a href="#"
                                    class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-body">
                                    <div
                                        class="rounded-circle width-50 height-50 bg-primary-subtle d-flex align-items-center justify-content-center mb2">
                                        <i data-feather="message-circle" stroke-width="2" height="36"
                                            class="text-primary"></i>
                                    </div>
                                    <span>Chat</span>
                                </a>
                                <a href="#"
                                    class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-body">
                                    <div
                                        class="rounded-circle width-50 height-50 bg-info-subtle d-flex align-items-center justify-content-center mb2">
                                        <i data-feather="folder" stroke-width="2" height="36" class="text-info"></i>
                                    </div>
                                    <span>Files</span>
                                </a>
                                <a href="#"
                                    class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-body">
                                    <div
                                        class="rounded-circle width-50 height-50 bg-success-subtle d-flex align-items-center justify-content-center mb2">
                                        <i data-feather="mail" stroke-width="2" height="36" class="text-success"></i>
                                    </div>
                                    <span>Inbox</span>
                                </a>
                                <a href="#"
                                    class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-body">
                                    <div
                                        class="rounded-circle width-50 height-50 bg-warning-subtle d-flex align-items-center justify-content-center mb2">
                                        <i data-feather="check-circle" stroke-width="2" height="36"
                                            class="text-warning"></i>
                                    </div>
                                    <span>Tasks</span>
                                </a>
                                <a href="#"
                                    class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-body">
                                    <div
                                        class="rounded-circle width-50 height-50 bg-danger-subtle d-flex align-items-center justify-content-center mb2">
                                        <i data-feather="pie-chart" stroke-width="2" height="36"
                                            class="text-danger"></i>
                                    </div>
                                    <span>CRM</span>
                                </a>
                            </div>
                            <div class="bg-light p5 pt3 pb3">Recently Searched:</div>
                            <div class="height-350 overflow-hidden search-scroll ss-container">
                                <div class="p5">
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="calendar" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Calendar</span>
                                        <span class="text-heading">"birthday"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="message-circle" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Chat</span>
                                        <span class="text-heading">"october invoice"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="mail" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Inbox</span>
                                        <span class="text-heading">"project files"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="phone" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Contacts</span>
                                        <span class="text-heading">"justin case"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="database" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Projects</span>
                                        <span class="text-heading">"mobile app sketch file"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="check-circle" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Tasks</span>
                                        <span class="text-heading">"seo report"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="columns" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Kanban Board</span>
                                        <span class="text-heading">"design assets"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="check" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">ToDo</span>
                                        <span class="text-heading">"shopping list"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="pie-chart" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">CRM</span>
                                        <span class="text-heading">"barry tone"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="calendar" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Calendar</span>
                                        <span class="text-heading">"birthday"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="message-circle" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Chat</span>
                                        <span class="text-heading">"october invoice"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="mail" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Inbox</span>
                                        <span class="text-heading">"project files"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="phone" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Contacts</span>
                                        <span class="text-heading">"justin case"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="database" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Projects</span>
                                        <span class="text-heading">"mobile app sketch file"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="check-circle" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Tasks</span>
                                        <span class="text-heading">"seo report"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="columns" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Kanban Board</span>
                                        <span class="text-heading">"design assets"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="check" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">ToDo</span>
                                        <span class="text-heading">"shopping list"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="pie-chart" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">CRM</span>
                                        <span class="text-heading">"barry tone"</span>
                                    </a>
                                </div>
                            </div>
                            <!-- ***** Content End ***** -->
                        </div>
                        <!-- ***** Dropdown Content Start ***** -->
                    </div>
                    <!-- ***** Search Dropdown End ***** -->

                    <!-- ***** Chat Start ***** -->
                    <div class="dropdown me3">
                        <!-- ***** Icon Start ***** -->
                        <a href="javascript:;"
                            class="header-dropdown bg-secondary-subtle rounded d-flex align-items-center justify-content-center position-relative overflow-auto outline-none"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                            aria-controls="offcanvasRight" data-disableScrolling="false">
                            <i data-feather="message-square" stroke-width="2" height="22"
                                class="text-secondary"></i>
                            <span
                                class="badge rounded-pill text-bg-danger position-absolute scale-70 top-0 end-0">3</span>
                        </a>
                        <!-- ***** Icon End ***** -->

                        <!-- ***** Chat Content Start ***** -->
                        <div class="offcanvas offcanvas-end offcanvas-chat" tabindex="-1" id="offcanvasRight"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header p6">
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
                                                        <i data-feather="trash-2" stroke-width="1.5" height="16"
                                                            class="text-body me1"></i>
                                                        Delete
                                                    </div>
                                                    <i data-feather="info" stroke-width="2" height="12"
                                                        class="text-body me1" data-bs-toggle="tooltip"
                                                        data-bs-placement="left" data-bs-custom-class="qd-tooltip"
                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <button type="button" class="border-0 bg-transparent p0 outline-none"
                                        data-bs-dismiss="offcanvas" aria-label="Close">
                                        <i data-feather="x" stroke-width="2" height="22" class="text-body"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="offcanvas-body p0 overflow-hidden">
                                <div class="p6 pt3 pb3 chat-scroll ss-container" style="height: 100%;">
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
                                            <span class="text-heading">This file contains all the information.</span>
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
                                            <span class="text-heading">Thank you very much. I owe you lunch 😁</span>
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
                        <!-- ***** Chat Content Start ***** -->
                    </div>
                    <!-- ***** Chat End ***** -->

                    <!-- ***** My Apps Dropdown Start ***** -->
                    <div class="dropdown me3">
                        <!-- ***** Icon Start ***** -->
                        <a href="javascript:;"
                            class="dropdown-toggle header-dropdown bg-secondary-subtle rounded d-flex align-items-center justify-content-center overflow-auto outline-none"
                            data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                            <i data-feather="hard-drive" stroke-width="2" height="22" class="text-secondary"></i>
                        </a>
                        <!-- ***** Icon End ***** -->

                        <!-- ***** Dropdown Content Start ***** -->
                        <div class="dropdown-menu width-350 p0">
                            <!-- ***** Content Start ***** -->
                            <div class="d-flex justify-content-between align-items-center p5">
                                <h6 class="mb0">My Apps</h6>
                                <span class="badge rounded-pill badge-soft text-bg-info">7 Updates</span>
                            </div>
                            <hr class="opacity-20 m0">
                            <div class="p5">
                                <div class="container-fluid p0">
                                    <div class="row">
                                        <div class="col-4 mb5">
                                            <a href="#"
                                                class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light position-relative">
                                                <span
                                                    class="badge rounded-pill text-bg-success position-absolute scale-50 top-0 end-0">
                                                    <i data-feather="check" stroke-width="2" height="22"
                                                        class="text-white"></i>
                                                </span>
                                                <img class="mb-2" src="assets/media/logos/github.svg"
                                                    height="30" alt="">
                                                <span class="text-heading">Github</span>
                                            </a>
                                        </div>
                                        <div class="col-4 mb5">
                                            <a href="#"
                                                class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
                                                <img class="mb-2" src="assets/media/logos/bitbucket.svg"
                                                    height="30" alt="">
                                                <span class="text-heading">Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col-4 mb5">
                                            <a href="#"
                                                class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
                                                <img class="mb-2" src="assets/media/logos/dribbble.svg"
                                                    height="30" alt="">
                                                <span class="text-heading">Dribbble</span>
                                            </a>
                                        </div>
                                        <div class="col-4 mb5">
                                            <a href="#"
                                                class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
                                                <img class="mb-2" src="assets/media/logos/dropbox.svg"
                                                    height="30" alt="">
                                                <span class="text-heading">Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col-4 mb5">
                                            <a href="#"
                                                class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
                                                <img class="mb-2" src="assets/media/logos/mailchimp.svg"
                                                    height="30" alt="">
                                                <span class="text-heading">Mail</span>
                                            </a>
                                        </div>
                                        <div class="col-4 mb5">
                                            <a href="#"
                                                class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
                                                <img class="mb-2" src="assets/media/logos/slack.svg" height="30"
                                                    alt="">
                                                <span class="text-heading">Slack</span>
                                            </a>
                                        </div>
                                        <div class="col-4 mb5">
                                            <a href="#"
                                                class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
                                                <img class="mb-2" src="assets/media/logos/amazon.svg"
                                                    height="30" alt="">
                                                <span class="text-heading">AWS</span>
                                            </a>
                                        </div>
                                        <div class="col-4 mb5">
                                            <a href="#"
                                                class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
                                                <img class="mb-2" src="assets/media/logos/gitlab.svg"
                                                    height="30" alt="">
                                                <span class="text-heading">Gitlab</span>
                                            </a>
                                        </div>
                                        <div class="col-4 mb5">
                                            <a href="#"
                                                class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
                                                <img class="mb-2" src="assets/media/logos/figma.svg" height="30"
                                                    alt="">
                                                <span class="text-heading">Figma</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a class="btn btn-primary btn-soft btn-sm d-block" href="#"
                                                role="button">View App Market</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ***** Content End ***** -->
                        </div>
                        <!-- ***** Dropdown Content Start ***** -->
                    </div>
                    <!-- ***** My Apps Dropdown End ***** -->

                    <!-- ***** Notification Dropdown Start ***** -->
                    <div class="dropdown me3">
                        <!-- ***** Icon Start ***** -->
                        <a href="javascript:;"
                            class="dropdown-toggle header-dropdown bg-secondary-subtle rounded d-flex align-items-center justify-content-center position-relative overflow-auto outline-none"
                            data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                            <i data-feather="bell" stroke-width="2" height="22" class="text-secondary"></i>
                            <span
                                class="badge rounded-pill text-bg-info position-absolute scale-70 top-0 end-0">2</span>
                        </a>
                        <!-- ***** Icon End ***** -->

                        <!-- ***** Dropdown Content Start ***** -->
                        <div class="dropdown-menu width-350 p0">
                            <!-- ***** Content Start ***** -->
                            <div class="d-flex justify-content-between align-items-center p5">
                                <h6 class="mb0">Notifications</h6>
                                <span class="badge rounded-pill badge-soft text-bg-primary">4 New</span>
                            </div>
                            <hr class="opacity-20 m0">
                            <div class="p5">
                                <a href="#" class="d-flex justify-content-start text-decoration-none">
                                    <div class="img-fix width-40 height-40 rounded-circle me3">
                                        <img src="assets/media/avatars/1.jpg" alt="">
                                    </div>
                                    <div class="d-flex flex-column align-items-start">
                                        <strong class="text-heading me1">Congratulations Barry! 🥳</strong>
                                        <span class="mb1 text-body">You've been the top seller this month.</span>
                                        <span class="badge rounded-pill badge-soft text-bg-info">16 minutes ago</span>
                                    </div>
                                </a>
                                <hr class="opacity-20 border-dashed">
                                <a href="#" class="d-flex justify-content-start text-decoration-none">
                                    <div class="me3">
                                        <div
                                            class="rounded-circle bg-primary-subtle width-40 height-40 d-flex align-items-center justify-content-center">
                                            <i data-feather="dollar-sign" stroke-width="1.5" height="22"
                                                class="text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-start">
                                        <strong class="text-heading me1">Qoduby has been sold 🤑</strong>
                                        <span class="mb1 text-body">You earned $40 from this sale.</span>
                                        <span class="badge rounded-pill badge-soft text-bg-primary">22 minutes
                                            ago</span>
                                    </div>
                                </a>
                                <hr class="opacity-20 border-dashed">
                                <a href="#" class="d-flex justify-content-start text-decoration-none">
                                    <div class="me3">
                                        <div
                                            class="rounded-circle bg-success-subtle width-40 height-40 d-flex align-items-center justify-content-center">
                                            <i data-feather="bar-chart-2" stroke-width="1.5" height="22"
                                                class="text-success"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-start">
                                        <strong class="text-heading me1">Monthly Report 👨‍💻</strong>
                                        <span class="mb1 text-body">The monthly report was uploaded.</span>
                                        <span class="badge rounded-pill badge-soft text-bg-success">27 minutes
                                            ago</span>
                                    </div>
                                </a>
                                <hr class="opacity-20 border-dashed">
                                <a href="#" class="d-flex justify-content-start text-decoration-none">
                                    <div class="img-fix width-40 height-40 rounded-circle me3">
                                        <img class="rounded-circle" src="assets/media/avatars/8.jpg" alt="">
                                    </div>
                                    <div class="d-flex flex-column align-items-start">
                                        <strong class="text-heading me1">New message received 👋🏻</strong>
                                        <span class="mb1 text-body">You have 7 unread messages.</span>
                                        <span class="badge rounded-pill badge-soft text-bg-info">48 minutes ago</span>
                                    </div>
                                </a>
                                <hr class="opacity-20 border-dashed">
                                <a class="btn btn-primary btn-soft btn-sm d-block" href="#" role="button">Read
                                    All Notifications</a>
                            </div>
                            <!-- ***** Content End ***** -->
                        </div>
                        <!-- ***** Dropdown Content Start ***** -->
                    </div>
                    <!-- ***** Notification Dropdown End ***** -->

                    <!-- ***** Profile Dropdown Start ***** -->
                    <div class="dropdown">
                        <!-- ***** Profile Image Start ***** -->
                        <a href="javascript:;" class="dropdown-toggle header-dropdown outline-none"
                            data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="img-fix width-40 height-40 rounded">
                                <img src="assets/media/avatars/6.jpg" alt="">
                            </div>
                        </a>
                        <!-- ***** Profile Image End ***** -->

                        <!-- ***** Dropdown Content Start ***** -->
                        <div class="dropdown-menu width-250 p0">
                            <!-- ***** Content Info Start ***** -->
                            <div class="d-flex justify-content-start mb3 p5 pb0">
                                <div class="img-fix width-40 height-40 me3 rounded">
                                    <img src="assets/media/avatars/6.jpg" alt="">
                                </div>
                                <div class="d-flex flex-column text-start">
                                    <div class="d-flex flex-row align-items-center">
                                        <strong class="text-heading me1">Barry Tone</strong>
                                        <span class="badge badge-soft rounded-pill text-bg-success">Pro</span>
                                    </div>
                                    <small>@QodubyTheme</small>
                                </div>
                            </div>
                            <!-- ***** Content Info End ***** -->

                            <!-- ***** Balance Start ***** -->
                            <div class="p5 pt0">
                                <div class="bg-secondary-subtle p3 rounded d-flex justify-content-between">
                                    <span>Balance</span>
                                    <strong class="text-heading">$3.754,45</strong>
                                </div>
                            </div>
                            <hr class="opacity-20 mt0">
                            <!-- ***** Balance End ***** -->

                            <!-- ***** Menu Start ***** -->
                            <div class="p5 pt0 pb0">
                                <ul class="nav flex-column text-start p0">
                                    <li class="nav-item">
                                        <a class="nav-link text-heading hover-primary ps0"
                                            href="pages-account-user-overview.html">My Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-heading hover-primary ps0"
                                            href="apps-file-manager-files.html">My Files</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-heading hover-primary ps0"
                                            href="pages-account-user-project.html">My Tasks</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-heading hover-primary ps0"
                                            href="pages-account-user-statements.html">My Statements</a>
                                    </li>
                                </ul>
                            </div>
                            <hr class="opacity-20">
                            <!-- ***** Menu End ***** -->

                            <!-- ***** Settings Start ***** -->
                            <div class="p5 pt0">
                                <ul class="nav flex-column text-start p0">
                                    <li class="nav-item">
                                        <div class="dropdown">
                                            <a class="nav-link text-heading hover-primary ps0 pe0 d-flex justify-content-between align-items-center dropdown-toggle outline-none"
                                                data-bs-toggle="dropdown" aria-expanded="false" href="#">
                                                Language
                                                <span
                                                    class="badge badge-soft rounded-pill text-bg-primary">English</span>
                                            </a>
                                            <ul class="dropdown-menu width-200 flex-column p5 pt4 pb4 text-start">
                                                <li class="nav-item">
                                                    <a class="nav-link text-heading hover-primary ps0 pe0 d-flex justify-content-between align-items-center"
                                                        href="#">
                                                        English
                                                        <i data-feather="check" stroke-width="1.5" height="22"
                                                            class="text-success"></i>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-heading hover-primary ps0"
                                                        href="#">Spanish</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-heading hover-primary ps0"
                                                        href="#">French</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-heading hover-primary ps0"
                                                        href="#">Japanese</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="dropdown">
                                            <a class="nav-link text-heading hover-primary ps0 pe0 d-flex justify-content-between align-items-center dropdown-toggle outline-none"
                                                data-bs-toggle="dropdown" aria-expanded="false" href="#">
                                                Theme
                                                <span class="badge badge-soft rounded-pill text-bg-light"
                                                    id="current-theme">Light</span>
                                            </a>
                                            <ul class="dropdown-menu width-200 flex-column p5 pt4 pb4 text-start">
                                                <li class="nav-item">
                                                    <a class="nav-link text-heading hover-primary ps0 pe0 d-flex justify-content-between align-items-center theme-change-light"
                                                        href="#">
                                                        Light
                                                        <i data-feather="check" stroke-width="1.5" height="22"
                                                            class="text-success"></i>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-heading hover-primary ps0 pe0 d-flex justify-content-between align-items-center theme-change-dark"
                                                        href="#">Dark</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-heading hover-primary ps0"
                                            href="pages-account-user-settings.html">Account Settings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-heading hover-primary ps0"
                                            href="pages-authentication-sign-in.html">Sign Out</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- ***** Settings End ***** -->
                        </div>
                        <!-- ***** Dropdown Content Start ***** -->
                    </div>
                    <!-- ***** Profile Dropdown End ***** -->

                    <!-- ***** Header Menu Open Button Start ***** -->
                    <a class="header-menu-trigger ms3"><span>Menu</span></a>
                    <!-- ***** Header Menu Open Button End ***** -->
                </div>
            </header>
            <!-- ***** Header End ***** -->

            <!-- ***** Content Start ***** -->
            <div class="app-content p6 pb2 smp1">
                <div class="container p0">
                    <!-- Page Top Start -->
                    <div class="row mb6 align-items-center">
                        <div class="col-md-6 mobile-bottom-fix">
                            <h1 class="page-title mb2">Users</h1>
                            <nav class="breadcrumb-nav" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 text-start text-md-end">
                            <!-- Filter Dropdown Start-->
                            <div class="dropdown d-inline me4">
                                <button class="btn bg-white d-inline-flex align-items-center dropdown-toggle"
                                    data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i data-feather="filter" stroke-width="1.5" height="16"
                                        class="me2 text-body"></i>
                                    <span class="text-body">Filter</span>
                                </button>
                                <div class="dropdown-menu width-310 p0">
                                    <div class="border-bottom-dashed">
                                        <h6 class="mb0 p4 px-4">Filter Options</h6>
                                    </div>
                                    <div class="p5 px-4">
                                        <div class="row mb5">
                                            <div class="col-12">
                                                <label for="form-element-2" class="form-label">Payment
                                                    Status:</label>
                                                <select id="form-element-2" class="form-select js-choice">
                                                    <option value="">Select option</option>
                                                    <option value="1">Paid</option>
                                                    <option value="2">Payment Failed</option>
                                                    <option value="3">Awaiting Authorization</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb5">
                                            <div class="col-12">
                                                <label for="form-element-3" class="form-label">Order Status:</label>
                                                <select id="form-element-3" class="form-select js-choice">
                                                    <option value="">Select option</option>
                                                    <option value="1">Processing</option>
                                                    <option value="2">Shipped</option>
                                                    <option value="3">Delivered</option>
                                                    <option value="4">Cancelled</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button class="btn btn-sm d-block w-100 btn-secondary btn-soft"
                                                    role="button">Reset</button>
                                            </div>
                                            <div class="col-6">
                                                <button class="btn btn-sm d-block w-100 btn-primary"
                                                    role="button">Apply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Filter Dropdown End-->

                            <!-- Add Button Start-->
                            <a href="#" class="btn btn-primary">Add New Order</a>
                            <!-- Add Button End-->
                        </div>
                    </div>
                    <!-- Page Top End -->

                    <!-- Content Start -->
                    <div class="row mb5">
                        <div class="col-12">
                            <div class="card shadow-card">
                                <div class="border-bottom">
                                    <div class="p6">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 mobile-bottom-fix">
                                                <input class="form-control" type="text" placeholder="Search...">
                                            </div>
                                            <div class="col-md-9 text-end d-flex justify-content-end">
                                                <input class="form-control width-220 qd-datepicker me3" type="text"
                                                    placeholder="Pick Date Range">
                                                <div class="dropdown">
                                                    <button type="button"
                                                        class="bg-transparent p0 outline-none dropdown-toggle arrow-none border height-40 rounded ps3"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <span class="text-body">Status</span>
                                                        <i data-feather="chevron-down" stroke-width="2"
                                                            height="16" class="text-heading"></i>
                                                    </button>
                                                    <ul class="dropdown-menu text-start">
                                                        <li><a class="dropdown-item" href="#">Processing</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Shipped</a></li>
                                                        <li><a class="dropdown-item" href="#">Cancelled</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Delivered</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p6 pt3">
                                    <div class="table-responsive text-nowrap">
                                        <table class="table qd-table mb6 align-middle">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">CUSTOMER</th>
                                                    <th scope="col">DATE</th>
                                                    <th scope="col">PAYMENT STATUS</th>
                                                    <th scope="col">TOTAL</th>
                                                    <th scope="col">PAYMENT METHOD</th>
                                                    <th scope="col">ORDER STATUS</th>
                                                    <th scope="col" class="text-end">ACTIONS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <strong class="text-heading">#2748</strong>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">Justin Case</strong>
                                                        <a href="#"
                                                            class="text-decoration-none text-body hover-primary">justin@example.com</a>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">09 Apr, 2023</strong>
                                                        <small>11:38PM</small>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-success">Paid</span>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading">$126,45</strong>
                                                    </td>
                                                    <td>
                                                        <span>Mastercard</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-warning">Processing</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown text-end">
                                                            <button type="button"
                                                                class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                                data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="text-heading">Actions</span>
                                                                <i data-feather="chevron-down" stroke-width="2"
                                                                    height="16" class="text-heading"></i>
                                                            </button>
                                                            <ul class="dropdown-menu text-start">
                                                                <li><a class="dropdown-item" href="#">Edit</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="#">Details</a></li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                        href="#">
                                                                        Delete <i data-feather="info" stroke-width="2"
                                                                            height="12" class="text-body me1"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="left"
                                                                            data-bs-custom-class="qd-tooltip"
                                                                            data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="text-heading">#2747</strong>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">Elon Gated</strong>
                                                        <a href="#"
                                                            class="text-decoration-none text-body hover-primary">elon@example.com</a>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">09 Apr, 2023</strong>
                                                        <small>10:28PM</small>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-success">Paid</span>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading">$26,35</strong>
                                                    </td>
                                                    <td>
                                                        <span>Visa</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-info">Shipped</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown text-end">
                                                            <button type="button"
                                                                class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                                data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="text-heading">Actions</span>
                                                                <i data-feather="chevron-down" stroke-width="2"
                                                                    height="16" class="text-heading"></i>
                                                            </button>
                                                            <ul class="dropdown-menu text-start">
                                                                <li><a class="dropdown-item" href="#">Edit</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="#">Details</a></li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                        href="#">
                                                                        Delete <i data-feather="info" stroke-width="2"
                                                                            height="12" class="text-body me1"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="left"
                                                                            data-bs-custom-class="qd-tooltip"
                                                                            data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="text-heading">#2746</strong>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">Natalya
                                                            Undergrowth</strong>
                                                        <a href="#"
                                                            class="text-decoration-none text-body hover-primary">natalya@example.com</a>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">08 Apr, 2023</strong>
                                                        <small>08:12PM</small>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-success">Paid</span>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading">$42,12</strong>
                                                    </td>
                                                    <td>
                                                        <span>Paypal</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-info">Shipped</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown text-end">
                                                            <button type="button"
                                                                class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                                data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="text-heading">Actions</span>
                                                                <i data-feather="chevron-down" stroke-width="2"
                                                                    height="16" class="text-heading"></i>
                                                            </button>
                                                            <ul class="dropdown-menu text-start">
                                                                <li><a class="dropdown-item" href="#">Edit</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="#">Details</a></li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                        href="#">
                                                                        Delete <i data-feather="info" stroke-width="2"
                                                                            height="12" class="text-body me1"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="left"
                                                                            data-bs-custom-class="qd-tooltip"
                                                                            data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="text-heading">#2745</strong>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">Lurch
                                                            Schpellchek</strong>
                                                        <a href="#"
                                                            class="text-decoration-none text-body hover-primary">lurch@example.com</a>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">08 Apr, 2023</strong>
                                                        <small>09:38PM</small>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-danger">Payment
                                                            Failed</span>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading">$97,60</strong>
                                                    </td>
                                                    <td>
                                                        <span>Credit Card</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-info">Shipped</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown text-end">
                                                            <button type="button"
                                                                class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                                data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="text-heading">Actions</span>
                                                                <i data-feather="chevron-down" stroke-width="2"
                                                                    height="16" class="text-heading"></i>
                                                            </button>
                                                            <ul class="dropdown-menu text-start">
                                                                <li><a class="dropdown-item" href="#">Edit</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="#">Details</a></li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                        href="#">
                                                                        Delete <i data-feather="info" stroke-width="2"
                                                                            height="12" class="text-body me1"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="left"
                                                                            data-bs-custom-class="qd-tooltip"
                                                                            data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="text-heading">#2744</strong>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">Rodney
                                                            Artichoke</strong>
                                                        <a href="#"
                                                            class="text-decoration-none text-body hover-primary">rodney@example.com</a>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">08 Apr, 2023</strong>
                                                        <small>09:38AM</small>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-success">Paid</span>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading">$1.540,90</strong>
                                                    </td>
                                                    <td>
                                                        <span>Mastercard</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-warning">Processing</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown text-end">
                                                            <button type="button"
                                                                class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                                data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="text-heading">Actions</span>
                                                                <i data-feather="chevron-down" stroke-width="2"
                                                                    height="16" class="text-heading"></i>
                                                            </button>
                                                            <ul class="dropdown-menu text-start">
                                                                <li><a class="dropdown-item" href="#">Edit</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="#">Details</a></li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                        href="#">
                                                                        Delete <i data-feather="info" stroke-width="2"
                                                                            height="12" class="text-body me1"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="left"
                                                                            data-bs-custom-class="qd-tooltip"
                                                                            data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="text-heading">#2743</strong>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">Desmond
                                                            Eagle</strong>
                                                        <a href="#"
                                                            class="text-decoration-none text-body hover-primary">desmond@example.com</a>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">07 Apr, 2023</strong>
                                                        <small>12:44PM</small>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-success">Paid</span>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading">$16,20</strong>
                                                    </td>
                                                    <td>
                                                        <span>Visa</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-info">Shipped</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown text-end">
                                                            <button type="button"
                                                                class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                                data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="text-heading">Actions</span>
                                                                <i data-feather="chevron-down" stroke-width="2"
                                                                    height="16" class="text-heading"></i>
                                                            </button>
                                                            <ul class="dropdown-menu text-start">
                                                                <li><a class="dropdown-item" href="#">Edit</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="#">Details</a></li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                        href="#">
                                                                        Delete <i data-feather="info" stroke-width="2"
                                                                            height="12" class="text-body me1"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="left"
                                                                            data-bs-custom-class="qd-tooltip"
                                                                            data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="text-heading">#2742</strong>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">Indigo
                                                            Violet</strong>
                                                        <a href="#"
                                                            class="text-decoration-none text-body hover-primary">indigo@example.com</a>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">07 Apr, 2023</strong>
                                                        <small>07:17PM</small>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-danger">Payment
                                                            Failed</span>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading">$8,50</strong>
                                                    </td>
                                                    <td>
                                                        <span>Mastercard</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-info">Shipped</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown text-end">
                                                            <button type="button"
                                                                class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                                data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="text-heading">Actions</span>
                                                                <i data-feather="chevron-down" stroke-width="2"
                                                                    height="16" class="text-heading"></i>
                                                            </button>
                                                            <ul class="dropdown-menu text-start">
                                                                <li><a class="dropdown-item" href="#">Edit</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="#">Details</a></li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                        href="#">
                                                                        Delete <i data-feather="info" stroke-width="2"
                                                                            height="12" class="text-body me1"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="left"
                                                                            data-bs-custom-class="qd-tooltip"
                                                                            data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="text-heading">#2741</strong>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">Russell
                                                            Sprout</strong>
                                                        <a href="#"
                                                            class="text-decoration-none text-body hover-primary">russel@example.com</a>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">07 Apr, 2023</strong>
                                                        <small>06:25AM</small>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-success">Paid</span>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading">$65,60</strong>
                                                    </td>
                                                    <td>
                                                        <span>Paypal</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-danger">Cancelled</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown text-end">
                                                            <button type="button"
                                                                class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                                data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="text-heading">Actions</span>
                                                                <i data-feather="chevron-down" stroke-width="2"
                                                                    height="16" class="text-heading"></i>
                                                            </button>
                                                            <ul class="dropdown-menu text-start">
                                                                <li><a class="dropdown-item" href="#">Edit</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="#">Details</a></li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                        href="#">
                                                                        Delete <i data-feather="info" stroke-width="2"
                                                                            height="12" class="text-body me1"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="left"
                                                                            data-bs-custom-class="qd-tooltip"
                                                                            data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="text-heading">#2740</strong>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">Dominic L.
                                                            Ement</strong>
                                                        <a href="#"
                                                            class="text-decoration-none text-body hover-primary">dominic@example.com</a>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">06 Apr, 2023</strong>
                                                        <small>10:26PM</small>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-warning">Awaiting
                                                            Authorization</span>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading">$27,16</strong>
                                                    </td>
                                                    <td>
                                                        <span>Visa</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-info">Shipped</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown text-end">
                                                            <button type="button"
                                                                class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                                data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="text-heading">Actions</span>
                                                                <i data-feather="chevron-down" stroke-width="2"
                                                                    height="16" class="text-heading"></i>
                                                            </button>
                                                            <ul class="dropdown-menu text-start">
                                                                <li><a class="dropdown-item" href="#">Edit</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="#">Details</a></li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                        href="#">
                                                                        Delete <i data-feather="info"
                                                                            stroke-width="2" height="12"
                                                                            class="text-body me1"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="left"
                                                                            data-bs-custom-class="qd-tooltip"
                                                                            data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="text-heading">#2739</strong>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">Barry Tone</strong>
                                                        <a href="#"
                                                            class="text-decoration-none text-body hover-primary">barry@example.com</a>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">06 Apr, 2023</strong>
                                                        <small>08:16AM</small>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-success">Paid</span>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading">$48,16</strong>
                                                    </td>
                                                    <td>
                                                        <span>Credit Card</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-info">Shipped</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown text-end">
                                                            <button type="button"
                                                                class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                                data-bs-auto-close="outside"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <span class="text-heading">Actions</span>
                                                                <i data-feather="chevron-down" stroke-width="2"
                                                                    height="16" class="text-heading"></i>
                                                            </button>
                                                            <ul class="dropdown-menu text-start">
                                                                <li><a class="dropdown-item" href="#">Edit</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="#">Details</a></li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                        href="#">
                                                                        Delete <i data-feather="info"
                                                                            stroke-width="2" height="12"
                                                                            class="text-body me1"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="left"
                                                                            data-bs-custom-class="qd-tooltip"
                                                                            data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="text-heading">#2738</strong>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">Jason
                                                            Response</strong>
                                                        <a href="#"
                                                            class="text-decoration-none text-body hover-primary">jason@example.com</a>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">06 Apr, 2023</strong>
                                                        <small>07:22AM</small>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-success">Paid</span>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading">$22,27</strong>
                                                    </td>
                                                    <td>
                                                        <span>Mastercard</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-success">Delivered</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown text-end">
                                                            <button type="button"
                                                                class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                                data-bs-auto-close="outside"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <span class="text-heading">Actions</span>
                                                                <i data-feather="chevron-down" stroke-width="2"
                                                                    height="16" class="text-heading"></i>
                                                            </button>
                                                            <ul class="dropdown-menu text-start">
                                                                <li><a class="dropdown-item" href="#">Edit</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="#">Details</a></li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                        href="#">
                                                                        Delete <i data-feather="info"
                                                                            stroke-width="2" height="12"
                                                                            class="text-body me1"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="left"
                                                                            data-bs-custom-class="qd-tooltip"
                                                                            data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="text-heading">#2737</strong>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">Dylan
                                                            Meringue</strong>
                                                        <a href="#"
                                                            class="text-decoration-none text-body hover-primary">dylan@example.com</a>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">05 Apr, 2023</strong>
                                                        <small>11:30PM</small>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-danger">Payment
                                                            Failed</span>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading">$30,00</strong>
                                                    </td>
                                                    <td>
                                                        <span>Visa</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-success">Delivered</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown text-end">
                                                            <button type="button"
                                                                class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                                data-bs-auto-close="outside"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <span class="text-heading">Actions</span>
                                                                <i data-feather="chevron-down" stroke-width="2"
                                                                    height="16" class="text-heading"></i>
                                                            </button>
                                                            <ul class="dropdown-menu text-start">
                                                                <li><a class="dropdown-item" href="#">Edit</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="#">Details</a></li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                        href="#">
                                                                        Delete <i data-feather="info"
                                                                            stroke-width="2" height="12"
                                                                            class="text-body me1"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="left"
                                                                            data-bs-custom-class="qd-tooltip"
                                                                            data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="text-heading">#2736</strong>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">Desmond
                                                            Eagle</strong>
                                                        <a href="#"
                                                            class="text-decoration-none text-body hover-primary">desmond@example.com</a>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">05 Apr, 2023</strong>
                                                        <small>10:15PM</small>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-success">Paid</span>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading">$10,20</strong>
                                                    </td>
                                                    <td>
                                                        <span>Mastercard</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-info">Shipped</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown text-end">
                                                            <button type="button"
                                                                class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                                data-bs-auto-close="outside"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <span class="text-heading">Actions</span>
                                                                <i data-feather="chevron-down" stroke-width="2"
                                                                    height="16" class="text-heading"></i>
                                                            </button>
                                                            <ul class="dropdown-menu text-start">
                                                                <li><a class="dropdown-item" href="#">Edit</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="#">Details</a></li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                        href="#">
                                                                        Delete <i data-feather="info"
                                                                            stroke-width="2" height="12"
                                                                            class="text-body me1"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="left"
                                                                            data-bs-custom-class="qd-tooltip"
                                                                            data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong class="text-heading">#2735</strong>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">Parsley
                                                            Montana</strong>
                                                        <a href="#"
                                                            class="text-decoration-none text-body hover-primary">parsley@example.com</a>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading d-block mb1">05 Apr, 2023</strong>
                                                        <small>09:38AM</small>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-success">Paid</span>
                                                    </td>
                                                    <td>
                                                        <strong class="text-heading">$90,30</strong>
                                                    </td>
                                                    <td>
                                                        <span>Paypal</span>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge rounded-pill badge-soft text-bg-success">Delivered</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown text-end">
                                                            <button type="button"
                                                                class="outline-none dropdown-toggle arrow-none border-0 height-40 rounded ps3 bg-body-secondary opacity-75"
                                                                data-bs-auto-close="outside"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <span class="text-heading">Actions</span>
                                                                <i data-feather="chevron-down" stroke-width="2"
                                                                    height="16" class="text-heading"></i>
                                                            </button>
                                                            <ul class="dropdown-menu text-start">
                                                                <li><a class="dropdown-item" href="#">Edit</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="#">Details</a></li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                        href="#">
                                                                        Delete <i data-feather="info"
                                                                            stroke-width="2" height="12"
                                                                            class="text-body me1"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="left"
                                                                            data-bs-custom-class="qd-tooltip"
                                                                            data-bs-title="If you delete it, this action cannot be undone."></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 mobile-bottom-fix text-center text-lg-start">
                                            <span class="me1">Showing:</span>
                                            <span class="text-heading">10 of 40</span>
                                        </div>
                                        <div class="col-lg-6">
                                            <nav aria-label="Page navigation example">
                                                <ul
                                                    class="pagination justify-content-center justify-content-lg-end align-items-center">
                                                    <li class="page-item">
                                                        <a class="page-link">
                                                            <i class="arrow" data-feather="chevron-left"
                                                                width="14"></i>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="#">1</a></li>
                                                    <li class="page-item active"><a class="page-link"
                                                            href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="#">4</a></li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="#">5</a></li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="#">6</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">
                                                            <i class="arrow" data-feather="chevron-right"
                                                                width="14"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content End -->
                </div>
            </div>
            <!-- ***** Content End ***** -->

            <!-- ***** Footer Start ***** -->
            @include('layouts.admin.footer')
