@extends('layouts.app')

@section('content')
    <div class="container">
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
            <div class="col-xs-12 col-sm-6">Sort</div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <ul class="list-group">
                    <li class="list-group-item">List Groups Items</li>
                    <li class="list-group-item">List Groups Items</li>
                    <li class="list-group-item">List Groups Items</li>
                </ul>
            </div>
        </div>
    </div>
@endsection