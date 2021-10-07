<?php

use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\SavedPlaylistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\GenreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//song
Route::get('/Song', [SongController::class, 'Index'])->name('Song.Index');

Route::get('/Song/Add', [SongController::class, 'Add'])->name('Song.Add');

Route::post('/Song/Add', [SongController::class, 'AddReturn'])->name('Song.EditReturn');

Route::get('/Song/Details/{id}', [SongController::class, 'Details'])->name('Song.Details');

Route::get('/Song/Edit/{id}', [SongController::class, 'Edit'])->name('Song.Edit');

Route::post('/Song/Edit/{id}', [SongController::class, 'EditReturn'])->name('Song.Edit');


//genre
Route::get('/Genre', [GenreController::class, 'Index'])->name('Genre.Index');

Route::get('/Genre/Add', [GenreController::class, 'Add'])->name('Genre.Add');

Route::post('/Genre/Add', [GenreController::class, 'AddReturn'])->name('Genre.AddReturn');

Route::get('/Genre/Edit/{id}', [GenreController::class, 'Edit'])->name('Genre.Edit');

Route::post('/Genre/Edit/{id}', [GenreController::class, 'EditReturn'])->name('Genre.EditReturn');

Route::get('/Genre/Details/{id}', [GenreController::class, 'Details'])->name('Genre.Details');


//playlist
Route::get('/Playlist/Add/{id}', [PlaylistController::class, 'Add'])->name('Playlist.Add');

Route::get('/Playlist/Index', [PlaylistController::class, 'Index'])->name('Playlist.Index');

Route::get('/Playlist/Remove/{id}', [PlaylistController::class, 'Remove'])->name('Playlist.Remove');

//savedplaylist
Route::get('/SavedPlaylist/Index', [SavedPlaylistController::class, 'Index'])->name('SavedPlaylist.Index');

Route::get('/SavedPlaylist/Details/{id}', [SavedPlaylistController::class, 'Details'])->name('SavedPlaylist.Details');

Route::get('/SavedPlaylist/Add', [SavedPlaylistController::class, 'Add'])->name('SavedPlaylist.Add');

Route::post('/SavedPlaylist/Add', [SavedPlaylistController::class, 'AddReturn'])->name('SavedPlaylist.AddReturn');

require __DIR__.'/auth.php';
