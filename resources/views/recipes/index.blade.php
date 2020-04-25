<div class="container">
    <form action = "/recipes" method="post">@csrf
        <input type='text' name='name' placeholder='Recipe Name'><br>
        <input type='text' name='ingredients' placeholder='Ingredients (separated by commas)'><br>
        <textarea type='text' name='description' placeholder='Recipe'>
        </textarea>
        <button type="submit">Add Recipe</button>
    </form>
    @foreach ($recipes as $r)
        <a href="/recipes/{{ $r->id }}">{{ $r->name }}</a><br>
    @endforeach
</div>

{{ $recipes->links() }}