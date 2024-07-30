<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Form
{
    public $email;
    public $password;

    public $remember = false;

    public function login()
    {
        $this->validate([
            'password' => 'required',
            'email' => 'required|email'
        ]);
        try {
            if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
                return true;
            } else {
                return false;
            }
        } catch (\Exception $err) {
            return false;
        }
    }
}
