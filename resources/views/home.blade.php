@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-4 col-push-md-8">
            <a href="{{ route('recipe.index') }}" class="btn btn-default btn-block btn-lg">Recipes</a>
        </div>
        <div class="col-xs-12 col-md-4">
            <a href="{{ route('item.create') }}" class="btn btn-default btn-block btn-lg">Add</a>
        </div>
        <div class="col-xs-12 col-md-4">
            <a href="{{ route('item.index') }}" class="btn btn-default btn-block btn-lg">List</a>
        </div>
    </div>
@endsection
