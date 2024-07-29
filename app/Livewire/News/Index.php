<?php

namespace App\Livewire\News;

use App\Models\News;
use Livewire\Component;

class Index extends Component
{
    public $news;

    public function boot()
    {
        $this->news = News::latest()->get();
    }
    public function render()
    {
        return view('livewire.news.index');
    }
}
