@include('layouts.head')

<body>
    <div class="backdrop"></div>
    @include('layouts.header')
    @include('layouts.navbar')
    @include('layouts.widget')
    @include('layouts.dashboard')
    <section class="mc-breadcrumb">
        <div class="container">
            <div class="mc-breadcrumb-group">
                <h2 class="mc-breadcrumb-title">notifications</h2><select class="form-select mc-breadcrumb-select">
                    <option value="recent" selected>recent notifications</option>
                    <option value="unread">unread notifications</option>
                    <option value="read">read notifications</option>
                    <option value="mark">mark as all read</option>
                </select>
                <ul class="mc-breadcrumb-list">
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="index.html">home</a></li>
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="dashboard.html">dashboard</a>
                    </li>
                    <li class="mc-breadcrumb-item">notify</li>
                </ul>
            </div>
        </div>
    </section>
    <div class="section-gap-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <ul class="notify-list">
                        <li class="notify-item"><a class="notify-content" href="#">
                                <div class="notify-media"><img src="../images/avatar/01.jpg" alt="avatar"><i
                                        class="material-icons favorite">favorite</i></div>
                                <div class="notify-meta"><span><b>Autoland</b>added to his favorite list <b>Mercedez
                                            benz super mclaren</b></span><small>about few minutes ago!</small></div>
                            </a><a class="notify-close" href="#"><i class="material-icons">close</i></a></li>
                        <li class="notify-item"><a class="notify-content" href="#">
                                <div class="notify-media"><img src="../images/avatar/02.jpg" alt="avatar"><i
                                        class="material-icons rating">star</i></div>
                                <div class="notify-meta"><span><b>Autoland</b>just review on <b>Mercedez benz super
                                            mclaren</b></span><small>about few minutes ago!</small></div>
                            </a><a class="notify-close" href="#"><i class="material-icons">close</i></a></li>
                        <li class="notify-item"><a class="notify-content" href="#">
                                <div class="notify-media"><img src="../images/avatar/03.jpg" alt="avatar"><i
                                        class="material-icons comment">forum</i></div>
                                <div class="notify-meta"><span><b>Autoland</b>just comment on <b>Mercedez benz super
                                            mclaren</b></span><small>about few minutes ago!</small></div>
                            </a><a class="notify-close" href="#"><i class="material-icons">close</i></a></li>
                        <li class="notify-item"><a class="notify-content" href="#">
                                <div class="notify-media"><img src="../images/avatar/04.jpg" alt="avatar"><i
                                        class="material-icons announce">campaign</i></div>
                                <div class="notify-meta"><span><b>Autoland</b>announce on <b>Mercedez benz super
                                            mclaren</b></span><small>about few minutes ago!</small></div>
                            </a><a class="notify-close" href="#"><i class="material-icons">close</i></a></li>
                        <li class="notify-item"><a class="notify-content" href="#">
                                <div class="notify-media"><img src="../images/avatar/05.jpg" alt="avatar"><i
                                        class="material-icons blog">edit</i></div>
                                <div class="notify-meta"><span><b>Autoland</b>write a super blog on <b>Mercedez benz
                                            super mclaren</b></span><small>about few minutes ago!</small></div>
                            </a><a class="notify-close" href="#"><i class="material-icons">close</i></a></li>
                        <li class="notify-item"><a class="notify-content" href="#">
                                <div class="notify-media"><img src="../images/favicon.png" alt="favicon"><i
                                        class="material-icons privacy">shield</i></div>
                                <div class="notify-meta"><span><b>Ghurnek</b>privacy concern on <b>Mercedez benz super
                                            mclaren</b></span><small>about few minutes ago!</small></div>
                            </a><a class="notify-close" href="#"><i class="material-icons">close</i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="bottom-paginate">
                        <p class="page-info">Showing 12 of 60 Results</p>
                        <ul class="pagination">
                            <li class="page-item"><a href="#" class="page-link material-icons">chevron_left</a>
                            </li>
                            <li class="page-item"><a href="#" class="page-link active">01</a></li>
                            <li class="page-item"><a href="#" class="page-link">02</a></li>
                            <li class="page-item"><a href="#" class="page-link">03</a></li>
                            <li class="page-item">...</li>
                            <li class="page-item"><a href="#" class="page-link">45</a></li>
                            <li class="page-item"><a href="#"
                                    class="page-link material-icons">chevron_right</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
    @include('layouts.script')
</body>


</html>
