<aside class="sidebar-part">
    <div class="sidebar-header">
        <a href="#"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" /></a><button
            class="sidebar-close material-icons">close</button>
    </div>
    <div class="sidebar-content">
        <div class="sidebar-btn">
            <a href="{{ Route('create_ads') }}" class="btn btn-inline"><i class="material-icons">storefront</i><span>sell
                    vehicles</span></a>
        </div>
        <nav class="sidebar-nav">
            <div class="sidebar-group">
                <h5 class="sidebar-title">languages</h5>
                <div class="select-option">
                    <div class="select-data">
                        <img class="select-image" src="{{ asset('assets/images/flag/us.png') }}" alt="flag" /><span
                            class="select-text">english - LTR</span><span class="select-arrow"></span>
                    </div>
                    <ul class="option-list">
                        <li class="option-item">
                            <a href="#" class="option-link"><img class="option-image"
                                    src="{{ asset('assets/images/flag/us.png') }}" alt="flag" /><span
                                    class="option-text">english - LTR</span></a>
                        </li>
                        <li class="option-item">
                            <a href="" class="option-link"><img class="option-image"
                                    src="{{ asset('assets/images/flag/sa.png') }}" alt="flag" /><span
                                    class="option-text">arabic - RTL</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-group">
                <h5 class="sidebar-title">user action</h5>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="{{ Route('favourite') }}" class="nav-link"><i class="material-icons">favorite</i><span
                                class="nav-text">favorite</span><span class="nav-count">0</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ Route('compare') }}" class="nav-link"><i class="material-icons">compare</i><span
                                class="nav-text">compare</span><span class="nav-count">0</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ Route('notify') }}" class="nav-link"><i
                                class="material-icons">notifications</i><span class="nav-text">notification</span><span
                                class="nav-count">9+</span></a>
                    </li>
                </ul>
            </div>
            <div class="sidebar-group">
                <h5 class="sidebar-title">main menu</h5>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="{{ Route('index') }}" class="nav-link"><i class="material-icons">home</i><span
                                class="nav-text">home</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="material-icons">inventory</i><span
                                class="nav-text">inventory</span><span class="nav-arrow"></span></a>
                        <ul class="drop-list">
                            <li class="drop-item">
                                <a href="{{ Route('inventory_grid') }}" class="drop-link"><i
                                        class="material-icons">remove</i><span>inventory grid</span></a>
                            </li>
                            <li class="drop-item">
                                <a href="{{ Route('inventory_list') }}" class="drop-link"><i
                                        class="material-icons">remove</i><span>inventory list</span></a>
                            </li>
                            <li class="drop-item">
                                <a href="{{ Route('inventory_single') }}" class="drop-link"><i
                                        class="material-icons">remove</i><span>inventory single</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="material-icons">store</i><span
                                class="nav-text">vendor</span><span class="nav-arrow"></span></a>
                        <ul class="drop-list">
                            <li class="drop-item">
                                <a href="{{ Route('vendor_grid') }}" class="drop-link"><i
                                        class="material-icons">remove</i><span>vendor grid</span></a>
                            </li>
                            <li class="drop-item">
                                <a href="{{ Route('vendor_list') }}" class="drop-link"><i
                                        class="material-icons">remove</i><span>vendor list</span></a>
                            </li>
                            <li class="drop-item">
                                <a href="{{ Route('inventory_list') }}" class="drop-link"><i
                                        class="material-icons">remove</i><span>vendor single</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="material-icons">menu_book</i><span
                                class="nav-text">pages</span><span class="nav-arrow"></span></a>
                        <ul class="drop-list">
                            <li class="drop-item">
                                <a href="{{ Route('about') }}" class="drop-link"><i
                                        class="material-icons">remove</i><span>about us</span></a>
                            </li>
                            <li class="drop-item">
                                <a href="{{ Route('pricing_plan') }}" class="drop-link"><i
                                        class="material-icons">remove</i><span>pricing plan</span></a>
                            </li>
                            <li class="drop-item">
                                <a href="{{ Route('coming_soon') }}" class="drop-link"><i
                                        class="material-icons">remove</i><span>coming soon</span></a>
                            </li>
                            <li class="drop-item">
                                <a href="{{ Route('404') }}" class="drop-link"><i
                                        class="material-icons">remove</i><span>404
                                        error</span></a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="material-icons">contact_support</i><span
                                class="nav-text">support</span><span class="nav-arrow"></span></a>
                        <ul class="drop-list">
                            <li class="drop-item">
                                <a href="{{ Route('faq') }}" class="drop-link"><i
                                        class="material-icons">remove</i><span>faqs</span></a>
                            </li>
                            <li class="drop-item">
                                <a href="{{ Route('contact') }}" class="drop-link"><i
                                        class="material-icons">remove</i><span>contact us</span></a>
                            </li>
                            <li class="drop-item">
                                <a href="{{ Route('privacy') }}" class="drop-link"><i
                                        class="material-icons">remove</i><span>privacy policy</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="material-icons">security</i><span
                                class="nav-text">security</span><span class="nav-arrow"></span></a>
                        <ul class="drop-list">
                            <li class="drop-item">
                                <a href="{{ Route('login') }}" class="drop-link"><i
                                        class="material-icons">remove</i><span>login</span></a>
                            </li>
                            <li class="drop-item">
                                <a href="{{ Route('register') }}" class="drop-link"><i
                                        class="material-icons">remove</i><span>register</span></a>
                            </li>
                            <li class="drop-item">
                                <a href="{{ Route('forgot_password') }}" class="drop-link"><i
                                        class="material-icons">remove</i><span>forgot password</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="sidebar-group">
                <h5 class="sidebar-title">user menu</h5>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="{{ Route('dashboard') }}" class="nav-link"><i
                                class="material-icons">dashboard</i><span class="nav-text">dashboard</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ Route('profile') }}" class="nav-link"><i
                                class="material-icons">account_circle</i><span class="nav-text">profile</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ Route('create_ads') }}" class="nav-link"><i
                                class="material-icons">note_add</i><span class="nav-text">create ads</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ Route('posted_ads') }}" class="nav-link"><i class="material-icons">apps</i><span
                                class="nav-text">posted ads</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ Route('favourite') }}" class="nav-link"><i
                                class="material-icons">favorite</i><span class="nav-text">favorites</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ Route('compare') }}" class="nav-link"><i class="material-icons">compare</i><span
                                class="nav-text">compares</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ Route('review') }}" class="nav-link"><i class="material-icons">star</i><span
                                class="nav-text">reviews</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ Route('notify') }}" class="nav-link"><i
                                class="material-icons">notifications</i><span
                                class="nav-text">notifications</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ Route('setting') }}" class="nav-link"><i
                                class="material-icons">settings</i><span class="nav-text">settings</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ Route('logout') }}" class="nav-link"><i class="material-icons">lock</i><span
                                class="nav-text">logout</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</aside>
