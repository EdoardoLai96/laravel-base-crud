@extends('layouts.base')

@section('PageTitle', 'Home Page')

@section('content')

<div class="container d-flex justify-content-center align-items-center" style="height: 90vh">
    <div class="row">
        <div class="col">
            <h1 style="font-size: 6rem" class="text-center"> Benvenuto nell'home page di questo generico sito di fumetti!</h1>
            <h3 class="text-center mt-5">
                Clicca qui se vuoi vedere l'elenco di tutti i fumetti (puoi farlo anche dal menù in alto) 
                <a class="btn btn-primary text-center text-white" href="{{route('comics.index')}}">
                    Click
                </a>
            </h3>
        </div>
    </div>
</div>
@endsection