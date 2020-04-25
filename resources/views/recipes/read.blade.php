<?php 
    $data->ingredients = json_decode($data->ingredients, true);
?>

<h1>{{ $data->name }}</h1>
<ul>
    @foreach($data->ingredients as $i)
    <li>{{ $i }}</li>
    @endforeach
</ul>
<h2>Directions</h2>
<p>{{ $data->description }}</p>