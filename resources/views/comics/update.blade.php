@extends('layouts.base')

@section('pageTitle', '{{$comic->title}}')

@section('content')

<div class="container p-2">
<div class="row justify-content-center flex-column">
    <div class="col-3">
        <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
    </div>
    <div class="col">
            <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <span>
                        Prezzo: 
                        <p class="card-text">{{$comic->price}}</p>
                    </span>
                    <span>
                        Sale date: 
                        <p class="card-text">{{$comic->sale_date}}</p>
                    </span>

                    <span>
                        Tipologia: 
                        <p  class="card-text">{{$comic->type}}</p>
                    </span>
                    <p class="card-text pt-3">{{$comic->description}}</p>
                    <a href="{{route('comics.index')}}" class="btn btn-primary">Torna a tutti i fumetti</a>
                </div>
            </div>

    </div>
</div>
</div>

@endsection