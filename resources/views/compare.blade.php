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
                <h2 class="mc-breadcrumb-title">user compares</h2>
                <ul class="mc-breadcrumb-list">
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="index.html">home</a></li>
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="dashboard.html">dashboard</a>
                    </li>
                    <li class="mc-breadcrumb-item">compare</li>
                </ul>
            </div>
        </div>
    </section>
    <div class="section-gap-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="table-responsive-md">
                        <table class="table table-bordered mb-0 compare-table">
                            <thead>
                                <tr>
                                    <th>comparison</th>
                                    <th>Mercedez benz super mclaren</th>
                                    <th>Rolls Royce Motor wagon Car</th>
                                    <th>Hyundai Tucson Midsize jeep</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>images</th>
                                    <td><img class="compare-table-img" src="../images/product/01.jpg" alt="product">
                                    </td>
                                    <td><img class="compare-table-img" src="../images/product/02.jpg" alt="product">
                                    </td>
                                    <td><img class="compare-table-img" src="../images/product/03.jpg" alt="product">
                                    </td>
                                </tr>
                                <tr>
                                    <th>condition</th>
                                    <td><span class="badge new">new</span></td>
                                    <td><span class="badge used">used</span></td>
                                    <td><span class="badge new">new</span></td>
                                </tr>
                                <tr>
                                    <th>body type</th>
                                    <td><span class="compare-table-text">Hatchback</span></td>
                                    <td><span class="compare-table-text">wagon</span></td>
                                    <td><span class="compare-table-text">convertible</span></td>
                                </tr>
                                <tr>
                                    <th>make brand</th>
                                    <td><span class="compare-table-text">mercedes</span></td>
                                    <td><span class="compare-table-text">lamborghini</span></td>
                                    <td><span class="compare-table-text">Hyundai</span></td>
                                </tr>
                                <tr>
                                    <th>build year</th>
                                    <td><span class="compare-table-text">2022</span></td>
                                    <td><span class="compare-table-text">2013</span></td>
                                    <td><span class="compare-table-text">2018</span></td>
                                </tr>
                                <tr>
                                    <th>fuel type</th>
                                    <td><span class="compare-table-text">disel</span></td>
                                    <td><span class="compare-table-text">petrol</span></td>
                                    <td><span class="compare-table-text">disel</span></td>
                                </tr>
                                <tr>
                                    <th>colour</th>
                                    <td><span class="compare-table-text">brown</span></td>
                                    <td><span class="compare-table-text">orange</span></td>
                                    <td><span class="compare-table-text">blackish</span></td>
                                </tr>
                                <tr>
                                    <th>mileage</th>
                                    <td><span class="compare-table-text">17.20 kmpl</span></td>
                                    <td><span class="compare-table-text">14.67 kmpl</span></td>
                                    <td><span class="compare-table-text">12.89 kmpl</span></td>
                                </tr>
                                <tr>
                                    <th>price</th>
                                    <td><span class="compare-table-price">$72,676/-</span></td>
                                    <td><span class="compare-table-price">$69,435/-</span></td>
                                    <td><span class="compare-table-price">$49,569/-</span></td>
                                </tr>
                                <tr>
                                    <th>price type</th>
                                    <td><span class="compare-table-text">negotiable</span></td>
                                    <td><span class="compare-table-text">fixed</span></td>
                                    <td><span class="compare-table-text">negotiable</span></td>
                                </tr>
                                <tr>
                                    <th>review</th>
                                    <td>
                                        <div class="compare-table-review">
                                            <ul>
                                                <li class="material-icons active">star</li>
                                                <li class="material-icons active">star</li>
                                                <li class="material-icons active">star</li>
                                                <li class="material-icons active">star</li>
                                                <li class="material-icons">star</li>
                                            </ul><a href="review.html"><b>4.09 / </b>14 reviews</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="compare-table-review">
                                            <ul>
                                                <li class="material-icons active">star</li>
                                                <li class="material-icons active">star</li>
                                                <li class="material-icons active">star</li>
                                                <li class="material-icons active">star</li>
                                                <li class="material-icons">star</li>
                                            </ul><a href="review.html"><b>5.00 / </b>08 reviews</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="compare-table-review">
                                            <ul>
                                                <li class="material-icons active">star</li>
                                                <li class="material-icons active">star</li>
                                                <li class="material-icons active">star</li>
                                                <li class="material-icons active">star</li>
                                                <li class="material-icons">star</li>
                                            </ul><a href="review.html"><b>4.09 / </b>25 reviews</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>vendor</th>
                                    <td><a href="profile.html" class="compare-table-vendor">autoland</a></td>
                                    <td><a href="profile.html" class="compare-table-vendor">carfixer</a></td>
                                    <td><a href="profile.html" class="compare-table-vendor">speedride</a></td>
                                </tr>
                                <tr>
                                    <th>vendor type</th>
                                    <td><span class="compare-table-text">individual</span></td>
                                    <td><span class="compare-table-text">dealership</span></td>
                                    <td><span class="compare-table-text">individual</span></td>
                                </tr>
                                <tr>
                                    <th>location</th>
                                    <td><span class="compare-table-text">delpara, narayanganj</span></td>
                                    <td><span class="compare-table-text">faridganj, chandpur</span></td>
                                    <td><span class="compare-table-text">framgate, dhaka</span></td>
                                </tr>
                                <tr>
                                    <th>action</th>
                                    <td><a href="#" class="compare-table-remove">remove</a></td>
                                    <td><a href="#" class="compare-table-remove">remove</a></td>
                                    <td><a href="#" class="compare-table-remove">remove</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
    @include('layouts.script')
</body>


</html>
