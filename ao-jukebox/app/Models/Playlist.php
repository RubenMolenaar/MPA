<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Playlist
{
    use HasFactory;
    private $Songs = array();

    function __construct(){
        if(!Session::exists('Playlist')){
            Session::put('Playlist', $this->Songs);
        }
        else{
            $this->Songs = Session::get('Playlist');
//            $this->Songs = Session::get('Playlist');
        }
    }

    function AddToSession($id){
        var_dump(gettype($id));

        array_push($this->Songs, $id);
        Session::put('Playlist', $this->Songs);
    }

    function RemoveFromSession($id){
        $this->Song = array_diff($this->Songs, [$id]);

        Session::put('Playlist', $this->Song);
    }

    public function getPlaylist(){
        $songs = array();

        foreach ($this->Songs as $song) {
            array_push($songs, Song::find($song));
        }
//        $songs = Song::find($this->Songs);

        return $songs;
    }

    public function getSongs()
    {
        return $this->hasMany('App\Models\Song', 'id');
    }
}
