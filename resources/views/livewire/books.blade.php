<x-slot name="header">
    <h2 class="font-semibold text-xl text-grey-800 loading-light">
        Data Buku
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-b text-900 px-4 py-3 shadow-md my-4" role="alert">
            @if (session()->has('message'))
                <div class="flex">
                    <div>
                        <p class="text-sm">
                            {{ session('message')}}
                        </p>
                    </div>
                </div>
            @endif

            <!-- CREATE DATA -->
            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded my-3">Tambah Data</button>
            
            @if($isModal)
                @include(livewire.create)
            @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-grey-100">
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">Nama Buku</th>
                        <th class="px-4 py-2">Kode</th>
                        <th class="px-4 py-2">Penulis</th>
                        <th class="px-4 py-2">Penerbit</th>
                        <th class="px-4 py-2">Cover</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($books as $row)
                        <tr>
                            <td class="border px-4 py-2">{{ $row->id_book }}</td>
                            <td class="border px-4 py-2">{{ $row->name_book }}</td>
                            <td class="border px-4 py-2">{{ $row->code_category }}</td>
                            <td class="border px-4 py-2">{{ $row->author }}</td>
                            <td class="border px-4 py-2">{{ $row->publisher }}</td>
                            <td class="border px-4 py-2">{{ $row->cover }}</td>
                            <!-- EDIT DATA
                                 DELETE DATA
                             -->
                        </tr>
                    @empty
                        <tr>
                            <td class="border px-4 py-2 text-center" colspan="6">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>