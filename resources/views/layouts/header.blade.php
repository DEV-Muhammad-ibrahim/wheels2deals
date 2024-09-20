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
        <form class="header-form">
            <div class="header-search">
                <button type="submit" title="Search Submit" class="material-icons">
                    search</button><input type="text" placeholder="Search, your Dreaming Car" /><select
                    class="form-select">
                    <option value="all" selected>all type</option>
                    <option value="new">new type</option>
                    <option value="used">used type</option>
                </select><button type="button" title="Search Option" class="advance-search material-icons">
                    tune
                </button>
            </div>
            <div class="header-option">
                <input type="text" placeholder="Max Price" /><input type="text" placeholder="Min Price" /><select
                    class="form-select">
                    <option selected>makes</option>
                    <option value="1">all makes</option>
                    <option value="2">chevrolet</option>
                    <option value="3">bentley</option>
                    <option value="4">nissan</option>
                    <option value="5">honda</option>
                </select><select class="form-select">
                    <option selected>models</option>
                    <option value="1">all models</option>
                    <option value="2">2 series</option>
                    <option value="3">4 runner</option>
                    <option value="4">camero</option>
                    <option value="5">elantra</option>
                </select><button type="submit">search</button>
            </div>
        </form>
    </div>
    <a href="{{ Route('register') }}" class="header-user"><img src="{{ asset('assets/images/user.png') }}"
            alt="user" /><span>join</span></a><a href="{{ Route('create_ads') }}" class="btn header-btn"><i
            class="material-icons">storefront</i><span>sell vehicles</span></a>
</header>
