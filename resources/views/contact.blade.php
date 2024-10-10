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
                    <h2>contact us</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ Route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active ml-3" aria-current="page">contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="section-gap-100">
        <div class="container">
            <div class="row content-reverse">
                <div class="col-lg-6">
                    <div class="contact-map"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1861056.6117736322!2d52.62933082298113!3d24.350804941418325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e48dfb1ab12bd%3A0x33d32f56c0080aa7!2sUnited%20Arab%20Emirates!5e0!3m2!1sen!2s!4v1727177976982!5m2!1sen!2s"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="contact-form">
                        <h3 class="contact-form-title">Drop Your Thoughts</h3>
                        <div class="row">
                            <div class="form-group"><input class="form-control" type="text"
                                    placeholder="Enter your name"></div>
                            <div class="form-group"><input class="form-control" type="email"
                                    placeholder="Enter your email"></div>
                            <div class="form-group"><input class="form-control" type="text"
                                    placeholder="Enter your subject"></div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Write your message"></textarea>
                            </div><button class="form-btn" type="submit">send message</button>
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
