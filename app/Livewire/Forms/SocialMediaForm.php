<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\SocialMedia;
use Livewire\Attributes\Validate;

class SocialMediaForm extends Form
{
    public $url;
    public $name;
    public $icon;

    public function rules()
    {

        return [
            'url' => 'required|url',
            'name' => 'required|max:100',
            'icon' => 'required'
        ];
    }

    public function create()
    {
        $this->validate();
        try {
            if (SocialMedia::create($this->all())) {
                $this->reset();
                return sweetalert()->success('Created ');
            } else {
                return sweetalert()->error('Created Failed');
            }
        } catch (\Exception $err) {
            return sweetalert()->error('Internal Server Error');
        }
    }

    public function remove($id)
    {
        try {
            if (SocialMedia::find($id)->delete()) {
                return sweetalert()->success('Deleted ');
            } else {
                return sweetalert()->error('Deleted Failed');
            }
        } catch (\Exception $err) {
            return sweetalert()->error('Internal Server Error');

        }
    }
}
