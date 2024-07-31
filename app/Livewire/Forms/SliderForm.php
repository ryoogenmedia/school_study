<?php

namespace App\Livewire\Forms;

use App\Models\Slider;
use Livewire\Form;

class SliderForm extends Form
{
    public $image;
    public $title;
    public $sub_title;
    public $description;

    public function create()
    {
        $this->validate([
            'image' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required|string',
        ]);
        try {
            if (Slider::create($this->all())) {
                $this->reset();
                return sweetalert()->success('created');
            }
            return sweetalert()->error('Created Failed');
        } catch (\Exception $err) {
            return sweetalert()->error('Internal Server Error');
        }
    }

    public function edit($id)
    {
        $this->validate([
            'image' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required|string',
        ]);
        try {
            if (Slider::find($id)->update($this->all())) {
                $this->reset();
                return sweetalert()->success('Updated');
            }
            return sweetalert()->error('Updated Failed');
        } catch (\Exception $err) {
            return sweetalert()->error('Internal Server Error');
        }
    }
}
