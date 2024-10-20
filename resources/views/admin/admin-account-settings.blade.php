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
                                        <i data-feather="folder" stroke-width="2" height="36"
                                            class="text-info"></i>
                                    </div>
                                    <span>Files</span>
                                </a>
                                <a href="#"
                                    class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-body">
                                    <div
                                        class="rounded-circle width-50 height-50 bg-success-subtle d-flex align-items-center justify-content-center mb2">
                                        <i data-feather="mail" stroke-width="2" height="36"
                                            class="text-success"></i>
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
                                    <a href="#"
                                        class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="message-circle" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Chat</span>
                                        <span class="text-heading">"october invoice"</span>
                                    </a>
                                    <a href="#"
                                        class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="mail" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Inbox</span>
                                        <span class="text-heading">"project files"</span>
                                    </a>
                                    <a href="#"
                                        class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="phone" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Contacts</span>
                                        <span class="text-heading">"justin case"</span>
                                    </a>
                                    <a href="#"
                                        class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="database" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Projects</span>
                                        <span class="text-heading">"mobile app sketch file"</span>
                                    </a>
                                    <a href="#"
                                        class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="check-circle" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Tasks</span>
                                        <span class="text-heading">"seo report"</span>
                                    </a>
                                    <a href="#"
                                        class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="columns" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Kanban Board</span>
                                        <span class="text-heading">"design assets"</span>
                                    </a>
                                    <a href="#"
                                        class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="check" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">ToDo</span>
                                        <span class="text-heading">"shopping list"</span>
                                    </a>
                                    <a href="#"
                                        class="d-flex align-items-center pt2 pb2 text-decoration-none">
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
                                                        <i data-feather="trash-2" stroke-width="1.5"
                                                            height="16" class="text-body me1"></i>
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
                                        <i data-feather="x" stroke-width="2" height="22"
                                            class="text-body"></i>
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
                            <i data-feather="hard-drive" stroke-width="2" height="22"
                                class="text-secondary"></i>
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
                                                <img class="mb-2" src="assets/media/logos/slack.svg"
                                                    height="30" alt="">
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
                                                <img class="mb-2" src="assets/media/logos/figma.svg"
                                                    height="30" alt="">
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
                                        <img class="rounded-circle" src="assets/media/avatars/8.jpg"
                                            alt="">
                                    </div>
                                    <div class="d-flex flex-column align-items-start">
                                        <strong class="text-heading me1">New message received 👋🏻</strong>
                                        <span class="mb1 text-body">You have 7 unread messages.</span>
                                        <span class="badge rounded-pill badge-soft text-bg-info">48 minutes ago</span>
                                    </div>
                                </a>
                                <hr class="opacity-20 border-dashed">
                                <a class="btn btn-primary btn-soft btn-sm d-block" href="#"
                                    role="button">Read All Notifications</a>
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
                        <div class="col-12">
                            <h1 class="page-title mb2">Settings</h1>
                            <nav class="breadcrumb-nav" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Account & User</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Settings</li>
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
                                                                data-bs-auto-close="outside"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i data-feather="more-horizontal" stroke-width="2"
                                                                    width="20" class="text-body ms1"></i>
                                                            </button>
                                                            <ul class="dropdown-menu text-start">
                                                                <li><a class="dropdown-item"
                                                                        href="#">Settings</a></li>
                                                                <li><a class="dropdown-item" href="#">Create
                                                                        Invoice</a></li>
                                                                <li><a class="dropdown-item" href="#">Block
                                                                        User</a></li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                        href="#">
                                                                        Message <i data-feather="info"
                                                                            stroke-width="2" height="12"
                                                                            class="text-body me1"
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
                                                            <i data-feather="map-pin" stroke-width="2"
                                                                width="14" class="text-heading me1"></i>
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
                                                    <div
                                                        class="d-flex align-items-center justify-content-between mb2">
                                                        <span>Complete Your Profile</span>
                                                        <span>60%</span>
                                                    </div>
                                                    <div class="progress w-100 height-5" role="progressbar"
                                                        aria-label="Basic example" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar bg-success" style="width: 60%">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="horizontal-menu ss-container">
                                    <li><a href="pages-account-user-overview.html">Overview</a></li>
                                    <li class="active"><a href="pages-account-user-settings.html">Settings</a></li>
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
                        <!-- General Form Start -->
                        <div class="col-12">
                            <div class="card shadow-card p6 mb6">
                                <h6 class="mb4">General</h6>
                                <form method="post" action="#" class="needs-validation" novalidate>
                                    <div class="row align-items-center mb5">
                                        <div class="col-4">
                                            <label for="settings-form-1" class="form-label m0">
                                                <span>Name, Surname</span>
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-4">
                                            <input id="settings-form-1" class="form-control" type="text"
                                                autocomplete="off" value="Barry" required>
                                            <div class="invalid-feedback">You need to fill this field.</div>
                                        </div>
                                        <div class="col-4">
                                            <input class="form-control" type="text" autocomplete="off"
                                                value="Tone" required>
                                            <div class="invalid-feedback">You need to fill this field.</div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb5">
                                        <div class="col-4">
                                            <label for="settings-form-2" class="form-label m0">
                                                <span>Mobile</span>
                                                <span class="text-danger">*</span>
                                                <i data-feather="info" stroke-width="2" width="12"
                                                    class="text-body" data-bs-toggle="tooltip"
                                                    data-bs-placement="right" data-bs-custom-class="qd-tooltip"
                                                    data-bs-title="Type a phone number."></i>
                                            </label>
                                        </div>
                                        <div class="col-8">
                                            <input id="settings-form-2" class="form-control" type="text"
                                                autocomplete="off" value="+1-202-555-0116" required>
                                            <div class="invalid-feedback">You need to fill this field.</div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb5">
                                        <div class="col-4">
                                            <label for="settings-form-3" class="form-label m0">
                                                <span>Company</span>
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-8">
                                            <input id="settings-form-3" class="form-control" type="text"
                                                autocomplete="off" value="Tempload Themes" required>
                                            <div class="invalid-feedback">You need to fill this field.</div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb5">
                                        <div class="col-4">
                                            <label for="settings-form-4" class="form-label m0">
                                                <span>Web Site</span>
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-8">
                                            <input id="settings-form-4" class="form-control" type="text"
                                                autocomplete="off" value="examplesite.com" required>
                                            <div class="invalid-feedback">You need to fill this field.</div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb5">
                                        <div class="col-4">
                                            <label for="settings-form-5" class="form-label m0">
                                                <span>Country</span>
                                                <span class="text-danger">*</span>
                                                <i data-feather="info" stroke-width="2" height="12"
                                                    class="text-body" data-bs-toggle="tooltip"
                                                    data-bs-placement="right" data-bs-custom-class="qd-tooltip"
                                                    data-bs-title="Choose a country from the list."></i>
                                            </label>
                                        </div>
                                        <div class="col-8">
                                            <select id="settings-form-5" class="form-select js-choice" required>
                                                <option selected>Select Country</option>
                                                <option value="['Nigeria','NG']">Nigeria</option>
                                                <option value="['Afghanistan','AF']">Afghanistan</option>
                                                <option value="['Åland Islands','AX']">Åland Islands</option>
                                                <option value="['Albania','AL']">Albania</option>
                                                <option value="['Algeria','DZ']">Algeria</option>
                                                <option value="['American Samoa','AS']">American Samoa</option>
                                                <option value="['Andorra','AD']">Andorra</option>
                                                <option value="['Angola','AO']">Angola</option>
                                                <option value="['Anguilla','AI']">Anguilla</option>
                                                <option value="['Antarctica','AQ']">Antarctica</option>
                                                <option value="['Antigua and Barbuda','AG']">Antigua and Barbuda
                                                </option>
                                                <option value="['Argentina','AR']">Argentina</option>
                                                <option value="['Armenia','AM']">Armenia</option>
                                                <option value="['Aruba','AW']">Aruba</option>
                                                <option value="['Australia','AU']">Australia</option>
                                                <option value="['Austria','AT']">Austria</option>
                                                <option value="['Azerbaijan','AZ']">Azerbaijan</option>
                                                <option value="['Bahamas','BS']">Bahamas</option>
                                                <option value="['Bahrain','BH']">Bahrain</option>
                                                <option value="['Bangladesh','BD']">Bangladesh</option>
                                                <option value="['Barbados','BB']">Barbados</option>
                                                <option value="['Belarus','BY']">Belarus</option>
                                                <option value="['Belgium','BE']">Belgium</option>
                                                <option value="['Belize','BZ']">Belize</option>
                                                <option value="['Benin','BJ']">Benin</option>
                                                <option value="['Bermuda','BM']">Bermuda</option>
                                                <option value="['Bhutan','BT']">Bhutan</option>
                                                <option value="['Bolivia, Plurinational State of','BO']">"Bolivia,
                                                    Plurinational State of"</option>
                                                <option value="['Bonaire, Sint Eustatius and Saba','BQ']">"Bonaire,
                                                    Sint Eustatius and Saba"</option>
                                                <option value="['Bosnia and Herzegovina','BA']">Bosnia and Herzegovina
                                                </option>
                                                <option value="['Botswana','BW']">Botswana</option>
                                                <option value="['Bouvet Island','BV']">Bouvet Island</option>
                                                <option value="['Brazil','BR']">Brazil</option>
                                                <option value="['British Indian Ocean Territory','IO']">British Indian
                                                    Ocean Territory</option>
                                                <option value="['Brunei Darussalam','BN']">Brunei Darussalam</option>
                                                <option value="['Bulgaria','BG']">Bulgaria</option>
                                                <option value="['Burkina Faso','BF']">Burkina Faso</option>
                                                <option value="['Burundi','BI']">Burundi</option>
                                                <option value="['Cambodia','KH']">Cambodia</option>
                                                <option value="['Cameroon','CM']">Cameroon</option>
                                                <option value="['Canada','CA']">Canada</option>
                                                <option value="['Cape Verde','CV']">Cape Verde</option>
                                                <option value="['Cayman Islands','KY']">Cayman Islands</option>
                                                <option value="['Central African Republic','CF']">Central African
                                                    Republic</option>
                                                <option value="['Chad','TD']">Chad</option>
                                                <option value="['Chile','CL']">Chile</option>
                                                <option value="['China','CN']">China</option>
                                                <option value="['Christmas Island','CX']">Christmas Island</option>
                                                <option value="['Cocos (Keeling) Islands','CC']">Cocos (Keeling)
                                                    Islands</option>
                                                <option value="['Colombia','CO']">Colombia</option>
                                                <option value="['Comoros','KM']">Comoros</option>
                                                <option value="['Congo','CG']">Congo</option>
                                                <option value="['Congo, the Democratic Republic of the','CD']">"Congo,
                                                    the Democratic Republic of the"</option>
                                                <option value="['Cook Islands','CK']">Cook Islands</option>
                                                <option value="['Costa Rica','CR']">Costa Rica</option>
                                                <option value="['CÃƒÂ´te d'Ivoire','CI']">CÃƒÂ´te d'Ivoire</option>
                                                <option value="['Croatia','HR']">Croatia</option>
                                                <option value="['Cuba','CU']">Cuba</option>
                                                <option value="['CuraÃƒÂ§ao','CW']">CuraÃƒÂ§ao</option>
                                                <option value="['Cyprus','CY']">Cyprus</option>
                                                <option value="['Czech Republic','CZ']">Czech Republic</option>
                                                <option value="['Denmark','DK']">Denmark</option>
                                                <option value="['Djibouti','DJ']">Djibouti</option>
                                                <option value="['Dominica','DM']">Dominica</option>
                                                <option value="['Dominican Republic','DO']">Dominican Republic
                                                </option>
                                                <option value="['Ecuador','EC']">Ecuador</option>
                                                <option value="['Egypt','EG']">Egypt</option>
                                                <option value="['El Salvador','SV']">El Salvador</option>
                                                <option value="['Equatorial Guinea','GQ']">Equatorial Guinea</option>
                                                <option value="['Eritrea','ER']">Eritrea</option>
                                                <option value="['Estonia','EE']">Estonia</option>
                                                <option value="['Ethiopia','ET']">Ethiopia</option>
                                                <option value="['Falkland Islands (Malvinas)','FK']">Falkland Islands
                                                    (Malvinas)</option>
                                                <option value="['Faroe Islands','FO']">Faroe Islands</option>
                                                <option value="['Fiji','FJ']">Fiji</option>
                                                <option value="['Finland','FI']">Finland</option>
                                                <option value="['France','FR']">France</option>
                                                <option value="['French Guiana','GF']">French Guiana</option>
                                                <option value="['French Polynesia','PF']">French Polynesia</option>
                                                <option value="['French Southern Territories','TF']">French Southern
                                                    Territories</option>
                                                <option value="['Gabon','GA']">Gabon</option>
                                                <option value="['Gambia','GM']">Gambia</option>
                                                <option value="['Georgia','GE']">Georgia</option>
                                                <option value="['Germany','DE']">Germany</option>
                                                <option value="['Ghana','GH']">Ghana</option>
                                                <option value="['Gibraltar','GI']">Gibraltar</option>
                                                <option value="['Greece','GR']">Greece</option>
                                                <option value="['Greenland','GL']">Greenland</option>
                                                <option value="['Grenada','GD']">Grenada</option>
                                                <option value="['Guadeloupe','GP']">Guadeloupe</option>
                                                <option value="['Guam','GU']">Guam</option>
                                                <option value="['Guatemala','GT']">Guatemala</option>
                                                <option value="['Guernsey','GG']">Guernsey</option>
                                                <option value="['Guinea','GN']">Guinea</option>
                                                <option value="['Guinea-Bissau','GW']">Guinea-Bissau</option>
                                                <option value="['Guyana','GY']">Guyana</option>
                                                <option value="['Haiti','HT']">Haiti</option>
                                                <option value="['Heard Island and McDonald Islands','HM']">Heard
                                                    Island and McDonald Islands</option>
                                                <option value="['Holy See (Vatican City State)','VA']">Holy See
                                                    (Vatican City State)</option>
                                                <option value="['Honduras','HN']">Honduras</option>
                                                <option value="['Hong Kong','HK']">Hong Kong</option>
                                                <option value="['Hungary','HU']">Hungary</option>
                                                <option value="['Iceland','IS']">Iceland</option>
                                                <option value="['India','IN']">India</option>
                                                <option value="['Indonesia','ID']">Indonesia</option>
                                                <option value="['Iran, Islamic Republic of','IR']">"Iran, Islamic
                                                    Republic of"</option>
                                                <option value="['Iraq','IQ']">Iraq</option>
                                                <option value="['Ireland','IE']">Ireland</option>
                                                <option value="['Isle of Man','IM']">Isle of Man</option>
                                                <option value="['Israel','IL']">Israel</option>
                                                <option value="['Italy','IT']">Italy</option>
                                                <option value="['Jamaica','JM']">Jamaica</option>
                                                <option value="['Japan','JP']">Japan</option>
                                                <option value="['Jersey','JE']">Jersey</option>
                                                <option value="['Jordan','JO']">Jordan</option>
                                                <option value="['Kazakhstan','KZ']">Kazakhstan</option>
                                                <option value="['Kenya','KE']">Kenya</option>
                                                <option value="['Kiribati','KI']">Kiribati</option>
                                                <option value="['Korea, Democratic People's Republic of','KP']">
                                                    "Korea, Democratic People's Republic of"</option>
                                                <option value="['Korea, Republic of','KR']">"Korea, Republic of"
                                                </option>
                                                <option value="['Kuwait','KW']">Kuwait</option>
                                                <option value="[Kyrgyzstan','KG']">yrgyzstan</option>
                                                <option value="['Lao People`s Democratic Republic','LA']">Lao People's
                                                    Democratic Republic</option>
                                                <option value="['Latvia','LV']">Latvia</option>
                                                <option value="['Lebanon','LB']">Lebanon</option>
                                                <option value="['Lesotho','LS']">Lesotho</option>
                                                <option value="['Liberia','LR']">Liberia</option>
                                                <option value="['Libya','LY']">Libya</option>
                                                <option value="['Liechtenstein','LI']">Liechtenstein</option>
                                                <option value="['Lithuania','LT']">Lithuania</option>
                                                <option value="['Luxembourg','LU']">Luxembourg</option>
                                                <option value="['Macao','MO']">Macao</option>
                                                <option value="['Macedonia, the Former Yugoslav Republic of','MK']">
                                                    "Macedonia, the Former Yugoslav Republic of"</option>
                                                <option value="['Madagascar','MG']">Madagascar</option>
                                                <option value="['Malawi','MW']">Malawi</option>
                                                <option value="['Malaysia','MY']">Malaysia</option>
                                                <option value="['Maldives','MV']">Maldives</option>
                                                <option value="['Mali','ML']">Mali</option>
                                                <option value="['Malta','MT']">Malta</option>
                                                <option value="['Marshall Islands','MH']">Marshall Islands</option>
                                                <option value="['Martinique','MQ']">Martinique</option>
                                                <option value="['Mauritania','MR']">Mauritania</option>
                                                <option value="['Mauritius','MU']">Mauritius</option>
                                                <option value="['Mayotte','YT']">Mayotte</option>
                                                <option value="['Mexico','MX']">Mexico</option>
                                                <option value="['Micronesia, Federated States of','FM']">"Micronesia,
                                                    Federated States of</option>
                                                <option value="['Moldova, Republic of','MD']">"Moldova, Republic of"
                                                </option>
                                                <option value="['Monaco','MC']">Monaco</option>
                                                <option value="['Mongolia','MN']">Mongolia</option>
                                                <option value="['Montenegro','ME']">Montenegro</option>
                                                <option value="['Montserrat','MS']">Montserrat</option>
                                                <option value="['Morocco','MA']">Morocco</option>
                                                <option value="['Mozambique','MZ']">Mozambique</option>
                                                <option value="['Myanmar','MM']">Myanmar</option>
                                                <option value="['Namibia','NA']">Namibia</option>
                                                <option value="['Nauru','NR']">Nauru</option>
                                                <option value="['Nepal','NP']">Nepal</option>
                                                <option value="['Netherlands','NL']">Netherlands</option>
                                                <option value="['New Caledonia','NC']">New Caledonia</option>
                                                <option value="['New Zealand','NZ']">New Zealand</option>
                                                <option value="['Nicaragua','NI']">Nicaragua</option>
                                                <option value="['Niger','NE']">Niger</option>
                                                <option value="['Niue','NU']">Niue</option>
                                                <option value="['Norfolk Island','NF']">Norfolk Island</option>
                                                <option value="['Northern Mariana Islands','MP']">Northern Mariana
                                                    Islands</option>
                                                <option value="['Norway','NO']">Norway</option>
                                                <option value="['Oman','OM']">Oman</option>
                                                <option value="['Pakistan','PK']">Pakistan</option>
                                                <option value="['Palau','PW']">Palau</option>
                                                <option value="['Palestine, State of','PS']">"Palestine, State of"
                                                </option>
                                                <option value="['Panama','PA']">Panama</option>
                                                <option value="['Papua New Guinea','PG']">Papua New Guinea</option>
                                                <option value="['Paraguay','PY']">Paraguay</option>
                                                <option value="['Peru','PE']">Peru</option>
                                                <option value="['Philippines','PH']">Philippines</option>
                                                <option value="['Pitcairn','PN']">Pitcairn</option>
                                                <option value="['Poland','PL']">Poland</option>
                                                <option value="['Portugal','PT']">Portugal</option>
                                                <option value="['Puerto Rico','PR']">Puerto Rico</option>
                                                <option value="['Qatar','QA']">Qatar</option>
                                                <option value="['RÃƒÂ©union','RE']">RÃƒÂ©union</option>
                                                <option value="['Romania','RO']">Romania</option>
                                                <option value="['Russian Federation','RU']">Russian Federation
                                                </option>
                                                <option value="['Rwanda','RW']">Rwanda</option>
                                                <option value="['Saint BarthÃƒÂ©lemy','BL']">Saint BarthÃƒÂ©lemy
                                                </option>
                                                <option
                                                    value="['Saint Helena','Ascension and Tristan da Cunha','SH']">
                                                    "Saint Helena, Ascension and Tristan da Cunha"</option>
                                                <option value="['Saint Kitts and Nevis','KN']">Saint Kitts and Nevis
                                                </option>
                                                <option value="['Saint Lucia','LC']">Saint Lucia</option>
                                                <option value="['Saint Martin (French part)','MF']">Saint Martin
                                                    (French part)</option>
                                                <option value="['Saint Pierre and Miquelon','PM']">Saint Pierre and
                                                    Miquelon</option>
                                                <option value="['Saint Vincent and the Grenadines','VC']">Saint
                                                    Vincent and the Grenadines</option>
                                                <option value="['Samoa','WS']">Samoa</option>
                                                <option value="['San Marino','SM']">San Marino</option>
                                                <option value="['Sao Tome and Principe','ST']">Sao Tome and Principe
                                                </option>
                                                <option value="['Saudi Arabia','SA']">Saudi Arabia</option>
                                                <option value="['Senegal','SN']">Senegal</option>
                                                <option value="['Serbia','RS']">Serbia</option>
                                                <option value="['Seychelles','SC']">Seychelles</option>
                                                <option value="['Sierra Leone','SL']">Sierra Leone</option>
                                                <option value="['Singapore','SG']">Singapore</option>
                                                <option value="['Sint Maarten (Dutch part)','SX']">Sint Maarten (Dutch
                                                    part)</option>
                                                <option value="['Slovakia','SK']">Slovakia</option>
                                                <option value="['Slovenia','SI']">Slovenia</option>
                                                <option value="['Solomon Islands','SB']">Solomon Islands</option>
                                                <option value="['Somalia','SO']">Somalia</option>
                                                <option value="['South Africa','ZA']">South Africa</option>
                                                <option value="['South Georgia and the South Sandwich Islands','GS']">
                                                    South Georgia and the South Sandwich Islands</option>
                                                <option value="['South Sudan','SS']">South Sudan</option>
                                                <option value="['Spain','ES']">Spain</option>
                                                <option value="['Sri Lanka','LK']">Sri Lanka</option>
                                                <option value="['Sudan','SD']">Sudan</option>
                                                <option value="['Suriname','SR']">Suriname</option>
                                                <option value="['Svalbard and Jan Mayen','SJ']">Svalbard and Jan Mayen
                                                </option>
                                                <option value="['Swaziland','SZ']">Swaziland</option>
                                                <option value="['Sweden','SE']">Sweden</option>
                                                <option value="['Switzerland','CH']">Switzerland</option>
                                                <option value="['Syrian Arab Republic','SY']">Syrian Arab Republic
                                                </option>
                                                <option value="['Taiwan, Province of China','TW']">"Taiwan, Province
                                                    of China"</option>
                                                <option value="['Tajikistan','TJ']">Tajikistan</option>
                                                <option value="['Tanzania, United Republic of','TZ']">"Tanzania,
                                                    United Republic of"</option>
                                                <option value="['Thailand','TH']">Thailand</option>
                                                <option value="['Timor-Leste','TL']">Timor-Leste</option>
                                                <option value="['Togo','TG']">Togo</option>
                                                <option value="['Tokelau','TK']">Tokelau</option>
                                                <option value="['Tonga','TO']">Tonga</option>
                                                <option value="['Trinidad and Tobago','TT']">Trinidad and Tobago
                                                </option>
                                                <option value="['Tunisia','TN']">Tunisia</option>
                                                <option value="['Turkey','TR']">Turkey</option>
                                                <option value="['Turkmenistan','TM']">Turkmenistan</option>
                                                <option value="['Turks and Caicos Islands','TC']">Turks and Caicos
                                                    Islands</option>
                                                <option value="['Tuvalu','TV']">Tuvalu</option>
                                                <option value="['Uganda','UG']">Uganda</option>
                                                <option value="['Ukraine','UA']">Ukraine</option>
                                                <option value="['United Arab Emirates','AE']">United Arab Emirates
                                                </option>
                                                <option value="['United Kingdom','GB']">United Kingdom</option>
                                                <option value="['United States','US']" selected>United States</option>
                                                <option value="['United States Minor Outlying Islands','UM']">United
                                                    States Minor Outlying Islands</option>
                                                <option value="['Uruguay','UY']">Uruguay</option>
                                                <option value="['Uzbekistan','UZ']">Uzbekistan</option>
                                                <option value="['Vanuatu','VU']">Vanuatu</option>
                                                <option value="['Venezuela, Bolivarian Republic of','VE']">"Venezuela,
                                                    Bolivarian Republic of"</option>
                                                <option value="['Viet Nam','VN']">Viet Nam</option>
                                                <option value="['Virgin Islands, British','VG']">"Virgin Islands,
                                                    British"</option>
                                                <option value="['Virgin Islands, U.S.','VI']">"Virgin Islands, U.S."
                                                </option>
                                                <option value="['Wallis and Futuna','WF']">Wallis and Futuna</option>
                                                <option value="['Western Sahara','EH']">Western Sahara</option>
                                                <option value="['Yemen','YE']">Yemen</option>
                                                <option value="['Zambia','ZM']">Zambia</option>
                                                <option value="['Zimbabwe','ZW']">Zimbabwe</option>
                                            </select>
                                            <div class="invalid-feedback">Please select a country.</div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb5">
                                        <div class="col-4">
                                            <label for="settings-form-6" class="form-label m0">
                                                <span>Language</span>
                                                <span class="text-danger">*</span>
                                            </label>
                                        </div>
                                        <div class="col-8">
                                            <select id="settings-form-6" class="form-select js-choice" required>
                                                <option value="">Select Language</option>
                                                <option value="1" selected>English</option>
                                                <option value="2">Spanish</option>
                                                <option value="3">French</option>
                                                <option value="4">Hindi</option>
                                                <option value="5">Portuguese</option>
                                                <option value="6">German</option>
                                                <option value="7">Japanese</option>
                                                <option value="8">Swahili</option>
                                                <option value="9">Italian</option>
                                                <option value="10">Turkish</option>
                                            </select>
                                            <div class="invalid-feedback">Please select a language.</div>
                                        </div>
                                    </div>
                                    <div class="row align-items-start mb5">
                                        <div class="col-4">
                                            <label for="settings-form-7" class="form-label m0">
                                                <span>Communication</span>
                                            </label>
                                        </div>
                                        <div class="col-8">
                                            <div class="row">
                                                <div class="col-xxl-2 col-lg-3 mobile-bottom-fix">
                                                    <div class="d-flex align-items-center">
                                                        <div class="checkbox checkbox-primary">
                                                            <input type="checkbox" name="settings-check1"
                                                                id="settings-check1" checked>
                                                            <label for="settings-check1">Email</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-2 col-lg-3 mobile-bottom-fix">
                                                    <div class="d-flex align-items-center">
                                                        <div class="checkbox checkbox-primary">
                                                            <input type="checkbox" name="settings-check2"
                                                                id="settings-check2">
                                                            <label for="settings-check2">Phone</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-2 col-lg-3 mobile-bottom-fix">
                                                    <div class="d-flex align-items-center">
                                                        <div class="checkbox checkbox-primary">
                                                            <input type="checkbox" name="settings-check3"
                                                                id="settings-check3">
                                                            <label for="settings-check3">SMS</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="text-end">
                                                <button type="button"
                                                    class="btn btn-secondary btn-soft me2">Discard</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- General Form End -->

                        <!-- Security Start -->
                        <div class="col-12">
                            <div class="card shadow-card p6 mb6">
                                <h6 class="mb3">Security</h6>
                                <div class="table-responsive text-nowrap">
                                    <table class="table qd-table align-middle mb0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex flex-column align-items-start">
                                                        <strong class="text-heading mb1">Email Address</strong>
                                                        <a href="#"
                                                            class="text-body text-decoration-none hover-primary">barry@domain.com</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="d-flex flex-row align-items-center justify-content-start">
                                                        <i data-feather="check-circle" stroke-width="2"
                                                            height="18" class="text-success me1"></i>
                                                        <strong class="text-heading mb1">Verified</strong>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-secondary btn-soft">Change
                                                        Email</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex flex-column align-items-start">
                                                        <strong class="text-heading mb1">Password</strong>
                                                        <span>*********</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="d-flex flex-row align-items-center justify-content-start">
                                                        <i data-feather="check-circle" stroke-width="2"
                                                            height="18" class="text-success me1"></i>
                                                        <strong class="text-heading mb1">Secure</strong>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <button type="button" class="btn btn-secondary btn-soft">Reset
                                                        Password</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex flex-column align-items-start">
                                                        <strong class="text-heading mb1">Google Authenticator
                                                            (Recommended)</strong>
                                                        <span>Protect your account and transactions.</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="d-flex flex-row align-items-center justify-content-start">
                                                        <i data-feather="check-circle" stroke-width="2"
                                                            height="18" class="text-success me1"></i>
                                                        <strong class="text-heading mb1">On</strong>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <button type="button"
                                                        class="btn btn-secondary btn-soft me2">Change</button>
                                                    <button type="button"
                                                        class="btn btn-secondary btn-soft">Remove</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex flex-column align-items-start">
                                                        <strong class="text-heading mb1">Phone Number
                                                            Verification</strong>
                                                        <span>+1-202-555-0116</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="d-flex flex-row align-items-center justify-content-start">
                                                        <i data-feather="x-circle" stroke-width="2" height="18"
                                                            class="text-danger me1"></i>
                                                        <strong class="text-heading mb1">Not linked</strong>
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <button type="button"
                                                        class="btn btn-secondary btn-soft">Verify</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Security End -->

                        <!-- Notifications Start -->
                        <div class="col-12">
                            <div class="card shadow-card p6 mb6">
                                <h6 class="mb3">Notifications</h6>
                                <div class="table-responsive text-nowrap">
                                    <table class="table qd-table align-middle mb0">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="w-70">TYPE</th>
                                                <th scope="col" class="w-10 text-center">EMAIL</th>
                                                <th scope="col" class="w-10 text-center">BROWSER</th>
                                                <th scope="col" class="w-10 text-center">APP</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex flex-row align-items-start">
                                                        <strong class="text-heading me1">Billing
                                                            Notifications</strong>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Adjust settings for billing notifications."></i>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="checkbox checkbox-primary">
                                                        <input type="checkbox" name="notification-check1"
                                                            id="notification-check1" checked>
                                                        <label for="notification-check1"></label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="checkbox checkbox-primary">
                                                        <input type="checkbox" name="notification-check2"
                                                            id="notification-check2" checked>
                                                        <label for="notification-check2"></label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="checkbox checkbox-primary">
                                                        <input type="checkbox" name="notification-check3"
                                                            id="notification-check3" checked>
                                                        <label for="notification-check3"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex flex-row align-items-start">
                                                        <strong class="text-heading me1">Newsletter</strong>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Adjust settings for newsletter notifications."></i>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="checkbox checkbox-primary">
                                                        <input type="checkbox" name="notification-check4"
                                                            id="notification-check4" checked>
                                                        <label for="notification-check4"></label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="checkbox checkbox-primary">
                                                        <input type="checkbox" name="notification-check5"
                                                            id="notification-check5">
                                                        <label for="notification-check5"></label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="checkbox checkbox-primary">
                                                        <input type="checkbox" name="notification-check6"
                                                            id="notification-check6">
                                                        <label for="notification-check6"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex flex-row align-items-start">
                                                        <strong class="text-heading me1">New User</strong>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Adjust settings for new user notifications."></i>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="checkbox checkbox-primary">
                                                        <input type="checkbox" name="notification-check7"
                                                            id="notification-check7">
                                                        <label for="notification-check7"></label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="checkbox checkbox-primary">
                                                        <input type="checkbox" name="notification-check8"
                                                            id="notification-check8" checked>
                                                        <label for="notification-check8"></label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="checkbox checkbox-primary">
                                                        <input type="checkbox" name="notification-check9"
                                                            id="notification-check9">
                                                        <label for="notification-check9"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex flex-row align-items-start">
                                                        <strong class="text-heading me1">In-App Messaging</strong>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Adjust settings for in-app messaging notifications."></i>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="checkbox checkbox-primary">
                                                        <input type="checkbox" name="notification-check10"
                                                            id="notification-check10">
                                                        <label for="notification-check10"></label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="checkbox checkbox-primary">
                                                        <input type="checkbox" name="notification-check11"
                                                            id="notification-check11">
                                                        <label for="notification-check11"></label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="checkbox checkbox-primary">
                                                        <input type="checkbox" name="notification-check12"
                                                            id="notification-check12">
                                                        <label for="notification-check12"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex flex-row align-items-start">
                                                        <strong class="text-heading me1">Server Uptime</strong>
                                                        <i data-feather="info" stroke-width="2" width="12"
                                                            class="text-body" data-bs-toggle="tooltip"
                                                            data-bs-placement="right"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Adjust settings for server uptime notifications."></i>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="checkbox checkbox-primary">
                                                        <input type="checkbox" name="notification-check1"
                                                            id="notification-check13" checked>
                                                        <label for="notification-check13"></label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="checkbox checkbox-primary">
                                                        <input type="checkbox" name="notification-check14"
                                                            id="notification-check14">
                                                        <label for="notification-check14"></label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="checkbox checkbox-primary">
                                                        <input type="checkbox" name="notification-check15"
                                                            id="notification-check15" checked>
                                                        <label for="notification-check15"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Notifications End -->
                    </div>
                    <!-- Page Content End -->
                </div>
            </div>
            <!-- ***** Content End ***** -->

            <!-- ***** Footer Start ***** -->
            @include('layouts.admin.footer')
