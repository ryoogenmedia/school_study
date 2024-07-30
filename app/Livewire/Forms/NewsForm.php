<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\News;
use Livewire\Attributes\Validate;

class NewsForm extends Form
{
    public $slug;
    public $thumbnail;
    public $title;
    public $description;

    public function rules()
    {
        return [
            'slug' => 'required',
            'thumbnail' => 'required',
            'title' => 'required',
            'description' => 'required',
        ];
    }

    public function create()
    {
        $this->validate();
        try {
            if (News::create($this->all())) {
                $this->reset();
                return sweetalert()->success('Created');
            } else {
                return sweetalert()->error('Created Failed');
            }
        } catch (\Exception $err) {
            return sweetalert()->error('Internal Server Error');
        }
    }
}
