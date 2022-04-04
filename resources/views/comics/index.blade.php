@extends('layouts.base')

@section('pageTitle', 'Comics')


@section('content')

    <div class="container pt-5">

        <div class="row pt-3 pb-3">
            <div class="col">
                <h1 class="d-inline block">Lista Fumetti</h1>
            </div>
            <div style="text-align: right" class="col">

                <a class="btn btn-success" href="{{route('comics.create')}}" role="button">Aggiungi un fumetto alla raccolta</a>
            </div>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Tipo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Foto</th>
                <th scope="col">Serie</th>
                <th scope="col">Data</th>
                <th scope="col">Azioni</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{$comic->id}}</td>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->type}}</td>
                        <td>{{$comic->description}}</td>
                        <td><img src="{{$comic->thumb}}" alt=""></td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>

                        <td class="d-flex">
                            <a class="btn btn-primary " href="{{ route('comics.show', $comic->id) }}" role="button">Vedi</a>
                            <a class="btn btn-warning mx-2" href="{{ route('comics.edit', $comic->id) }}" role="button">Modifica</a>

                            <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                               @csrf
                                @method('DELETE') 

                               <input class="btn btn-danger" type="submit" value="Elimina">
                            </form>

                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection