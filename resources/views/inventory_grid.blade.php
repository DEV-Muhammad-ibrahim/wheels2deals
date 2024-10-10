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
                    <h2>Accessories</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ Route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Accessories</li>
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
                        <form>
                            <div class="product-widget-group">

                                <input type="number" placeholder="Min - 00" name="min_price">
                                <input type="number" placeholder="Max - 100" name="max_price">
                                <input type="text" placeholder="Name" name="name">
                            </div>
                            <button class="product-widget-btn">
                                <i class="material-icons">search</i>
                                <span>search</span>
                            </button>
                        </form>
                    </div>





                </div>
                <div class="col-lg-8 col-xl-9">


                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-3">
                        @foreach ($accessories as $accessory)
                            <div class="col">
                                <div class="product-grid-card">
                                    <div class="product-grid-image">
                                        <img src="{{ asset('storage/' . $accessory->image) }}" alt="product">
                                        {{-- <div class="product-grid-badge">
                                            <span class="badge used">used</span>
                                        </div> --}}
                                        <div class="product-grid-hints"><i class="material-icons">collections</i>
                                            <span>{{ $accessory->images->count() }}</span>
                                        </div>

                                    </div>
                                    <div class="product-grid-content">
                                        <div class="product-grid-group">
                                            <div class="product-grid-price">
                                                <span>AED
                                                    {{ number_format($accessory->price, 2, '.', ',') }}/-</span><small>{{ $accessory->price_type }}</small>
                                            </div>

                                        </div>
                                        <div class="product-grid-meta">
                                            <h4>
                                                <a href="#">{{ $accessory->name }}</a>
                                            </h4>

                                        </div>

                                        <div class="product-grid-btn">
                                            <a href="{{ Route('accessory_details', $accessory->id) }}">
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
                                <p class="page-info">Showing {{ $accessories->firstItem() }} of
                                    {{ $accessories->total() }} Results
                                </p>
                                <ul class="pagination">
                                    <li class="page-item {{ $accessories->onFirstPage() ? 'disabled' : '' }}">
                                        <a href="{{ $accessories->previousPageUrl() }}"
                                            class="page-link material-icons">chevron_left</a>
                                    </li>
                                    @for ($i = 1; $i <= $accessories->lastPage(); $i++)
                                        <li class="page-item {{ $i == $accessories->currentPage() ? 'active' : '' }}">
                                            <a href="{{ $accessories->url($i) }}"
                                                class="page-link">{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</a>
                                        </li>
                                    @endfor
                                    {{-- Next Page Link --}}
                                    <li class="page-item {{ $accessories->hasMorePages() ? '' : 'disabled' }}">
                                        <a href="{{ $accessories->nextPageUrl() }}"
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
