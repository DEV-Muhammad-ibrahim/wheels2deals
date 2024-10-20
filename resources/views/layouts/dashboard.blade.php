<section class="section-gap-75">
    @if (auth()->user()->role === 'vendor' && auth()->user()->cover_picture === !null)
        <div
            style="background: url({{ asset('public/storage/' . auth()->user()->cover_picture) }}) no-repeat center / cover;">
        @else
            <div style="background: url({{ asset('assets/images/banner/single/02.jpg') }}) no-repeat center / cover;">
    @endif
    <div class="user-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    <div class="user-banner-profile">
                        <div class="user-banner-profile-avatar">
                            @if (auth()->user()->role === 'vendor' && auth()->user()->profile_picture === !null)
                                <a href="{{ Route('profile') }}">
                                    <img src="{{ asset('public/storage/' . auth()->user()->profile_picture) }}"
                                        alt="avatar">
                                </a>
                            @else
                                <a href="{{ Route('profile') }}">
                                    <img src="{{ asset('assets/images/user.png') }}" alt="avatar">
                                </a>
                            @endif
                        </div>
                        <div class="user-banner-profile-meta">
                            @if (auth()->user()->role === 'vendor')
                                <div class="user-banner-profile-name">

                                    <h3><a href="{{ Route('profile') }}">{{ auth()->user()->vendor_name }}</a></h3>
                                    <span>{{ auth()->user()->account_type }}</span>
                                </div>
                                <ul class="user-banner-profile-contact-list">
                                    <li><i
                                            class="material-icons">phone_in_talk</i><span>{{ auth()->user()->phone_no }}</span>
                                    </li>
                                    <li><i class="material-icons">feed</i><span>{{ auth()->user()->email }}</span>
                                    </li>

                                    <li><i class="material-icons">map</i><span>{{ auth()->user()->city }},
                                            {{ auth()->user()->state }}</span></li>
                                </ul>
                            @else
                                <div class="user-banner-profile-name">
                                    <h3><a href="{{ Route('profile') }}">{{ auth()->user()->name }}</a></h3>

                                </div>
                                <ul class="user-banner-profile-contact-list">

                                    <li><i class="material-icons">feed</i><span>{{ auth()->user()->email }}</span>
                                    </li>

                                </ul>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-xl-12">
                    <ul class="user-banner-menu-list">
                        {{-- <li><a href="{{ Route('dashboard') }}"
                                    class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">dashboard</a></li> --}}
                        <li><a href="{{ Route('profile') }}"
                                class="{{ request()->routeIs('profile') ? 'active' : '' }}">profile</a></li>
                        <li><a href="{{ Route('create_ads') }}"
                                class="{{ request()->routeIs('create_ads') ? 'active' : '' }}">create ads</a>
                        </li>
                        <li><a href="{{ Route('posted_ads') }}"
                                class="{{ request()->routeIs('posted_ads') ? 'active' : '' }}">posted ads</a>
                        </li>
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
