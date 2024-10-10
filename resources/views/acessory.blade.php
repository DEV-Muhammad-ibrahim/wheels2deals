@include('layouts.head')

<body data-bs-spy="scroll" data-bs-target="#scrollspy">
    <div class="backdrop"></div>
    @include('layouts.header')
    @include('layouts.navbar')
    @include('layouts.widget')
    <section class="section-gap-100">
        <div style="background: url({{ asset('assets/images/banner/single/01.jpg') }}) no-repeat center / cover;">
            <div class="single-banner">
                <div class="container">
                    <h2>Accessory</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ Route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ Route('accessory') }}">Accessories</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $accessory->name }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="section-gap-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="product-single-meta-group"><span class="product-single-meta-price">AED
                            {{ number_format($accessory->price, 2, '.', ',') }}/-
                            <small>{{ $accessory->price_type }}</small></span>
                        <h2 class="product-single-meta-title">{{ $accessory->name }}</h2>
                        <ul class="product-single-meta-list">
                            <li><i class="material-icons">account_circle</i><a href="#">by Admin</a>
                            </li>

                        </ul>
                    </div>
                </div>


                <div class="col-xl-12">
                    <div class="product-single-slider slider-arrow slider-dots">
                        @foreach ($accessory->images as $image)
                            <div><img src="{{ asset('storage/' . $image->path) }}" alt="product"></div>
                        @endforeach

                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="product-single-scrollspy-btns">
                        <a href="#overview" class="nav-link" title="Overview">
                            <i class="material-icons">visibility</i>
                            <span>overview</span>
                        </a>

                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="common-card" id="overview">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">Accessory overview</h4>
                        </div>
                        <div class="common-card-body">
                            <p>{{ $accessory->description }}</p>
                        </div>
                    </div>



                </div>
                <div class="col-xl-4">
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">Reach out to buy Accessory</h4>
                        </div>
                        <div class="common-card-body">
                            <ul class="product-single-social-list">
                                <li><a href="https://wa.me/971544551077" target="_blank"
                                        class="icofont-whatsapp whatsapp" style="background-color: green;"></a></li>

                            </ul>
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
