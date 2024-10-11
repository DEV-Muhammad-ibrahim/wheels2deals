@include('layouts.head')

<body>
    <div class="backdrop"></div>
    @include('layouts.header')
    @include('layouts.navbar')
    @include('layouts.widget')
    <section class="section-gap-100">
        <div style="background: url({{ asset('assets/images/banner/single/01.jpg') }}) no-repeat center / cover;">
            <div class="single-banner">
                <div class="container">
                    <h2>Cars</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ Route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{ Route('cars') }}">Cars</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="section-gap-100">
        <div class="container">
            <div class="row content-reverse">
                <div class="col-lg-4 col-xl-3">
                    <div class="product-widget">
                        <h6 class="product-widget-title">Filter by Price</h6>
                        <form action="{{ Route('vehicles.search') }}" method="GET">
                            <div class="product-widget-group">
                                <input type="number" name="min_price" placeholder="Min - 00">
                                <input type="number" name="max_price" placeholder="Max - 100K">
                            </div>


                            <h6 class="product-widget-title mt-2">Filter by Brand</h6>


                            <ul class="product-widget-list product-widget-scroll ">
                                @foreach ($companies as $company)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="companies[]"
                                            value="{{ $company->name }}" id="company_{{ $company->id }}"
                                            {{ in_array($company->id, request('companies', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="company_{{ $company->id }}">
                                            {{ $company->name }}
                                        </label>
                                    </div>
                                @endforeach


                            </ul>


                            <h6 class="product-widget-title">Filter by Category</h6>

                            <ul class="product-widget-list product-widget-scroll">
                                @foreach ($types as $type)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="types[]"
                                            value="{{ $type->name }}" id="type_{{ $type->id }}"
                                            {{ in_array($type->id, request('types', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="type_{{ $type->id }}">
                                            {{ $type->name }}
                                        </label>
                                    </div>
                                @endforeach

                            </ul>
                            <button class="product-widget-btn">
                                <i class="material-icons">search</i>
                                <span>Search</span>
                            </button>
                        </form>
                    </div>





                </div>
                <div class="col-lg-8 col-xl-9">


                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-1">
                        @foreach ($cars as $car)
                            <div class="col">
                                <div class="product-list-card">
                                    <div class="product-list-image"><img src="{{ asset('storage/' . $car->image) }}"
                                            alt="product">

                                        @if ($car->condition === 'new')
                                            <div class="product-grid-badge">
                                                <span class="badge new">{{ $car->condition }}</span>
                                            </div>
                                        @else
                                            <div class="product-grid-badge">
                                                <span class="badge used">{{ $car->condition }}</span>
                                            </div>
                                        @endif
                                        <div class="product-list-hints"><i
                                                class="material-icons">collections</i><span>{{ $car->images->count() }}</span>
                                        </div>
                                        <div class="product-list-overlay">
                                            <div class="product-list-vendor"><i class="material-icons">person</i><a
                                                    href="{{ Route('vendor_details_users', $car->user->id) }}">by
                                                    {{ $car->user->name }}</a></div>

                                        </div>
                                    </div>
                                    <div class="product-list-content">
                                        <div class="product-list-group">
                                            <div class="product-list-meta">
                                                <h3><a
                                                        href="{{ Route('inventory_single', $car->id) }}">{{ $car->title }}</a>
                                                </h3>

                                            </div>
                                            <div class="product-list-price">
                                                <h3>AED:{{ number_format($car->price, 2, '.', ',') }}/-</h3>
                                                <span>{{ $car->price_type }}</span>
                                            </div>
                                        </div>
                                        <ul class="product-list-info">
                                            <li><span>type:</span><span>{{ $car->type }}</span></li>
                                            <li><span>make:</span><span>{{ $car->company }}</span></li>
                                            <li><span>fuel:</span><span>{{ $car->fuel }}</span></li>
                                            <li><span>year:</span><span>{{ $car->year }}</span></li>
                                            <li><span>price:</span><span>{{ $car->price_type }}</span></li>
                                            <li><span>colour:</span><span>{{ $car->color }}</span></li>
                                            <li><span>mileage:</span><span>{{ $car->mileage }} km</span></li>
                                        </ul>
                                        <div class="product-list-action">
                                            <a href="{{ Route('inventory_single', $car->id) }}">
                                                <i class="material-icons">visibility</i>
                                                <span>details</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bottom-paginate mb-50">
                                <p class="page-info">Showing {{ $cars->firstItem() }} of {{ $cars->total() }} Results
                                </p>
                                <ul class="pagination">
                                    <li class="page-item {{ $cars->onFirstPage() ? 'disabled' : '' }}">
                                        <a href="{{ $cars->previousPageUrl() }}"
                                            class="page-link material-icons">chevron_left</a>
                                    </li>
                                    @for ($i = 1; $i <= $cars->lastPage(); $i++)
                                        <li class="page-item {{ $i == $cars->currentPage() ? 'active' : '' }}">
                                            <a href="{{ $cars->url($i) }}"
                                                class="page-link">{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</a>
                                        </li>
                                    @endfor
                                    {{-- Next Page Link --}}
                                    <li class="page-item {{ $cars->hasMorePages() ? '' : 'disabled' }}">
                                        <a href="{{ $cars->nextPageUrl() }}"
                                            class="page-link material-icons">chevron_right</a>
                                    </li>

                                </ul>
                            </div>
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
