<?php

namespace App\Livewire\Dashboard\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\UserForm;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.dashboard')]
class Index extends Component
{
    public UserForm $form;

    public $users;

    public function boot()
    {
        $this->users = User::latest()->get();
    }
    public function render()
    {
        return view('livewire.dashboard.admin.index');
    }

    public $password;
    public function create()
    {
        $this->validate(['password' => 'required']);
        $this->form->password = $this->password;
        $this->form->create();

        $this->pull('password');
        $this->boot();
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();
    }


    public $user_id;
    public $user;
    public $isEdit = false;
    public function editToggle($id)
    {
        $this->user_id = $id;
        $this->user = User::findOrFail($this->user_id);

        $this->form->name = $this->user->name;
        $this->form->email = $this->user->email;

        $this->isEdit = true;
    }

    public function edit()
    {
        $this->validate(['password' => 'required']);
        $this->form->password = $this->password;
        $this->form->edit($this->user_id);
        $this->pull(['isEdit', 'password']);
        $this->boot();
    }
}
