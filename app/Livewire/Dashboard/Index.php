<?php

namespace App\Livewire\Dashboard;

use App\Models\Meta;
use Livewire\Component;
use App\Models\SocialMedia;
use Livewire\Attributes\On;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\MetaForm;
use App\Livewire\Forms\SocialMediaForm;

#[Layout('layouts.dashboard')]
class Index extends Component
{
    public $menus = [
        [
            'label' => 'Basic Info',
            'target' => 'basicInfo',
        ],
        [
            'label' => 'About',
            'target' => 'about'
        ],
        [
            'label' => 'Social Media',
            'target' => 'socialMedia'
        ],

    ];

    public MetaForm $form;
    public SocialMediaForm $social;

    public $metas;

    public $socialMedias;

    #[On(['social-deleted', 'social-created'])]
    public function boot()
    {
        $metas = Meta::all();
        if ($metas->isNotEmpty()) {
            $this->metas = $metas->first();
            $this->form->title = $this->metas->title;
            $this->form->description = $this->metas->description;
            $this->form->phone = $this->metas->phone;
            $this->form->email = $this->metas->email;
            $this->form->address = $this->metas->address;
            $this->form->about = $this->metas->about;
            $this->form->total_teacher = $this->metas->total_teacher;
            $this->form->total_student = $this->metas->total_student;
        }

        $this->socialMedias = SocialMedia::all();
    }

    public function render()
    {
        return view('livewire.dashboard.index');
    }

    public function update()
    {
        $this->form->update($this->metas->id);
    }

    // Social Media

    public function remove($id)
    {
        $this->social->remove($id);
        $this->dispatch('social-deleted');
    }

    public function addSocial()
    {
        $this->social->create();
        $this->dispatch('social-created');
    }
}
