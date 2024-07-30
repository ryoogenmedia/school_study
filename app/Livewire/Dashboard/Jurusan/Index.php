<?php

namespace App\Livewire\Dashboard\Jurusan;

use App\Models\Jurusan;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.dashboard')]
class Index extends Component
{
    public $jurusans;

    public function  boot()
    {
        $this->jurusans = Jurusan::all();
    }
    public function render()
    {
        return view('livewire.dashboard.jurusan.index');
    }

    public function delete($id)
    {
        if (Jurusan::find($id)->delete()) {
            sweetalert()->success('Deleted');
        } else
            sweetalert()->error('Failed to Deleted'); {
        }
        $this->boot();
    }
}
