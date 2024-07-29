<?php

namespace App\Livewire\Course;

use App\Models\Jurusan;
use Livewire\Component;

class Detail extends Component
{
    public $slug;
    public $jurusan;

    public $jurusans;
    public function mount($slug)
    {
        $this->slug = $slug;
        $this->jurusan = Jurusan::where('slug', $this->slug)->firstOrFail();
        $this->jurusans = Jurusan::where('slug', '!=', $this->slug)->get();
    }
    public function render()
    {
        return view('livewire.course.detail');
    }
}
