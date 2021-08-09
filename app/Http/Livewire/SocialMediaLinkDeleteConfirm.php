<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SocialMediaLinkDeleteConfirm extends Component
{
    public $deletingSocialMediaLink;

    public function render()
    {
        return view('livewire.social-media-link-delete-confirm');
    }
}
