<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\SavedPlaylist;
use App\Models\SavedPlaylistSong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SavedPlaylistController extends Controller
{
    function Index(){
        $savedPlaylists = SavedPlaylist::All();
        return view('SavedPlaylist.Index', compact('savedPlaylists'));
    }

    function Add(){
        $playlist = new SavedPlaylist();
        return view('SavedPlaylist.Add', compact('playlist'));
    }
    function AddReturn(Request $request){
        $playlist = new SavedPlaylist();
        $playlist->Name = $request->Name;
        $playlist->save();
        $currentPlaylist = new Playlist();
        foreach($currentPlaylist->getPlaylist() as $song){
            $savedSong = new SavedPlaylistSong();
            $savedSong->SavedPlaylist_Id = $playlist->id;
            $savedSong->Song_Id = $song->id;
            $savedSong->save();
        }
        $id = $playlist->id;
        return redirect()->route('SavedPlaylist.Details', compact('id'));
    }
    function Details($id){
        $savedPlaylist = SavedPlaylist::find($id);
        return view('SavedPlaylist.Details', compact('savedPlaylist'));
    }
}
