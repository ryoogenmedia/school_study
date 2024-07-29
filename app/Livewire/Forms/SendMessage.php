<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Message;
use Livewire\Attributes\Validate;

class SendMessage extends Form
{
    public $name;
    public $email;
    public $message;

    public function sendMessage()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:1'
        ]);

        try {
            Message::create($this->all());
            $this->reset();
            return true;
        } catch (\Exception $err) {
            return false;
        }
    }
}
