@extends('layout') 

@section('title', 'Spieleübersicht')


@section('content')      
<div class="container">
    <h1>Laravel 8 Autocomplete: Real Programmer</h1>   
    <input class="typeahead form-control" type="text">
</div>
   
<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>
@endsection   