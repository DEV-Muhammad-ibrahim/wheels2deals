@include('layouts.head')

<body>
    <div class="backdrop"></div>
    @include('layouts.header')
    @include('layouts.navbar')
    @include('layouts.widget')
    <section class="section-gap-75">
        <div style="background: url({{ asset('storage/' . $user->cover_picture) }}) no-repeat center / cover;">
            <div class="user-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-xl-8">
                            <div class="user-banner-profile">
                                <div class="user-banner-profile-avatar"><a href="#"><img
                                            src="{{ asset('storage/' . $user->profile_picture) }}" alt="avatar"></a>
                                </div>
                                <div class="user-banner-profile-meta">
                                    <div class="user-banner-profile-name">
                                        <h3><a href="#">{{ $user->vendor_name }}</a></h3><span></span>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="mc-breadcrumb">
        <div class="container">
            <div class="mc-breadcrumb-group">
                <h2 class="mc-breadcrumb-title">Vendor profile</h2>
                <ul class="mc-breadcrumb-list">
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="{{ Route('home') }}">home</a>
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
                            <h4 class="common-card-header-title">about this vendor</h4>
                        </div>
                        <div class="common-card-body">
                            <div class="profile-article">
                                <p>{{ $user->description }}</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">Membership status</h4>
                        </div>
                        <div class="common-card-body">
                            <ul class="profile-specify-list">
                                <li><span>Joined:</span><span>{{ $user->created_at }}</span></li>
                                <li><span>type:</span><span>{{ $user->account_type }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">contact address</h4>
                        </div>
                        <div class="common-card-body">
                            <ul class="profile-specify-list">
                                <li><span>State:</span><span>{{ $user->state }}</span></li>
                                <li><span>City:</span><span>{{ $user->city }}</span></li>

                                <li><span>post code:</span><span>{{ $user->zip }}</span></li>


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
