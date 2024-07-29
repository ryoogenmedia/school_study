<?php

namespace App\Livewire\Home;

use App\Models\Meta;
use App\Models\Slider;
use App\Models\Jurusan;
use Livewire\Component;

class Index extends Component
{
    public $sliders;

    public $meta;

    public $jurusans;

    public function boot()
    {
        $this->sliders = Slider::all();
        $metas = Meta::all();
        if ($metas->isNotEmpty()) {
            $this->meta = $metas->first();
        }
        $this->jurusans = Jurusan::all();
    }
    public function render()
    {
        return view('livewire.home.index');
    }
}
