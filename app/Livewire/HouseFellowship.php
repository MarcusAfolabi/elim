<?php

namespace App\Livewire;

use Livewire\Component;

class HouseFellowship extends Component
{
    public $houses = [];
    public function mount()
    {
        $this->houses = [
            ['name' => 'HOUSE OF PROVIDENCE', 'address' => '25, Solomon Bankole Street,Williams Layout', 'host' => 'A/P & Dcns Balogun'],
            ['name' => 'HOUSE OF MERCY', 'address' => '8, Shasha Rd Akowonjo', 'host' => 'Bro & Sister Uko'],
            ['name' => 'HOUSE OF DUNAMIS (PLACE OF REST)', 'address' => '9, Adisa Ogunwemimo Str, Off Ogbomosho Avenue, Akowonjo Lagos', 'host' => 'Bro & Sis Daniel'],
            ['name' => 'HOUSE OF MOUNT ZOIN CENTRE', 'address' => '19, Ogbomosho Avenue Akonwonjo Lagos.', 'host' => 'Bro & Sis Ajayi'],
            ['name' => 'HOUSE OF BREAD OF LIFE CENTRE', 'address' => '10 Abiodun Sadiku Street, Adealu Bustop', 'host' => 'Bro & Sis Popoola'],
        ];
    }

    public function render()
    {
        return view('livewire.house-fellowship');
    }
}
