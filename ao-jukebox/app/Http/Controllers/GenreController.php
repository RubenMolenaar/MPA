<?php

namespace App\Http\Controllers;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function Index()
    {
        $genres = Genre::All();
        return view('Genre.Index', compact('genres'));
    }

    public function Add(){
        $genre = new Genre();
        return view('Genre.Add', compact('genre'));
    }

    public function AddReturn(Request $request){
        $genre = new Genre();
        $genre->Name = $request->Name;
        $genre->save();
        return view('Genre.Details', compact('genre'));
    }

    public function Edit(int $id){
        $genre = Genre::Find($id);
        return view('Genre.Add', compact('genre'));
    }

    public function EditReturn(Request $request){
        $genre = Genre::Find($request->id);
        $genre->Name = $request->Name;
        $genre->save();
        return view('Genre.Details', compact('genre'));
    }

    public function Details($id){
        $genre = Genre::Find($id);
        return view('Genre.Details', compact('genre'));
    }
}
