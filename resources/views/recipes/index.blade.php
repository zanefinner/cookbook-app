<div class="container">
    @foreach ($recipes as $r)
        {{ $r->name }}<br>
    @endforeach
</div>

{{ $recipes->links() }}