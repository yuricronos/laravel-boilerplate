<?php

namespace App\Livewire;

use Livewire\Component;

class NavBar extends Component
{
    protected $listeners = ['refresh-navigation-menu' => '$refresh'];

    public $navMenu = [];

    public function render()
    {
        return view('livewire.nav-bar');
    }
}
