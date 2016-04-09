@extends('layouts.app')

@section('content')
    <!-- Search Form Input -->
    <div class="form-group">
        <label for="search">Search</label>
        <div class="input-group">
            <input id="search-field" type="text" name="search" class="form-control" placeholder="Recipes, Ingredients, etc."/>
            <span class="input-group-btn">
                <button id="search" class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
            </span>
        </div>
    </div>
    <div id="output"></div>
@endsection

@section('footer.scripts')
    <script>
        $(document).on('click', '#search', function(){
            console.log("{{ url('/recipe/') }}/"+$('#search-field').val());
            $.ajax({
                url: "{{ url('/recipe/') }}/"+$('#search-field').val(),
                method: "GET",
                success: function(data){
                    $("#output").html(data);
                }
            });
        })
    </script>
@endsection