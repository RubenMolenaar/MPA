<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    public function getName(){
        return $this->Name;
    }

    public function getGenre(){
        return Genre::find($this->Genre_Id);
    }
}
