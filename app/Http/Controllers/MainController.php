<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// include Model
use App\Models\Comic;

class MainController extends Controller
{

    public function index()
    {

        $comics = Comic::all();

        return view('pages.index', compact('comics'));

    }

    public function create()
    {

        return view('pages.create');

    }

    public function store(Request $request)
    {
        $data = $request->all();

        $newComic = new Comic();

        $newComic->title = $data['title'];
        $newComic->author = $data['author'];

        $newComic->save();

        return redirect()->route('route.show', $newComic->id);

    }

    public function show($id)
    {

        $comics = Comic::find($id);

        return view('pages.show', compact('comics'));

    }

    public function edit($id)
    {

        $comic = Comic::find($id);

        return view('pages.edit', compact('comic'));

    }


    // public function update(Request $request, $id)
    // {
    //     //
    // }

    public function destroy($id)
    {
        $comic = Comic::find($id);
        $comic->delete();

        return redirect()->route('route.index');
    }
}
