<li class="list-group-item" id="item-list">
    <div class="row list">
        <span class="col-xs-6">{{$item->name}}</span>
        <span class="col-xs-3 text-muted">
            Expires: {{ $item->expire->diffForHumans() }}
        </span>
        <span class="col-xs-2 text-muted">
            Quantity: {{$item->pivot->quantity }}
        </span>
        {{--<span class="col-xs-1 text-muted">
            <a href="{{ url('#') }}">
                Edit
                <i class="glyphicon glyphicon-edit"></i>
            </a>
        </span>--}}
    </div>
</li>
