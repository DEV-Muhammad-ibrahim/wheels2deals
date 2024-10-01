@include('layouts.head')

<body>
    <section class="coming-part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="coming-content">
                        <h1 class="coming-title">coming soon...</h1>
                        <div class="countdown coming-clock" data-countdown="2022/10/22"><span class="countdown-time"><span
                                    id="days">0</span><small>days</small></span><span class="countdown-time"><span
                                    id="hours">00</span><small>hours</small></span><span
                                class="countdown-time"><span id="mins">00</span><small>minutes</small></span><span
                                class="countdown-time"><span id="secs">00</span><small>seconds</small></span></div>
                        <h3 class="coming-subtitle">We are currently working on an awesome new site.</h3>
                        {{-- <form class="coming-form"><input type="text" placeholder="enter your email"><button><i
                                    class="material-icons">send</i></button></form> --}}
                        {{-- <div class="coming-social"><a class="icofont-facebook" href="#"></a><a
                                class="icofont-twitter" href="#"></a><a class="icofont-linkedin"
                                href="#"></a><a class="icofont-instagram" href="#"></a><a
                                class="icofont-pinterest" href="#"></a></div> --}}
                    </div>
                </div>
                <div class="col-lg-5 text-center"><img class="img-fluid"
                        src="{{ asset('assets/images/coming-soon.png') }}" alt="coming-soon"></div>
            </div>
        </div>
    </section>
    <script>
        // Set the countdown duration
        const duration = {
            days: 2,
            hours: 15,
        };

        // Calculate the target date
        const now = new Date().getTime();
        const targetDate = new Date(now + (duration.days * 24 * 60 * 60 * 1000) + (duration.hours * 60 * 60 * 1000))
            .getTime();

        // Update the countdown every second
        const interval = setInterval(() => {
            const currentTime = new Date().getTime();
            const distance = targetDate - currentTime;

            // Time calculations for days, hours, minutes and seconds
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the respective elements
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("mins").innerHTML = minutes;
            document.getElementById("secs").innerHTML = seconds;

            // If the countdown is finished, display a message
            if (distance < 0) {
                clearInterval(interval);
                document.getElementById("countdown").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
    {{-- @include('layouts.footer') --}}
</body>

</html>
