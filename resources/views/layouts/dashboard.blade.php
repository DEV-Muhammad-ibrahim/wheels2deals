<section class="section-gap-75">
    <div style="background: url({{ asset('assets/images/banner/single/02.jpg') }}) no-repeat center / cover;">
        <div class="user-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-xl-8">
                        <div class="user-banner-profile">
                            <div class="user-banner-profile-avatar"><a href="profile.html"><img
                                        src="{{ asset('assets/images/user.png') }}" alt="avatar"></a></div>
                            <div class="user-banner-profile-meta">
                                <div class="user-banner-profile-name">
                                    <h3><a href="profile.html">person name</a></h3><span>individual</span>
                                </div>
                                <ul class="user-banner-profile-contact-list">
                                    <li><i class="material-icons">phone_in_talk</i><span>+91 987-654-3210</span>
                                    </li>
                                    <li><i class="material-icons">feed</i><span>support@example.com</span></li>
                                    <li><i class="material-icons">public</i><span>exampleGhurnek.com</span></li>
                                    <li><i class="material-icons">map</i><span>1Hd- 50, 010 Avenue, NY 90001 United
                                            States</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4">
                        <ul class="user-banner-data">
                            <li class="ads"><i class="material-icons">store</i>
                                <h3>4334</h3>
                                <p>total advertise</p>
                            </li>
                            <li class="star"><i class="material-icons">star</i>
                                <h3>2112</h3>
                                <p>total ratings</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="user-banner-menu-list">
                            <li><a href="{{ Route('dashboard') }}"
                                    class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">dashboard</a></li>
                            <li><a href="{{ Route('profile') }}"
                                    class="{{ request()->routeIs('profile') ? 'active' : '' }}">profile</a></li>
                            <li><a href="{{ Route('create_ads') }}"
                                    class="{{ request()->routeIs('create_ads') ? 'active' : '' }}">create ads</a></li>
                            <li><a href="{{ Route('posted_ads') }}"
                                    class="{{ request()->routeIs('posted_ads') ? 'active' : '' }}">posted ads</a></li>
                            {{-- <li><a href="{{ Route('favourite') }}"
                                    class="{{ request()->routeIs('favourite') ? 'active' : '' }}">favorites</a></li>
                            <li><a href="{{ Route('compare') }}"
                                    class="{{ request()->routeIs('compare') ? 'active' : '' }}">compares</a></li>
                            <li><a href="{{ Route('review') }}"
                                    class="{{ request()->routeIs('review') ? 'active' : '' }}">reviews</a></li>
                            <li><a href="{{ Route('notify') }}"
                                    class="{{ request()->routeIs('notify') ? 'active' : '' }}">notify</a></li> --}}
                            <li><a href="{{ Route('setting') }}"
                                    class="{{ request()->routeIs('setting') ? 'active' : '' }}">settings</a></li>
                            <li><a href="{{ Route('logout') }}"
                                    class="{{ request()->routeIs('logout') ? 'active' : '' }}">logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
