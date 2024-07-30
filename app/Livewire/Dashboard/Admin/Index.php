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
        $this->users = User::where('id', '!=', Auth::user()->id)->latest()->get();
    }
    public function render()
    {
        return view('livewire.dashboard.admin.index');
    }

    public function create()
    {
        $this->form->create();
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();
    }
}
