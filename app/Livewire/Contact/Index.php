<?php

namespace App\Livewire\Contact;

use App\Livewire\Forms\SendMessage;
use App\Models\Meta;
use Livewire\Component;
use App\Models\SocialMedia;

class Index extends Component
{

    public SendMessage $form;
    public $meta;
    public $socialMedias;

    public function boot()
    {
        $metas = Meta::all();
        if ($metas->isNotEmpty()) {
            $this->meta = $metas->first();
        }
        $this->socialMedias = SocialMedia::all();
    }
    public function render()
    {
        return view('livewire.contact.index');
    }

    public function sendMessage()
    {
        if ($this->form->sendMessage()) {
            sweetalert()->success('Pesan Anda Telah Terkirim , Terima Kasih');
        } else {
            sweetalert()->error('Pesan Anda Gagal Terkirim , Silahkan Coba Lagi');
        }
    }
}
