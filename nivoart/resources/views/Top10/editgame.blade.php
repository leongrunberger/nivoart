@extends('layout')

@section('title', 'Spiel bearbeiten')

@section('content')
<div class="container">
<form method="POST" action="{{ route('games.update', $game->id)}}" enctype="multipart/form-data">
@csrf
@method('PATCH')
  <div class="form-group">
    <label for="titel">Titel</label>
    <input type="text" class="form-control" id="titel" name="titel" value="{{ $game->titel}}">
  </div>
  <div class="row">
   <div class="col-sm">
    <label for="eins">Platz 1</label>
    <input type="text" class="form-control" id="eins" name="eins" value="{{ $game->eins}}">
  </div>
  <div class="col-sm">
    <label for="zwei">Platz 2</label>
    <input type="text" class="form-control" id="zwei" name="zwei" value="{{ $game->zwei}}">
  </div>
</div>
<div class="row">
   <div class="col-sm">
    <label for="drei">Platz 3</label>
    <input type="text" class="form-control" id="drei" name="drei" value="{{ $game->drei}}">
  </div>
  <div class="col-sm">
    <label for="vier">Platz 4</label>
    <input type="text" class="form-control" id="vier" name="vier" value="{{ $game->vier}}">
  </div>
</div>
  
<div class="row">
   <div class="col-sm">
    <label for="fuenf">Platz 5</label>
    <input type="text" class="form-control" id="fuenf" name="fuenf" value="{{ $game->fuenf}}">
  </div>
  <div class="col-sm">
    <label for="sechs">Platz 6</label>
    <input type="text" class="form-control" id="sechs" name="sechs" value="{{ $game->sechs}}">
  </div>
</div>

<div class="row">
   <div class="col-sm">
    <label for="sieben">Platz 7</label>
    <input type="text" class="form-control" id="sieben" name="sieben" value="{{ $game->sieben}}">
  </div>
  <div class="col-sm">
    <label for="acht">Platz 8</label>
    <input type="text" class="form-control" id="acht" name="acht" value="{{ $game->acht}}">
  </div>
</div>

<div class="row">
   <div class="col-sm">
    <label for="neun">Platz 9</label>
    <input type="text" class="form-control" id="neun" name ="neun" value="{{ $game->neun}}">
  </div>
  <div class="col-sm">
    <label for="zehn">Platz 10</label>
    <input type="text" class="form-control" id="zehn" name="zehn" value="{{ $game->zehn}}">
  </div>
</div>
  <div class="form-group">
    <label for="kategorie" name="kategorie">Kategorie</label>
    <select class="form-control">
  <option>Kategorie auswählen</option>
  <option value="Tierwelt">Tierwelt</option>
  <option value="Geografie">Geografie</option>
  <option value="Essen & Trinken">Essen & Trinken</option>
  <option value="Kultur">Kultur</option>
  <option value="Sonstige">Sonstige</option>
</select>
  </div><br>

  <input type="submit" value="Änderungen speichern">
</form>
</div>
@endsection