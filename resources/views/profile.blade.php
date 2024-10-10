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
                <h2 class="mc-breadcrumb-title">user profile</h2>
                <ul class="mc-breadcrumb-list">
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="{{ Route('home') }}">home</a></li>
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link"
                            href="{{ Route('profile') }}">Profile</a>
                    </li>
                    <li class="mc-breadcrumb-item">profile</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section-gap-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8">

                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">about </h4>
                        </div>
                        <div class="common-card-body">
                            <div class="profile-article">
                                <p>{{ auth()->user()->description }}</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">Status</h4>
                        </div>
                        <div class="common-card-body">
                            <ul class="profile-specify-list">
                                <li><span>Joined:</span><span>{{ auth()->user()->created_at }}</span></li>
                                <li><span>type:</span><span>{{ auth()->user()->account_type }}</span></li>

                            </ul>
                        </div>
                    </div>
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">contact address</h4>
                        </div>
                        <div class="common-card-body">
                            <ul class="profile-specify-list">
                                <li><span>State:</span><span>{{ auth()->user()->state }}</span></li>
                                <li><span>city:</span><span>{{ auth()->user()->city }}</span></li>
                                <li><span>post code:</span><span>{{ auth()->user()->zip }}</span></li>

                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
    @include('layouts.script')
</body>


</html>
