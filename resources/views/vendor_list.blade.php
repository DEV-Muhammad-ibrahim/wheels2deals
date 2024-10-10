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
                    <h2>Vendors</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ Route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Vendors</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="section-gap-100">
        <div class="container">
            <div class="row content-reverse">
                <div class="col-lg-4 col-xl-3">
                    <div class="vendor-widget">
                        <h6 class="vendor-widget-title">Find vendor</h6>
                        <form class="vendor-widget-form">
                            <input type="text" placeholder="Search Vendor">
                            <button type="submit" class="material-icons">search</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">

                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1">
                        @foreach ($vendors as $vendor)
                            <div class="col">
                                <div class="vendor-list-card">
                                    <a class="vendor-list-cover" href="profile.html">
                                        <img src="{{ asset('storage/' . $vendor->cover_picture) }}" alt="cover">
                                    </a>
                                    <a class="vendor-list-avatar" href="profile.html"><img
                                            src="{{ asset('storage/' . $vendor->profile_picture) }}" alt="avatar">
                                    </a>
                                    <div class="vendor-list-group">
                                        <ul class="vendor-list-meta">
                                            <li><i class="pro material-icons">account_circle</i><a
                                                    href="profile.html">{{ $vendor->vendor_name }}</a></li>
                                            <li><i class="map material-icons">map</i><span>{{ $vendor->city }}</span>
                                            </li>

                                            <li><i
                                                    class="store material-icons">store</i><span>{{ $vendor->account_type }}</span>
                                            </li>
                                        </ul>
                                        <div class="vendor-list-action">
                                            <a href="{{ Route('vendor_details_users', $vendor->id) }}">visit profile</a>
                                            {{-- <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#modalMessage">send
                                                message</button> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bottom-paginate mb-50">
                                <p class="page-info">Showing {{ $vendors->firstItem() }} of {{ $vendors->total() }}
                                    Results
                                </p>
                                <ul class="pagination">
                                    <li class="page-item {{ $vendors->onFirstPage() ? 'disabled' : '' }}">
                                        <a href="{{ $vendors->previousPageUrl() }}"
                                            class="page-link material-icons">chevron_left</a>
                                    </li>
                                    @for ($i = 1; $i <= $vendors->lastPage(); $i++)
                                        <li class="page-item {{ $i == $vendors->currentPage() ? 'active' : '' }}">
                                            <a href="{{ $vendors->url($i) }}"
                                                class="page-link">{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</a>
                                        </li>
                                    @endfor
                                    {{-- Next Page Link --}}
                                    <li class="page-item {{ $vendors->hasMorePages() ? '' : 'disabled' }}">
                                        <a href="{{ $vendors->nextPageUrl() }}"
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
    <div class="modal fade" id="modalMessage">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">message box</h5><button type="button" class="material-icons"
                        data-bs-dismiss="modal">close</button>
                </div>
                <div class="modal-message">
                    <form class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group"><label class="form-label">Enter your name</label><input
                                        type="text" class="form-control"></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label class="form-label">Enter your email</label><input
                                        type="text" class="form-control"></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label class="form-label">Describe your message</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12"><button class="form-btn" type="submit">send message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
    @include('layouts.script')
</body>


</html>
