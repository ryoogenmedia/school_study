<?php

namespace App\Livewire\Gallery;

use App\Models\Gallery;
use Livewire\Component;

class Index extends Component
{
    public $galleries;

    public function boot()
    {
        $this->galleries = Gallery::latest()->get();
    }

    public function render()
    {
        return view('livewire.gallery.index');
    }
}
