<div class="col-xs-12">
    <li class="list-group-item">
        <div class="row list">
            <span class="col-xs-6 item-name" data-var="name">{{$item->name}}</span>
            <span class="col-xs-3 text-muted item-expire" data-var="expire">
                Expires: {{ $item->expire->diffForHumans() }}
            </span>
            <span class="col-xs-2 text-muted item-quantity" data-var="quantity">
                Quantity: {{$item->pivot->quantity }} {{$item->pivot->measure or ""}}
            </span>
       </div>
    </li>
</div>