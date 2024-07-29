<?php

namespace App\Livewire\News;

use App\Models\News;
use Livewire\Component;

class Detail extends Component
{
    public $slug;
    public $new;
    public $news;
    public function mount($slug)
    {
        $this->slug = $slug;
        $this->new = News::where('slug', $this->slug)->firstOrFail();
        $this->news = News::where('slug', '!=', $this->slug)->latest()->get();
    }
    public function render()
    {
        return view('livewire.news.detail');
    }
}
