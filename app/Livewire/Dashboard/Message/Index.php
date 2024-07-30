<?php

namespace App\Livewire\Dashboard\Message;

use App\Models\Message;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.dashboard')]
class Index extends Component
{
    public $messages;

    public function boot()
    {
        $this->messages = Message::latest()->get();
    }
    public function render()
    {
        return view('livewire.dashboard.message.index');
    }
}
