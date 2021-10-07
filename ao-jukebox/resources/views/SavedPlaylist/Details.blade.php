<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>Saved playlist details</h2>
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>Naam:</td>
                            <td>{{ $savedPlaylist->Name }}</td>
                        </tr>
                        </tbody>
                    </table>
                    <table  class="table table-striped">
                        <thead>
                            <tr>
                                <th>Song name:</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($savedPlaylist->getSongs($savedPlaylist->id) as $song)
                            <tr>
                                <td>{{$song->Name}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
