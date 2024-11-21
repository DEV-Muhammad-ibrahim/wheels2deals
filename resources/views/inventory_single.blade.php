@include('layouts.head')

<body data-bs-spy="scroll" data-bs-target="#scrollspy">
    <div class="backdrop"></div>
    @include('layouts.header')
    @include('layouts.navbar')
    @include('layouts.widget')
    <section class="section-gap-100">
        {{-- <div style="background: url({{ asset('assets/images/banner/single/01.jpg') }}) no-repeat center / cover;">
            <div class="single-banner">
                <div class="container">
                    <h2>{{ $car->title }}</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ Route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ Route('cars') }}">Cars</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $car->title }}</li>
                    </ol>
                </div>
            </div>
        </div> --}}
    </section>
    <section class="section-gap-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <h2 class="product-single-meta-title">{{ $car->title }} {{ $car->company->name }}</h2>
                    <div class="product-single-meta-group">
                        <span class="product-single-meta-price">AED:{{ number_format($car->price, 2, '.', ',') }}/-
                            <small>{{ $car->price_type }}</small>
                        </span>

                        <ul class="product-single-meta-list">
                            <li><i class="material-icons">account_circle</i><a
                                    href="{{ Route('vendor_details_users', $car->user->id) }}">by
                                    {{ $car->user->name }}</a>
                            </li>

                        </ul>
                    </div>
                </div>


                <div class="col-xl-12">
                    <div class="product-single-slider slider-arrow slider-dots">
                        @foreach ($car->images as $image)
                            <div><img src="{{ asset('public/storage/' . $image->path) }}" alt="product"></div>
                        @endforeach

                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="product-single-scrollspy-btns">
                        <a href="#overview" class="nav-link" title="Overview">
                            <i class="material-icons">visibility</i>
                            <span>overview</span>
                        </a>

                        <a href="#features" class="nav-link" title="Features">
                            <i class="material-icons">fact_check</i>
                            <span>features</span>
                        </a>




                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="common-card" id="overview">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">vehicle description</h4>
                        </div>
                        <div class="common-card-body">
                            <p>{{ $car->description }}</span></p>
                        </div>
                    </div>

                    <div class="common-card" id="features">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">vehicle features</h4>
                        </div>
                        <div class="product-single-feature-group">
                            <ul class="product-single-feature-list">
                                <li><span>condition:</span><span>{{ $car->condition }}</span></li>
                                <li><span>mileage:</span><span>{{ $car->mileage }} km</span></li>
                                <li><span>body type:</span><span>{{ $car->type->name }}</span></li>
                                <li><span>Model:</span><span>{{ $car->model->name }}</span></li>
                                <li><span>brand name:</span><span>{{ $car->company->name }}</span></li>
                                <li><span>colour:</span><span>{{ $car->color }}</span></li>
                                <li><span>Interior colour:</span><span>{{ $car->interior_color }}</span></li>
                                <li><span>Transmission:</span><span>{{ $car->transmission }}</span></li>
                                <li><span>fuel type:</span><span>{{ $car->fuel }}</span></li>
                            </ul>
                            <ul class="product-single-feature-list">
                                @foreach ($car->features as $feature)
                                    <li><span>{{ $feature->name }}:</span><i
                                            class="material-icons check">check_circle</i></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>


                </div>
                <div class="col-xl-4">
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">vendor information</h4>
                        </div>
                        <div class="common-card-body">
                            <div class="product-single-vendor">
                                {{-- <a class="vendor-grid-cover"
                                    href="{{ Route('vendor_details_users', $car->user->id) }}">
                                    <img src="{{ asset('public/storage/' . $car->user->cover_picture) }}"
                                        alt="cover">
                                </a>
                                <a class="vendor-grid-avatar"
                                    href="{{ Route('vendor_details_users', $car->user->id) }}">
                                    <img src="{{ asset('public/storage/' . $car->user->profile_picture) }}"
                                        alt="avatar">
                                </a> --}}
                                <ul class="vendor-grid-meta">
                                    <li class="profile"><i class="material-icons">account_circle</i><a
                                            href="{{ Route('vendor_details_users', $car->user->id) }}">{{ $car->user->vendor_name }}</a>
                                    </li>
                                    <li class="location"><i
                                            class="material-icons">map</i><span>{{ $car->user->city }}</span></li>
                                    <li class="location"><i
                                            class="material-icons">phone</i><span>{{ $car->user->phone_no }}</span>
                                    </li>

                                    <li class="store"><i
                                            class="material-icons">store</i><span>{{ $car->user->account_type }}</span>
                                    </li>
                                </ul>
                                <div class="vendor-grid-action"><a
                                        href="{{ Route('vendor_details_users', $car->user->id) }}">visit
                                        profile</a>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">Reach out to buy car</h4>
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
    <section class="section-gap-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-head">
                        <div class="section-text">
                            <h2>related this vehicle</h2>

                        </div><a href="{{ Route('cars') }}" class="btn btn-inline"><i
                                class="material-icons">travel_explore</i><span>browse all</span></a>
                    </div>
                </div>
            </div>
            <div class="row related-slider slider-arrow">
                @foreach ($relatedCars as $relatedCar)
                    <div class="col">
                        <div class="product-grid-relatedCard">
                            <div class="product-grid-image">
                                <img src="{{ asset('public/storage/' . $relatedCar->image) }}" alt="feature" />
                                @if ($relatedCar->condition === 'new')
                                    <div class="product-grid-badge">
                                        <span class="badge new">{{ $relatedCar->condition }}</span>
                                    </div>
                                @else
                                    <div class="product-grid-badge">
                                        <span class="badge used">{{ $relatedCar->condition }}</span>
                                    </div>
                                @endif
                                <div class="product-grid-hints">
                                    <i
                                        class="material-icons">collections</i><span>{{ $relatedCar->images->count() }}</span>
                                </div>
                                <div class="product-grid-overlay">
                                    <div class="product-grid-vendor">
                                        <i class="material-icons">person</i><a
                                            href="{{ Route('vendor_details_users', $relatedCar->user->id) }}">by
                                            {{ $relatedCar->user->name }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-grid-content">
                                <div class="product-grid-group">
                                    <div class="product-grid-price">
                                        <span>AED{{ number_format($relatedCar->price, 2, '.', ',') }}/-</span><small>{{ $relatedCar->price_type }}</small>
                                    </div>
                                </div>
                                <div class="product-grid-meta">
                                    <h4>
                                        <a
                                            href="{{ Route('inventory_single', $relatedCar->id) }}">{{ $relatedCar->title }}</a>
                                    </h4>
                                </div>
                                <ul class="product-grid-extra">

                                    <li>
                                        <i class="material-icons">settings</i><span>{{ $relatedCar->mileage }}
                                            km</span>
                                    </li>
                                    <li>
                                        <i
                                            class="material-icons">local_gas_station</i><span>{{ $relatedCar->fuel }}</span>
                                    </li>
                                </ul>
                                <div class="product-grid-btn">
                                    <a href="{{ Route('inventory_single', $relatedCar->id) }}">
                                        <i class="material-icons">visibility</i>
                                        <span>details</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <div class="modal fade" id="modalContact">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Contact this vendor</h5><button type="button" class="material-icons"
                        data-bs-dismiss="modal">close</button>
                </div>
                <div class="modal-contact">
                    <ul>
                        <li><i
                                class="material-icons">description</i><span>info@example.com<br>carrer@example.com</span>
                        </li>
                        <li><i class="material-icons">perm_phone_msg</i><span>+91 987-654-3210<br>+91
                                987-654-5466</span></li>
                        <li><i class="material-icons">map</i><span>1Hd- 50, 010 Avenue, <br>NY 90001 United
                                States</span></li>
                    </ul><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.3406974350205!2d90.48469931445422!3d23.663771197998262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b0d5983f048d%3A0x754f30c82bcad3cd!2sJalkuri%20Bus%20Stop!5e0!3m2!1sen!2sbd!4v1605354966349!5m2!1sen!2sbd"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalReview">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Review (02)</h5><button type="button" class="material-icons"
                        data-bs-dismiss="modal">close</button>
                </div>
                <div class="modal-review">
                    <div class="product-single-meta-group"><span class="product-single-meta-price">$18,759/-
                            <small>negotiable</small></span>
                        <h1 class="product-single-meta-title">Mercedez benz super mclaren</h1>
                        <ul class="product-single-meta-list">
                            <li><i class="material-icons">account_circle</i><a href="profile.html">by autoland</a>
                            </li>
                            <li><i class="material-icons">watch_later</i><span>45 minute ago!</span></li>
                            <li><i class="material-icons">stars</i><span>(24) reviews</span></li>
                            <li><i class="material-icons">fmd_good</i><span>delpara, narayanganj</span></li>
                        </ul>
                    </div>
                    <ul class="review-list">
                        <li class="review-item">
                            <div class="review-group">
                                <div class="review-head">
                                    <div class="review-user"><a class="review-media" href="#"><img
                                                src="../images/avatar/01.jpg" alt="avatar"></a>
                                        <div class="review-meta">
                                            <h5>mahmudul hasan</h5><span>02 february 2022</span>
                                        </div>
                                    </div>
                                    <div class="review-widget"><a class="review-reply" href="#reviewForm"><i
                                                class="material-icons">reply</i><span>reply</span></a>
                                        <div class="review-action"><button type="button"
                                                class="review-action-btn"><i
                                                    class="material-icons">more_vert</i></button>
                                            <div class="review-action-list"><a href="#"><i
                                                        class="material-icons">edit</i><span>edit</span></a><a
                                                    href="#"><i
                                                        class="material-icons">delete</i><span>delete</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-body">
                                    <div class="review-star"><i class="material-icons active">star</i><i
                                            class="material-icons active">star</i><i
                                            class="material-icons active">star</i><i
                                            class="material-icons active">star</i><i
                                            class="material-icons active">star</i></div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quo nostrum dolore
                                        fugiat ducimus labore debitis unde autem recusandae? Eius harum tempora quis
                                        minima, adipisci natus quod magni omnis quas.</p>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <div class="review-group">
                                        <div class="review-head">
                                            <div class="review-user"><a class="review-media" href="#"><img
                                                        src="../images/avatar/02.jpg" alt="avatar"></a>
                                                <div class="review-meta">
                                                    <h5>tahmina bonny</h5><span><b>vendor</b>02 february 2022</span>
                                                </div>
                                            </div>
                                            <div class="review-widget"><a class="review-reply" href="#reviewForm"><i
                                                        class="material-icons">reply</i><span>reply</span></a>
                                                <div class="review-action"><button type="button"
                                                        class="review-action-btn"><i
                                                            class="material-icons">more_vert</i></button>
                                                    <div class="review-action-list"><a href="#"><i
                                                                class="material-icons">edit</i><span>edit</span></a><a
                                                            href="#"><i
                                                                class="material-icons">delete</i><span>delete</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-body">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quo
                                                nostrum dolore fugiat ducimus labore debitis unde autem recusandae? Eius
                                                harum tempora quis minima, adipisci natus quod magni omnis quas.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="review-item">
                            <div class="review-head">
                                <div class="review-user"><a class="review-media" href="#"><img
                                            src="../images/avatar/04.jpg" alt="avatar"></a>
                                    <div class="review-meta">
                                        <h5>khadija labonno</h5><span>02 february 2022</span>
                                    </div>
                                </div>
                                <div class="review-widget"><a class="review-reply" href="#reviewForm"><i
                                            class="material-icons">reply</i><span>reply</span></a>
                                    <div class="review-action"><button type="button" class="review-action-btn"><i
                                                class="material-icons">more_vert</i></button>
                                        <div class="review-action-list"><a href="#"><i
                                                    class="material-icons">edit</i><span>edit</span></a><a
                                                href="#"><i
                                                    class="material-icons">delete</i><span>delete</span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="review-body">
                                <div class="review-star"><i class="material-icons active">star</i><i
                                        class="material-icons active">star</i><i
                                        class="material-icons active">star</i><i
                                        class="material-icons active">star</i><i class="material-icons">star</i>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quo nostrum dolore
                                    fugiat ducimus labore debitis unde autem recusandae? Eius harum tempora quis minima,
                                    adipisci natus quod magni omnis quas.</p>
                            </div>
                        </li>
                    </ul>
                    <form class="form-container" id="reviewForm">
                        <h3 class="form-title">share your thoughts</h3>
                        <div class="star-rating"><input type="radio" name="rating" id="star-1"><label
                                for="star-1"></label><input type="radio" name="rating" id="star-2"><label
                                for="star-2"></label><input type="radio" name="rating" id="star-3"><label
                                for="star-3"></label><input type="radio" name="rating" id="star-4"><label
                                for="star-4"></label><input type="radio" name="rating" id="star-5"><label
                                for="star-5"></label></div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group"><input type="text" class="form-control"
                                        placeholder="Enter your name"></div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group"><input type="email" class="form-control"
                                        placeholder="Enter your email"></div>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Write something here!"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12"><button class="form-btn" type="submit">drop your
                                    review</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalQuery">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">query this vehicle</h5><button type="button" class="material-icons"
                        data-bs-dismiss="modal">close</button>
                </div>
                <div class="modal-product-single-form">
                    <form class="container">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="form-group"><label class="form-label">Enter your name</label><input
                                        type="text" class="form-control"></div>
                            </div>
                            <div class="col-xl-4">
                                <div class="form-group"><label class="form-label">Enter your email </label><input
                                        type="email" class="form-control"></div>
                            </div>
                            <div class="col-xl-4">
                                <div class="form-group"><label class="form-label">Enter your number</label><input
                                        type="tel" class="form-control"></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label class="form-label">Describe your message</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12"><button class="form-btn" type="submit">send to vendor</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalOffer">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Make an offer & price</h5><button type="button" class="material-icons"
                        data-bs-dismiss="modal">close</button>
                </div>
                <div class="modal-product-single-form">
                    <form class="container">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group"><label class="form-label">Enter your name</label><input
                                        type="text" class="form-control"></div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group"><label class="form-label">Enter your email </label><input
                                        type="email" class="form-control"></div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group"><label class="form-label">Enter your number</label><input
                                        type="tel" class="form-control"></div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group"><label class="form-label">Enter your offer
                                        price</label><input type="number" class="form-control"></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label class="form-label">Describe your message</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12"><button class="form-btn" type="submit">send to vendor</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalSchedule">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">test drive schedule</h5><button type="button" class="material-icons"
                        data-bs-dismiss="modal">close</button>
                </div>
                <div class="modal-product-single-form">
                    <form class="container">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group"><label class="form-label">Enter your name</label><input
                                        type="text" class="form-control"></div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group"><label class="form-label">Enter your email </label><input
                                        type="email" class="form-control"></div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group"><label class="form-label">Enter your number</label><input
                                        type="tel" class="form-control"></div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group"><label class="form-label">Enter test drive
                                        schedule</label><input type="datetime-local" class="form-control"></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label class="form-label">Describe your message</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12"><button class="form-btn" type="submit">send to vendor</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalReport">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">report this vehicle</h5><button type="button" class="material-icons"
                        data-bs-dismiss="modal">close</button>
                </div>
                <div class="modal-product-single-form">
                    <form class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group"><label class="form-label">Select the reason
                                        category</label><select class="form-select">
                                        <option selected>---</option>
                                        <option>Lorem ipsum dolor sit amet</option>
                                        <option>Lorem ipsum dolor consectetur adipisicin</option>
                                        <option>Lorem ipsum consectetur adipisicing oluptate sunt</option>
                                    </select></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label class="form-label">Describe the reason</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12"><button class="form-btn" type="submit">send authority</button>
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
