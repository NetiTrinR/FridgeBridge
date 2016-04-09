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
<<<<<<< HEAD
            <span class="col-xs-1">
                <a href="{{ route("item.destroy", $item->id) }}">
                    <i class="glyphicon glyphicon-remove-circle" style="color: "></i>
                </a>
            </span>
            {{--<span class="col-xs-1 text-muted">
                <a href="{{ url('#') }}">
                    Edit
                    <i class="glyphicon glyphicon-edit"></i>
                </a>
            </span>--}}
        </div>
=======
       </div>
>>>>>>> 0fc7ec1f4074a09acf7f51bbe0f1648b5e7ad56b
    </li>
</div>