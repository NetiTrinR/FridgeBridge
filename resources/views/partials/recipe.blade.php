<!-- <div class="row ">
    <div class="col-xs-12">

    </div>
</div> -->

<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-xs-3">
                <a href="{{ $recipe['url'] }}" target="_blank"><img src="{{ $recipe['image'] }}" alt="{{ $recipe['label'] }} Recipe" class="img-responsive img-thumbnail"></a>
            </div>
            <div class="col-xs-9">
                <h3><a href="{{ $recipe['url'] }}" target="_blank">{{ $recipe['label'] }}</a></h3>
                {{ count(array_match($inFridge, $foods)) }} / {{ count($foods) }}
            </div>

        </div>
    </div>
</div>