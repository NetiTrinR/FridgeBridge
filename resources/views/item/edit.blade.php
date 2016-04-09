@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            {!! Form::open(['route' => 'item.update', 'method'=>"PATCH"]) !!}
            <!-- Name Form Input -->
            <div class="form-group {{ $errors->has('name')? 'has-error' : '' }}">
                <label for="name" class="control-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') or item->name}}"/>
                @if($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>

            <!-- Expire Form Input -->
            <div class="form-group {{ $errors->has('expire')? 'has-error' : '' }}">
                <label for="expire" class="control-label">Expiration Date</label>
                <input type="text" name="expire" class="form-control" value="{{ old('expire') or item->expire}}"/>

                @if($errors->has('expire'))
                <span class="help-block">
                    <strong>{{ $errors->first('expire') }}</strong>
                </span>
                @endif
            </div>

            <!-- Quan Form Input -->
            <div class="form-group {{ $errors->has('quantity')? 'has-error' : '' }}">
                <label for="quantity" class="control-label">Quantity</label>
                <input type="text" name="quantity" class="form-control" value="{{ old('quantity') or item->quantity}}"/>
                @if($errors->has('quantity'))
                <span class="help-block">
                    <strong>{{ $errors->first('quantity') }}</strong>
                </span>
                @endif
            </div>

            <!-- Measure Form Input -->
            <div class="form-group {{ $errors->has('measure')? 'has-error' : '' }}">
                <label for="measure" class="control-label">Measurement</label>
                <input type="text" name="measure" class="form-control" value="{{ old('measure') or item->measure}}"/>
                @if($errors->has('measure'))
                <span class="help-block">
                    <strong>{{ $errors->first('measure') }}</strong>
                </span>
                @endif
            </div>

            <!-- Category Form Input -->
            <div class="form-group {{ $errors->has('category')? 'has-error' : '' }}">
                <label for="category">Category</label>
                <select name="category" class="form-control chosen-select" data-placeholder="Select a Category">
                    <option value=""></option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @if($errors->has('category'))
                <span class="help-block">
                    <strong>{{ $errors->first('category') }}</strong>
                </span>
                @endif
            </div>

            <input type="submit" value="Update" class="btn btn-primary">
            {!! Form::close() !!}
        </div>
    </div>
@endsection