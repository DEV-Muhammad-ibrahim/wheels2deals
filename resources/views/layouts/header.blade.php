<header class="header-part">
    <a href="index.html" class="header-logo"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" /></a>
    <div class="header-content">
        <div class="header-responsive">
            <button type="button" class="header-widget sidebar-open">
                <i class="material-icons">notes</i><span>menu</span></button><a href="index.html"
                class="responsive-logo"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" /></a><button
                type="button" class="header-widget responsive-srch">
                <i class="material-icons">search</i><span>search</span>
            </button>
        </div>
        <form class="header-form" action="{{ Route('vehicles.search') }}" method="GET">
            <div class="header-search">
                <button type="submit" title="Search Submit" class="material-icons">
                    search</button>
                <input type="text" placeholder="Search, your Dreaming Car" name="title" />

                <button type="button" title="Search Option" class="advance-search material-icons">
                    tune
                </button>
            </div>
            <div class="header-option">
                <input type="number" placeholder="Max Price" name="min_price" />
                <input type="number" placeholder="Min Price" name="max_price" />
                <select class="form-select" name="company">
                    <option selected>makes</option>
                    @foreach (getAllCompanies() as $company)
                        <option value="{{ $company->name }}">{{ $company->name }}</option>
                    @endforeach

                </select>
                <select class="form-select" name="type">
                    <option selected>Types</option>
                    @foreach (getAllTypes() as $type)
                        <option value="{{ $type->name }}">{{ $type->name }}</option>
                    @endforeach

                </select>
                <button type="submit">search</button>
            </div>
        </form>
    </div>
    @if (Auth::check())
        <a href="{{ Route('profile') }}" class="header-user">
            <img src="{{ asset('storage/' . auth()->user()->profile_picture) }}" alt="user" />
            <span>profile</span>
        </a>
    @else
        <a href="{{ Route('register') }}" class="header-user">
            <img src="{{ asset('assets/images/user.png') }}" alt="user" />
            <span>join</span>
        </a>
    @endif

    @if (Auth::check())
        <a href="{{ Route('create_ads') }}" class="btn header-btn">
            <i class="material-icons">storefront</i>
            <span>sell vehicles</span></a>
    @else
        <a href="{{ Route('login') }}" class="btn header-btn">
            <i class="material-icons">person</i>
            <span>Login</span></a>
    @endif

</header>
