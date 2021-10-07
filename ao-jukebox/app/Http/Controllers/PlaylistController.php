<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\Song;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function Index(){
        $playlist = new Playlist();
        $songs = Song::All();
        return view('Playlist.Index', compact('playlist', 'songs'));
    }

    public function Add($id){
        $p = new Playlist();
        $p->AddToSession($id);
        return redirect()->route('Playlist.Index');
    }

    public function Remove($id){
        $p = new Playlist();
        $p->RemoveFromSession($id);
        return redirect()->route('Playlist.Index');
    }
}
