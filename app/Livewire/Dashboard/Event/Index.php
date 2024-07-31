<?php

namespace App\Livewire\Dashboard\Event;

use App\Models\Event;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\EventForm;
use Illuminate\Support\Facades\Storage;

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

    public $event_id;
    public $isEdit = false;
    public $event;
    public function editToggle($id)
    {
        $this->event_id = $id;
        $this->event = Event::findOrFail($this->event_id);
        $this->form->thumbnail = $this->event->thumbnail;
        $this->form->schedule = $this->event->schedule;
        $this->form->title = $this->event->title;
        $this->form->location = $this->event->location;
        $this->form->description = $this->event->description;
        $this->form->start = $this->event->start;
        $this->form->end = $this->event->end;
        $this->form->slug = $this->event->slug;
        $this->isEdit = true;
    }

    public function edit()
    {
        if ($this->image) {
            if (Storage::exists($this->form->thumbnail)) {
                Storage::delete($this->form->thumbnail);
            }

            $this->form->thumbnail = $this->image->store('public/event');
        }

        $this->form->edit($this->event_id);
        $this->pull(['isEdit', 'image']);
        $this->boot();
    }
}
