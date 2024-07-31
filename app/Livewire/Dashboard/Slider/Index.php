<?php

namespace App\Livewire\Dashboard\Slider;

use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\SliderForm;
use Illuminate\Support\Facades\Storage;

#[Layout('layouts.dashboard')]
class Index extends Component
{
    use WithFileUploads;
    public $sliders;

    public SliderForm $form;

    public $image;

    public $isEdit = false;

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

    public $slider_id;
    public $slider;
    public function editToggle($id)
    {
        $this->isEdit = true;
        $this->slider_id = $id;
        $this->slider = Slider::findOrFail($this->slider_id);
        $this->form->image = $this->slider->image;
        $this->form->title = $this->slider->title;
        $this->form->sub_title = $this->slider->sub_title;
        $this->form->description = $this->slider->description;
    }

    public function edit()
    {
        if ($this->image && Storage::exists($this->form->image)) {
            Storage::delete($this->form->image);
            $this->form->image = $this->image->store('public/slider');
        }
        $this->form->edit($this->slider_id);
        $this->pull(['isEdit', 'image']);
        $this->boot();
    }
}
