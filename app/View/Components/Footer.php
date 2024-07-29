<?php

namespace App\View\Components;

use Closure;
use App\Models\Meta;
use App\Models\SocialMedia;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Footer extends Component
{
    public $meta;
    public $socialMedias;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $meta = Meta::all();
        if ($meta->isNotEmpty()) {
            $this->meta = $meta->first();
        }

        $this->socialMedias = SocialMedia::all();

        return view(
            'components.footer'
        );
    }
}
