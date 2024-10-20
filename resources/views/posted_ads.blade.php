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
                <h2 class="mc-breadcrumb-title">User posted ads</h2>
                <ul class="mc-breadcrumb-list">
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="{{ Route('home') }}">home</a></li>
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link"
                            href="{{ Route('profile') }}">Profile</a>
                    </li>
                    <li class="mc-breadcrumb-item">posted-ads</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section-gap-75">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">


                @foreach ($cars as $car)
                    <div class="col">
                        <div class="product-grid-card">
                            <div class="product-grid-image">
                                <img src="{{ asset('public/storage/' . $car->image) }}" alt="feature" />
                                @if ($car->condition === 'new')
                                    <div class="product-grid-badge">
                                        <span class="badge new">{{ $car->condition }}</span>
                                    </div>
                                @else
                                    <div class="product-grid-badge">
                                        <span class="badge used">{{ $car->condition }}</span>
                                    </div>
                                @endif
                                <div class="product-grid-hints">
                                    <i class="material-icons">collections</i><span>{{ $car->images->count() }}</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a
                                            href="{{ Route('vendor_details_users', $car->user->id) }}">by
                                            {{ $car->user->name }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>AED{{ number_format($car->price, 2, '.', ',') }}/-</span><small>{{ $car->price_type }}</small>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a href="{{ Route('inventory_single', $car->id) }}">{{ $car->title }}</a>
                                    </h4>
                                </div>
                                <ul class="product-grid-extra">

                                    <li>
                                        <i class="material-icons">settings</i><span>{{ $car->mileage }} km</span>
                                    </li>
                                    <li>
                                        <i class="material-icons">local_gas_station</i><span>{{ $car->fuel }}</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
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
                                <a href="{{ $cars->nextPageUrl() }}" class="page-link material-icons">chevron_right</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
    @include('layouts.script')
</body>


</html>
