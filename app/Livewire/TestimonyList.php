<?php

namespace App\Livewire;

use App\Models\Testimony;
use Livewire\Component;

class TestimonyList extends Component
{
    public $testimonies;
    public function mount()
    {
        $this->testimonies = Testimony::latest()->limit(10)->get();
    }
    public function render()
    {
        return view('livewire.testimony-list');
    }
}
