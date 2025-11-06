<?php

namespace App\Livewire;

use Livewire\Component;

class Landing extends Component
{
    public $title = 'UMKM Inventory';

    public function render()
    {
        return view('pages.landing')
            ->layout('layout.app');
    }
}
