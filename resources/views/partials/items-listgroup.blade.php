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
       </div>
    </li>
</div>