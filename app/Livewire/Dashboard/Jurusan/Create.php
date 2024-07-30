<?php

namespace App\Livewire\Dashboard\Jurusan;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\JurusanForm;

#[Layout('layouts.dashboard')]
class Create extends Component
{
    use WithFileUploads;
    public JurusanForm $form;
    public $thumbnail;
    public function render()
    {
        return view('livewire.dashboard.jurusan.create');
    }

    public function dehydrate()
    {
        $this->form->slug = Str::slug($this->form->title);
    }

    public function create()
    {
        $this->validate([
            'thumbnail' => 'required|image'
        ]);
        $this->form->thumbnail = $this->thumbnail->store('public/jurusan');
        $this->form->create();
    }
}
