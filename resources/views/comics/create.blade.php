@extends('layouts.base')

@section('pageTitle', 'Aggiungi Fumetto')

@section('content')



<div class="container p-2 fadein">
    <form action="{{route('comics.store')}}" class="form-floating mb-3" method="post">

        @csrf
      <div class="mb-3">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci Titolo" value="{{old('title')}}">
      </div>

      <div class="mb-3">
        <label for="floatingTextarea2">Descrizione</label>
        <textarea class="form-control" placeholder="Inserisci descrizione" name="description" id="description" style="height: 100px" >{{old('description')}}</textarea>
      </div>

        <div class="mb-3">
          <label for="price">Prezzo</label>
          <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Inserisci Prezzo"value="{{old('price')}}">
        </div>
        
        <div class="mb-3">

          <label class="d-block" for="price">Tipo</label>
          <select class="form-select d-block" name="type" id="type">
            <option {{(old('type') == 'Comic Book') ? 'selected' : '' }}value="comic_book">Comic Book</option>
            <option {{(old('type') == 'Grapic Novel') ? 'selected' : '' }}value="grapic_novel">Grapic Novel</option>
          </select>
        </div>

        <div class="mb-3">

          <label for="thumb">Thumbnail Url</label>
          <input type="text" class="form-control" id="thumb" name="thumb" placeholder="url" value="{{old('thumb')}}">
        </div>

        <div class="mb-3">
          <label for="series">Serie</label>
          <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci Serie" value="{{old('series')}}">
        </div>

        <div class="mb-3">
          <label for="sale_date">Data</label>
          <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci Data" value="{{old('sale_date')}}">
        </div>

        <input type="submit" value="Invia">
      </form>
</div>

@endsection