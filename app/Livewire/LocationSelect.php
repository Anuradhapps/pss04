<?php

namespace App\Livewire;

use App\Models\Location;
use Livewire\Component;

class LocationSelect extends Component
{
    public $Provinces;
    public $Districts = [];
    public $ascs = [];
    public $ais = [];
    public $selectedProvince = null;
    public $selectedDistrict = null;
    public $selectedAsc = null;
    public $selectedAi = null;

    public function mount()
    {
        $this->Provinces = Location::select('province')
            ->distinct()
            ->orderBy('province', 'asc')
            ->pluck('province');
    }


    public function updatedSelectedProvince($selectedProvince)
    {
        $this->Districts = Location::where('province', $selectedProvince)
            ->distinct()
            ->orderBy('district', 'asc')
            ->pluck('district');
        $this->selectedDistrict = null;
    }
    public function updatedSelectedDistrict($selectedDistrict)
    {
        $this->ascs = Location::where('district', $selectedDistrict)
            ->distinct()
            ->orderBy('asc_', 'asc')
            ->pluck('asc_');
        $this->selectedAsc = null;
    }
    public function updatedSelectedAsc($selectedAsc)
    {
        $this->ais = Location::where('asc_', $selectedAsc)
            ->distinct()
            ->orderBy('ai_range', 'asc')
            ->pluck('ai_range');
        $this->selectedAi = null;
    }
    public function render()
    {
        return view('livewire.location-select');
    }
}
