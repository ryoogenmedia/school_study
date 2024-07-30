<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Meta;
use Livewire\Attributes\Validate;

class MetaForm extends Form
{
    public $title;
    public $description;
    public $phone;
    public $email;
    public $address;
    public $about;
    public $total_teacher;
    public $total_student;

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'about' => 'required|string',
            'total_teacher' => 'required|integer|min:1',
            'total_student' => 'required|integer|min:1',
        ];
    }


    public function update($id): bool
    {
        $this->validate();
        try {
            if (Meta::find($id) && Meta::find($id)->update($this->all())) {
                sweetalert()->success('Updated');
                return true;
            } else {
                sweetalert()->error('Operation Failed');
                return false;
            }
        } catch (\Exception $err) {
            sweetalert()->error('Internal Server Error');
            return false;
        }
    }

    public function create(): bool
    {
        $this->validate();
        try {
            if (Meta::create($this->all())) {
                sweetalert()->success('Created');
                return true;
            } else {
                sweetalert()->error('Operation Failed');
                return false;
            }
        } catch (\Exception $err) {
            sweetalert()->error('Internal Server Error');
            return false;
        }
    }
}
