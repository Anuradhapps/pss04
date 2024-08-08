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
                        <label for="province" class="block text-gray-700">Province:</label>
                        <select id="province" name="province" class="form-select mt-1 block w-full">
                            @foreach ($provinces as $province)
                                <option value="{{ $province }}">{{ $province }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="district" class="block text-gray-700">District:</label>
                        <select id="district" name="district" class="form-select mt-1 block w-full">

                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="asc" class="block text-gray-700">ASC:</label>
                        <select id="asc" name="asc" class="form-select mt-1 block w-full">

                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="ai_range" class="block text-gray-700">Ai Range:</label>
                        <select id="ai_range" name="ai_range" class="form-select mt-1 block w-full">

                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="village" class="block text-gray-700">Village:</label>
                        <input id="village" name="village" type="text" class="form-input mt-1 block w-full"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="latitude" class="block text-gray-700">Latitude:</label>
                        <input id="latitude" name="latitude" type="text" class="form-input mt-1 block w-full"
                            readonly>
                    </div>

                    <div class="mb-4">
                        <label for="longitude" class="block text-gray-700">Longitude:</label>
                        <input id="longitude" name="longitude" type="text" class="form-input mt-1 block w-full"
                            readonly>
                    </div>

                    <div class="mb-4">
                        <label for="crop_variety" class="block text-gray-700">Crop Variety:</label>
                        <input id="crop_variety" name="crop_variety" type="text" class="form-input mt-1 block w-full"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="established_date" class="block text-gray-700">Established Date:</label>
                        <input id="established_date" name="established_date" type="date"
                            class="form-input mt-1 block w-full" required>
                    </div>

                    <div class="mb-4">
                        <label for="breeding_method" class="block text-gray-700">Breeding Method:</label>
                        <input id="breeding_method" name="breeding_method" type="text"
                            class="form-input mt-1 block w-full" required>
                    </div>

                    <button type="submit" class="btn btn-blue">Submit</button>
                </form>
            </div>

            <!-- Pest Data Form -->
            <div id="pest-data-form" class="hidden">
                <h2 class="text-xl mb-2">Pest Data</h2>
                <form id="form-pest-data" method="POST" action="{{ route('data.storePests') }}">
                    @csrf

                    <!-- Dynamically generate pest data fields -->
                    @for ($i = 1; $i <= 10; $i++)
                        <div class="mb-4">
                            <h3 class="text-lg">Location {{ $i }}</h3>
                            @for ($j = 1; $j <= 5; $j++)
                                <div class="mb-2">
                                    <label for="location{{ $i }}_pest{{ $j }}"
                                        class="block text-gray-700">Pest {{ $j }}:</label>
                                    <input id="location{{ $i }}_pest{{ $j }}"
                                        name="location{{ $i }}_pest{{ $j }}" type="number"
                                        class="form-input mt-1 block w-full">
                                </div>
                            @endfor
                        </div>
                    @endfor

                    <button type="submit" class="btn btn-blue">Submit Pest Data</button>
                </form>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('#province').on('change', function() {
                    var province = $(this).val();

                    $('#district').empty().append('<option value="">Select a District</option>');
                    $('#asc').empty().append('<option value="">Select an ASC</option>');
                    $('#ai_range').empty().append('<option value="">Select an AI Range</option>');

                    if (province) {
                        $.ajax({
                            url: '{{ route('fetchDistrict') }}',
                            type: 'GET',
                            data: { province: province },
                            success: function(data) {
                                $.each(data.districts, function(index, district) {
                                    $('#district').append('<option value="' + district + '">' + district + '</option>');
                                });
                            }
                        });
                    }
                });

                $('#district').on('change', function() {
                    var district = $(this).val();

                    $('#asc').empty().append('<option value="">Select an ASC</option>');
                    $('#ai_range').empty().append('<option value="">Select an AI Range</option>');

                    if (district) {
                        $.ajax({
                            url: '{{ route('fetchASC') }}',
                            type: 'GET',
                            data: { district: district },
                            success: function(data) {
                                $.each(data.asc_s, function(index, asc) {
                                    $('#asc').append('<option value="' + asc + '">' + asc + '</option>');
                                });
                            }
                        });
                    }
                });

                $('#asc').on('change', function() {
                    var asc = $(this).val();

                    $('#ai_range').empty().append('<option value="">Select an AI Range</option>');

                    if (asc) {
                        $.ajax({
                            url: '{{ route('fetchAiRange') }}',
                            type: 'GET',
                            data: { asc_: asc },
                            success: function(data) {
                                $.each(data.ai_ranges, function(index, ai_range) {
                                    $('#ai_range').append('<option value="' + ai_range + '">' + ai_range + '</option>');
                                });
                            }
                        });
                    }
                });
            });
        </script>
    </x-main-panel>
</x-app-layout>
