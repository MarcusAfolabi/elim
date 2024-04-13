<?php

namespace App\Livewire;

use Livewire\Component;

class About extends Component
{
    public $abouts = [];
    public function mount()
    {
        $this->abouts = [
            ["img" => "images/bg/elim-rccg-member-4.jpg", "title" => "We are", "content" => "Elim Sanctuary is a member of the Redeemed Christian Church of God (RCCG) and also the Provincial Headquaters for Lagos Province 37. We are a church that is open to all ages and social classes and we believe in spreading God's love, grace, mercy, goodness and salvation to mankind through our Lord Jesus Christ."],
            ["img" => "images/bg/elim-rccg-member-1.jpg", "title" => "We Aim", "content" => "To develop a relentless prayer force. To identify and recruit prayer warriors within the all the natural groups within the church. Quarterly Prayer retreats to maintain and generate fresh fire. To provide sound teaching opportunities for our members on the art of prayer. Plan prayer walks around our neighbourhood and schools. To provide weekly prayer support for church members and the leadership."],
            ["img" => "images/bg/elim-rccg-member-3a.jpg", "title" => "We Stand For", "content" => "Humility | Repentance | Soul winning | Confidentiality | Passion | Commitment | Persistence "],
        ];
    }

    public function render()
    {
        return view('livewire.about');
    }
}
