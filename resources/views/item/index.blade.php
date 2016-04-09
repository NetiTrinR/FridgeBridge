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
        </div>  
        <div id="item-list">
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
