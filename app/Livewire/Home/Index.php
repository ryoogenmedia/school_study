<?php

namespace App\Livewire\Home;

use App\Models\Slider;
use Livewire\Component;

class Index extends Component
{
    public $sliders;

    public function boot()
    {
        $this->sliders = Slider::all();
    }
    public function render()
    {
        return view('livewire.home.index');
    }
}
