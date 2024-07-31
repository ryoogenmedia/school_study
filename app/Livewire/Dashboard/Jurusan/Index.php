<?php

namespace App\Livewire\Dashboard\Jurusan;

use App\Models\Jurusan;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\JurusanForm;
use Illuminate\Support\Facades\Storage;

#[Layout('layouts.dashboard')]
class Index extends Component
{
    use WithFileUploads ;
    public $jurusans;

    public JurusanForm $form;
    public $isEdit = false;
    public $jurusan_id;
    public $jurusan;

    public $thumbnail;


    public function  boot()
    {
        $this->jurusans = Jurusan::all();
    }
    public function render()
    {
        return view('livewire.dashboard.jurusan.index');
    }

    public function delete($id)
    {
        if (Jurusan::find($id)->delete()) {
            sweetalert()->success('Deleted');
        } else
            sweetalert()->error('Failed to Deleted'); {
        }
        $this->boot();
    }

    public function editToggle($id)
    {
        $this->jurusan_id = $id;
        $this->jurusan = Jurusan::findOrFail($this->jurusan_id);
        $this->form->thumbnail = $this->jurusan->thumbnail;
        $this->form->title = $this->jurusan->title;
        $this->form->sub_title = $this->jurusan->sub_title;
        $this->form->slug = $this->jurusan->slug;
        $this->form->description = $this->jurusan->description;
        $this->isEdit = true;
    }

    public function edit()
    {
        if ($this->thumbnail) {
            if (Storage::exists($this->form->thumbnail)) {
                Storage::delete($this->form->thumbnail);
            }
            $this->form->thumbnail = $this->thumbnail->store('public/jurusan');
        }

        $this->form->edit($this->jurusan_id);
        $this->pull(['isEdit', 'thumbnail']);
        $this->boot();
    }
}
