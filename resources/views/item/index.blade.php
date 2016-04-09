@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-xs-12">
                <!-- Search Form Input -->
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search" id="search"/>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                    </div>
                </div>
            </div>
{{--             <div class="col-xs-12 col-sm-6">
                <select name="sort" class="chosen-select">
                    <option value=""></option>
                    <option value="name" data-sort="sort-name">Name</option>
                    <option value="category" data-sort="sort-categ">Categories</option>
                    <option value="frequency" data-sort="sort-freq">Frequency</option>
                    <option value="latest" data-sort="sort-latest">Latest</option>
                    <option value="oldest" data-sort="sort-oldest">Oldest</option>
                    <option value="expire" data-sort="sort-expire">Expire</option>
                </select>
            </div>--}}
        </div>
        <div class="row" id="item-list">
            <ul class="list-group">
                @foreach($items as $item)
                    @include('partials.items-listgroup', $items)
                @endforeach
            </ul>
        </div>
@endsection

@section('footer.scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
        $("#search").keyup(function() {
            _this = this;
            $.each($("#item-list li"), function() {
                if ($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1) {
                    $(this).hide();
                }else{
                    $(this).show();
                };
            });
        });
    </script>
@endsection
