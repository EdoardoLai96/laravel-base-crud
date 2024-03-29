<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'title' =>'required|max:255',
            'description' =>'required|max:255',
            'thumb' =>'required|url|max:255',
            'price' =>'required|numeric|min:1',
            'series' =>'required|max:255',
            'sale_date' =>'required|date|',
        ]);


        $newComic = new Comic();

        // $newComic->title = $data['title'];
        // $newComic->description = $data['description'];
        // $newComic->price = $data['price'];
        // $newComic->series = $data['series'];
        // $newComic->sale_date = $data['sale_date'];
        // $newComic->save();

        // usando il metodo fillable semplifico così: 

        $newComic->fill($data);
        $newComic->save();

        return redirect()->route('comics.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show' , compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit' , compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $request->validate([
            'title' =>'required|max:255',
            'description' =>'required|max:1000',
            'thumb' =>'required|url|max:255',
            'price' =>'required|numeric|min:1',
            'series' =>'required|max:255',
            'sale_date' =>'required|date|',
        ]);


        $comic->update($data);

        $comic->save();

        return redirect()->route('comics.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        
        return redirect()->route('comics.index');
    }
}
