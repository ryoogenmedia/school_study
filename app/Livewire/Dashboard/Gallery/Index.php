<?php

namespace App\Livewire\Dashboard\Gallery;

use App\Models\Gallery;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;

#[Layout('layouts.dashboard')]

class Index extends Component
{
    use WithFileUploads;
    public $galleries;

    public $image;

    public function boot()
    {
        $this->galleries = Gallery::latest()->get();
    }
    public function render()
    {
        return view('livewire.dashboard.gallery.index');
    }

    public function create()
    {
        $this->validate([
            'image' => 'required|image|max:10024'
        ]);
        try {
            $url = $this->image->store('public/gallery');
            if (Gallery::create(['url' => $url])) {
                sweetalert()->success('Uploaded');
                $this->boot();
                $this->image = null;
            } else {
                sweetalert()->error('Failed to Upload');
            }
        } catch (\Exception $th) {
            sweetalert()->error('Internal Server Error');
            //throw $th;
        }
    }
}
