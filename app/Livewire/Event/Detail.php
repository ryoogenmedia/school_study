<?php

namespace App\Livewire\Event;

use App\Models\Event;
use Livewire\Component;

class Detail extends Component
{
    public $slug;
    public $event;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->event = Event::where("slug", $slug)->firstOrFail();
    }
    public function render()
    {
        return view('livewire.event.detail');
    }
}
