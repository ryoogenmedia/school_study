<?php

namespace App\Livewire\Home;

use App\Models\Meta;
use App\Models\News;
use App\Models\Event;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Jurusan;
use Livewire\Component;
use App\Models\Testimoni;

class Index extends Component
{
    public $sliders;

    public $meta;

    public $jurusans;

    public $galleries;

    public $events;

    public $testimonis;

    public $news;

    public function boot()
    {
        $this->sliders = Slider::all();
        $metas = Meta::all();
        if ($metas->isNotEmpty()) {
            $this->meta = $metas->first();
        }
        $this->jurusans = Jurusan::all();

        $this->galleries = Gallery::latest()->get();

        $this->events = Event::latest()->get();

        $this->testimonis = Testimoni::where('isShow', true)->latest()->get();

        $this->news = News::latest()->get();
    }
    public function render()
    {
        return view('livewire.home.index');
    }
}
