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
                    <h2>faqs</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ Route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">faq</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="section-gap-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="faq-category">
                        <h3 class="faq-category-title">pricing faqs</h3>
                        <ul class="accordion-list">
                            <li class="accordion-item">
                                <div class="accordion-que">
                                    <h5>#1 Lorem ipsum dolor sit amet consectetur?</h5><i
                                        class="material-icons">expand_more</i>
                                </div>
                                <div class="accordion-ans">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea, aut quia
                                        perspiciatis, numquam assumenda possimus delectus modi doloribus maiores
                                        voluptatum enim voluptas accusamus alias nulla nostrum, ad quidem tempore.
                                        Assumenda, doloribus dolore. Blanditiis odit ipsa repellat officia vel saepe
                                        dolorem perferendis nam obcaecati corrupti pariatur, corporis voluptatem
                                        distinctio repellendus labore!</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-que">
                                    <h5>#2 Lorem ipsum dolor amet consectetur?</h5><i
                                        class="material-icons">expand_more</i>
                                </div>
                                <div class="accordion-ans">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur fuga quia
                                        asperiores aliquam cumque? Deserunt commodi saepe voluptates rem atque quisquam
                                        odit doloribus Voluptas nesciunt doloremque fuga non debitis asperiores.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-que">
                                    <h5>#3 Lorem ipsum dolor sit amet consectetur?</h5><i
                                        class="material-icons">expand_more</i>
                                </div>
                                <div class="accordion-ans">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur fuga quia
                                        asperiores aliquam cumque? Deserunt commodi saepe voluptates rem atque quisquam
                                        odit doloribus Voluptas nesciunt doloremque fuga non debitis asperiores.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-que">
                                    <h5>#4 Lorem ipsum, dolor sit amet consectetur?</h5><i
                                        class="material-icons">expand_more</i>
                                </div>
                                <div class="accordion-ans">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur fuga quia
                                        asperiores aliquam cumque? Deserunt commodi saepe voluptates rem atque quisquam
                                        odit doloribus Voluptas nesciunt doloremque fuga non debitis asperiores.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-que">
                                    <h5>#5 Lorem ipsum dolor sit amet consectetur?</h5><i
                                        class="material-icons">expand_more</i>
                                </div>
                                <div class="accordion-ans">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur fuga quia
                                        asperiores aliquam cumque? Deserunt commodi saepe voluptates rem atque quisquam
                                        odit doloribus Voluptas nesciunt doloremque fuga non debitis asperiores.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-category">
                        <h3 class="faq-category-title">vehicle faqs</h3>
                        <ul class="accordion-list">
                            <li class="accordion-item">
                                <div class="accordion-que">
                                    <h5>#1 Lorem ipsum dolor sit amet consectetur?</h5><i
                                        class="material-icons">expand_more</i>
                                </div>
                                <div class="accordion-ans">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea, aut quia
                                        perspiciatis, numquam assumenda possimus delectus modi doloribus maiores
                                        voluptatum enim voluptas accusamus alias nulla nostrum, ad quidem tempore.
                                        Assumenda, doloribus dolore. Blanditiis odit ipsa repellat officia vel saepe
                                        dolorem perferendis nam obcaecati corrupti pariatur, corporis voluptatem
                                        distinctio repellendus labore!</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-que">
                                    <h5>#2 Lorem ipsum dolor amet consectetur?</h5><i
                                        class="material-icons">expand_more</i>
                                </div>
                                <div class="accordion-ans">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur fuga quia
                                        asperiores aliquam cumque? Deserunt commodi saepe voluptates rem atque quisquam
                                        odit doloribus Voluptas nesciunt doloremque fuga non debitis asperiores.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-que">
                                    <h5>#3 Lorem ipsum dolor sit amet consectetur?</h5><i
                                        class="material-icons">expand_more</i>
                                </div>
                                <div class="accordion-ans">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur fuga quia
                                        asperiores aliquam cumque? Deserunt commodi saepe voluptates rem atque quisquam
                                        odit doloribus Voluptas nesciunt doloremque fuga non debitis asperiores.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-que">
                                    <h5>#4 Lorem ipsum, dolor sit amet consectetur?</h5><i
                                        class="material-icons">expand_more</i>
                                </div>
                                <div class="accordion-ans">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur fuga quia
                                        asperiores aliquam cumque? Deserunt commodi saepe voluptates rem atque quisquam
                                        odit doloribus Voluptas nesciunt doloremque fuga non debitis asperiores.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-que">
                                    <h5>#5 Lorem ipsum dolor sit amet consectetur?</h5><i
                                        class="material-icons">expand_more</i>
                                </div>
                                <div class="accordion-ans">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur fuga quia
                                        asperiores aliquam cumque? Deserunt commodi saepe voluptates rem atque quisquam
                                        odit doloribus Voluptas nesciunt doloremque fuga non debitis asperiores.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-category">
                        <h3 class="faq-category-title">advertise faqs</h3>
                        <ul class="accordion-list">
                            <li class="accordion-item">
                                <div class="accordion-que">
                                    <h5>#1 Lorem ipsum dolor sit amet consectetur?</h5><i
                                        class="material-icons">expand_more</i>
                                </div>
                                <div class="accordion-ans">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea, aut quia
                                        perspiciatis, numquam assumenda possimus delectus modi doloribus maiores
                                        voluptatum enim voluptas accusamus alias nulla nostrum, ad quidem tempore.
                                        Assumenda, doloribus dolore. Blanditiis odit ipsa repellat officia vel saepe
                                        dolorem perferendis nam obcaecati corrupti pariatur, corporis voluptatem
                                        distinctio repellendus labore!</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-que">
                                    <h5>#2 Lorem ipsum dolor amet consectetur?</h5><i
                                        class="material-icons">expand_more</i>
                                </div>
                                <div class="accordion-ans">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur fuga quia
                                        asperiores aliquam cumque? Deserunt commodi saepe voluptates rem atque quisquam
                                        odit doloribus Voluptas nesciunt doloremque fuga non debitis asperiores.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-que">
                                    <h5>#3 Lorem ipsum dolor sit amet consectetur?</h5><i
                                        class="material-icons">expand_more</i>
                                </div>
                                <div class="accordion-ans">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur fuga quia
                                        asperiores aliquam cumque? Deserunt commodi saepe voluptates rem atque quisquam
                                        odit doloribus Voluptas nesciunt doloremque fuga non debitis asperiores.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-que">
                                    <h5>#4 Lorem ipsum, dolor sit amet consectetur?</h5><i
                                        class="material-icons">expand_more</i>
                                </div>
                                <div class="accordion-ans">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur fuga quia
                                        asperiores aliquam cumque? Deserunt commodi saepe voluptates rem atque quisquam
                                        odit doloribus Voluptas nesciunt doloremque fuga non debitis asperiores.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-que">
                                    <h5>#5 Lorem ipsum dolor sit amet consectetur?</h5><i
                                        class="material-icons">expand_more</i>
                                </div>
                                <div class="accordion-ans">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur fuga quia
                                        asperiores aliquam cumque? Deserunt commodi saepe voluptates rem atque quisquam
                                        odit doloribus Voluptas nesciunt doloremque fuga non debitis asperiores.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-category">
                        <h3 class="faq-category-title">privacy faqs</h3>
                        <ul class="accordion-list">
                            <li class="accordion-item">
                                <div class="accordion-que">
                                    <h5>#1 Lorem ipsum dolor sit amet consectetur?</h5><i
                                        class="material-icons">expand_more</i>
                                </div>
                                <div class="accordion-ans">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea, aut quia
                                        perspiciatis, numquam assumenda possimus delectus modi doloribus maiores
                                        voluptatum enim voluptas accusamus alias nulla nostrum, ad quidem tempore.
                                        Assumenda, doloribus dolore. Blanditiis odit ipsa repellat officia vel saepe
                                        dolorem perferendis nam obcaecati corrupti pariatur, corporis voluptatem
                                        distinctio repellendus labore!</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-que">
                                    <h5>#2 Lorem ipsum dolor amet consectetur?</h5><i
                                        class="material-icons">expand_more</i>
                                </div>
                                <div class="accordion-ans">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur fuga quia
                                        asperiores aliquam cumque? Deserunt commodi saepe voluptates rem atque quisquam
                                        odit doloribus Voluptas nesciunt doloremque fuga non debitis asperiores.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-que">
                                    <h5>#3 Lorem ipsum dolor sit amet consectetur?</h5><i
                                        class="material-icons">expand_more</i>
                                </div>
                                <div class="accordion-ans">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur fuga quia
                                        asperiores aliquam cumque? Deserunt commodi saepe voluptates rem atque quisquam
                                        odit doloribus Voluptas nesciunt doloremque fuga non debitis asperiores.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-que">
                                    <h5>#4 Lorem ipsum, dolor sit amet consectetur?</h5><i
                                        class="material-icons">expand_more</i>
                                </div>
                                <div class="accordion-ans">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur fuga quia
                                        asperiores aliquam cumque? Deserunt commodi saepe voluptates rem atque quisquam
                                        odit doloribus Voluptas nesciunt doloremque fuga non debitis asperiores.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <div class="accordion-que">
                                    <h5>#5 Lorem ipsum dolor sit amet consectetur?</h5><i
                                        class="material-icons">expand_more</i>
                                </div>
                                <div class="accordion-ans">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur fuga quia
                                        asperiores aliquam cumque? Deserunt commodi saepe voluptates rem atque quisquam
                                        odit doloribus Voluptas nesciunt doloremque fuga non debitis asperiores.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-12">
                    <form class="faq-form">
                        <h3 class="form-title">Can't find your question?</h3>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group"><input class="form-control" type="text"
                                        placeholder="Enter your name"></div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="form-group"><input class="form-control" type="text"
                                        placeholder="Enter your mail"></div>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Write your thoughts"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12"><button class="form-btn" type="submit">drop your
                                    question</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
    @include('layouts.script')
</body>


</html>
