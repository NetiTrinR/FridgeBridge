<div class="row well">
    <div class="col-xs-3">
        <img src="{{ $recipe['image'] }}" alt="{{ $recipe['label'] }} Recipe">
    </div>
    <div class="col-xs-9">
        <h3><a href="{{ $recipe['url'] }}">{{ $recipe['label'] }}</a></h3>
        {{ count(array_match($inFridge, $foods)) }} / {{ count($foods) }}
    </div>
</div>