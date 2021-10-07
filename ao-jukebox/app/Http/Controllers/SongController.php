<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Genre;
use App\Http\Controllers\GenreController;
use Illuminate\Http\Request;

class SongController extends Controller
{
    //
    public function Index()
    {
        $songs = Song::All();
        return view('Song.Index', compact('songs'));
    }

    public function Add(){
        $song = new Song();
        $genres = Genre::All();
        return view('Song.Add', compact('song', 'genres'));
    }

    public function AddReturn(Request $request){
        $song = new Song();
        $song->Name = $request->Name;
        $song->User_Id = 1;
        $song->Genre_Id = $request->Genre_Id;
        $song->save();
        $songs = Song::All();
        return view('Song.Index', compact('songs'));
    }

    public function Edit(int $id){
        $song = Song::Find($id);
        $genres = Genre::All();
        return view('Song.Edit', compact('song', 'genres'));
    }

    public function EditReturn(Request $request){
        $song = Song::Find($request->id);
        $song->Name = $request->Name;
        $song->Genre_Id = $request->Genre_Id;
        $song->save();
        $genre = Genre::Find($song->Genre_Id);
        return view('Song.Details', compact('song', 'genre'));
    }

    public function Details($id){
        $song = Song::Find($id);
        $genre = Genre::Find($song->Genre_Id);
        return view('Song.Details', compact('song', 'genre'));
    }
}
