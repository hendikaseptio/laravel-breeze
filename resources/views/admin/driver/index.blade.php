<x-app-layout>
    <x-slot  name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of Driver') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full table-auto border-collapse rounded-lg border border-gray-400  hover:border-collapse">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="p-2 border border-gray-300">No</th>
                                <th class="p-2 border border-gray-300">Id</th>
                                <th class="p-2 border border-gray-300">Name</th>
                                <th class="p-2 border border-gray-300">Age</th>
                                <th class="p-2 border border-gray-300">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-2 border border-gray-300">1</td>
                                <td class="p-2 border border-gray-300">G 00384 ID</td>
                                <td class="p-2 border border-gray-300">illum!</td>
                                <td class="p-2 border border-gray-300">20</td>
                                <td class="p-2 border border-gray-300">
                                    <div class="flex">
                                    <x-button-link href="#" class="ml-3"><i class="mr-1 bi bi-pencil"></i> 
                                        {{ __('Edit') }}
                                    </x-button-link >
                                    <x-button-link href="#" class="ml-3"><i class="mr-1 bi bi-trash"></i> 
                                        {{ __('Delete') }}
                                    </x-button-link >
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>