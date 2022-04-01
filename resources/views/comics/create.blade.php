@extends('layouts.base')

@section('pageTitle', 'Aggiungi Fumetto')

@section('content')

<div class="container p-2">
    <form action="{{route('comics.store')}}" class="form-floating mb-3" method="post">

        @csrf

        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci Titolo">


        <label for="floatingTextarea2">Descrizione</label>
        <textarea class="form-control" placeholder="Inserisci descrizione" name="description" id="description" style="height: 100px"></textarea>

        <label for="price">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci Prezzo">
        
        <label for="type">Tipo</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci Prezzo">

        <label for="thumb">Thumbnail Url</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="url">

        <label for="price">Serie</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci Serie">

        <label for="price">Data</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci Data">

        <input type="submit" value="Invia">
      </form>
</div>

@endsection