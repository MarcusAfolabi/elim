<?php

namespace App\Livewire\Media;

use Livewire\Component;

class Gallery extends Component
{
    public $galleries = [];
    public function mount()
    {
        $this->galleries = [
            ['img' => '/images/gallery/IMG-20240201-WA0005.jpg'],
            ['img' => '/images/gallery/IMG-20240201-WA0007.jpg'],
            ['img' => '/images/gallery/IMG-20240201-WA0006.jpg'],
            ['img' => '/images/gallery/IMG-20240201-WA0010.jpg'],
            ['img' => '/images/gallery/IMG-20240201-WA0003.jpg'],
            ['img' => '/images/gallery/IMG-20240201-WA0009.jpg'],
            ['img' => '/images/gallery/IMG-20240201-WA0008.jpg'],
        ];
    }
    public function render()
    {
        return view('livewire.media.gallery');
    }
}
