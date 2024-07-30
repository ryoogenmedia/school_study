<?php

namespace App\Livewire\Dashboard\Gallery;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.dashboard')]

class Index extends Component
{
    public function render()
    {
        return view('livewire.dashboard.gallery.index');
    }
}
