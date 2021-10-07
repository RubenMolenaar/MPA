<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedPlaylist extends Model
{
    use HasFactory;

    function getSongs($id){
        $savedPlaylistSongs = SavedPlaylistSong::where('SavedPlaylist_Id', '=', $id)->get();
        $songs = array();
        foreach ($savedPlaylistSongs as $song) {
            array_push($songs, Song::find($song->Song_Id));
        }
        return $songs;
    }
}
