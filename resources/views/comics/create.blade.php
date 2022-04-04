@extends('layouts.base')

@section('pageTitle', 'Aggiungi Fumetto')

@section('content')



<div class="container p-2">
    <form action="{{route('comics.store')}}" class="form-floating mb-3" method="post">

        @csrf

        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci Titolo" value="{{old('title')}}">


        <label for="floatingTextarea2">Descrizione</label>
        <textarea class="form-control" placeholder="Inserisci descrizione" name="description" id="description" style="height: 100px" >{{old('description')}}</textarea>

        <label for="price">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci Prezzo"value="{{old('price')}}">
        
        
        <label class="d-block" for="price">Tipo</label>
        <select class="form-select d-block" name="type" id="type">
          <option {{(old('type') == 'Comic Book') ? 'selected' : '' }}value="comic_book">Comic Book</option>
          <option {{(old('type') == 'Grapic Novel') ? 'selected' : '' }}value="grapic_novel">Grapic Novel</option>
        </select>

        <label for="thumb">Thumbnail Url</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="url" value="{{old('thumb')}}">

        <label for="price">Serie</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci Serie" value="{{old('series')}}">

        <label for="price">Data</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci Data" value="{{old('sale_date')}}">

        <input type="submit" value="Invia">
      </form>
</div>

@endsection