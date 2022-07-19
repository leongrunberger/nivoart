@extends('layout')

@section('title', 'Spiel erstellen')

@section('content')
<form methode="POST">
  <div class="form-group">
    @csrf
    <label for="Titel">Titel</label>
    <input type="text" class="form-control" id="Titel">
  </div>
  <div class="form-group">
    <label for="eins">Platz 1</label>
    <input type="text" class="form-control" id="eins" name="eins">
  </div>
  <div class="form-group">
    <label for="zwei">Platz 2</label>
    <input type="text" class="form-control" id="zwei" name="zwei">
  </div>
  <div class="form-group">
    <label for="drei">Platz 3</label>
    <input type="text" class="form-control" id="drei" name="drei">
  </div>
  <div class="form-group">
    <label for="vier">Platz 4</label>
    <input type="text" class="form-control" id="vier" name="vier">
  </div>
  <div class="form-group">
    <label for="fuenf">Platz 5</label>
    <input type="text" class="form-control" id="fuenf" name="fuenf">
  </div>
  <div class="form-group">
    <label for="sechs">Platz 6</label>
    <input type="text" class="form-control" id="sechs" name="sechs">
  </div>
  <div class="form-group">
    <label for="sieben">Platz 7</label>
    <input type="text" class="form-control" id="sieben" name="sieben">
  </div>
  <div class="form-group">
    <label for="acht">Platz 8</label>
    <input type="text" class="form-control" id="acht" name="acht">
  </div>
  <div class="form-group">
    <label for="neun">Platz 9</label>
    <input type="text" class="form-control" id="neun" name ="neun">
  </div>
  <div class="form-group">
    <label for="zehn">Platz 10</label>
    <input type="text" class="form-control" id="zehn" name="zehn">
  </div>
  <div class="form-group">
    <label for="Kategorie">Kategorie</label>
    <select class="form-control">
  <option>Kategorie auswählen</option>
  <option value="Tierwelt">Tierwelt</option>
  <option>Geografie</option>
  <option>Essen & Trinken</option>
  <option>Kultur</option>
  <option>Sonstige</option>
</select>
  </div>

  <input type="submit" value="Spiel erstellen">
</form>
@endsection