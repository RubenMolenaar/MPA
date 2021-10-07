<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 style="display: inline">Saved playlists</h2>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <td>Id</td>
                            <td>Naam</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($savedPlaylists as $savedPlaylist)
                            <tr class="song-row" data-link="/SavedPlaylist/Details/{{$savedPlaylist->id}}">
                                <td>{{ $savedPlaylist->id }}</td>
                                <td>{{ $savedPlaylist->Name }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    $('.song-row').on('click', function(){
        window.location = $(this).data('link');
    })
</script>
