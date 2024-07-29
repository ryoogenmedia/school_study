<?php

namespace App\Livewire\Course;

use App\Models\Jurusan;
use Livewire\Component;

class Index extends Component
{
    public $jurusans;


    public function boot()
    {
        $this->jurusans = Jurusan::all();
    }

    public function render()
    {
        return view('livewire.course.index');
    }
}
