<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post">
                        <h2>hahahahhahah</h2>
                        @csrf
                        <x-label for="Name" :value="__('Naam')" />

                        <x-input id="Name" class="block mt-1 w-full"
                                 type="text"
                                 name="Name"
                                 required placeholder="Naam" />
                        <button type="submit" class="btn btn-success">Opslaan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
