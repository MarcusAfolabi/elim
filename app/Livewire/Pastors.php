<?php

namespace App\Livewire;

use Livewire\Component;

class Pastors extends Component
{
    public $pastors = [];
    public function mount()
    {
        $this->pastors = [
            ['name' => 'Pastor Ben Babafemi Ayanda', 'img' => '/images/pastors/rccg-elim-senior-pastor.png', 'title' => 'Provincial Pastor'],
            ['name' => 'Pastor Mrs. Grace Ayanda', 'img' => '/images/pastors/PastorMrsGraceAyanda.png', 'title' => "Pastor's wife"],
            ['name' => 'Pastor Abayomi Akintan', 'img' => '/images/pastors/PastorAbayomiAkintan.png', 'title' => 'Zonal Pastor'],
            ['name' => 'Pastor Babatunde Balogun', 'img' => '/images/pastors/rccg-elim-pastor3.png', 'title' => 'Parish Pastor'],
            ['name' => 'Pastor AP Ogunyemi', 'img' => '/images/pastors/PastorAPOgunyemi.png', 'title' => 'Workers Leader'],
        ];
    }

    public function render()
    {
        return view('livewire.pastors');
    }
}
