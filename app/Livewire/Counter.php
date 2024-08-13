<?php

namespace App\Livewire;

use App\Models\Location;
use Livewire\Component;

class Counter extends Component
{
    public $Provinces;
    public $Districts = [];
    public $selectedProvince = "EASTERN";
    public $selectedDistrict = null;

    public function mount()
    {
        // Fetch unique provinces when the component is mounted
        $this->Provinces = Location::select('province')->distinct()->pluck('province');

    }


    public function updatedSelectedProvince($selectedProvince)
    {
        dd($this->selectedProvince);
        // Fetch unique districts based on the selected province
        $this->Districts = Location::where('province', $selectedProvince)
            ->distinct()
            ->pluck('district');
        dd($this->Districts);
        // Reset selected district when province changes
        $this->selectedDistrict = null;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
