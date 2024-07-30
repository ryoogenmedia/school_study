<?php

namespace App\Livewire\Dashboard\Event;

use App\Models\Event;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\EventForm;

#[Layout('layouts.dashboard')]
class Index extends Component
{
    use WithFileUploads;
    public $events;

    public EventForm $form;
    public $image;

    public function boot()
    {
        $this->events = Event::latest()->get();
    }
    public function render()
    {
        return view('livewire.dashboard.event.index');
    }

    public function create()
    {
        $this->validate([
            'image' => 'required',
        ]);
        $this->form->thumbnail = $this->image->store('public/event');
        $this->form->slug = Str::slug($this->form->title);
        $this->form->create();
        $this->boot();
    }

    public function delete($id)
    {
        Event::findOrFail($id)->delete();
        $this->boot();
    }
}
