<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>Song details</h2>
                    <a href="/Song/Edit/{{$song->id}}" style="display: inline-block;float: right;" class="btn btn-warning">Bewerken</a>
                    <a href="/Playlist/Add/{{$song->id}}" style="display: inline-block;float: right;" class="btn btn-warning">Add to session</a>
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td>Naam:</td>
                                <td>{{ $song->Name }}</td>
                            </tr>
                            <tr>
                                <td>Genre:</td>
                                <td>{{ $genre->Name }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
