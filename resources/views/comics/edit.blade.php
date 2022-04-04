@extends('layouts.base')

@section('pageTitle', 'Aggiorna Fumetto')

@section('content')

<div class="container p-2">
    <form action="{{route('comics.update', $comic->id)}}" class="form-floating mb-3" method="post">

        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="title">Titolo</label>
          <input required type="text" class="form-control" id="title" name="title"  value="{{old('title', $comic->title)}}">
        </div>
        
        <div class="mb-3">
          <label for="description">Descrizione</label>
          <textarea required class="form-control" name="description" id="description" style="height: 100px">{{old('description',$comic->description)}}"</textarea>
        </div>
        <div class="mb-3">
          
        </div>
        
        
        <div class="mb-3">
          <label for="price">Prezzo</label>
          <input required type="number" step="0.01" class="form-control" id="price" name="price"  value="{{old('price',$comic->price)}}">
          
        
        <div class="mb-3">
          <label class="d-block" for="type">Tipo</label>
          <select required class="form-select d-block" name="type" id="type">
            <option selected>Scegli un Tipo</option>
            <option value="comic_book">Comic Book</option>
            <option value="grapich_novel">Grapich Novel</option>
          </select>
        </div>
        
        <div class="mb-3">
          <label for="thumb">Thumbnail Url</label>
          <input required type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb', $comic->thumb)}}">
        </div>

        <div class="mb-3">
          <label for="series">Serie</label>
          <input  type="text" class="form-control" id="series" name="series" value="{{old('series', $comic->series)}}">
        </div>

        <div class="mb-3">
          <label for="series">Data</label>
          <input required type="text" class="form-control mb-3" id="sale_date" name="sale_date"  value="{{old('sale_date', $comic->sale_date)}}">
        </div>

        <div class="mb-3">
          <div class="mb-3">
          <input class="btn btn-success" type="submit" value="Invia">

          <a class="btn btn-danger mx-2" href="{{ route('comics.index') }}" role="button">Annulla</a>
        <div class="mb-3">

    

      </form>
</div>

@endsection