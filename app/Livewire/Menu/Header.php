<?php

namespace App\Livewire\Menu;

use Livewire\Component;

class Header extends Component
{
    public $logo;
    public $menu = [];
    public function mount()
    {
        $this->logo = "images/elim-redeemed.png";
        $this->menu = [
            ['title' => 'Our Pastors', 'href' => '/pastors', 'class' => 'fa fa-user-tie', 'hasSubmenu' => false],
            ['title' => 'Appointment', 'href' => '/appointment', 'class' => 'icon-calendar', 'hasSubmenu' => false],
            [
                'title' => 'Our Pillars', 'href' => '/pillars', 'class' => 'fa fa-church', 'hasSubmenu' => true,
                'submenu' => [
                    ['title' => 'Elim Youth', 'href' => '#'],
                    ['title' => 'Sister of Grace', 'href' => '#'],
                    ['title' => 'Redeemers', 'href' => '#'],
                ]
            ],
            ['title' => 'Salvation', 'href' => '/salvation', 'class' => 'fas fa-pray', 'hasSubmenu' => false], // Single item without submenu
            [
                'title' => 'Our Resources',
                'href' => '#',
                'class' => 'fa fa-book-open',
                'hasSubmenu' => true,
                'submenu' => [
                    ['title' => 'Grow with a friend', 'href' => '/grow-with-a-friend'],
                    ['title' => 'Testimony', 'href' => '/testimony'],
                    ['title' => 'Gallery', 'href' => '/gallery'],
                    ['title' => 'Departments', 'href' => '#'],
                ]
            ],
        ];
    }
    public function render()
    {
        return view('livewire.menu.header');
    }
}
