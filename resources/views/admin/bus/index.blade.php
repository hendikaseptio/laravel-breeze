<x-app-layout>
    <x-slot  name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of Bus') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-5">
                <x-auth-session-status class="mb-4" :status="session('status')" />
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-button-link href="/bus/create" class="mb-3">
                        <i class="bi bi-plus"></i> Add new bus 
                    </x-button-link>
                    <table class="w-full table-auto border-collapse rounded-lg border border-gray-400  hover:border-collapse">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="p-2 border border-gray-300">No</th>
                                <th class="p-2 border border-gray-300">Plate Number</th>
                                <th class="p-2 border border-gray-300">Brand</th>
                                <th class="p-2 border border-gray-300">Seat</th>
                                <th class="p-2 border border-gray-300">Price Per Day</th>
                                <th class="p-2 border border-gray-300">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $b)
                            <tr class="text-center">
                                <td class="p-2 border border-gray-300">{{$loop->iteration}}</td>
                                <td class="p-2 border border-gray-300">{{$b->plate_number}}</td>
                                <td class="p-2 border border-gray-300">{{$b->brand}}</td>
                                <td class="p-2 border border-gray-300">{{$b->seat}}</td>
                                <td class="p-2 border border-gray-300">$ {{$b->price}}</td>
                                <td class="p-2 border border-gray-300">
                                    <div class="flex justify-center">
                                    <x-button-link href="#" class="ml-3"><i class="mr-1 bi bi-pencil"></i> 
                                        {{ __('Edit') }}
                                    </x-button-link >
                                    <x-button-link href="#" class="ml-3"><i class="mr-1 bi bi-trash"></i> 
                                        {{ __('Delete') }}
                                    </x-button-link >
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>