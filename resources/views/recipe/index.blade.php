@extends('layouts.app')

@section('content')
    <!-- Search Form Input -->
    <div class="form-group">
        <label for="search" class="control-label">Search</label>
        <input id="search-field" type="text" name="search" class="form-control" />
    </div>
    <button id="search" type="text" class="btn btn-primary">Search</button>
    <div id="output" class="col-xs-12"></div>
@endsection

@section('footer.scripts')
    <script>
        $(document).on('click', '#search', function(){
            $.ajax({
                url: "{{ url('/recipe/query') }}/"+$('#search-field').val(),
                method: "GET",
                success: function(data){
                    $("#output").html(data);
                }
            });
        })
    </script>
@endsection