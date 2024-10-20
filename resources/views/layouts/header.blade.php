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

                <select class="form-select" name="company" id="company-select">
                    <option selected value="">makes</option>
                    @foreach (getAllCompanies() as $company)
                        <option value="{{ $company->id }}" {{ request('company') == $company->id ? 'selected' : '' }}>
                            {{ $company->name }}
                        </option>
                    @endforeach
                </select>
                <select class="form-select" name="type" id="type-select">
                    <option selected value="">Types</option>
                    @foreach (getAllTypes() as $type)
                        <option value="{{ $type->id }}" {{ request('type') == $type->id ? 'selected' : '' }}>
                            {{ $type->name }}
                        </option>
                    @endforeach
                </select>
                <select class="form-select" name="model" id="model-select">
                    <option selected value="">Models</option>
                    @foreach (getAllModels() as $model)
                        <option value="{{ $model->id }}" data-company="{{ $model->company_id }}"
                            data-type="{{ $model->type_id }}" {{ request('model') == $model->id ? 'selected' : '' }}>
                            {{ $model->name }}
                        </option>
                    @endforeach
                </select>
                <button type="submit">search</button>
            </div>
        </form>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const companySelect = document.getElementById('company-select');
                const typeSelect = document.getElementById('type-select');
                const modelSelect = document.getElementById('model-select');
                const allModelOptions = Array.from(modelSelect.options);

                function updateModelOptions() {
                    const selectedCompany = companySelect.value;
                    const selectedType = typeSelect.value;

                    modelSelect.innerHTML = '<option selected value="">Models</option>';

                    allModelOptions.forEach(option => {
                        if ((!selectedCompany || option.dataset.company === selectedCompany) &&
                            (!selectedType || option.dataset.type === selectedType)) {
                            modelSelect.appendChild(option.cloneNode(true));
                        }
                    });
                }

                companySelect.addEventListener('change', updateModelOptions);
                typeSelect.addEventListener('change', updateModelOptions);

                // Initial call to set correct state on page load
                updateModelOptions();
            });
        </script>
    </div>
    @if (Auth::check())
        <a href="{{ Route('profile') }}" class="header-user">
            <img src="{{ auth()->user()->profile_picture ? asset('public/storage/' . auth()->user()->profile_picture) : asset('assets/images/user.png') }}"
                alt="user" />
            <span>profile</span>
        </a>
    @else
        <a href="{{ Route('register') }}" class="header-user">
            <img src="{{ asset('assets/images/user.png') }}" alt="user" />
            <span>join</span>
        </a>
    @endif


    <a href="{{ Route('create_ads') }}" class="btn header-btn">
        <i class="material-icons">storefront</i>
        <span>sell vehicles</span></a>






</header>
