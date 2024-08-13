<div>
    <!-- Province Dropdown -->
    <div class="mb-4">
        <label for="province" class="block text-sm font-medium text-gray-700">Province</label>
        <select id="province" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="">Select a province</option>
            @foreach($Provinces as $Province)
                <option value="{{ $Province }}">{{ $Province }}</option>
            @endforeach
        </select>
    </div>
    <script>
        function updateProvince(selectElement) {
            Livewire.emit('selectedProvince', selectElement.value);
        }
    </script>

    <!-- District Dropdown (shown if a province is selected) -->
    @if (!is_null($selectedProvince))
        <div class="mb-4">
            <label for="district" class="block text-sm font-medium text-gray-700">District</label>
            <select wire:model="selectedDistrict" id="district" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="">Select a district</option>
                @foreach($Districts as $District)
                    <option value="{{ $District }}">{{ $District }}</option>
                @endforeach
            </select>
        </div>
    @endif
</div>
