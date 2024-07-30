<?php

namespace App\Livewire\Dashboard\Slider;

use App\Livewire\Forms\SliderForm;
use App\Models\Slider;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;

#[Layout('layouts.dashboard')]
class Index extends Component
{
    use WithFileUploads;
    public $sliders;

    public SliderForm $form;

    public $image;

    public function boot()
    {
        $this->sliders = Slider::all();
    }
    public function render()
    {
        return view('livewire.dashboard.slider.index');
    }

    public function create()
    {
        $this->validate(['image' => 'required']);
        $this->form->image = $this->image->store('public/slider');
        $this->form->create();
        $this->boot();
    }

    public function delete($id)
    {
        Slider::findOrFail($id)->delete();
        $this->boot();
    }
}
