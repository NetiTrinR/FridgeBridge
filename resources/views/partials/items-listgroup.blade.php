<div class="col-xs-12">
    <li class="list-group-item">
        <div class="row list">
            <span class="col-xs-6 item-name">{{$item->name}}</span>
            <span class="col-xs-3 text-muted item-expire">
                Expires: {{ $item->expire->diffForHumans() }}
            </span>
            <span class="col-xs-2 text-muted item-quantity">
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
</div>