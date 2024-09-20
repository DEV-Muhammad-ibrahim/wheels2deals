@include('layouts.head')

<body>
    <div class="backdrop"></div>
    @include('layouts.header')
    @include('layouts.navbar')
    @include('layouts.widget')
    <section class="section-gap-100">
        <div style="background: url(../images/banner/single/01.jpg) no-repeat center / cover;">
            <div class="single-banner">
                <div class="container">
                    <h2>vendor list page</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">vendor-list</li>
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
                        <form class="vendor-widget-form"><input type="text" placeholder="Search Vendor"><button
                                type="submit" class="material-icons">search</button></form>
                    </div>
                    <div class="vendor-widget">
                        <h6 class="vendor-widget-title">filter by types</h6>
                        <form>
                            <ul class="vendor-widget-list">
                                <li>
                                    <div class="vendor-widget-content"><input type="checkbox" id="type1"><label
                                            for="type1">individual</label></div><span
                                        class="vendor-widget-number">(13)</span>
                                </li>
                                <li>
                                    <div class="vendor-widget-content"><input type="checkbox" id="type2"><label
                                            for="type2">dealership</label></div><span
                                        class="vendor-widget-number">(28)</span>
                                </li>
                            </ul><button class="vendor-widget-btn"><i class="material-icons">delete</i><span>clear
                                    filter</span></button>
                        </form>
                    </div>
                    <div class="vendor-widget">
                        <h6 class="vendor-widget-title">Filter by Ratings</h6>
                        <form>
                            <ul class="vendor-widget-list">
                                <li>
                                    <div class="vendor-widget-content"><input type="checkbox" id="rate1"><label
                                            for="rate1"><i class="material-icons active">star</i><i
                                                class="material-icons active">star</i><i
                                                class="material-icons active">star</i><i
                                                class="material-icons active">star</i><i
                                                class="material-icons active">star</i></label></div><span
                                        class="vendor-widget-number">(13)</span>
                                </li>
                                <li>
                                    <div class="vendor-widget-content"><input type="checkbox" id="rate2"><label
                                            for="rate2"><i class="material-icons active">star</i><i
                                                class="material-icons active">star</i><i
                                                class="material-icons active">star</i><i
                                                class="material-icons active">star</i><i
                                                class="material-icons">star</i></label></div><span
                                        class="vendor-widget-number">(28)</span>
                                </li>
                                <li>
                                    <div class="vendor-widget-content"><input type="checkbox" id="rate3"><label
                                            for="rate3"><i class="material-icons active">star</i><i
                                                class="material-icons active">star</i><i
                                                class="material-icons active">star</i><i
                                                class="material-icons">star</i><i
                                                class="material-icons">star</i></label></div><span
                                        class="vendor-widget-number">(35)</span>
                                </li>
                                <li>
                                    <div class="vendor-widget-content"><input type="checkbox" id="rate4"><label
                                            for="rate4"><i class="material-icons active">star</i><i
                                                class="material-icons active">star</i><i
                                                class="material-icons">star</i><i class="material-icons">star</i><i
                                                class="material-icons">star</i></label></div><span
                                        class="vendor-widget-number">(47)</span>
                                </li>
                                <li>
                                    <div class="vendor-widget-content"><input type="checkbox" id="rate5"><label
                                            for="rate5"><i class="material-icons active">star</i><i
                                                class="material-icons">star</i><i class="material-icons">star</i><i
                                                class="material-icons">star</i><i
                                                class="material-icons">star</i></label></div><span
                                        class="vendor-widget-number">(59)</span>
                                </li>
                            </ul><button class="vendor-widget-btn"><i class="material-icons">delete</i><span>clear
                                    filter</span></button>
                        </form>
                    </div>
                    <div class="vendor-widget">
                        <h6 class="vendor-widget-title">Filter by cities</h6>
                        <form><input class="vendor-widget-search" type="text" placeholder="Search...">
                            <ul class="vendor-widget-list vendor-widget-scroll">
                                <li>
                                    <div class="vendor-widget-content"><input type="checkbox" id="city1"><label
                                            for="city1">New York</label></div><span
                                        class="vendor-widget-number">(13)</span>
                                </li>
                                <li>
                                    <div class="vendor-widget-content"><input type="checkbox" id="city2"><label
                                            for="city2">Los Angeles</label></div><span
                                        class="vendor-widget-number">(28)</span>
                                </li>
                                <li>
                                    <div class="vendor-widget-content"><input type="checkbox" id="city3"><label
                                            for="city3">Chicago</label></div><span
                                        class="vendor-widget-number">(35)</span>
                                </li>
                                <li>
                                    <div class="vendor-widget-content"><input type="checkbox" id="city4"><label
                                            for="city4">Houston</label></div><span
                                        class="vendor-widget-number">(35)</span>
                                </li>
                                <li>
                                    <div class="vendor-widget-content"><input type="checkbox" id="city5"><label
                                            for="city5">Phoenix</label></div><span
                                        class="vendor-widget-number">(47)</span>
                                </li>
                                <li>
                                    <div class="vendor-widget-content"><input type="checkbox" id="city6"><label
                                            for="city6">Philadelphia</label></div><span
                                        class="vendor-widget-number">(59)</span>
                                </li>
                                <li>
                                    <div class="vendor-widget-content"><input type="checkbox" id="city7"><label
                                            for="city7">San Antonio</label></div><span
                                        class="vendor-widget-number">(64)</span>
                                </li>
                                <li>
                                    <div class="vendor-widget-content"><input type="checkbox" id="city8"><label
                                            for="city8">Dallas</label></div><span
                                        class="vendor-widget-number">(77)</span>
                                </li>
                                <li>
                                    <div class="vendor-widget-content"><input type="checkbox" id="city9"><label
                                            for="city9">San Diego</label></div><span
                                        class="vendor-widget-number">(85)</span>
                                </li>
                                <li>
                                    <div class="vendor-widget-content"><input type="checkbox" id="city10"><label
                                            for="city10">Las Vegas</label></div><span
                                        class="vendor-widget-number">(85)</span>
                                </li>
                                <li>
                                    <div class="vendor-widget-content"><input type="checkbox" id="city11"><label
                                            for="city11">Columbus</label></div><span
                                        class="vendor-widget-number">(85)</span>
                                </li>
                                <li>
                                    <div class="vendor-widget-content"><input type="checkbox" id="city12"><label
                                            for="city12">Washington</label></div><span
                                        class="vendor-widget-number">(85)</span>
                                </li>
                                <li>
                                    <div class="vendor-widget-content"><input type="checkbox" id="city13"><label
                                            for="city13">Boston</label></div><span
                                        class="vendor-widget-number">(85)</span>
                                </li>
                            </ul><button class="vendor-widget-btn"><i class="material-icons">delete</i><span>clear
                                    filter</span></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="top-filter">
                                <div class="filter-show"><label class="filter-label">Show :</label><select
                                        class="form-select filter-select">
                                        <option value="1">12</option>
                                        <option value="2">24</option>
                                        <option value="3">36</option>
                                    </select></div>
                                <div class="filter-short"><label class="filter-label">Short by :</label><select
                                        class="form-select filter-select">
                                        <option selected>default</option>
                                        <option value="3">top ratings</option>
                                        <option value="1">top advertise</option>
                                        <option value="2">top vendors</option>
                                    </select></div>
                                <div class="filter-action"><a href="vendor-grid.html" title="Grid View"
                                        class="material-icons">grid_view</a><a href="vendor-list.html"
                                        title="List View" class="material-icons active">list_alt</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-1">
                        <div class="col">
                            <div class="vendor-list-card"><a class="vendor-list-cover" href="profile.html"><img
                                        src="../images/bg/cover.jpg" alt="cover"></a><a class="vendor-list-avatar"
                                    href="profile.html"><img src="../images/avatar/01.jpg" alt="avatar"></a>
                                <div class="vendor-list-group">
                                    <ul class="vendor-list-meta">
                                        <li><i class="pro material-icons">account_circle</i><a
                                                href="profile.html">person name</a></li>
                                        <li><i class="map material-icons">map</i><span>chashara, narayanganj</span>
                                        </li>
                                        <li><i class="star material-icons">star</i><span><b>4.9</b>/28 Ratings</span>
                                        </li>
                                        <li><i class="store material-icons">store</i><span>individual</span></li>
                                    </ul>
                                    <div class="vendor-list-action"><a href="profile.html">visit profile</a><button
                                            type="button" data-bs-toggle="modal" data-bs-target="#modalMessage">send
                                            message</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="vendor-list-card"><a class="vendor-list-cover" href="profile.html"><img
                                        src="../images/bg/cover.jpg" alt="cover"></a><a class="vendor-list-avatar"
                                    href="profile.html"><img src="../images/logo/01.jpg" alt="logo"></a>
                                <div class="vendor-list-group">
                                    <ul class="vendor-list-meta">
                                        <li><i class="pro material-icons">account_circle</i><a
                                                href="profile.html">brand name</a></li>
                                        <li><i class="map material-icons">map</i><span>chashara, narayanganj</span>
                                        </li>
                                        <li><i class="star material-icons">star</i><span><b>4.9</b>/28 Ratings</span>
                                        </li>
                                        <li><i class="store material-icons">store</i><span>dealership</span></li>
                                    </ul>
                                    <div class="vendor-list-action"><a href="profile.html">visit profile</a><button
                                            type="button" data-bs-toggle="modal" data-bs-target="#modalMessage">send
                                            message</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="vendor-list-card"><a class="vendor-list-cover" href="profile.html"><img
                                        src="../images/bg/cover.jpg" alt="cover"></a><a class="vendor-list-avatar"
                                    href="profile.html"><img src="../images/avatar/02.jpg" alt="avatar"></a>
                                <div class="vendor-list-group">
                                    <ul class="vendor-list-meta">
                                        <li><i class="pro material-icons">account_circle</i><a
                                                href="profile.html">person name</a></li>
                                        <li><i class="map material-icons">map</i><span>chashara, narayanganj</span>
                                        </li>
                                        <li><i class="star material-icons">star</i><span><b>4.9</b>/28 Ratings</span>
                                        </li>
                                        <li><i class="store material-icons">store</i><span>individual</span></li>
                                    </ul>
                                    <div class="vendor-list-action"><a href="profile.html">visit profile</a><button
                                            type="button" data-bs-toggle="modal" data-bs-target="#modalMessage">send
                                            message</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="vendor-list-card"><a class="vendor-list-cover" href="profile.html"><img
                                        src="../images/bg/cover.jpg" alt="cover"></a><a class="vendor-list-avatar"
                                    href="profile.html"><img src="../images/logo/02.jpg" alt="logo"></a>
                                <div class="vendor-list-group">
                                    <ul class="vendor-list-meta">
                                        <li><i class="pro material-icons">account_circle</i><a
                                                href="profile.html">brand name</a></li>
                                        <li><i class="map material-icons">map</i><span>chashara, narayanganj</span>
                                        </li>
                                        <li><i class="star material-icons">star</i><span><b>4.9</b>/28 Ratings</span>
                                        </li>
                                        <li><i class="store material-icons">store</i><span>dealership</span></li>
                                    </ul>
                                    <div class="vendor-list-action"><a href="profile.html">visit profile</a><button
                                            type="button" data-bs-toggle="modal" data-bs-target="#modalMessage">send
                                            message</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="vendor-list-card"><a class="vendor-list-cover" href="profile.html"><img
                                        src="../images/bg/cover.jpg" alt="cover"></a><a class="vendor-list-avatar"
                                    href="profile.html"><img src="../images/avatar/03.jpg" alt="avatar"></a>
                                <div class="vendor-list-group">
                                    <ul class="vendor-list-meta">
                                        <li><i class="pro material-icons">account_circle</i><a
                                                href="profile.html">person name</a></li>
                                        <li><i class="map material-icons">map</i><span>chashara, narayanganj</span>
                                        </li>
                                        <li><i class="star material-icons">star</i><span><b>4.9</b>/28 Ratings</span>
                                        </li>
                                        <li><i class="store material-icons">store</i><span>individual</span></li>
                                    </ul>
                                    <div class="vendor-list-action"><a href="profile.html">visit profile</a><button
                                            type="button" data-bs-toggle="modal" data-bs-target="#modalMessage">send
                                            message</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bottom-paginate mb-50">
                                <p class="page-info">Showing 12 of 60 Results</p>
                                <ul class="pagination">
                                    <li class="page-item"><a href="#"
                                            class="page-link material-icons">chevron_left</a></li>
                                    <li class="page-item"><a href="#" class="page-link active">01</a></li>
                                    <li class="page-item"><a href="#" class="page-link">02</a></li>
                                    <li class="page-item"><a href="#" class="page-link">03</a></li>
                                    <li class="page-item">...</li>
                                    <li class="page-item"><a href="#" class="page-link">45</a></li>
                                    <li class="page-item"><a href="#"
                                            class="page-link material-icons">chevron_right</a></li>
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
