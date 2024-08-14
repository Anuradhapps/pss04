<x-app-layout>
    <x-slot name="header">
        {{ __('Data Input') }}
    </x-slot>
    <x-main-panel>
        <div class="container mx-auto p-4">
            <!-- Common Data Form -->
            <div id="common-data-form" class="mb-4">
                <h2 class="text-xl mb-2">Common Data</h2>
                <form id="form-common-data" method="POST" action="{{ route('data.storeCommon') }}">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Location:</label>
                        <livewire:location-select />
                    </div>

                    <div class="mb-4">
                        <label for="latitude" class="block text-sm font-medium text-gray-700">Latitude:</label>
                        <input id="latitude" name="latitude" type="text"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            readonly>
                    </div>

                    <div class="mb-4">
                        <label for="longitude" class="block text-sm font-medium text-gray-700">Longitude:</label>
                        <input id="longitude" name="longitude" type="text"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            readonly>
                    </div>

                    <div class="mb-4">
                        <label for="crop_variety" class="block text-sm font-medium text-gray-700">Crop Variety:</label>
                        <input id="crop_variety" name="crop_variety" type="text"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="established_date" class="block text-sm font-medium text-gray-700">Established
                            Date:</label>
                        <input id="established_date" name="established_date" type="date"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="breeding_method" class="block text-sm font-medium text-gray-700">Breeding
                            Method:</label>
                        <select name="breeding_method" id=""
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required>
                            <option value="" class="text-gray-300">Select a breeding
                                method</option>
                            <option value="Broadcast">Broadcast</option>
                            <option value="Transplant">Transplant</option>
                            <option value="Parachute">Parachute</option>
                        </select>
                    </div>

                    <button type="submit"
                        class="mt-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>

                    <!-- Pest Data Form -->
                    <div id="pest-data-form" class="hidden">
                        <h2 class="text-xl font-medium mb-4">Pest Data</h2>
                        <form id="form-pest-data" method="POST" action="{{ route('data.storePests') }}">
                            @csrf
                            <!-- Dynamically generate pest data fields -->
                            @for ($i = 1; $i <= 10; $i++)
                                <div class="mb-4">
                                    <h3 class="text-lg font-medium mb-2">Location {{ $i }}</h3>
                                    @for ($j = 1; $j <= 5; $j++)
                                        <div class="mb-2">
                                            <label for="location{{ $i }}_pest{{ $j }}"
                                                class="block text-sm font-medium text-gray-700">Pest
                                                {{ $j }}:</label>
                                            <input id="location{{ $i }}_pest{{ $j }}"
                                                name="location{{ $i }}_pest{{ $j }}"
                                                type="number"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        </div>
                                    @endfor
                                </div>
                            @endfor
                            <button type="submit"
                                class="mt-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit
                                Pest Data</button>
                        </form>
                    </div>

                </form>
            </div>
        </div>
    </x-main-panel>
</x-app-layout>
