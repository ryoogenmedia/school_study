<?php

namespace App\Livewire\Dashboard\News;

use App\Models\News;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\NewsForm;
use Illuminate\Support\Facades\Storage;

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
        $this->form->thumbnail = $this->image->store('public/news');
        $this->form->create();
        $this->pull('image');
        $this->boot();
    }

    public function delete($id)
    {
        News::findOrFail($id)->delete();
        $this->boot();
    }

    public $news_id;
    public $newsEdit;
    public $isEdit  = false;
    public function editToggle($id)
    {
        $this->news_id = $id;
        $this->newsEdit = News::findOrFail($this->news_id);

        $this->form->slug = $this->newsEdit->slug;
        $this->form->thumbnail = $this->newsEdit->thumbnail;
        $this->form->title = $this->newsEdit->title;
        $this->form->description = $this->newsEdit->description;

        $this->isEdit = true;
    }

    public function edit()
    {
        if ($this->image) {
            if (Storage::exists($this->form->thumbnail)) {
                Storage::delete($this->form->thumbnail);
            }

            $this->form->thumbnail = $this->image->store('public/news');
        }

        $this->form->edit($this->news_id);
        $this->pull(['isEdit', 'image']);
        $this->boot();
    }
}
