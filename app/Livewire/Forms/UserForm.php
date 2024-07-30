<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Livewire\Attributes\Validate;

class UserForm extends Form
{
    public $name;
    public $email;
    public $password;

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ];
    }

    public function create()
    {
        $this->validate();
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
}
