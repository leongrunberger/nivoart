@extends('layout')
@section('title', 'Spielansicht')
@section('content')
<h1>Ausgewähltes Spiel: {{ $game->titel }}</h1>

<div class="jumbotron text-center">
    <h2>{{ $game->titel }}</h2>
    <p>
        <strong>Platz 1:</strong> {{ $game->eins }}<br>
        <strong>Platz 2:</strong> {{ $game->zwei }}<br>
        <strong>Platz 3:</strong> {{ $game->drei }}<br>
        <strong>Platz 4:</strong> {{ $game->vier }}<br>
        <strong>Platz 5:</strong> {{ $game->fuenf }}<br>
        <strong>Platz 6:</strong> {{ $game->sechs }}<br>
        <strong>Platz 7:</strong> {{ $game->sieben }}<br>
        <strong>Platz 8:</strong> {{ $game->acht }}<br>
        <strong>Platz 9:</strong> {{ $game->neun }}<br>
        <strong>Platz 10:</strong> {{ $game->zehn }}<br>
    </p>

    <a href="{{ route('games.edit', $game->id)}}"><button class="btn btn-primary">Edit</button></a>
                                  
                                    <form action="{{ route('games.destroy', $game->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">DELETE</button>
                                  </form>
                                </td>
</div>

@endsection