<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Jurusan;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class JurusanForm extends Form
{
    use WithFileUploads;
    public $thumbnail;
    public $title;
    public $sub_title;
    public $slug;
    public $description;



    public function create()
    {
        $this->validate([
            'title' => 'required',
            'slug' => 'required|unique:jurusans,slug',
            'sub_title' => 'required',
            'thumbnail' => 'required',
            'description' => 'required|string'
        ]);
        try {
            if (Jurusan::create($this->all())) {
                $this->reset();
                return sweetalert()->success('created');
            }
            return sweetalert()->error('Failed');
        } catch (\Throwable $th) {
            return sweetalert()->error('Internal Server Error');
        }
    }

    public function edit($id)
    {
        $this->validate([
            'title' => 'required',
            'slug' => 'required',
            'sub_title' => 'required',
            'thumbnail' => 'required',
            'description' => 'required|string'
        ]);
        try {
            if (Jurusan::findOrFail($id)->update($this->all())) {
                $this->reset();
                return sweetalert()->success('Update');
            }
            return sweetalert()->error('Failed');
        } catch (\Throwable $th) {
            return sweetalert()->error('Internal Server Error');
        }
    }
}
