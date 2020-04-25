@include('partials.top')
<body>
    @include('partials.nav')
    <div class="jumbotron text-center">
        <h1>Error</h1>
    </div>
    <div class="container">
        <div class="row">
            @include('partials.side-nav')
            <div class="col-12 col-md-8 col-lg-9">
                Sorry, {{ $error }}
            </div>
        </div>
    </div>
    @include('partials.bottom')
</body></html>