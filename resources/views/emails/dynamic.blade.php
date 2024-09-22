@include('layouts.head')

<body class="auth-body">
    <div class="auth-banner-overlay">
        <div class="auth-content">
            <h3 class="auth-headline"> {{ $otp }}</h3>
            <p class="auth-details">{{ $description }}</p>

        </div>
    </div>
    </div>
    @include('layouts.script')
</body>

</html>
