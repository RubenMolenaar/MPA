<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 style="display: inline">Current playlist</h2>
                    <a href="/SavedPlaylist/Add" class="btn btn-success" style="float: right; display: inline-block">Save playlist</a>
                    <button class="btn btn-success" id="add-song" style="float: right; display: inline-block">Toevoegen</button>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Naam</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        {{var_dump($playlist->getPlaylist())}}--}}
                        @foreach($playlist->getPlaylist() as $song)

                            <tr class="song-row" data-link="/Song/Details/{{$song->id}}">
                                <td>{{ $song->id }}</td>
                                <td>{{ $song->Name }}</td>
                                <td><a href="/Playlist/Remove/{{$song->id}}">verwijderen</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<div class="modal fade" id="songs-modal" tabindex="-1" role="dialog" aria-labelledby="songs-modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="songs-modal-Label">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Genre</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($songs as $song)
                            <tr>
                                <td>{{$song->id}}</td>
                                <td>{{$song->Name}}</td>
                                <td>{{$song->getGenre()->Name}}</td>
                                <td><a href="/Playlist/Add/{{$song->id}}">Toevoegen</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('.song-row').on('click', function(){
        window.location = $(this).data('link');
    })
    $('#add-song').on('click', function(){
        $('#songs-modal').modal('show');
    })
</script>
