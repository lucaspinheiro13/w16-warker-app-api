<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Lista de Postos
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm">{{ session('message') }}</p>
                    </div>
                  </div>
                </div>
            @endif
            {{-- <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Criar Novo Posto</button>
            @if($isOpen)
                @include('livewire.create-posto')
            @endif --}}
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">No.</th>
                        <th class="px-4 py-2">Cidade</th>
                        <th class="px-4 py-2 w-20">No. Cidade</th>
                        <th class="px-4 py-2">Reservatorio</th>
                        <th class="px-4 py-2">Longitude</th>
                        <th class="px-4 py-2">Latitude</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($postos as $posto)
                    <tr>
                        <td class="border px-4 py-2">{{ $posto->id }}</td>
                        <td class="border px-4 py-2">{{ $posto->cidades->nome_da_cidade}}</td>
                        <td class="border px-4 py-2">{{ $posto->cidades->id}}</td>
                        <td class="border px-4 py-2">{{ $posto->reservatorio }}</td>
                        <td class="border px-4 py-2">{{ $posto->longitude }}</td>
                        <td class="border px-4 py-2">{{ $posto->latitude }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $postos->links() }}
        </div>
    </div>
</div>