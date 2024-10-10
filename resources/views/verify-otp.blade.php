<!-- resources/views/auth/verify-otp.blade.php -->

@include('layouts.head')

<body class="auth-body">
    <section class="auth-part">
        <div class="auth-banner"><img class="auth-banner-bg" src="{{ asset('assets/images/bg/auth.jpg') }}" alt="auth">
            <div class="auth-banner-overlay">
                <div class="auth-content"><a class="auth-logo" href="{{ Route('home') }}"><img
                            src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>
                    <h1 class="auth-headline">Verify Your Account</h1>

                    <div class="auth-social">
                        <h5>follow on</h5>
                        <ul>
                            <li><a href="#" class="facebook icofont-facebook"></a></li>
                            <li><a href="#" class="twitter icofont-twitter"></a></li>
                            <li><a href="#" class="linkedin icofont-linkedin"></a></li>
                            <li><a href="#" class="instagram icofont-instagram"></a></li>
                            <li><a href="#" class="youtube icofont-youtube-play"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <form class="auth-form" method="POST" action="{{ Route('verify_otp') }}">
            @csrf
            @method('POST')
            <div class="auth-form-content">
                <h3 class="auth-form-title">Enter Otp</h3>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Otp" name="otp" required>
                </div>
                @error('otp')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror



                <button type="submit" class="form-btn"> Verify OTP</button>

                <div class="form-group mt-2">
                    <button type="button" class="form-btn" id="resend-otp-btn">
                        Resend OTP
                    </button>
                </div>
                <div id="countdown"></div>
                <div id="resend-message" class="mt-2 "></div>

            </div>
        </form>
    </section>
    <script>
        console.log('Script started');

        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM content loaded');

            const resendButton = document.getElementById('resend-otp-btn');
            const countdownElement = document.getElementById('countdown');
            const resendMessage = document.getElementById('resend-message');

            console.log('Resend button:', resendButton);
            console.log('Countdown element:', countdownElement);
            console.log('Resend message element:', resendMessage);

            let countdownTimer;
            let remainingTime = 300; // 5 minutes in seconds

            function updateCountdown() {
                const minutes = Math.floor(remainingTime / 60);
                const seconds = remainingTime % 60;
                countdownElement.textContent = `Time remaining: ${minutes}m ${seconds}s`;

                if (remainingTime <= 0) {
                    clearInterval(countdownTimer);
                    resendButton.disabled = false;
                    countdownElement.textContent = 'OTP expired. You can resend now.';
                } else {
                    remainingTime--;
                }
            }

            function startCountdown() {
                remainingTime = 300;
                resendButton.disabled = true;
                clearInterval(countdownTimer);
                countdownTimer = setInterval(updateCountdown, 1000);
                updateCountdown();
            }

            startCountdown();

            resendButton.addEventListener('click', function() {
                console.log('Resend button clicked');
                resendButton.disabled = true;
                resendMessage.textContent = 'Sending...';


                fetch('{{ route('resend-otp') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        credentials: 'same-origin'
                    })
                    .then(response => {
                        console.log('Response received:', response);
                        return response.json();
                    })
                    .then(data => {
                        console.log('Data received:', data);
                        if (data.success) {
                            resendMessage.textContent = 'OTP resent successfully!';
                            startCountdown();
                        } else {
                            throw new Error(data.message || 'Failed to resend OTP');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        resendButton.disabled = false;
                        resendMessage.textContent = 'Failed to resend OTP. Please try again.';
                    });
            });
        });
    </script>

    @include('layouts.script')
</body>

</html>
