@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <!-- Search Form Input -->
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search" />
                        <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <select name="sort" class="chosen-select">
                    <option value=""></option>
                    <option value="category">Cateogries</option>
                    <option value="frequency">Frequency</option>
                    <option value="latest">Latest</option>
                    <option value="oldest">Oldest</option>
                    <option value="expire">Expire</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <ul class="list-group">
                    @foreach($items as $item)
                        @include('partials.item-listgroup', $item)
                    @endforeach
                </ul>
            </div>
        </div>
@endsection

@section('footer.scripts')
    <script>

    </script>
@endsection