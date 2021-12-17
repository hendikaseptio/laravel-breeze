<x-app-layout>
    <x-slot  name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form to add new bus') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('bus.store') }}">
                        @csrf
                        <!-- plate number -->
                        <div class="mb-4">
                            <x-label for="plate_number" :value="__('Plate Number')" />
                            <x-input id="plate_number" class="block mt-1 w-full" type="text" placeholder="Plate Number" name="plate_number" :value="old('plate_number')"  autocomplete="current-plate_number" />
                        </div>
                        <!-- brand -->
                        <div class="mb-4">
                            <x-label for="brand" :value="__('brand')" />
                            <x-select id="brand" name="brand">
                                <option value="" disabled selected>Chose the brand</option>
                                <option value="Scania">Scania</option>
                                <option value="Fuso">Fuso</option>
                                <option value="Mercedes">Mercedes</option>
                            </x-select>
                        </div>
                        <!-- seat -->
                        <div class="mb-4">
                            <x-label for="Seat" :value="__('Seats')" />
                            <x-input id="Seat" class="block mt-1 w-full" placeholder="Number of seats on the bus" type="number" min="0" name="seat"  autocomplete="current-seat" />
                        </div>
                        <!-- seat -->
                        <div class="mb-4">
                            <x-label for="price" :value="__('price')" />
                            <x-input id="price" class="block mt-1 w-full" placeholder="Price per day" type="number" min="100" name="price"  autocomplete="current-seat" />
                        </div>
                        <x-button>
                            <i class="mr-2 bi bi-send"></i> {{__('Submit')}}
                        </x-button>
                    </form>    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>