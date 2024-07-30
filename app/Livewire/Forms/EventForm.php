<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Event;
use Livewire\Attributes\Validate;

class EventForm extends Form
{
    public $thumbnail;
    public $schedule;
    public $title;
    public $location;
    public $description;
    public $start;
    public $end;
    public $slug;

    public function create()
    {
        $this->validate([
            'thumbnail' => 'required',
            'schedule' => 'required',
            'title' => 'required',
            'location' => 'required',
            'description' => 'required',
            'start' => 'required',
            'end' => 'required',
            'slug' => 'required',
        ]);

        try {
            if (Event::create($this->all())) {
                $this->reset();
                return sweetalert()->success('created');
            } else {
                return sweetalert()->error('created Failed');
            }
        } catch (\Exception $err) {
            return sweetalert()->error('Internal Server Error');
            //throw $th;
        }
    }
}
