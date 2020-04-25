@include('partials.top')
<body>
    @include('partials.nav')
    <div class="jumbotron text-center">
        <h1>Most Recent</h1>
    </div>
    <div class="container">
        <div class="row">
            @include('partials.side-nav')
            <div class="col-12 col-md-8 col-lg-9">
                @foreach ($recipes as $r)
                    <a href="/recipes/{{ $r->id }}">{{ $r->name }}</a><br>
                @endforeach
                <form id="new"action = "/recipes" method="post">@csrf
                    <input type='text' name='name' placeholder='Recipe Name'><br>
                    <input type='text' name='ingredients' placeholder='Ingredients (separated by commas)'><br>
                    <textarea type='text' name='description' placeholder='Recipe'>
                    </textarea>
                    <button type="submit">Add Recipe</button>
                </form>
            </div>
        </div>
    </div>



    {{ $recipes->links() }}
    @include('partials.bottom')
</body></html>