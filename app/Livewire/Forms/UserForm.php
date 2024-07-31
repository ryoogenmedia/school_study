<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;

class UserForm extends Form
{
    public $name;
    public $email;
    public $password;


    public function create()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);
        try {
            if (User::create($this->all())) {
                $this->reset();
                return sweetalert()->success('Created');
            } else {
                return sweetalert()->error("created failed");
            }
        } catch (\Exception $err) {
            return sweetalert()->error('internal Server Error');
        }
    }

    public function edit($id)
    {
        $this->validate([
            'name' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($id),
            ],
            'password' => 'required'
        ]);
        try {
            if (User::findOrFail($id)->update($this->all())) {
                $this->reset();
                return sweetalert()->success('Updated');
            } else {
                return sweetalert()->error("Updated failed");
            }
        } catch (\Exception $err) {
            return sweetalert()->error('internal Server Error');
        }
    }
}
