<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\SocialMediaLink;

class SocialMediaLinkCreate extends Component
{
    public $media_name;
    public $url;

    public function render()
    {
        return view('livewire.social-media-link-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'media_name' => 'required',
            'url' => 'required|url',
        ]);

        SocialMediaLink::create($validatedData);
        $this->emit('exitCreate');
    }
}
