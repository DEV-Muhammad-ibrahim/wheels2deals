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
                    <h2>Privacy Policy</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ Route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">privacy</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="section-gap-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="privacy-group">
                        <h4 class="privacy-title">Information We Collect!</h4>
                        <p class="privacy-descrip">We may collect and process the following information about you:
                            <br>
                            • Personal Information: Name, email address, phone number, and contact details when you
                            create an account or interact with us.
                            <br>
                            • Vendor Information: Information about the cars uploaded, including vehicle details,
                            prices, and related data.
                            <br>
                            • Financial Information: Payment information used for transactions on the platform.
                            <br>
                            • Usage Information: Details of your visits to our website, including traffic data, location
                            data, IP address, browser type, and other communication data.
                            <br>
                        </p>
                    </div>
                    <div class="privacy-group">
                        <h4 class="privacy-title">How We Use Your Information
                        </h4>
                        <p class="privacy-descrip">We use the information collected in the following ways:
                            <br>
                            • To provide and maintain our services, including processing transactions.
                            <br>
                            • To personalize your experience on our platform.
                            <br>
                            • To respond to customer service requests and support needs.
                            <br>
                            • To process payments for vehicles or services.
                            <br>
                            • To send periodic emails regarding your account or other products and services.
                            <br>
                            • To improve our website based on user feedback and usage data.
                            <br>
                        </p>
                    </div>
                    <div class="privacy-group">
                        <h4 class="privacy-title">How We Protect Your Information
                        </h4>
                        <p class="privacy-descrip">We implement a variety of security measures to ensure the safety of
                            your personal information. Sensitive information (such as payment data) is encrypted via
                            Secure Socket Layer (SSL) technology. Access to personal information is limited to
                            authorized personnel only.

                        </p>
                    </div>
                    <div class="privacy-group">
                        <h4 class="privacy-title"> Changes to Our Privacy Policy
                        </h4>
                        <p class="privacy-descrip">We may update this Privacy Policy from time to time. Any changes will
                            be posted on this page, and we encourage you to review this page periodically to stay
                            informed of any updates.</p>
                    </div>
                    {{-- <div class="privacy-group">
                        <h4 class="privacy-title">Voluptas quasi corporis neque in omnis dicta nihil natus</h4>
                        <p class="privacy-descrip">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quod
                            dignissimos vel explicabo aut nihil natus, sequi omnis fugiat quasi similique dolorem
                            voluptatum velit numquam nulla voluptatem, ducimus hic? Quos, sunt est? Deleniti
                            exercitationem quod, architecto officiis illo nesciunt magnam voluptatem consectetur, non
                            deserunt soluta modi sint eaque beatae nobis.</p>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
    @include('layouts.script')
</body>


</html>
