<?php 
    $data->ingredients = json_decode($data->ingredients, true);
?>
@include('partials.top')
<body>
    @include('partials.nav')
    <div class="jumbotron text-center"><h1>{{ $data->name }}</h1></div>
    <div class="container">
        <div class="row">
            @include('partials.side-nav')
            <div class="col-12 col-md-8 col-lg-9">
                <h2>Ingredients</h2>
                <hr>
                <ul>
                    @foreach($data->ingredients as $i)
                    <li>{{ $i }}</li>
                    @endforeach
                </ul>
                <h2>Directions</h2>
                <p>{{ $data->description }}</p>
            </div>
        </div>
    </div>
</body></html>