<?php

namespace App\Livewire\Event;

use App\Models\Event;
use Livewire\Component;

class Index extends Component
{
    public $events;

    public function boot()
    {
        $this->events = Event::latest()->get();
    }

    public function render()
    {
        return view('livewire.event.index');
    }
}
