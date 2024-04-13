<?php

namespace App\Livewire\Media;

use Livewire\Component;

class Resources extends Component
{
    public $medias = [];
    public function mount()
    {
        $this->medias = [
            ['img' => '/images/resources/RCCG-SUNDAY-SCHOOL.jpg', 'title' => 'Sunday School Manual 2024', 'href' => 'https://play.google.com/store/apps/details?id=com.rccg.ssmanual&pcampaignid=web_share', 'class' => 'fa fa-download'],
            ['img' => '/images/resources/RCCG_Workers_in_Training.jpg', 'title' => 'Workers In Training', 'href' => 'https://rccgkristiansand.files.wordpress.com/2014/07/workers-in-training.pdf', 'class' => 'fa fa-download'],
            ['img' => 'https://www.redemptionstore.church/cdn/shop/products/Baptismal_Class_Manual_1024x1024.jpg?v=1583534827', 'title' => 'Baptismal Class Manual', 'href' => 'https://rccgkristiansand.files.wordpress.com/2014/07/baptismal-class-manual.pdf', 'class' => 'fa fa-download'],
            ['img' => '/images/resources/RCCG-Hymn-Book.jpg', 'title' => 'Baptismal Class Manual', 'href' => 'https://play.google.com/store/apps/details?id=com.softrocktechnology.princess.hymnbook', 'class' => 'fa fa-download'],
            ['img' => 'https://play-lh.googleusercontent.com/xx3q8hTBfWh_B7dftrH85EZWQYpWko2dc8LbEJ_92QpwgwKzNJrJFKyr_oFU-PItAtop=w240-h480-rw', 'title' => 'Open Heavens 2024', 'href' => 'https://play.google.com/store/apps/details?id=com.softrocktechnology.princess.hymnbook', 'class' => 'fa fa-download'],
        ];
    }
    public function render()
    {
        return view('livewire.media.resources');
    }
}
