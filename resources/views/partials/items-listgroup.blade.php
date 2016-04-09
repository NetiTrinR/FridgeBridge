<li class="list-group-item col-xs-12">
    <div class="row list">
        <span class="col-xs-6 item-name" data-var="name">{{$item->name}}</span>
        <span class="col-xs-3 text-muted item-expire" data-var="expire">
            Expires: {{ $item->expire->diffForHumans() }}
        </span>
        <span class="col-xs-2 text-muted item-quantity" data-var="quantity">
            Quantity: {{$item->pivot->quantity }}
        </span>

        <span class="col-xs-1">
            <a href="{{ route("item.destroy", $item->id) }}">
                <i class="glyphicon glyphicon-remove-circle"></i>
            </a>
        </span>
    </div>
</li>