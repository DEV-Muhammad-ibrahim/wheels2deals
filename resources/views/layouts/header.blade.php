<header class="header-part">

    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button> --}}
    {{-- Bootstrap Model --}}
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- Bootstrap Model end  --}}
    <div class="advanced-search-modal" id="advancedSearchModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Advanced Search</h3>
                <button type="button" class="close-modal" id="closeModal">
                    <i class="material-icons">close</i>
                </button>
            </div>
            <form action="{{ Route('vehicles.search') }}" method="GET">
                @csrf


                <div class="modal-body">
                    <div class="form-group">
                        <h4 class="hidden">Price Range</h4>
                        <div class="price-inputs">
                            <div class="input-group">
                                <label for="minPrice">Minimum Price</label>
                                <input type="number" name="min_price" id="minPrice" placeholder="Min Price"
                                    min="0">
                                {{-- <select name="" id="" class="form-select">
                                <option value=""></option>
                            </select> --}}
                            </div>
                            <div class="input-group">
                                <label for="maxPrice">Maximum Price</label>
                                <input type="number" name="max_price" id="maxPrice" placeholder="Max Price"
                                    min="0">
                            </div>
                        </div>
                    </div>

                    <div class="filter-group">
                        <h4>Mileage Range</h4>
                        <div class="mileage-inputs">
                            <div class="input-group">
                                <label for="minMileage">Minimum Mileage</label>
                                <input type="number" name="min_mileage" id="minMileage" placeholder="Min Mileage"
                                    min="0">
                            </div>
                            <div class="input-group">
                                <label for="maxMileage">Maximum Mileage</label>
                                <input type="number" name="max_mileage" id="maxMileage" placeholder="Max Mileage"
                                    min="0">
                            </div>
                        </div>
                    </div>
                    <h4 class="heading">Select a car</h4>
                    <div class="grid">


                        <div class="filter-group">

                            <div class="custom-select-container">
                                <div class="select-trigger">
                                    <span class="select-label">Makes</span>
                                    <i class="material-icons">expand_more</i>
                                </div>
                                <input type="hidden" name="company" id="companyId" value="{{ request('company') }}">
                                <div class="select-dropdown">
                                    <div class="search-box">
                                        <i class="material-icons">search</i>
                                        <input type="text" placeholder="Search makes..." class="dropdown-search">
                                    </div>
                                    <div class="options-container">
                                        <div class="option-item" data-value="">All Makes</div>
                                        @foreach (getAllCompanies() as $company)
                                            <div class="option-item" data-value="{{ $company->id }}"
                                                {{ request('company') == $company->id ? 'data-selected="true"' : '' }}>
                                                {{ $company->name }}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-group">
                            <div class="custom-select-container">
                                <div class="select-trigger">
                                    <span class="select-label">Types</span>
                                    <i class="material-icons">expand_more</i>
                                </div>
                                <input type="hidden" name="type" id="type-select" value="{{ request('type') }}">
                                <div class="select-dropdown">
                                    <div class="search-box">
                                        <i class="material-icons">search</i>
                                        <input type="text" placeholder="Search types..." class="dropdown-search">
                                    </div>
                                    <div class="options-container">
                                        <div class="option-item" data-value="">All Types</div>
                                        @foreach (getAllTypes() as $type)
                                            <div class="option-item" data-value="{{ $type->id }}"
                                                {{ request('type') == $type->id ? 'data-selected="true"' : '' }}>
                                                {{ $type->name }}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-group">
                            <div class="custom-select-container">
                                <div class="select-trigger">
                                    <span class="select-label">Models</span>
                                    <i class="material-icons">expand_more</i>
                                </div>
                                <input type="hidden" name="model" id="model-select" value="{{ request('model') }}">
                                <div class="select-dropdown">
                                    <div class="search-box">
                                        <i class="material-icons">search</i>
                                        <input type="text" placeholder="Search models..." class="dropdown-search">
                                    </div>
                                    <div class="options-container">
                                        <div class="option-item" data-value="">All Models</div>
                                        @foreach (getAllModels() as $model)
                                            <div class="option-item" data-value="{{ $model->id }}"
                                                data-company="{{ $model->company_id }}"
                                                data-type="{{ $model->type_id }}"
                                                {{ request('model') == $model->id ? 'data-selected="true"' : '' }}>
                                                {{ $model->name }}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-group">
                            <div class="custom-select-container">
                                <div class="select-trigger">
                                    <span class="select-label">Year</span>
                                    <i class="material-icons">expand_more</i>
                                </div>
                                <input type="hidden" name="year" id="year-select"
                                    value="{{ request('year') }}">
                                <div class="select-dropdown">
                                    <div class="search-box">
                                        <i class="material-icons">search</i>
                                        <input type="text" placeholder="Search year..." class="dropdown-search">
                                    </div>
                                    <div class="options-container">
                                        <div class="option-item" data-value="">All Years</div>
                                        @for ($year = 2024; $year >= 1974; $year--)
                                            <div class="option-item" data-value="{{ $year }}">
                                                {{ $year }}</div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="heading">
                        Specifications
                    </h3>
                    <div class="grid2">
                        <div class="filter-group">
                            <label class="form-label">Cylinders
                            </label>
                            <select class="form-select" name="cylinders">
                                <option selected>---</option>
                                <option value="">All </option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="16">16</option>
                            </select>
                        </div>

                        <div class="filter-group">
                            <label class="form-label">Steering_side</label>
                            <select class="form-select" name="steering_side">
                                <option selected>---</option>
                                <option value="left">Left hand</option>
                                <option value="right">Right hand</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Regional Specs
                                <select class="form-select regional" name="regional_specs">
                                    <option selected>---</option>
                                    <option value="">All </option>
                                    <option value="gcc">GCC</option>
                                    <option value="american">American</option>
                                    <option value="canadian">Canadian</option>
                                    <option value="european">European</option>
                                    <option value="japanese">Japanese</option>
                                    <option value="korean">Korean</option>
                                    <option value="chinese">Chinese</option>
                                    <option value="other">Other</option>
                                </select>
                        </div>
                        <div class="form-group"><label class="form-label">Fuel
                            </label>
                            <select class="form-select" name="fuel">
                                <option selected>---</option>
                                <option value="diesel">Disel</option>
                                <option value="petrol">Petrol</option>
                                <option value="electric">Electric</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label class="form-label">Transmission <span>*</span></label>
                            <select class="form-select" name="transmission">
                                <option selected>---</option>
                                <option value="manual">Manual</option>
                                <option value="automatic">Automatic</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label class="form-label">Seating Capacity
                                <span>*</span></label>
                            <select class="form-select" name="seating_capacity">
                                <option selected>---</option>
                                <option value="2">2</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                    </div>
                    <h3 class="heading">
                        Seller Prefrences
                    </h3>
                    <div class="form-group"><label class="form-label">Location
                            <span>*</span></label>
                        <select class="form-select " name="location">
                            <option selected>---</option>

                            <option value="">All </option>
                            <option value="Abu Dhabi">Abu Dhabi</option>
                            <option value="Ajman">Ajman</option>
                            <option value="Dubai">Dubai</option>
                            <option value="Fujairah">Fujairah</option>
                            <option value="Sharjah">Sharjah</option>
                            <option value="Al Ain">Al Ain</option>
                            <option value="Ras al-Khaimah">Ras al-Khaimah</option>
                            <option value="Umm al-Quwain">Umm al-Quwain</option>

                        </select>

                    </div>

                    {{-- <div class="filter-group">
                        <h4>Features</h4>
                        <div class="features-grid">
                            <label class="checkbox-container">
                                <input type="checkbox" name="features[]" value="air_conditioning">
                                <span>Air Conditioning</span>
                            </label>
                            <label class="checkbox-container">
                                <input type="checkbox" name="features[]" value="power_steering">
                                <span>Power Steering</span>
                            </label>
                            <label class="checkbox-container">
                                <input type="checkbox" name="features[]" value="power_windows">
                                <span>Power Windows</span>
                            </label>
                            <label class="checkbox-container">
                                <input type="checkbox" name="features[]" value="abs">
                            <span>ABS</span>
                        </label>
                    </div>
                </div> --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-reset" id="resetFilters">Reset</button>
                    <button type="submit" class="btn-apply">Apply Filters</button>
                </div>
            </form>
        </div>
    </div>
    <a href="index.html" class="header-logo"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" /></a>
    <div class="header-content">
        <div class="header-responsive">
            <button type="button" class="header-widget sidebar-open">
                <i class="material-icons">notes</i><span>menu</span></button><a href="index.html"
                class="responsive-logo"><img src="{{ asset('assets/images/logo.png') }}"
                    alt="logo" /></a><button type="button" class="header-widget responsive-srch">
                <i class="material-icons">search</i><span>search</span>
            </button>
        </div>
        <form class="header-form" action="{{ Route('vehicles.search') }}" method="GET">
            <div class="header-search">
                <button type="submit" title="Search Submit" class="material-icons">search</button>
                <input type="text" placeholder="Search, your Dreaming Car" name="title" />
                <button type="button" title="Search Option" class="advance-search material-icons">tune</button>
            </div>
            <div class="header-option">
                <!-- Company Select -->
                <div class="custom-select-container">
                    <div class="select-trigger">
                        <span class="select-label">Makes</span>
                        <i class="material-icons">expand_more</i>
                    </div>
                    <input type="hidden" name="company" id="companyId" value="{{ request('company') }}">
                    <div class="select-dropdown">
                        <div class="search-box">
                            <i class="material-icons">search</i>
                            <input type="text" placeholder="Search makes..." class="dropdown-search">
                        </div>
                        <div class="options-container">
                            <div class="option-item" data-value="">All Makes</div>
                            @foreach (getAllCompanies() as $company)
                                <div class="option-item" data-value="{{ $company->id }}"
                                    {{ request('company') == $company->id ? 'data-selected="true"' : '' }}>
                                    {{ $company->name }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Type Select -->
                <div class="custom-select-container">
                    <div class="select-trigger">
                        <span class="select-label">Types</span>
                        <i class="material-icons">expand_more</i>
                    </div>
                    <input type="hidden" name="type" id="type-select" value="{{ request('type') }}">
                    <div class="select-dropdown">
                        <div class="search-box">
                            <i class="material-icons">search</i>
                            <input type="text" placeholder="Search types..." class="dropdown-search">
                        </div>
                        <div class="options-container">
                            <div class="option-item" data-value="">All Types</div>
                            @foreach (getAllTypes() as $type)
                                <div class="option-item" data-value="{{ $type->id }}"
                                    {{ request('type') == $type->id ? 'data-selected="true"' : '' }}>
                                    {{ $type->name }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Model Select -->
                <div class="custom-select-container">
                    <div class="select-trigger">
                        <span class="select-label">Models</span>
                        <i class="material-icons">expand_more</i>
                    </div>
                    <input type="hidden" name="model" id="model-select" value="{{ request('model') }}">
                    <div class="select-dropdown">
                        <div class="search-box">
                            <i class="material-icons">search</i>
                            <input type="text" placeholder="Search models..." class="dropdown-search">
                        </div>
                        <div class="options-container">
                            <div class="option-item" data-value="">All Models</div>
                            @foreach (getAllModels() as $model)
                                <div class="option-item" data-value="{{ $model->id }}"
                                    data-company="{{ $model->company_id }}" data-type="{{ $model->type_id }}"
                                    {{ request('model') == $model->id ? 'data-selected="true"' : '' }}>
                                    {{ $model->name }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Year Select -->
                <div class="custom-select-container">
                    <div class="select-trigger">
                        <span class="select-label">Year</span>
                        <i class="material-icons">expand_more</i>
                    </div>
                    <input type="hidden" name="year" id="year-select" value="{{ request('year') }}">
                    <div class="select-dropdown">
                        <div class="search-box">
                            <i class="material-icons">search</i>
                            <input type="text" placeholder="Search year..." class="dropdown-search">
                        </div>
                        <div class="options-container">
                            <div class="option-item" data-value="">All Years</div>
                            @for ($year = 2024; $year >= 1974; $year--)
                                <div class="option-item" data-value="{{ $year }}">{{ $year }}</div>
                            @endfor
                        </div>
                    </div>
                </div>
                {{-- <br></br> --}}
                <button type="submit" class="btnSearch">search</button>
                <div>


                </div>
                <div>
                    <button type="button" class="btn-advanced-search " id="advancedSearchBtn">
                        Advanced Search
                    </button>
                </div>


            </div>
        </form>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const selectContainers = document.querySelectorAll('.custom-select-container');
                const allModelOptions = document.querySelectorAll('#model-select + .select-dropdown .option-item');

                selectContainers.forEach(container => {
                    const trigger = container.querySelector('.select-trigger');
                    const dropdown = container.querySelector('.select-dropdown');
                    const searchInput = container.querySelector('.dropdown-search');
                    const optionsContainer = container.querySelector('.options-container');
                    const hiddenInput = container.querySelector('input[type="hidden"]');
                    const label = container.querySelector('.select-label');

                    // Set initial selected value
                    const initialSelected = optionsContainer.querySelector('[data-selected="true"]');
                    if (initialSelected) {
                        label.textContent = initialSelected.textContent;
                    }

                    // Handle trigger click
                    trigger.addEventListener('click', (e) => {
                        e.stopPropagation();
                        closeAllDropdowns();
                        container.classList.add('active');
                        searchInput.focus();
                    });

                    // Handle search
                    searchInput.addEventListener('input', (e) => {
                        const searchText = e.target.value.toLowerCase();
                        const options = optionsContainer.querySelectorAll('.option-item');

                        options.forEach(option => {
                            const text = option.textContent.toLowerCase();
                            option.style.display = text.includes(searchText) ? 'block' : 'none';
                        });
                    });

                    // Handle option selection
                    optionsContainer.addEventListener('click', (e) => {
                        if (e.target.classList.contains('option-item')) {
                            const value = e.target.dataset.value;
                            hiddenInput.value = value;
                            label.textContent = e.target.textContent;

                            // Update selected state
                            optionsContainer.querySelectorAll('.option-item').forEach(opt => {
                                opt.removeAttribute('data-selected');
                            });
                            e.target.setAttribute('data-selected', 'true');

                            container.classList.remove('active');

                            // Handle dependencies
                            if (hiddenInput.id === 'companyId' || hiddenInput.id ===
                                'type-select') {
                                updateModelOptions();
                            }
                        }
                    });
                });

                // Close dropdowns when clicking outside
                document.addEventListener('click', () => {
                    closeAllDropdowns();
                });

                function closeAllDropdowns() {
                    selectContainers.forEach(container => {
                        container.classList.remove('active');
                    });
                }

                // Handle model filtering based on company and type selection
                function updateModelOptions() {
                    const selectedCompany = document.getElementById('companyId').value;
                    const selectedType = document.getElementById('type-select').value;
                    console.log('companies', document.getElementById('company-select'));
                    console.log('types', document.getElementById('type-select'));
                    console.log('company', selectedCompany, selectedType)
                    const modelDropdown = document.querySelector('#model-select + .select-dropdown .options-container');
                    const modelSelect = document.getElementById('model-select');
                    const modelLabel = document.querySelector('#model-select').closest('.custom-select-container')
                        .querySelector('.select-label');

                    // Reset model selection
                    modelSelect.value = '';
                    modelLabel.textContent = 'Models';

                    // Show/hide model options based on selection
                    modelDropdown.querySelectorAll('.option-item').forEach(option => {
                        const isAllModelsOption = option.dataset.value === '';
                        // console.log(option.dataset);
                        // console.log(isAllModelsOption);
                        // Modify this condition to be more lenient
                        const shouldDisplay = isAllModelsOption ||
                            ((!selectedCompany || option.dataset.company === selectedCompany) &&
                                (!selectedType || option.dataset.type === selectedType));

                        option.style.display = shouldDisplay ? 'block' : 'none';
                    });
                }

                updateModelOptions()
                // Add event listeners to company and type selects
                document.getElementById('companyId').addEventListener('change', updateModelOptions);
                document.getElementById('type-select').addEventListener('change', updateModelOptions);

                // Initialize model options on page load
                // document.addEventListener('DOMContentLoaded', updateModelOptions);
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
<style>
    .custom-select-container {
        position: relative;
        min-width: 100%;
    }

    .select-trigger {
        background: white;
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 8px 12px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        user-select: none;
    }

    .select-trigger .material-icons {
        font-size: 20px;
        transition: transform 0.2s;
    }

    .custom-select-container.active .select-trigger .material-icons {
        transform: rotate(180deg);
    }

    .select-dropdown {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: white;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        margin-top: 4px;
    }

    .custom-select-container.active .select-dropdown {
        display: block;
    }

    .search-box {
        padding: 8px;
        border-bottom: 1px solid #eee;
        display: flex;
        align-items: center;
        background: #f8f9fa;
    }

    .search-box .material-icons {
        color: #666;
        margin-right: 8px;
        font-size: 18px;
    }

    .dropdown-search {
        border: 1px solid #ddd;
        padding: 6px;
        width: calc(100% - 30px);
        border-radius: 4px;
        font-size: 14px;
    }

    .options-container {
        max-height: 200px;
        overflow-y: auto;
    }

    .option-item {
        padding: 8px 12px;
        cursor: pointer;
        transition: background-color 0.2s;
        font-size: 14px;
    }

    .option-item:hover {
        background-color: #f5f5f5;
    }

    .option-item[data-selected="true"] {
        background-color: #e3f2fd;
        color: #1976d2;
    }

    /* Scrollbar styling */
    .options-container::-webkit-scrollbar {
        width: 6px;
    }

    .options-container::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    .options-container::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 3px;
    }

    .options-container::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    @media (max-width: 600px) {
        .custom-select-container {
            /* margin-bottom: 15px; */
            /* Space between select boxes on mobile */
            font-size: 14px;
            /* Adjust font size for readability */
        }

        .btn-advanced-search {
            margin-left: 150px !important;
        }

        .select-trigger,
        .dropdown-search,
        .option-item {
            padding: 12px;
            /* Ensure touch targets are large enough */
            font-size: 16px;
            /* Improve readability on smaller screens */
        }
    }

    /* Advanced Search Button */




    .btn-advanced-search {
        color: #477cdb;
        text-decoration: underline;
        letter-spacing: 0.8px;
        border-radius: 6px;
        height: 45px;
        /* text-transform: uppercase; */
        font-size: 15px;
        margin-left: 39%;
        font-weight: 500;
    }

    /*
    .btn-advanced-search:hover {
        background-color: #e9ecef;
    } */

    /* Modal Styles */
    .advanced-search-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1100;
    }

    .modal-content {
        position: relative;
        background-color: white;
        max-height: 100%;
        max-width: 80%;
        overflow: hidden;
        margin: 50px auto;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .modal-header {
        padding: 10px;
        border-bottom: 1px solid #eee;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .modal-header h3 {
        color: #1565c0;
        margin: 0;
        font-size: 1.5rem;
    }

    .close-modal {
        background: none;
        border: none;
        cursor: pointer;
        padding: 4px;
    }

    .close-modal i {
        font-size: 24px;
        color: #666;
    }

    .modal-body {
        padding: 10px;
        max-height: calc(90vh - 200px);
        overflow-y: auto;
    }

    .filter-group {
        margin-bottom: 10px;
    }

    .filter-group h4 {

        margin: 0 0 12px 0;
        font-size: 1.1rem;
        color: #1565c0;
    }

    .heading {
        margin: 0 0 12px 0;
        font-size: 1.1rem;
        color: #1565c0;
    }

    .price-inputs,
    .hidden,
    .mileage-inputs {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 16px;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 16px;
    }

    .grid2 {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }

    .regional {
        width: 353%;
    }

    .input-group {
        display: flex;
        flex-direction: column;
    }

    .input-group label {
        margin-bottom: 6px;
        font-size: 14px;
        color: #666;
    }

    .input-group input {
        padding: 8px 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        /* Adjusted min size for better fit */
        gap: 12px;
    }

    .checkbox-container {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .modal-footer {
        padding: 20px;
        border-top: 1px solid #eee;
        display: flex;
        justify-content: flex-end;
    }

    .btn-reset,
    .btn-apply {
        /* Combined styles for buttons */
        padding: 8px 16px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        /* Ensuring consistent font size */
    }

    .btn-reset {
        background-color: #f8f9fa;
        border: none;
        border-radius: .25rem;
    }

    .btn-apply {
        background-color: #1976d2;
        color: white;
        border: none;
    }

    .btn-apply:hover {
        background-color: #1565c0;
    }

    /* Media Queries for Responsiveness */
    @media (max-width: 768px) {

        .modal-content {
            margin-top: 30px;
            /* Reduced top margin for mobile */
            margin-bottom: 30px;
            /* Added bottom margin for mobile */
            width: 95%;
            height: 80%;
            /* Full width on smaller devices */
        }

        .price-inputs,
        .mileage-inputs {
            display: none;
        }

        /* Create a mobile-friendly layout for the grid sections */
        .grid,
        .grid2 {
            grid-template-columns: 1fr;
            gap: 10px;
        }

        /* Adjust custom select containers for mobile */
        .custom-select-container {
            width: 100%;
        }

        /* Ensure form selects are full width */
        .form-select {
            width: 100%;
        }

        /* Adjust modal content for smaller screens */
        .modal-content {
            width: 95%;
            max-width: 95%;
            margin: 10px auto;
        }

        /* Make modal body scrollable if content overflows */
        .modal-body {
            max-height: calc(100vh - 150px);
            overflow-y: auto;
        }

        /* Adjust modal footer buttons for mobile */
        .modal-footer {
            flex-direction: column;
            gap: 10px;
        }

        .btn-reset,
        .btn-apply {
            width: 100%;
            padding: 12px;
            font-size: 16px;
        }

        /* Ensure regional specs select is full width */
        .regional {
            width: 100%;
        }

        .modal-header h3 {
            font-size: 1.25rem;
            /* Smaller title font size */
        }

        .modal-body {
            padding: 15px;
            /* Reduced padding in modal body */
        }

        .filter-group h4 {
            font-size: 1rem;
            /* Smaller heading size */
        }

        .input-group input {
            font-size: 13px;
            /* Smaller input font size */
        }

        .features-grid {
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            /* Further reduce min size of features grid */
        }

        .btn-reset,
        .btn-apply {
            /* Adjust button sizes for mobile */
            padding: 10px;
            /* More padding for easier tapping */
            font-size: 13px;
            /* Smaller button text */
        }
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const advancedSearchBtn = document.getElementById('advancedSearchBtn');
        const modal = document.getElementById('advancedSearchModal');
        const closeModal = document.getElementById('closeModal');
        const resetFilters = document.getElementById('resetFilters');
        const modalForm = modal.querySelector('form');

        // Open modal
        advancedSearchBtn.addEventListener('click', function() {
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        });

        // Close modal
        closeModal.addEventListener('click', function() {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        });

        // Close modal when clicking outside
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });

        // Reset filters
        resetFilters.addEventListener('click', function() {
            // Reset all inputs in the modal form
            const inputs = modalForm.querySelectorAll('input, select');
            inputs.forEach(input => {
                if (input.type === 'number' || input.type === 'text') {
                    input.value = '';
                } else if (input.type === 'checkbox') {
                    input.checked = false;
                } else if (input.tagName.toLowerCase() === 'select') {
                    input.selectedIndex = 0;
                }

                // Reset hidden inputs
                if (input.type === 'hidden') {
                    input.value = '';
                }

                // Reset select labels
                const selectContainer = input.closest('.custom-select-container');
                if (selectContainer) {
                    const label = selectContainer.querySelector('.select-label');
                    if (label) {
                        switch (input.name) {
                            case 'company':
                                label.textContent = 'Makes';
                                break;
                            case 'type':
                                label.textContent = 'Types';
                                break;
                            case 'model':
                                label.textContent = 'Models';
                                break;
                            case 'year':
                                label.textContent = 'Year';
                                break;
                        }
                    }
                }
            });

            // Reset any dependent dropdowns (like models)
            updateModelOptions();
        });

        // Handle form submission for modal
        modalForm.addEventListener('submit', function(e) {
            // Prevent default form submission
            e.preventDefault();

            // Create FormData from the modal form
            const formData = new FormData(modalForm);

            // Get the base search URL from the form's action attribute
            const searchUrl = modalForm.getAttribute('action');

            // Convert FormData to URL parameters
            const urlParams = new URLSearchParams(formData).toString();

            // Redirect to the search page with parameters
            window.location.href = `${searchUrl}?${urlParams}`;
        });
    });
</script>
