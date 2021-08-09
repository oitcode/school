<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\SocialMediaLink;

class SocialMediaLinkList extends Component
{
    public $socialMediaLinks;

    protected $listeners = [
        'updateList' => 'render',
    ];

    public function render()
    {
        $this->socialMediaLinks = SocialMediaLink::all();

        return view('livewire.social-media-link-list');
    }
}
