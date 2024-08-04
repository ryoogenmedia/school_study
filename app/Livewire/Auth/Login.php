<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\LoginForm;

#[Layout('layouts.auth')]
class Login extends Component
{
    public LoginForm $form;

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login()
    {
        if ($this->form->login()) {
            return $this->redirectIntended('/dashboard');
        } else {
            sweetalert()->error('Login Failed');
        }
    }
}
