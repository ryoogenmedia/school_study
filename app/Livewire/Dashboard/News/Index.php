<?php

namespace App\Livewire\Dashboard\News;

use App\Models\News;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\NewsForm;

#[Layout('layouts.dashboard')]
class Index extends Component
{
    use WithFileUploads;
    public NewsForm $form;
    public $news;
    public $image;

    public function boot()
    {
        $this->news = News::latest()->get();
    }
    public function render()
    {
        return view('livewire.dashboard.news.index');
    }

    public function create()
    {
        $this->validate([
            'image' => 'required'
        ]);
        $this->form->slug = Str::slug($this->form->title);
        $this->form->thumbnail = $this->image->store('public/form');
        $this->form->create();
        $this->pull('image');
        $this->boot();
    }

    public function delete($id)
    {
        News::findOrFail($id)->delete();
        $this->boot();
    }
}
