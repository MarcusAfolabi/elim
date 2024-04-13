<?php

namespace App\Livewire;

use Livewire\Component;

class Pastors extends Component
{
    public $pastors = [] ;
    public function mount()
    {
        $this->pastors = [
                ['name' => 'Our Pastor', 'img' => '/images/pastors/rccg-elim-pastor.png', 'title' => 'Pastor'],
                ['name' => 'Our Pastor', 'img' => '/images/pastors/rccg-elim-pastor2.png', 'title' => 'Pastor'],
                ['name' => 'Our Pastor', 'img' => '/images/pastors/rccg-elim-pastor3.png', 'title' => 'Pastor'],
                ['name' => 'PST Ben Babafemi Ayanda', 'img' => '/images/pastors/rccg-elim-senior-pastor.png', 'title' => 'Senior Pastor'],
        ];
    }

    public function render()
    {
        return view('livewire.pastors');
    }
}
