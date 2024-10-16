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
                <h2 class="mc-breadcrumb-title">user dashboard</h2>
                <ul class="mc-breadcrumb-list">
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="index.html">home</a></li>
                    <li class="mc-breadcrumb-item">dashboard</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section-gap-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">announcement</h4>
                        </div>
                        <div class="common-card-body">
                            <ul class="dashboard-announce-list">
                                <li><b>Lorem ipsum dolor, sit amet consectetur adipisicing elit -</b>mollitia
                                    consectetur reiciendis voluptas repellat quam animi necessitatibus architecto
                                    obcaecati totam ducimus dolore commodi quaera.</li>
                                <li><b>Lorem ipsum dolor, sit amet consectetur adipisicing elit -</b>Velrem ullam error
                                    mollitia consectetur reiciendis voluptas repellat quam animi necessitatibus
                                    architecto obcaecati totam ducimus <a href="#">asperiores</a>, dolore commodi
                                    quaera.</li>
                                <li><b>Lorem ipsum dolor, sit amet consectetur adipisicing elit -</b>Vel rem ullam,
                                    error mollitia ex consectetur reiciendis voluptas repellat quam animi necessitatibus
                                    architecto obcaecati totam ducimus dolore commodi quaera.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">comments (03)</h4><select
                                class="form-select common-card-header-select">
                                <option value="unread" selected>unread comments</option>
                                <option value="read">read comments</option>
                                <option value="all">all comments</option>
                            </select>
                        </div>
                        <ul class="comment-list">
                            <li class="comment-item">
                                <div class="comment-group">
                                    <div class="comment-head">
                                        <div class="comment-user"><a class="comment-media" href="#"><img
                                                    src="../images/avatar/01.jpg" alt="avatar"></a>
                                            <div class="comment-meta">
                                                <h5>mahmudul hasan</h5><span>02 february 2022</span>
                                            </div>
                                        </div>
                                        <div class="comment-widget"><a class="comment-reply" href="#commentForm"><i
                                                    class="material-icons">reply</i><span>reply</span></a>
                                            <div class="comment-action"><button type="button"
                                                    class="comment-action-btn"><i
                                                        class="material-icons">more_vert</i></button>
                                                <div class="comment-action-list"><a href="#"><i
                                                            class="material-icons">delete</i><span>delete</span></a><a
                                                        href="#"><i
                                                            class="material-icons">report</i><span>report</span></a><a
                                                        href="#"><i
                                                            class="material-icons">gpp_bad</i><span>block</span></a><a
                                                        href="#"><i
                                                            class="material-icons">edit</i><span>edit</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-body">
                                        <h6>comment on - <a href="inventory-single.html">Mercedez Benz Super
                                                Mclaren</a></h6>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quo nostrum
                                            dolore fugiat ducimus labore debitis unde autem recusandae? Eius harum
                                            tempora quis minima, adipisci natus quod magni omnis quas.</p>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <div class="comment-group">
                                            <div class="comment-head">
                                                <div class="comment-user"><a class="comment-media" href="#"><img
                                                            src="../images/avatar/02.jpg" alt="avatar"></a>
                                                    <div class="comment-meta">
                                                        <h5>tahmina bonny</h5><span><b>vendor</b>02 february 2022</span>
                                                    </div>
                                                </div>
                                                <div class="comment-widget"><a class="comment-reply"
                                                        href="#commentForm"><i
                                                            class="material-icons">reply</i><span>reply</span></a>
                                                    <div class="comment-action"><button type="button"
                                                            class="comment-action-btn"><i
                                                                class="material-icons">more_vert</i></button>
                                                        <div class="comment-action-list"><a href="#"><i
                                                                    class="material-icons">delete</i><span>delete</span></a><a
                                                                href="#"><i
                                                                    class="material-icons">report</i><span>report</span></a><a
                                                                href="#"><i
                                                                    class="material-icons">gpp_bad</i><span>block</span></a><a
                                                                href="#"><i
                                                                    class="material-icons">edit</i><span>edit</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-body">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quo
                                                    nostrum dolore fugiat ducimus labore debitis unde autem recusandae?
                                                    Eius harum tempora quis minima, adipisci natus quod magni omnis
                                                    quas.</p>
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="comment-group">
                                                    <div class="comment-head">
                                                        <div class="comment-user"><a class="comment-media"
                                                                href="#"><img src="../images/avatar/01.jpg"
                                                                    alt="avatar"></a>
                                                            <div class="comment-meta">
                                                                <h5>mahmudul hasan</h5><span>02 february 2022</span>
                                                            </div>
                                                        </div>
                                                        <div class="comment-widget"><a class="comment-reply"
                                                                href="#commentForm"><i
                                                                    class="material-icons">reply</i><span>reply</span></a>
                                                            <div class="comment-action"><button type="button"
                                                                    class="comment-action-btn"><i
                                                                        class="material-icons">more_vert</i></button>
                                                                <div class="comment-action-list"><a href="#"><i
                                                                            class="material-icons">delete</i><span>delete</span></a><a
                                                                        href="#"><i
                                                                            class="material-icons">report</i><span>report</span></a><a
                                                                        href="#"><i
                                                                            class="material-icons">gpp_bad</i><span>block</span></a><a
                                                                        href="#"><i
                                                                            class="material-icons">edit</i><span>edit</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-body">
                                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                            Eius iure sed, delectus mollitia minima eum sit harum amet.
                                                            Id, illo. Error cumque voluptates at eum.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="comment-group">
                                            <div class="comment-head">
                                                <div class="comment-user"><a class="comment-media"
                                                        href="#"><img src="../images/avatar/03.jpg"
                                                            alt="avatar"></a>
                                                    <div class="comment-meta">
                                                        <h5>shahin chowdhury</h5><span>02 february 2022</span>
                                                    </div>
                                                </div>
                                                <div class="comment-widget"><a class="comment-reply"
                                                        href="#commentForm"><i
                                                            class="material-icons">reply</i><span>reply</span></a>
                                                    <div class="comment-action"><button type="button"
                                                            class="comment-action-btn"><i
                                                                class="material-icons">more_vert</i></button>
                                                        <div class="comment-action-list"><a href="#"><i
                                                                    class="material-icons">delete</i><span>delete</span></a><a
                                                                href="#"><i
                                                                    class="material-icons">report</i><span>report</span></a><a
                                                                href="#"><i
                                                                    class="material-icons">gpp_bad</i><span>block</span></a><a
                                                                href="#"><i
                                                                    class="material-icons">edit</i><span>edit</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-body">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quo
                                                    nostrum dolore fugiat ducimus labore debitis unde autem recusandae?
                                                    Eius harum tempora quis minima, adipisci natus quod magni omnis
                                                    quas.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="comment-item">
                                <div class="comment-head">
                                    <div class="comment-user"><a class="comment-media" href="#"><img
                                                src="../images/avatar/04.jpg" alt="avatar"></a>
                                        <div class="comment-meta">
                                            <h5>khadija labonno</h5><span>02 february 2022</span>
                                        </div>
                                    </div>
                                    <div class="comment-widget"><a class="comment-reply" href="#commentForm"><i
                                                class="material-icons">reply</i><span>reply</span></a>
                                        <div class="comment-action"><button type="button"
                                                class="comment-action-btn"><i
                                                    class="material-icons">more_vert</i></button>
                                            <div class="comment-action-list"><a href="#"><i
                                                        class="material-icons">delete</i><span>delete</span></a><a
                                                    href="#"><i
                                                        class="material-icons">report</i><span>report</span></a><a
                                                    href="#"><i
                                                        class="material-icons">gpp_bad</i><span>block</span></a><a
                                                    href="#"><i
                                                        class="material-icons">edit</i><span>edit</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-body">
                                    <h6>comment on - <a href="inventory-single.html">delux audi family car</a></h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quo nostrum dolore
                                        fugiat ducimus labore debitis unde autem recusandae? Eius harum tempora quis
                                        minima, adipisci natus quod magni omnis quas.</p>
                                </div>
                            </li>
                            <li class="comment-item">
                                <div class="comment-head">
                                    <div class="comment-user"><a class="comment-media" href="#"><img
                                                src="../images/avatar/05.jpg" alt="avatar"></a>
                                        <div class="comment-meta">
                                            <h5>burhan hawladar</h5><span>02 february 2022</span>
                                        </div>
                                    </div>
                                    <div class="comment-widget"><a class="comment-reply" href="#commentForm"><i
                                                class="material-icons">reply</i><span>reply</span></a>
                                        <div class="comment-action"><button type="button"
                                                class="comment-action-btn"><i
                                                    class="material-icons">more_vert</i></button>
                                            <div class="comment-action-list"><a href="#"><i
                                                        class="material-icons">delete</i><span>delete</span></a><a
                                                    href="#"><i
                                                        class="material-icons">report</i><span>report</span></a><a
                                                    href="#"><i
                                                        class="material-icons">gpp_bad</i><span>block</span></a><a
                                                    href="#"><i
                                                        class="material-icons">edit</i><span>edit</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-body">
                                    <h6>comment on - <a href="inventory-single.html">toyota unique velfire micro</a>
                                    </h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quo nostrum dolore
                                        fugiat ducimus labore debitis unde autem recusandae? Eius harum tempora quis
                                        minima, adipisci natus quod magni omnis quas.</p>
                                </div>
                            </li>
                        </ul>
                        <form class="form-container" id="commentForm">
                            <h3 class="form-title">Write or reply your comment</h3>
                            <div class="row">
                                <div class="col-lg-12 col-xl-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Write your comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-12"><button class="form-btn" type="submit">drop your
                                        comment</button></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">advertise info</h4>
                        </div>
                        <div class="common-card-body">
                            <ul class="dashboard-specify-list">
                                <li><span>running ads:</span><span>03</span></li>
                                <li><span>total ads:</span><span>245</span></li>
                                <li><span>starter ads:</span><span>68</span></li>
                                <li><span>business ads:</span><span>177</span></li>
                                <li><span>premium ads:</span><span>82</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">top cities visitors</h4>
                        </div>
                        <div class="common-card-body">
                            <ul class="dashboard-specify-list">
                                <li><span>New York:</span><span>65</span></li>
                                <li><span>Chicago:</span><span>49</span></li>
                                <li><span>Los Angeles:</span><span>38</span></li>
                                <li><span>Houston:</span><span>20</span></li>
                                <li><span>Dallas:</span><span>17</span></li>
                                <li><span>Phoenix:</span><span>09</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">fun factor</h4>
                        </div>
                        <div class="common-card-body">
                            <div class="dashboard-article">
                                <p>Your last ad running was 3 days ago and only have 5 hours left until your last ad
                                    expires.</p>
                            </div>
                        </div>
                    </div>
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">vendor resources</h4>
                        </div>
                        <div class="common-card-body">
                            <ul class="dasboard-resource-list">
                                <li><i class="material-icons">open_in_new</i><a href="#">Consectetur adipisicing
                                        veniet</a></li>
                                <li><i class="material-icons">open_in_new</i><a href="#">Dolor consectetur
                                        adipisicing</a></li>
                                <li><i class="material-icons">open_in_new</i><a href="#">Possimus lorem ipsum
                                        sectetur</a></li>
                                <li><i class="material-icons">open_in_new</i><a href="#">Incidunt luptate soluta
                                        provident</a></li>
                                <li><i class="material-icons">open_in_new</i><a href="#">Asperiores eveniet
                                        dignissimos rerum optio assumenda.</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">previous announcement</h4>
                        </div>
                        <div class="common-card-body"><label class="dashboard-announce-date">december 02</label>
                            <ul class="dashboard-announce-list">
                                <li><b>Lorem ipsum dolor, sit amet consectetur adipisicing elit -</b>mollitia
                                    consectetur voluptas repellat quam animi architecto obcaecati totam ducimus commodi
                                    quaera.</li>
                                <li><b>Lorem ipsum dolor, sit amet consectetur adipisicing elit -</b>Velrem ullam error
                                    mollitia consectetur reiciendis voluptas repellat quam animi necessitatibus
                                    architecto obcaecati totam ducimus <a href="#">asperiores</a>commodi quaera.
                                </li>
                            </ul><label class="dashboard-announce-date">november 18</label>
                            <ul class="dashboard-announce-list">
                                <li><b>Lorem ipsum dolor, sit amet consectetur adipisicing elit -</b>mollitia
                                    consectetur reiciendis voluptas repellat quam animi necessitatibus architecto
                                    obcaecati totam ducimus dolore commodi Lorem ipsum dolor sit amet</li>
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
