<?php

namespace App\Livewire\Home;

use App\Models\Meta;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Jurusan;
use Livewire\Component;

class Index extends Component
{
    public $sliders;

    public $meta;

    public $jurusans;
    public $galleries;

    public function boot()
    {
        $this->sliders = Slider::all();
        $metas = Meta::all();
        if ($metas->isNotEmpty()) {
            $this->meta = $metas->first();
        }
        $this->jurusans = Jurusan::all();

        $this->galleries = Gallery::latest()->get();
    }
    public function render()
    {
        return view('livewire.home.index');
    }
}
