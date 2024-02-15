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

    // public function create()
    // {
    //     //
    // }

    // public function store(Request $request)
    // {
    //     //
    // }

    public function show($id)
    {

        $comics = Comic::find($id);

        return view('pages.show', compact('comics'));

    }

    // public function edit($id)
    // {
    //     //
    // }


    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // public function destroy($id)
    // {
    //     //
    // }
}
