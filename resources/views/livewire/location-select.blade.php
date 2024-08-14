<div class="bg-gray-100 p-4 rounded-xl my-2">
    <!-- Province Dropdown -->
    <div class="mb-4">
        <label for="province" class="block text-sm font-medium text-gray-700">Province</label>
        <select required id="province" name="selectedProvince" wire:model.lazy="selectedProvince" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="" class="text-gray-300">Select a province</option>
            @foreach($Provinces as $Province)
                <option value="{{ $Province }}">{{ $Province }}</option>
            @endforeach
        </select>
    </div>
    <!-- District Dropdown -->
    @if (!is_null($selectedProvince))
        <div class="mb-4">
            <label for="district" class="block text-sm font-medium text-gray-700">District</label>
            <select required  wire:model.lazy="selectedDistrict" id="district" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="" class="text-gray-300">Select a district</option>
                @foreach($Districts as $District)
                    <option value="{{ $District }}">{{ $District }}</option>
                @endforeach
            </select>
        </div>
    @endif
    <!-- ASC Dropdown -->
    @if (!is_null($selectedDistrict))
        <div class="mb-4">
            <label for="asc" class="block text-sm font-medium text-gray-700">ASC</label>
            <select required  wire:model.lazy="selectedAsc" id="district" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="" class="text-gray-300">Select a ASC</option>
                @foreach($ascs as $asc)
                    <option value="{{ $asc }}">{{ $asc }}</option>
                @endforeach
            </select>
        </div>
    @endif
        <!-- Ai Dropdown -->
    @if (!is_null($selectedAsc))
        <div class="mb-4">
            <label for="asc" class="block text-sm font-medium text-gray-700">AI</label>
            <select required  wire:model.lazy="selectedAi" id="district" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="" class="text-gray-300">Select a AI</option>
                @foreach($ais as $ai)
                    <option value="{{ $ai }}">{{ $ai }}</option>
                @endforeach
            </select>
        </div>
    @endif
</div>
