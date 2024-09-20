@include('layouts.head')

<body>
    <section>
        <div class="container">
            <div class="error-content"><img src="{{ asset('assets/images/404.png') }}" alt="404">
                <h1>oops! this page can't be found.</h1>
                <p>It's looks like nothing was found at this location.</p><a href="{{ Route('index') }}"
                    class="btn btn-inline"><i class="material-icons">home</i><span>back to home</span></a>
            </div>
        </div>
    </section>
    @include('layouts.script')
</body>


</html>
